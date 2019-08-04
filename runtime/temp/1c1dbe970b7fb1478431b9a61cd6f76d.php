<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"C:\Users\hack\Desktop\fastadmin\public/../application/index\view\down\content.html";i:1564824322;s:71:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\head.html";i:1564826486;s:73:"C:\Users\hack\Desktop\fastadmin\application\index\view\public\footer.html";i:1564825984;}*/ ?>
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
                        <li><a href="/cms/c/news.html">源码下载</a></li>
                        <li><a href="/cms/c/hardware.html"><?php echo $category['name']; ?></a></li>
                        <!-- E 面包屑导航 -->
                    </ol>
                </div>
                <div class="panel-body">
                    <div class="article-metas">
                        <h1 class="metas-title" >
                            <?php echo $content['title']; ?>                        </h1>
                        <!-- S 统计信息 -->
                        <div class="metas-body">
                                                        <span class="views-num">
                                <i class="fa fa-eye"></i> <?php echo $content['click']; ?> 点击
                            </span>
                            <span class="comment-num">
                                <i class="fa fa-comments"></i> 0 评论
                            </span>
                            <span class="like-num">
                                <i class="fa fa-thumbs-o-up"></i>
                                <span class="js-like-num"> <?php echo $content['like']; ?> 点赞
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

                    <!-- S 付费阅读 -->
                    <!-- E 付费阅读 -->
                    <div class="article-donate">
                        <a href="javascript:" class="btn btn-primary btn-like btn-lg" data-action="vote" data-type="like" data-id="4" data-tag="archives"><i class="fa fa-thumbs-up"></i> 点赞(<span><?php echo $content['like']; ?></span>)</a>
                        <a href="/index/down/download/id/<?php echo $content['id']; ?>" class="btn btn-primary btn-like btn-lg" data-action="vote" data-type="like" data-id="4" data-tag="archives"> 下载</a>
                        <a href="javascript:" class="btn btn-outline-primary btn-donate btn-lg" data-action="donate" data-id="4" data-image="/wxds.png"><i class="fa fa-cny"></i> 打赏</a>
                    </div>

                    <div class="entry-meta">
                        <ul>
                            <!-- S 归档 -->
                            <li>源码分类：<a href="/idnex/down/list/id/<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></li>
                            <li>浏览次数：<span><?php echo $content['click']; ?></span> 次点击</li>
                            <li>发布日期：<?php echo $content['addtime']; ?></li>
                            <li>本文链接：<a href="/index/down/content/id/<?php echo $category['id']; ?>">/index/down/content/id/<?php echo $content['id']; ?></a></li>
                            <!-- S 归档 -->
                        </ul>

<!--                        <ul class="article-prevnext">-->
<!--                            &lt;!&ndash; S 上一篇下一篇 &ndash;&gt;-->
<!--                            <li>-->
<!--                                <span>上一篇 &gt;</span>-->
<!--                                <a href="/cms/a/3.html">Misfit最新的混合动力手表Path现已上市</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <span>下一篇 &gt;</span>-->
<!--                                <a href="/cms/a/5.html">南孚推出全球首款测电器装电池：可秒分电池新旧</a>-->
<!--                            </li>-->
<!--                            &lt;!&ndash; E 上一篇下一篇 &ndash;&gt;-->
<!--                        </ul>-->
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
                            <?php if(is_array($correlation) || $correlation instanceof \think\Collection || $correlation instanceof \think\Paginator): $i = 0; $__LIST__ = $correlation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="col-sm-3 col-xs-6">
                                <a href="/index/down/content/id/<?php echo $vo['id']; ?>" class="img-zoom">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <img src="<?php echo $vo['picrure']; ?>" alt="<?php echo $vo['title']; ?>" class="embed-responsive-item">
                                    </div>
                                </a>
                                <h5><a href="/index/down/content/id/<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></h5>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <!-- E 相关文章 -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="panel panel-default" id="comments">
                <div class="panel-heading">
                    <h3 class="panel-title">评论列表                        <small>共有 <span>0</span> 条评论</small>
                    </h3>
                </div>
                <div class="panel-body">
                    <div id="comment-container">
                        <!-- S 评论列表 -->
<!--                        <div id="commentlist">-->
<!--                            <dl id="comment-150">-->
<!--                                <dt><a href="javascript:;" rel="nofollow"><img src='static/picture/72a225ad6f824459a7625aef4c87c261.gif'/></a></dt>-->
<!--                                <dd>-->
<!--                                    <div class="parent">-->
<!--                                        <cite><a href='javascript:;' rel='external nofollow'>꯭陈꯭字꯭翔꯭</a></cite>-->
<!--                                        <small> 2月前 <a href="javascript:;" data-id="150" title="@꯭陈꯭字꯭翔꯭ " class="reply">回复TA</a></small>-->
<!--                                        <p>呵呵？</p>-->
<!--                                    </div>-->
<!--                                </dd>-->
<!--                                <div class="clearfix"></div>-->
<!--                            </dl>-->
<!--                        </div>-->
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
                                <input type="hidden" name="__token__" value="ba8c42a3a0216b104acde0268557ea6c" />            <input type="hidden" name="type" value="archives"/>
                                <input type="hidden" name="aid" value="4"/>
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

<!--            <div class="panel panel-blockimg">-->
<!--                <a href="https://www.fastadmin.net/store/ask.html">-->
<!--                    <img src="static/picture/howto.png" class="img-responsive">-->
<!--                </a>-->
<!--            </div>-->

            <!-- S 热门下载 -->
            <div class="panel panel-default hot-article">
                <div class="panel-heading">
                    <h3 class="panel-title">推荐下载</h3>
                </div>
                <div class="panel-body">
                    <?php if(is_array($click) || $click instanceof \think\Collection || $click instanceof \think\Paginator): $i = 0; $__LIST__ = $click;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num"><?php echo $key+1; ?></span>
                        </div>
                        <div class="media-body">
                            <a class="link-dark" href="/index/down/content/id/<?php echo $vo['id']; ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!-- E 热门资讯 -->

            <div class="panel panel-blockimg">
                <a href="https://promotion.aliyun.com/ntms/yunparter/invite.html?userCode=t50mdbun" rel="nofollow" title="FastAdmin推荐企业服务器" target="_blank">
                    <img src="static/picture/aliyun-sidebar.png" class="img-responsive" alt="">
                </a>
            </div>

            <!-- S 热门标签 -->
            <div class="panel panel-default hot-tags">
                <div class="panel-heading">
                    <h3 class="panel-title">热门标签</h3>
                </div>
                <div class="panel-body">
                    <div class="tags">
                        <?php if(is_array($tag) || $tag instanceof \think\Collection || $tag instanceof \think\Paginator): $i = 0; $__LIST__ = $tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="/index/down/lists/id/<?php echo $vo['id']; ?>" class="tag"> <span><?php echo $vo['name']; ?></span></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
            <!-- E 热门标签 -->

            <!-- S 推荐下载 -->
            <div class="panel panel-default recommend-article">
                <div class="panel-heading">
                    <h3 class="panel-title">推荐网赚</h3>
                </div>
                <div class="panel-body">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="media media-number">
                        <div class="media-left">
                            <span class="num"><?php echo $key+1; ?></span>
                        </div>
                        <div class="media-body">
                            <a href="/index/news/content/id/<?php echo $vo['id']; ?>" title="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!-- E 推荐下载 -->

            <div class="panel panel-blockimg">
                <a href="https://www.fastadmin.net/go/aliyun" title="FastAdmin推荐企业服务器" target="_blank">
                    <img src="static/picture/enterprisehost.png" class="img-responsive" alt="">
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