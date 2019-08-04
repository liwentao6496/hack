<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"C:\Users\Administrator\Desktop\fastadmin\public/../application/index\view\down\search.html";i:1564814021;s:80:"C:\Users\Administrator\Desktop\fastadmin\application\index\view\public\head.html";i:1564816651;s:82:"C:\Users\Administrator\Desktop\fastadmin\application\index\view\public\footer.html";i:1563949482;}*/ ?>
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
                    <li class="dropdown"> <a href="/index/down/index">源码下载 </a></li>
                    <li class="dropdown"> <a href="/index/news/index">网赚干货 </a></li>
                    <li class="dropdown"> <a href="/index/down/index">视频教程 </a></li>
                    <li class="dropdown"> <a href="/index/down/index">技术文章 </a></li>
                    <li class="dropdown"> <a href="/index/down/index">有问必答 </a></li>
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
        查找 “<?php echo $word; ?>”        <div class="more pull-right">
        <ol class="breadcrumb">
            <!-- S 面包屑导航 -->
            <li><a href="/cms/">首页</a></li>
            <!-- E 面包屑导航 -->
        </ol>
    </div>
    </h1>

    <div class="row">

        <main class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>列表</span>

                        <div class="more">
                            <ul class="list-unstyled list-inline category-order clearfix">
                                <!-- S 排序 -->
                                <li><a href="?search=%E5%A5%A5%E7%9D%BF%E7%A7%91ORICO+HU3%E6%B8%A9%E5%AE%A4%E5%8A%A0%E6%B9%BF%E5%99%A8&amp;orderby=default&amp;orderway=asc" class="active">默认</a></li>
                                <li><a href="?search=%E5%A5%A5%E7%9D%BF%E7%A7%91ORICO+HU3%E6%B8%A9%E5%AE%A4%E5%8A%A0%E6%B9%BF%E5%99%A8&amp;orderby=views&amp;orderway=asc" class="">浏览次数</a></li>
                                <li><a href="?search=%E5%A5%A5%E7%9D%BF%E7%A7%91ORICO+HU3%E6%B8%A9%E5%AE%A4%E5%8A%A0%E6%B9%BF%E5%99%A8&amp;orderby=id&amp;orderway=asc" class="">发布日期</a></li>
                                <!-- E 排序 -->
                            </ul>
                        </div>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="article-list">

                        <!-- S 列表 -->
                        <article class="article-item">
                            <?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="media">
                                <div class="media-left">
                                    <a href="/index/down/content/id/<?php echo $vo['title']; ?>">
                                        <div class="embed-responsive embed-responsive-4by3 img-zoom">
                                            <img src="<?php echo $vo['picrure']; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="article-title">
                                        <a href="/index/down/content/id/<?php echo $vo['id']; ?>" style="font-weight:bold;color:#162ceb;"><?php echo $vo['title']; ?></a>
                                    </h3>
                                    <div class="article-intro hidden-xs">
                                        <?php echo $vo['description']; ?>
                                        <div class="article-tag">
                                            <span itemprop="date"><?php echo $vo['addtime']; ?></span>
                                            <span itemprop="likes" title="点赞次数"><i class="fa fa-thumbs-up"></i> <?php echo $vo['like']; ?> 点赞</span>
                                            <span itemprop="comments"><a href="/cms/a/109.html#comments" target="_blank" title="评论数"><i class="fa fa-comments"></i> 0</a> 评论</span>
                                            <span itemprop="views" title="浏览次数"><i class="fa fa-eye"></i> <?php echo $vo['click']; ?> 浏览</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                        </article>
                        <!-- E 列表 -->

                        <!-- S 分页栏 -->
                        <div class="text-center pager">
                            <?php echo $search->render(); ?>
                        </div>
                        <!-- E 分页栏 -->
                    </div>
                </div>
            </div>
        </main>

        <aside class="col-xs-12 col-sm-4">
            <div class="panel panel-blockimg">
                <a href="https://www.fastadmin.net/store/ask.html">
                    <img src="https://cdn.fastadmin.net/assets/addons/ask/img/sidebar/howto.png" class="img-responsive">
                </a>
            </div>
            <div class="panel panel-blockimg">
                <a href="https://promotion.aliyun.com/ntms/yunparter/invite.html?userCode=t50mdbun" rel="nofollow" title="FastAdmin推荐企业服务器" target="_blank">
                    <img src="https://cdn.fastadmin.net/uploads/store/aliyun-sidebar.png" class="img-responsive" alt="">
                </a>
            </div>

            <div class="panel panel-blockimg">
                <a href="https://www.fastadmin.net/store/ask.html">
                    <img src="https://cdn.fastadmin.net/assets/addons/ask/img/sidebar/howto.png" class="img-responsive">
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
                    <img src="https://cdn.fastadmin.net/uploads/store/aliyun-sidebar.png" class="img-responsive" alt="">
                </a>
            </div>

            <!-- S 热门标签 -->
            <div class="panel panel-default hot-tags">
                <div class="panel-heading">
                    <h3 class="panel-title">热门标签</h3>
                </div>
                <div class="panel-body">
                    <div class="tags">
                        <a href="/cms/t/视频.html" class="tag"> <span>视频</span></a>
                        <a href="/cms/t/服务测试.html" class="tag"> <span>服务测试</span></a>
                        <a href="/cms/t/电池.html" class="tag"> <span>电池</span></a>
                        <a href="/cms/t/在线视频下载.html" class="tag"> <span>在线视频下载</span></a>
                        <a href="/cms/t/FTP工具.html" class="tag"> <span>FTP工具</span></a>
                        <a href="/cms/t/铃声制作.html" class="tag"> <span>铃声制作</span></a>
                        <a href="/cms/t/驰为.html" class="tag"> <span>驰为</span></a>
                        <a href="/cms/t/南孚.html" class="tag"> <span>南孚</span></a>
                        <a href="/cms/t/宏基.html" class="tag"> <span>宏基</span></a>
                        <a href="/cms/t/屏幕录制.html" class="tag"> <span>屏幕录制</span></a>
                        <a href="/cms/t/视频制作.html" class="tag"> <span>视频制作</span></a>
                        <a href="/cms/t/耳返.html" class="tag"> <span>耳返</span></a>
                        <a href="/cms/t/云计算.html" class="tag"> <span>云计算</span></a>
                        <a href="/cms/t/MAC地址修改.html" class="tag"> <span>MAC地址修改</span></a>
                        <a href="/cms/t/音乐播放器.html" class="tag"> <span>音乐播放器</span></a>
                        <a href="/cms/t/播放器.html" class="tag"> <span>播放器</span></a>
                        <a href="/cms/t/安全.html" class="tag"> <span>安全</span></a>
                        <a href="/cms/t/视频转换器.html" class="tag"> <span>视频转换器</span></a>
                        <a href="/cms/t/博客写作.html" class="tag"> <span>博客写作</span></a>
                        <a href="/cms/t/财务管理.html" class="tag"> <span>财务管理</span></a>
                        <a href="/cms/t/媒体演示.html" class="tag"> <span>媒体演示</span></a>
                        <a href="/cms/t/文件管理.html" class="tag"> <span>文件管理</span></a>
                        <a href="/cms/t/视频下载.html" class="tag"> <span>视频下载</span></a>
                        <a href="/cms/t/眼镜.html" class="tag"> <span>眼镜</span></a>
                        <a href="/cms/t/投资.html" class="tag"> <span>投资</span></a>
                        <a href="/cms/t/字体.html" class="tag"> <span>字体</span></a>
                        <a href="/cms/t/智能手表.html" class="tag"> <span>智能手表</span></a>
                        <a href="/cms/t/防火墙工具.html" class="tag"> <span>防火墙工具</span></a>
                        <a href="/cms/t/Chromebox.html" class="tag"> <span>Chromebox</span></a>
                        <a href="/cms/t/智能.html" class="tag"> <span>智能</span></a>
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
                    <img src="https://cdn.fastadmin.net/uploads/store/enterprisehost.png" class="img-responsive" alt="">
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