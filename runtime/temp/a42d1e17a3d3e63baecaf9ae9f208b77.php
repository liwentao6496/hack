<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"C:\Users\hack\Desktop\fastadmin\public/../application/index\view\down\index.html";i:1564825326;s:71:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\head.html";i:1564826486;s:73:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\footer.html";i:1564825984;}*/ ?>
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

    <style>
        .tabs-wrapper {
            /*border: 1px solid #eee;*/
            border-radius: 2px;
            background-clip: padding-box;
            margin-bottom: 30px;
            background-color: #fff;
            padding: 10px 0;
        }

        .tabs-wrapper .tabs-group {
            padding: 0;
            position: relative;
            overflow-y: hidden;
        }

        .tabs-wrapper .tabs-group .title {
            float: left;
            padding: 15px 0;
            width: 40px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            word-wrap: normal;
            text-align: right;
            font-size: 14px;
        }

        .tabs-wrapper .tabs-group ul {
            list-style: none;
            padding: 0;
            margin: 0 0 0 60px;
        }

        .tabs-wrapper .tabs-group ul > li {
            float: left;
            padding: 10px 12px;
        }

        .tabs-wrapper .tabs-group ul > li > a {
            display: block;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            background-clip: padding-box;
            color: #919191;
            font-size: 14px;
        }

        .tabs-wrapper .tabs-group ul > li.active > a,
        .tabs-wrapper .tabs-group ul > li:focus > a,
        .tabs-wrapper .tabs-group ul > li:hover > a {
            color: #43bc60;
        }

        .nav-pills > li > a {
            padding: 6px 12px;
        }

        .search-form input {
            outline: none;
        }

        .search-form input[type=search] {
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            font-family: inherit;
            font-size: 100%;
        }

        .search-form input::-webkit-search-decoration,
        .search-form input::-webkit-search-cancel-button {
            display: none; /* remove the search and cancel icon */
        }

        .search-form input[type=search] {
            background: #ededed;
            padding: 6px 10px 5px 12px;
            width: 30px;

            border-radius: 3px;

            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            transition: all .5s;
            border: solid 1px #ccc;
        }

        .search-form {
            float: left;
        }

        .search-form:before {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            content: "\f002";
            float: left;
            margin-right: -33px;
            width: 33px;
            font-size: 14px;
            text-align: center;
            position: relative;
            padding: 0.275rem 0;
            line-height: 1.6;
            pointer-events: none;
            color: #495057;
        }

        .search-form input[type=search]:focus {
            width: 130px;
            background-color: #fff;
            border-color: #6dcff6;

            -webkit-box-shadow: 0 0 5px rgba(109, 207, 246, .8);
            -moz-box-shadow: 0 0 5px rgba(109, 207, 246, .8);
            box-shadow: 0 0 5px rgba(109, 207, 246, .8);
        }

        .search-form input:-moz-placeholder {
            color: #999;
        }

        .search-form input::-webkit-input-placeholder {
            color: #999;
        }

        .search-form input[type=search] {
            width: 12px;
            padding-left: 10px;
            color: transparent;
            cursor: pointer;
        }

        .search-form input[type=search]:hover {
            background-color: #fff;
        }

        .search-form input[type=search]:focus {
            width: 130px;
            padding-left: 32px;
            color: #000;
            background-color: #fff;
            cursor: auto;
        }

        .search-form input:-moz-placeholder {
            color: transparent;
        }

        .search-form input::-webkit-input-placeholder {
            color: transparent;
        }


    </style>


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
                <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" width="180" height="50" alt="" /></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <!--如果你需要自定义NAV,可使用channellist标签来完成,这里只设置了2级,如果显示无限级,请使用cms:nav标签-->
                    <!--判断是否有子级或高亮当前栏目-->
                    <li class=""> <a href="/">首页</a>
                        <ul class="dropdown-menu" role="menu">
                        </ul> </li>
                    <li class="dropdown"> <a href="/index/down">源码下载 </a></li>
                    <li class="dropdown"> <a href="/index/news/">网赚干货 </a></li>
                    <li class="dropdown"> <a href="/index/down/">视频教程 </a></li>
                    <li class="dropdown"> <a href="/index/down/">技术文章 </a></li>
                    <li class="dropdown"> <a href="/index/questions/">有问必答 </a></li>
                </ul>
                <ul class="nav navbar-right hidden">
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:;" class="addbookbark"><i class="fa fa-star"></i> 加入收藏</a></li>
                        <li><a href="javascript:;" class=""><i class="fa fa-phone"></i> 联系我们</a></li>
                    </ul>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="form-inline navbar-form" action="/index/down/search" method="get">
                            <div class="form-search hidden-sm hidden-md">
                                <input class="form-control typeahead" name="search" data-typeahead-url="/index/down/search" type="text" id="searchinput" placeholder="搜索" />
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
        源码中心        <div class="more pull-right">
        <ol class="breadcrumb">
            <!-- S 面包屑导航 -->
            <li><a href="/cms/">首页</a></li>
            <li><a href="/index/down/">源码下载</a></li>
            <!-- E 面包屑导航 -->
        </ol>
    </div>
    </h1>
