<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"C:\Users\hack\Desktop\fastadmin\public/../application/index\view\down\list.html";i:1563710488;s:71:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\head.html";i:1563706365;s:73:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\footer.html";i:1563705123;}*/ ?>
<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <title>产品中心 - 我的CMS网站</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <link rel="stylesheet" media="screen" href="/static/css/bootstrap.min.css"/>
    <link rel="stylesheet" media="screen" href="/static/css/font-awesome.min.css"/>
    <link rel="stylesheet" media="screen" href="/static/css/layer.css"/>
    <link rel="stylesheet" media="screen" href="/static/css/swiper.min.css">
    <link rel="stylesheet" media="screen" href="/static/css/common.css"/>

    <link rel="stylesheet" href="/static/css/font_1104524_z1zcv22ej09.css">



    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.js"></script>
    <script src="/static/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="group-page">

<header class="header">
    <!-- S 导航 -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/cms/"><img src="/skin/static/picture/logo.png" width="180" alt="" /></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <!--如果你需要自定义NAV,可使用channellist标签来完成,这里只设置了2级,如果显示无限级,请使用cms:nav标签-->
                    <!--判断是否有子级或高亮当前栏目-->
                    <li class=""> <a href="/">首页</a>
                        <ul class="dropdown-menu" role="menu">
                        </ul> </li>
                    <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="dropdown"> <a href="index/down/index" data-toggle="dropdown"><?php echo $vo['name']; ?> </b></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <ul class="nav navbar-right hidden">
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:;" class="addbookbark"><i class="fa fa-star"></i> 加入收藏</a></li>
                        <li><a href="javascript:;" class=""><i class="fa fa-phone"></i> 联系我们</a></li>
                    </ul>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="form-inline navbar-form" action="/cms/s.html" method="get">
                            <div class="form-search hidden-sm hidden-md">
                                <input class="form-control typeahead" name="search" data-typeahead-url="/addons/cms/search/typeahead.html" type="text" id="searchinput" placeholder="搜索" />
                            </div>
                        </form> </li>
                    <li class="dropdown"> <a href="/index/user/index.html" class="dropdown-toggle" data-toggle="dropdown">会员<span class="hidden-sm">中心</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/index/user/login.html"><i class="fa fa-sign-in fa-fw"></i>登录</a></li>
                            <li><a href="/index/user/register.html"><i class="fa fa-user-o fa-fw"></i>注册</a></li>
                        </ul> </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- E 导航 -->
</header>



