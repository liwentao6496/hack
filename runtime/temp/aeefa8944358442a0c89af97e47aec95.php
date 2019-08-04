<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"C:\Users\hack\Desktop\fastadmin\public/../application/index\view\news\content.html";i:1564823964;s:71:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\head.html";i:1564826486;s:73:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\footer.html";i:1564825984;}*/ ?>
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

    <div class="row">

        <main class="col-md-8">
            <div class="panel panel-default article-content">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        <!-- S 面包屑导航 -->
                        <li><a href="/cms/">首页</a></li>
                        <li><a href="/cms/c/news.html">新闻中心</a></li>
                        <li><a href="/cms/c/investment.html">投资</a></li>
                        <!-- E 面包屑导航 -->
                    </ol>
                </div>
                <div class="panel-body">
                    <div class="article-metas">
                        <h1 class="metas-title" >
                            <?php echo $content['title']; ?>                       </h1>
                        <!-- S 统计信息 -->
                        <div class="metas-body">
                                                        <span class="views-num">
                                <i class="fa fa-eye"></i> <?php echo $content['click']; ?>
                            </span>
                            <span class="comment-num">
                                <i class="fa fa-comments"></i> 5 评论
                            </span>
                            <span class="like-num">
                                <i class="fa fa-thumbs-o-up"></i>
                                <span class="js-like-num"> 65 点赞
                                </span>
                            </span>
                        </div>
                        <!-- E 统计信息 -->
                    </div>

                    <div class="article-text">
                        <!-- S 正文 -->
                        <?php echo $content['content']; ?>
                        <!-- E 正文 -->
                    </div>



                    <div class="article-donate">
                        <a href="javascript:" class="btn btn-primary btn-like btn-lg" data-action="vote" data-type="like" data-id="4" data-tag="archives"><i class="fa fa-thumbs-up"></i> 点赞(<span>6</span>)</a>
                        <a href="javascript:" class="btn btn-outline-primary btn-donate btn-lg" data-action="donate" data-id="4" data-image="/wxds.png"><i class="fa fa-cny"></i> 打赏</a>
                    </div>

                    <div class="entry-meta">
                        <ul>
                            <!-- S 归档 -->
                            <li>本文分类：<a href="/cms/c/investment.html">投资</a></li>
                            <li>本文标签：<a href="/cms/t/智能设备.html" class="tag" rel="tag">智能设备</a></li>
                            <li>浏览次数：<span>4131</span> 次浏览</li>
                            <li><?php echo $content['addtime']; ?></li>
                            <li>本文链接：<a href="news/index/id/<?php echo $content['id']; ?>">fastadmin.com/index/news/index/id/<?php echo $content['id']; ?></a></li>
                            <!-- S 归档 -->
                        </ul>

                        <ul class="article-prevnext">
                            <!-- S 上一篇下一篇 -->
                            <li>
                                <span>上一篇 &gt;</span>
                                <a href="/cms/a/11.html">通用电气针对Predix云平台的创业者推出奖励计划</a>
                            </li>
                            <!-- E 上一篇下一篇 -->
                        </ul>
                    </div>

                    <div class="article-action-btn">
                        <div class="pull-left">
                            <!-- S 收藏 -->
                            <a class="product-favorite addbookbark mr-2" href="javascript:;">
                                <i class="fa fa-heart"></i> 收藏                            </a>
                            <!-- E 收藏 -->
                            <!-- S 分享 -->
                            <span class="bdsharebuttonbox share-box bdshare-button-style0-16">
                            <a class="bds_more share-box-a" data-cmd="more">
                                <i class="fa fa-share"></i> 分享                            </a>
                        </span>
                            <!-- E 分享 -->
                        </div>
                        <div class="pull-right">
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="related-article">
                        <div class="row">
                            <!-- S 相关文章 -->
                            <div class="col-sm-3 col-xs-6">
                                <a href="/cms/a/13.html" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="/skin/static/picture/5ad4411ecab1c0.jpg" alt="映泰Z390GT5主板手册曝光 英特尔Z390芯片组或即将到来 当" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5>映泰Z390GT5主板手册曝光 英特尔Z390芯片组或即将到来 当</h5>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="/cms/a/7.html" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="/skin/static/picture/5ad44121495860.jpg" alt="Snap新一代Spectacles眼镜文档已被FCC曝光" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5>Snap新一代Spectacles眼镜文档已被FCC曝光</h5>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href="/cms/a/4.html" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="/skin/static/picture/5ad441258ab510.png" alt="UE为现场演出者推出了价值2200美元的舞台耳返设备" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5>UE为现场演出者推出了价值2200美元的舞台耳返设备</h5>
                            </div>
                            <!-- E 相关文章 -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="panel panel-default" id="comments">
                <div class="panel-heading">
                    <h3 class="panel-title">评论列表                        <small>共有 <span>5</span> 条评论</small>
                    </h3>
                </div>
                <div class="panel-body">
                    <div id="comment-container">
                        <!-- S 评论列表 -->
                        <div id="commentlist">
                            <dl id="comment-293">
                                <dt><a href="javascript:;" rel="nofollow"><img src='/skin/static/picture/1f8e0b12d1e24cc5854e56392af4ea42.gif'/></a></dt>
                                <dd>
                                    <div class="parent">
                                        <cite><a href='javascript:;' rel='external nofollow'>otion</a></cite>
                                        <small> 1月前 <a href="javascript:;" data-id="293" title="@otion " class="reply">回复TA</a></small>
                                        <p><em>@admin</em> hello</p>
                                    </div>
                                </dd>
                                <div class="clearfix"></div>
                            </dl>
                            <dl id="comment-223">
                                <dt><a href="javascript:;" rel="nofollow"><img src='/skin/static/picture/avatar.png'/></a></dt>
                                <dd>
                                    <div class="parent">
                                        <cite><a href='javascript:;' rel='external nofollow'>admin</a></cite>
                                        <small> 1月前 <a href="javascript:;" data-id="223" title="@admin " class="reply">回复TA</a></small>
                                        <p><em>@admin</em> 哈哈哈哈</p>
                                    </div>
                                </dd>
                                <div class="clearfix"></div>
                            </dl>
                            <dl id="comment-202">
                                <dt><a href="javascript:;" rel="nofollow"><img src='/skin/static/picture/avatar.png'/></a></dt>
                                <dd>
                                    <div class="parent">
                                        <cite><a href='javascript:;' rel='external nofollow'>admin</a></cite>
                                        <small> 1月前 <a href="javascript:;" data-id="202" title="@admin " class="reply">回复TA</a></small>
                                        <p><em>@admin</em> </p>
                                    </div>
                                </dd>
                                <div class="clearfix"></div>
                            </dl>
                            <dl id="comment-14">
                                <dt><a href="javascript:;" rel="nofollow"><img src='/skin/static/picture/avatar.png'/></a></dt>
                                <dd>
                                    <div class="parent">
                                        <cite><a href='javascript:;' rel='external nofollow'>admin</a></cite>
                                        <small> 3月前 <a href="javascript:;" data-id="14" title="@admin " class="reply">回复TA</a></small>
                                        <p><em>@admin</em> 你好阿萨飒飒飒飒</p>
                                    </div>
                                </dd>
                                <div class="clearfix"></div>
                            </dl>
                            <dl id="comment-4">
                                <dt><a href="javascript:;" rel="nofollow"><img src='/skin/static/picture/avatar.png'/></a></dt>
                                <dd>
                                    <div class="parent">
                                        <cite><a href='javascript:;' rel='external nofollow'>admin</a></cite>
                                        <small> 3月前 <a href="javascript:;" data-id="4" title="@admin " class="reply">回复TA</a></small>
                                        <p>测试中</p>
                                    </div>
                                </dd>
                                <div class="clearfix"></div>
                            </dl>
                        </div>
                        <!-- E 评论列表 -->

                        <!-- S 评论分页 -->
                        <div id="commentpager" class="text-center">
                        </div>
                        <!-- E 评论分页 -->

                        <!-- S 发表评论 -->
                        <div id="postcomment">
                            <h3>发表评论 <a href="javascript:;">
                                <small>取消回复</small>
                            </a></h3>
                            <form action="/addons/cms/comment/post.html" method="post" id="postform">
                                <input type="hidden" name="__token__" value="4d7ad60d6beded09096e37e5bb254c04" />            <input type="hidden" name="type" value="archives"/>
                                <input type="hidden" name="aid" value="13"/>
                                <input type="hidden" name="pid" id="pid" value="0"/>
                                <div class="form-group">
                                    <textarea name="content" class="form-control" disabled placeholder="请登录后再发表评论"  id="commentcontent" cols="6" rows="5" tabindex="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <a href="/index/user/login.html" class="btn btn-primary">登录</a>
                                    <a href="/index/user/register.html" class="btn btn-outline-primary">注册新账号</a>
                                </div>
                            </form>
                        </div>
                        <!-- E 发表评论 -->
                    </div>
                </div>
            </div>

        </main>

        <aside class="col-xs-12 col-sm-4">

            <div class="panel panel-blockimg">
                <a href="https://www.fastadmin.net/store/ask.html">
                    <img src="/skin/static/picture/howto.png" class="img-responsive">
                </a>
            </div>

            <!-- S 热门资讯 -->
            <div class="panel panel-default hot-article">
                <div class="panel-heading">
                    <h3 class="panel-title">推荐资讯</h3>
                </div>
                <div class="panel-body">
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">1</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/1.html" title="驰为发布HiGame迷你PC新品 小身材大能量">驰为发布HiGame迷你PC新品 小身材大能量</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">2</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/3.html" title="Misfit最新的混合动力手表Path现已上市">Misfit最新的混合动力手表Path现已上市</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">3</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/5.html" title="南孚推出全球首款测电器装电池：可秒分电池新旧">南孚推出全球首款测电器装电池：可秒分电池新旧</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">4</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/9.html" title="Dropbox股价上市首日大涨36% 市值超120亿美元">Dropbox股价上市首日大涨36% 市值超120亿美元</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">5</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/11.html" title="通用电气针对Predix云平台的创业者推出奖励计划">通用电气针对Predix云平台的创业者推出奖励计划</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">6</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/15.html" title="Google Chrome和Mozilla Firefox将支持全新无密码登录规范">Google Chrome和Mozilla Firefox将支持全新无密码登录规范</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">7</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/21.html" title="谷歌公布Fuchsia文档：并非Linux内核 从头构建自己的库和组件">谷歌公布Fuchsia文档：并非Linux内核 从头构建自己的库和组件</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">8</span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/cms/a/22.html" title="谷歌手机应用可直接过滤语音垃圾邮件">谷歌手机应用可直接过滤语音垃圾邮件</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- E 热门资讯 -->

            <div class="panel panel-blockimg">
                <a href="https://promotion.aliyun.com/ntms/yunparter/invite.html?userCode=t50mdbun" rel="nofollow" title="FastAdmin推荐企业服务器" target="_blank">
                    <img src="/skin/static/picture/aliyun-sidebar.png" class="img-responsive" alt="">
                </a>
            </div>

            <!-- S 热门标签 -->
            <div class="panel panel-default hot-tags">
                <div class="panel-heading">
                    <h3 class="panel-title">热门标签</h3>
                </div>
                <div class="panel-body">
                    <div class="tags">
                        <a href="/cms/t/VR.html" class="tag"> <span>VR</span></a>
                        <a href="/cms/t/视频转换器.html" class="tag"> <span>视频转换器</span></a>
                        <a href="/cms/t/电子书设计.html" class="tag"> <span>电子书设计</span></a>
                        <a href="/cms/t/PC.html" class="tag"> <span>PC</span></a>
                        <a href="/cms/t/即时翻译.html" class="tag"> <span>即时翻译</span></a>
                        <a href="/cms/t/防火墙工具.html" class="tag"> <span>防火墙工具</span></a>
                        <a href="/cms/t/台式机.html" class="tag"> <span>台式机</span></a>
                        <a href="/cms/t/财务管理.html" class="tag"> <span>财务管理</span></a>
                        <a href="/cms/t/音乐管理.html" class="tag"> <span>音乐管理</span></a>
                        <a href="/cms/t/智能.html" class="tag"> <span>智能</span></a>
                        <a href="/cms/t/PDF编辑软件.html" class="tag"> <span>PDF编辑软件</span></a>
                        <a href="/cms/t/驰为.html" class="tag"> <span>驰为</span></a>
                        <a href="/cms/t/视频录制.html" class="tag"> <span>视频录制</span></a>
                        <a href="/cms/t/Sublime.html" class="tag"> <span>Sublime</span></a>
                        <a href="/cms/t/博客写作.html" class="tag"> <span>博客写作</span></a>
                        <a href="/cms/t/机器人.html" class="tag"> <span>机器人</span></a>
                        <a href="/cms/t/云计算.html" class="tag"> <span>云计算</span></a>
                        <a href="/cms/t/互联网.html" class="tag"> <span>互联网</span></a>
                        <a href="/cms/t/Mac.html" class="tag"> <span>Mac</span></a>
                        <a href="/cms/t/播放器.html" class="tag"> <span>播放器</span></a>
                        <a href="/cms/t/CAD绘图.html" class="tag"> <span>CAD绘图</span></a>
                        <a href="/cms/t/媒体演示.html" class="tag"> <span>媒体演示</span></a>
                        <a href="/cms/t/南孚.html" class="tag"> <span>南孚</span></a>
                        <a href="/cms/t/Chromebox.html" class="tag"> <span>Chromebox</span></a>
                        <a href="/cms/t/字体.html" class="tag"> <span>字体</span></a>
                        <a href="/cms/t/MAC地址修改.html" class="tag"> <span>MAC地址修改</span></a>
                        <a href="/cms/t/电池.html" class="tag"> <span>电池</span></a>
                        <a href="/cms/t/投资.html" class="tag"> <span>投资</span></a>
                        <a href="/cms/t/铃声制作.html" class="tag"> <span>铃声制作</span></a>
                        <a href="/cms/t/无线扫描.html" class="tag"> <span>无线扫描</span></a>
                    </div>
                </div>
            </div>
            <!-- E 热门标签 -->

            <!-- S 推荐下载 -->
            <div class="panel panel-default recommend-article">
                <div class="panel-heading">
                    <h3 class="panel-title">推荐下载</h3>
                </div>
                <div class="panel-body">
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">1</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/44.html" title="Compressor 4.4.4 苹果官方出品视频解码格式转换工具">Compressor 4.4.4 苹果官方出品视频解码格式转换工具</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">2</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/47.html" title="Pikka 2.0.4 菜单栏屏幕取色器">Pikka 2.0.4 菜单栏屏幕取色器</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">3</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/49.html" title="iShowU Instant 1.2.11 实时屏幕录制软件">iShowU Instant 1.2.11 实时屏幕录制软件</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">4</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/50.html" title="VideoProc 3.2(2019013001) 视频格式转换">VideoProc 3.2(2019013001) 视频格式转换</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">5</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/51.html" title="RightFont 5.4.1(2474) 超级好用的字体管理工具">RightFont 5.4.1(2474) 超级好用的字体管理工具</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">6</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/52.html" title="SPlayerX 4.1.4 射手播放器">SPlayerX 4.1.4 射手播放器</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">7</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/54.html" title="Meta 1.9.2(2358) 音频元数据音乐标签信息编辑器">Meta 1.9.2(2358) 音频元数据音乐标签信息编辑器</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">8</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/57.html" title="Camtasia 2018.0.8(105822) 强大且易用的视频录制和剪辑软件">Camtasia 2018.0.8(105822) 强大且易用的视频录制和剪辑软件</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">9</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/60.html" title="Cinemagraph Pro 2.7.1 专业的动态图片与视频制作工具">Cinemagraph Pro 2.7.1 专业的动态图片与视频制作工具</a>
                        </div>
                    </div>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num">10</span>
                        </div>
                        <div class="media-body">
                            <a href="/cms/a/62.html" title="MacX Video Converter Pro 6.4.0(20181213) 视频转换器">MacX Video Converter Pro 6.4.0(20181213) 视频转换器</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- E 推荐下载 -->

            <div class="panel panel-blockimg">
                <a href="https://www.fastadmin.net/go/aliyun" title="FastAdmin推荐企业服务器" target="_blank">
                    <img src="/skin/static/picture/enterprisehost.png" class="img-responsive" alt="">
                </a>
            </div>
        </aside>
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