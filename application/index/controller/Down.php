<?php

namespace app\index\controller;

use app\common\controller\Frontend;

use think\Db;
//use think\Paginator;

class Down extends Frontend
{

    protected $noNeedLogin = ['index','content','lists'];
    protected $noNeedRight = ['download','search'];
    protected $layout = '';

    public function index(){
        //查询级别为9的推荐轮播图源码
        $level = DB::name('down')->where('level',9)->limit(2)->select();
        $this->assign('level',$level);
        //查询级别为8的推荐轮播图源码
        $level1 = DB::name('down')->where('level',8)->limit(4)->select();
        $this->assign('limit',$level1);

        //查询分类
        $category = Db::name('category')->where('pid',14)->select();
        $this->assign('category',$category);

        //查询最新的源码20条
        $newest = DB::name('down')->limit(50)->paginate(12);
        $this->assign('newest',$newest);

        return $this->view->fetch();
    }
    public function content(){

            // 获取文章id
            $id = input('id');

            $content = Db::name('down')->where('id',$id)->find();
            $this->assign('content',$content);

            $category = Db::name('category')->where('id',$content['category_id'])->find();
            $this->assign('category',$category);

            //相关下载
            $correlation = Db::name('down')->where('category_id',$content['category_id'])->limit(8)->select();
            $this->assign('correlation',$correlation);

            //推荐下载
            $click = Db::name('down')->where('category_id',$content['category_id'])->order('click','desc')->limit(8)->select();
            $this->assign('click',$click);

            //热门标签
            $tag = Db::name('category')->where('pid',$category['pid'])->select();
            $this->assign('tag',$tag);

//            //推荐文章
            $news = Db::name('news')->order('click','desc')->limit(8)->select();
            $this->assign('news',$news);
            return $this->view->fetch();

    }

    public function lists(){
        $category_id = input('id');

        $res = Db::name('down')->where('category_id',$category_id)->paginate(12);
//        dump($res);exit;
        $this->assign('list',$res);

        $category = Db::name('category')->where('id',$category_id)->find();
//        dump($category);exit;
        $this->assign('category_name',$category);
        return $this->view->fetch();
    }

    public function search(){
        $word = $_GET['search']?$_GET['search']:null;
        $pageParam['query']['search'] = $word;
        $res = Db::name('down')->where('title','like',"%$word%")->paginate(10,false,$pageParam);


        $this->assign('search',$res);
        $this->assign('word',$word);
        // 渲染模板输出
        return $this->view->fetch();
    }

    public function download(){
        //先检查有没有权限
        $id = $this->auth->id;
        $down = Db::name('down')->where('id',input('id'))->find();
        $user = Db::name('user')->where('id',$id)->find();
        if ($user['level'] == '1'){//白金会员
            $this->success('正在跳转下载页',$down['down_url'],'www.baidu.com',3);
        }elseif ($user['level'] == '0'||$user['score'] != 0){//普通会员
            Db::name('user')->where('id',$id)->update(['score'=>$user['score']-1]);
            $this->success('正在跳转下载页,积分-1',$down['down_url'],'',3);
        }elseif ($user['level'] == '2'){//钻石会员
            Db::name('user')->where('id',$id)->update(['score'=>$user['score']-1]);
            $this->success('正在跳转下载页,积分-1',$down['down_url']);
        }else{
            $this->error('非法操作','http://www.qingyiyuanma.com');
        }
    }
}