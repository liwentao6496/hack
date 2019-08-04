<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Db;
use think\Request;
class Questions extends Frontend{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';


    public function index(){
        return $this->view->fetch();
    }
}