<div class="container" id="content-container">

    <h1 class="category-title">
        智能设备        <div class="more pull-right">
        <ol class="breadcrumb">
            <!-- S 面包屑导航 -->
            <li><a href="/">首页</a></li>
            <li><a href="/cms/c/product.html">源码下载</a></li>
            <li><a href="/index.php/index/down/list/id/<?php echo $category_name['id']; ?>"><?php echo $category_name['name']; ?></a></li>
            <!-- E 面包屑导航 -->
        </ol>
    </div>
    </h1>

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span><?php echo $category_name['name']; ?></span>

                        <div class="more">
                            <ul class="list-unstyled list-inline category-order clearfix">
                                <!-- S 排序 -->
                                <li><a href="?filter=&id=8&diyname=wearable&orderby=default&orderway=asc" class="active">默认</a></li>
                                <li><a href="?filter=&id=8&diyname=wearable&orderby=views&orderway=desc" class="">浏览次数</a></li>
                                <li><a href="?filter=&id=8&diyname=wearable&orderby=id&orderway=desc" class="">发布日期</a></li>
                                <!-- E 排序 -->
                            </ul>
                        </div>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="product-list">
                        <div class="row">
                            <!-- S 列表 -->
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="col-sm-4 col-md-3 product-item">
                                <div class="card">
                                    <div class="thumb">
                                        <a href="/index.php/index/down/index/<?php echo $vo['id']; ?>" class="preview-link">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <img src="<?php echo $vo['picrure']; ?>" alt="">
                                            </div>
                                        </a>
                                        <a href="/index.php/index/down/index/<?php echo $vo['id']; ?>" class="quickview-link"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="title">
                                        <h2><a href="/index.php/index/down/index/<?php echo $vo['id']; ?>" style="font-weight:bold;color:#162ceb;"><?php echo $vo['title']; ?></a></h2>
                                    </div>
                                    <div class="operate">
                                        <div class="pull-left text-gray">
                                            <div class="mt-1">
                    <span class="">
                        <i class="fa fa-eye"></i> <?php echo $vo['click']; ?>                    </span>

                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/index.php/index/down/index/<?php echo $vo['id']; ?>" class="btn btn-primary detail">查看详情</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <!-- S 列表 -->
                        </div>
                        <!-- S 分页栏 -->
                        <div class="text-center pager">
                            <?php echo $list->render(); ?>
                        </div>
                        <!-- E 分页栏 -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container-fluid" id="footer">
        <div class="container">
            <div class="row footer-inner">
                <div class="col-md-3 col-sm-3">
                    <div class="footer-logo">
                        <a href="#"><i class="fa fa-bookmark"></i></a>
                    </div>
                    <p class="copyright"><small>© 2017. All Rights Reserved. <br>
                        FastAdmin
                    </small>
                    </p>
                </div>
                <div class="col-md-5 col-md-push-1 col-sm-5 col-sm-push-1">
                    <div class="row">
                        <div class="col-xs-4">
                            <ul class="links">
                                <li><a href="#">关于我们</a></li>
                                <li><a href="#">发展历程</a></li>
                                <li><a href="#">服务项目</a></li>
                                <li><a href="#">团队成员</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-4">
                            <ul class="links">
                                <li><a href="#">新闻</a></li>
                                <li><a href="#">资讯</a></li>
                                <li><a href="#">推荐</a></li>
                                <li><a href="#">博客</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <ul class="links">
                                <li><a href="#">服务</a></li>
                                <li><a href="#">圈子</a></li>
                                <li><a href="#">论坛</a></li>
                                <li><a href="#">广告</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-md-push-1 col-sm-push-1">
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-weibo"></i></a>
                        <a href="#"><i class="fa fa-qq"></i></a>
                        <a href="#"><i class="fa fa-wechat"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="floatbtn">
    <!-- S 浮动按钮 -->

    <a href="javascript:;">
        <i class="iconfont icon-wxapp"></i>
        <div class="floatbtn-wrapper">
            <div class="qrcode"><img src="static/picture/cms.png"></div>
            <p>微信小程序</p>
            <p>微信扫一扫体验</p>
        </div>
    </a>

    <a class="hover" href="/index/cms.archives/post.html" target="_blank">
        <i class="iconfont icon-pencil"></i>
        <em>立即<br>投稿</em>
    </a>

    <a href="javascript:;">
        <i class="iconfont icon-qrcode"></i>
        <div class="floatbtn-wrapper">
            <div class="qrcode"><img src="static/picture/wxpublic.png"></div>
            <p>微信公众账号</p>
            <p>微信扫一扫加关注</p>
        </div>
    </a>

    <a id="back-to-top" class="hover" href="javascript:;">
        <i class="iconfont icon-backtotop"></i>
        <em>返回<br>顶部</em>
    </a>
    <!-- E 浮动按钮 -->
</div>


<script type="text/javascript" src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="static/js/layer.js"></script>
<script type="text/javascript" src="static/js/template-native.js"></script>
<script type="text/javascript" src="static/js/bootstrap-typeahead.min.js"></script>
<script type="text/javascript" src="static/js/swiper.min.js"></script>
<script type="text/javascript" src="static/js/cms.js"></script>
<script type="text/javascript" src="static/js/common.js"></script>



</body>
</html>