<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Db;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {

        //查询级别为9的推荐轮播图源码
        $level = DB::name('down')->where('level',9)->limit(5)->select();
        $this->assign('level',$level);
        //查询级别为8的推荐轮播图源码
        $level1 = DB::name('down')->where('level',8)->limit(4)->select();
        $this->assign('limit',$level1);
        //查询推荐的源码20条
        $click = DB::name('down')->order('click desc')->limit(12)->select();
        $this->assign('click',$click);
        //查询最新的源码20条
        $newest = DB::name('down')->limit(12)->select();
        $this->assign('newest',$newest);
        //查询最新的资讯1条
        $news_click = DB::name('news')->order('click','desc')->limit(1)->select();
        $this->assign('news_click',$news_click);
        //查询最新的资讯5条
        $news = DB::name('news')->limit(5)->select();
        $this->assign('news',$news);

        //查询最新的资讯1条
        $news_click1 = DB::name('news')->order('click','desc')->limit('1','1')->select();
        $this->assign('news_click1',$news_click1);
        //查询最新的资讯5条
        $news1 = DB::name('news')->limit('6','5')->select();
        $this->assign('news1',$news1);

        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

}