<!--    轮播图-->
    <div class="row">
        <div class="col-xs-12 col-md-7">
            <div id="product-focus" class="carousel slide carousel-focus" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#product-focus" data-slide-to="0" class="active"></li>
                    <li data-target="#product-focus" data-slide-to="1" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!--                    级别为9-->
                    <?php if(is_array($level) || $level instanceof \think\Collection || $level instanceof \think\Paginator): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="item <?php if(($key ==1)): ?>active<?php endif; ?>">
                        <a href="/index/down/content/id/<?php echo $vo['id']; ?>">
                            <div class="carousel-img" style="background-image:url('<?php echo $vo['picrure']; ?>');"></div>
                            <div class="carousel-caption hidden-xs">
                                <h3><?php echo $vo['title']; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <a class="left carousel-control" href="#product-focus" role="button" data-slide="prev">
                    <span class="icon-prev fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#product-focus" role="button" data-slide="next">
                    <span class="icon-next fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-5 focus-img">
            <div class="row">
                <?php if(is_array($limit) || $limit instanceof \think\Collection || $limit instanceof \think\Paginator): $i = 0; $__LIST__ = $limit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="col-xs-6">
                    <a href="/index/down/content/id/<?php echo $vo['id']; ?>">
                        <span class="embed-responsive embed-responsive-16by9 img-zoom">
                            <img src="<?php echo $vo['picrure']; ?>" class="embed-responsive-item" alt="">
                            <div class="intro"><?php echo $vo['title']; ?></div>
                        </span>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <!--    轮播图end-->

    <div class="tabs-wrapper hidden-xs">

        <!-- S 分类列表 -->
        <div class="tabs-group">
            <div class="title">分类:</div>

            <ul class="list-unstyled list-inline">
                <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="active"><a class="nav-link" href='<?php echo url("lists"); ?>?id=<?php echo $vo['id']; ?>' ><?php echo $vo['name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

        </div>

        <!-- E 分类列表 -->
    </div>


    <div class="addon-filter">
        <ul class="nav nav-pills hidden-xs tab">
            <li class="active"><a class="nav-link" href="?category=all&amp;pay=all&amp;order=default">默认排序</a></li>
            <li class=""><a class="nav-link" href="?category=all&amp;pay=all&amp;order=download">按下载次数</a></li>
            <li class=""><a class="nav-link" href="?category=all&amp;pay=all&amp;order=createdate">按发布时间</a></li>
            <li class=""><a class="nav-link" href="?category=all&amp;pay=all&amp;order=createdate">免费</a></li>
            <li class=""><a class="nav-link" href="?category=all&amp;pay=all&amp;order=createdate">付费</a></li>
            <li class="pull-right"><a  href="/postaddon.html" class="btn btn-default"> <i class="fa fa-cloud-upload"></i> 发布源码 </a></li>
        </ul>


    </div>


    <div class="row mt-2">
        <main class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body pt-0">
                    <div class="channel-list">
                        <div class="row">
                            <!-- S 栏目列表 -->
                            <div class="col-xs-12">
                                <h3><a href="/cms/c/wearable.html">最新源码</a> <em><a href="/cms/c/wearable.html">更多</a></em></h3>
                                <div class="row">

                                    <?php if(is_array($newest) || $newest instanceof \think\Collection || $newest instanceof \think\Paginator): $i = 0; $__LIST__ = $newest;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="col-sm-4 col-md-3 product-item">
                                        <div class="card">
                                            <div class="thumb">
                                                <a href="/index/down/content/id/<?php echo $vo['id']; ?>" class="preview-link">
                                                    <div class="embed-responsive embed-responsive-4by3">
                                                        <img src="<?php echo $vo['picrure']; ?>" alt="<?php echo $vo['title']; ?>">
                                                    </div>
                                                </a>
                                                <a href="/index/down/content/id/<?php echo $vo['id']; ?>" class="quickview-link"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="title">
                                                <h2><a href="/index/down/content/id/<?php echo $vo['id']; ?>" style="font-weight:bold;color:#162ceb;"><?php echo $vo['title']; ?></a></h2>
                                            </div>
                                            <div class="operate">
                                                <div class="pull-left text-gray">
                                                    <div class="mt-1">
                                                          <span class="">
                                                              <i class="fa fa-eye"></i> <?php echo $vo['click']; ?>
                                                          </span>
                                                    </div>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="/index/down/content/id/<?php echo $vo['id']; ?>" class="btn btn-primary detail">查看详情</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>




                                </div>
                            </div>


                            <!-- E 栏目列表 -->

                            <!-- S 分页栏 -->
                            <div class="text-center pager">
                                <?php echo $newest->render(); ?>
                            </div>
                            <!-- E 分页栏 -->

                        </div>
                    </div>
                </div>
            </div>
        </main>
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

<!--    <a href="javascript:;">-->
<!--        <i class="iconfont icon-wxapp"></i>-->
<!--        <div class="floatbtn-wrapper">-->
<!--            <div class="qrcode"><img src="static/picture/cms.png"></div>-->
<!--            <p>微信小程序</p>-->
<!--            <p>微信扫一扫体验</p>-->
<!--        </div>-->
<!--    </a>-->

    <a class="hover" href="/index/cms.archives/post.html" target="_blank">
        <i class="iconfont icon-pencil"></i>
        <em>立即<br>投稿</em>
    </a>

<!--    <a href="javascript:;">-->
<!--        <i class="iconfont icon-qrcode"></i>-->
<!--        <div class="floatbtn-wrapper">-->
<!--            <div class="qrcode"><img src="static/picture/wxpublic.png"></div>-->
<!--            <p>微信公众账号</p>-->
<!--            <p>微信扫一扫加关注</p>-->
<!--        </div>-->
<!--    </a>-->

    <a id="back-to-top" class="hover" href="javascript:;">
        <i class="iconfont icon-backtotop"></i>
        <em>返回<br>顶部</em>
    </a>
    <!-- E 浮动按钮 -->
</div>


<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js/layer.js"></script>
<script type="text/javascript" src="/static/js/template-native.js"></script>
<script type="text/javascript" src="/static/js/bootstrap-typeahead.min.js"></script>
<script type="text/javascript" src="/static/js/swiper.min.js"></script>
<script type="text/javascript" src="/static/js/cms.js"></script>
<script type="text/javascript" src="/static/js/common.js"></script>



</body>
</html>