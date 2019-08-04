<?php

namespace app\api\controller;

use think\Db;
use app\common\controller\Api;
use think\Request;
/**
 * 示例接口
 */
class Demo extends Api
{

    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['caijifenlei', 'jiekou','newscaiji'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['test2'];

    /**
     * 测试方法
     *
     * @ApiTitle    (测试名称)
     * @ApiSummary  (测试描述信息)
     * @ApiMethod   (POST)
     * @ApiRoute    (/api/demo/test/id/{id}/name/{name})
     * @ApiHeaders  (name=token, type=string, required=true, description="请求的Token")
     * @ApiParams   (name="id", type="integer", required=true, description="会员ID")
     * @ApiParams   (name="name", type="string", required=true, description="用户名")
     * @ApiParams   (name="data", type="object", sample="{'user_id':'int','user_name':'string','profile':{'email':'string','age':'integer'}}", description="扩展数据")
     * @ApiReturnParams   (name="code", type="integer", required=true, sample="0")
     * @ApiReturnParams   (name="msg", type="string", required=true, sample="返回成功")
     * @ApiReturnParams   (name="data", type="object", sample="{'user_id':'int','user_name':'string','profile':{'email':'string','age':'integer'}}", description="扩展数据返回")
     * @ApiReturn   ({
         'code':'1',
         'msg':'返回成功'
        })
     */



    /**
     * 无需登录的接口
     * 文章采集
     */
    public function newscaiji(){
        $post = input();

        if (!$post['aotu'] == 'wenwen'){
            return 'this dogou';
        }
//        数据预处理  -- 自动分类
        if (!is_numeric($post['category_id'])){
            $res = Db::name('category')->where('name',$post['category_id'])->find();
            if ($res){
                $post['category_id']=$res['id'];
            }
        }
        $data = [
            'title'         =>$post['title'],
            'content'       =>$post['content'],
            'category_id'   =>$post['category_id'],
            'status'        =>$post['status'],
            'image'         =>$post['image'],
            'addtime'       =>date('y-m-d H:i:s'),
            'click'         =>$post['click'],
            'level'         =>$post['level'],
            'issue'         =>$post['issue'],
            'keyword'       =>$post['keyword'],
            'brief'         =>$post['brief'],
        ];
        $res = Db::name('news')->insert($data);
        if ($res){
            return '发布成功';
        }else{
            return '发布失败';
        }

    }

    /**
     * 无需登录的接口
     *
     */
    public function jiekou(){
        //接收数据
        $post = input();

//        $b = $post;
//
//        $results = print_r($b, true);
//        file_put_contents('filename.txt', print_r($b, true));

        //        认证
        if (!$post['auto']== 'wenwen'){
            return 'this fuck';
        }
        //数据处理 自动分类
        $category = Db::name('category')->where('name',$post['category_id'])->find();
        if ($category){
            $post['category_id'] = $category['id'];
        }else{
            //如果没有就先入库分类 再查找
            $data1 = [
                'pid'=>14,
                'name'=>$post['category_id'],
                'nickname'=>$post['category_id'],
                'keywords'=>$post['category_id'],
                'description'=>$post['category_id']
            ];
            Db::name('category')->insert($data1);
            $category = Db::name('category')->where('name',$post['category_id'])->find();
            if ($category){
                $post['category_id'] = $category['id'];
            }
        }
//        dump($post);
        $data = [
            'title'         =>$post['title'],
            'content'       =>$post['content'],
            'category_id'   =>$post['category_id'],
            'file_size'     =>$post['file_size'],
            'status'        =>$post['status'],
            'down_url'      =>$post['down_url'],
            'issuer'        =>$post['issuer'],
            'level'         =>$post['level'],
            'picrure'       =>$post['picrure'],
            'click'         =>$post['click'],
            'addtime'       =>date('y-m-d H:i:s'),
        ];
        $res = Db::name('down')->insert($data);
        $this->success('返回成功');
    }



//    分类采集
    public function caijifenlei1(){

        foreach ($data as $k =>$v){
        $data1 = [
          'pid'=>14,
          'name'=>"$v",
          'nickname'=>"$v",
          'keywords'=>"$v",
          'description'=>"$v"
        ];
        dump($data1);
            $a = Db::name('category')->insert($data1);
        }
        echo 1; return 1;
    }


    /**
     * 需要登录的接口
     *
     */
    public function test2()
    {
        $this->success('返回成功', ['action' => 'test2']);
    }

    /**
     * 需要登录且需要验证有相应组的权限
     *
     */
    public function test3()
    {
        $this->success('返回成功', ['action' => 'test3']);
    }

}
