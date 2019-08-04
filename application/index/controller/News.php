<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Db;
use think\Request;
class News extends Frontend{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

//    public function __construct(){
//
//    }

    public function index(){
        //首页轮播图 点击排序
        $click = Db::name('news')->order('click','desc')->limit(2)->select();
        $this->assign('click',$click);
        //首页轮播图 最新
        $news = Db::name('news')->order('id','desc')->limit(4)->select();
        $this->assign('news',$news);
        //调用新闻栏目下的第一个分类
        $category_1 = Db::name('news')->where('category_id',87)->limit(1)->select();
        $this->assign('category_1',$category_1);
        $category_1_2 = Db::name('news')->where('category_id',87)->order('click','desc')->limit(5)->select();
        $this->assign('category_1_2',$category_1_2);

//        dump($click);exit;
        return $this->view->fetch();
    }

    public function lists(){

    }

    public function content(Request $request){
        $id = input('id');
        //查询文章
        $content = Db::name('news')->where('id',$id)->find();
        $this->assign('content',$content);
        return $this->view->fetch();


    }
}