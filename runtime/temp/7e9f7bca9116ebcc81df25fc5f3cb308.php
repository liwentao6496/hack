<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:94:"C:\Users\Administrator\Desktop\fastadmin\public/../application/index\view\questions\index.html";i:1564826728;s:80:"C:\Users\Administrator\Desktop\fastadmin\application\index\view\public\head.html";i:1564826486;s:82:"C:\Users\Administrator\Desktop\fastadmin\application\index\view\public\footer.html";i:1564825984;}*/ ?>
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

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <section class="article-content">
                        <div class="article-metas text-center">
                            <h1 class="metas-title">
                                发表留言                            </h1>
                        </div>
                        <hr>
                        <div class="py-4">
                            <!-- S 正文 -->

                            <div class="row">
                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                    <form id="post-form" class="form-horizontal nice-validator n-default n-bootstrap" role="form" data-toggle="validator" method="POST" action="/addons/cms/diyform/post.html" novalidate="novalidate">
                                        <input type="hidden" name="__diyname__" value="message">
                                        <input type="hidden" name="__token__" value="d95c1bd17ccce95bf42f67e808a7dfa5">
                                        <div class="form-group">
                                            <div class="control-label col-xs-12 col-sm-2">姓名</div>
                                            <div class="col-xs-12 col-sm-8">
                                                <input type="text" name="row[name]" id="c-name" value="" class="form-control" data-tip="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="control-label col-xs-12 col-sm-2">手机</div>
                                            <div class="col-xs-12 col-sm-8">
                                                <input type="text" name="row[telephone]" id="c-telephone" value="" class="form-control" data-tip="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="control-label col-xs-12 col-sm-2">QQ</div>
                                            <div class="col-xs-12 col-sm-8">
                                                <input type="text" name="row[qq]" id="c-qq" value="" class="form-control" data-tip="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="control-label col-xs-12 col-sm-2">内容</div>
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="ke-container ke-container-black" style="width: 388px;"><div style="display:block;" class="ke-toolbar" unselectable="on"><span class="ke-outline" data-name="source" title="HTML代码" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-source" unselectable="on"></span></span><span class="ke-outline" data-name="undo" title="后退(Ctrl+Z)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-undo" unselectable="on"></span></span><span class="ke-outline" data-name="redo" title="前进(Ctrl+Y)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-redo" unselectable="on"></span></span><span class="ke-outline" data-name="preview" title="预览" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-preview" unselectable="on"></span></span><span class="ke-outline" data-name="print" title="打印(Ctrl+P)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-print" unselectable="on"></span></span><span class="ke-outline" data-name="template" title="插入模板" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-template" unselectable="on"></span></span><span class="ke-outline" data-name="code" title="插入程序代码" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-code" unselectable="on"></span></span><span class="ke-outline" data-name="quote" title="插入引用" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-quote" unselectable="on"></span></span><span class="ke-outline" data-name="cut" title="剪切(Ctrl+X)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-cut" unselectable="on"></span></span><span class="ke-outline" data-name="copy" title="复制(Ctrl+C)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-copy" unselectable="on"></span></span><span class="ke-outline" data-name="paste" title="粘贴(Ctrl+V)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-paste" unselectable="on"></span></span><span class="ke-outline" data-name="plainpaste" title="粘贴为无格式文本" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-plainpaste" unselectable="on"></span></span><span class="ke-outline" data-name="wordpaste" title="从Word粘贴" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-wordpaste" unselectable="on"></span></span><span class="ke-outline" data-name="justifyleft" title="左对齐" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifyleft" unselectable="on"></span></span><span class="ke-outline" data-name="justifycenter" title="居中" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifycenter" unselectable="on"></span></span><span class="ke-outline" data-name="justifyright" title="右对齐" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifyright" unselectable="on"></span></span><span class="ke-outline" data-name="justifyfull" title="两端对齐" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-justifyfull" unselectable="on"></span></span><span class="ke-outline" data-name="insertorderedlist" title="编号" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-insertorderedlist" unselectable="on"></span></span><span class="ke-outline" data-name="insertunorderedlist" title="项目符号" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-insertunorderedlist" unselectable="on"></span></span><span class="ke-outline" data-name="indent" title="增加缩进" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-indent" unselectable="on"></span></span><span class="ke-outline" data-name="outdent" title="减少缩进" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-outdent" unselectable="on"></span></span><span class="ke-outline" data-name="subscript" title="下标" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-subscript" unselectable="on"></span></span><span class="ke-outline" data-name="superscript" title="上标" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-superscript" unselectable="on"></span></span><span class="ke-outline" data-name="clearhtml" title="清理HTML代码" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-clearhtml" unselectable="on"></span></span><span class="ke-outline" data-name="quickformat" title="一键排版" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-quickformat" unselectable="on"></span></span><span class="ke-outline" data-name="selectall" title="全选(Ctrl+A)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-selectall" unselectable="on"></span></span><span class="ke-outline" data-name="formatblock" title="段落" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-formatblock" unselectable="on"></span></span><span class="ke-outline" data-name="fontname" title="字体" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-fontname" unselectable="on"></span></span><span class="ke-outline" data-name="fontsize" title="文字大小" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-fontsize" unselectable="on"></span></span><span class="ke-outline" data-name="forecolor" title="文字颜色" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-forecolor" unselectable="on"></span></span><span class="ke-outline" data-name="hilitecolor" title="文字背景" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-hilitecolor" unselectable="on"></span></span><span class="ke-outline" data-name="bold" title="粗体(Ctrl+B)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-bold" unselectable="on"></span></span><span class="ke-outline" data-name="italic" title="斜体(Ctrl+I)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-italic" unselectable="on"></span></span><span class="ke-outline" data-name="underline" title="下划线(Ctrl+U)" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-underline" unselectable="on"></span></span><span class="ke-outline" data-name="strikethrough" title="删除线" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-strikethrough" unselectable="on"></span></span><span class="ke-outline" data-name="lineheight" title="行距" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-lineheight" unselectable="on"></span></span><span class="ke-outline" data-name="removeformat" title="删除格式" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-removeformat" unselectable="on"></span></span><span class="ke-outline" data-name="image" title="图片" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-image" unselectable="on"></span></span><span class="ke-outline" data-name="multiimage" title="批量图片上传" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-multiimage" unselectable="on"></span></span><span class="ke-outline" data-name="graft" title="涂鸦" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-graft" unselectable="on"></span></span><span class="ke-outline" data-name="flash" title="Flash" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-flash" unselectable="on"></span></span><span class="ke-outline" data-name="media" title="视音频" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-media" unselectable="on"></span></span><span class="ke-outline" data-name="insertfile" title="插入文件" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-insertfile" unselectable="on"></span></span><span class="ke-outline" data-name="table" title="表格" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-table" unselectable="on"></span></span><span class="ke-outline" data-name="hr" title="插入横线" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-hr" unselectable="on"></span></span><span class="ke-outline" data-name="emoticons" title="插入表情" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-emoticons" unselectable="on"></span></span><span class="ke-outline" data-name="baidumap" title="百度地图" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-baidumap" unselectable="on"></span></span><span class="ke-outline" data-name="pagebreak" title="插入分页符" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-pagebreak" unselectable="on"></span></span><span class="ke-outline" data-name="anchor" title="锚点" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-anchor" unselectable="on"></span></span><span class="ke-outline" data-name="link" title="超级链接" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-link" unselectable="on"></span></span><span class="ke-outline" data-name="unlink" title="取消超级链接" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-unlink" unselectable="on"></span></span><span class="ke-outline" data-name="about" title="关于" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-about" unselectable="on"></span></span><span class="ke-outline" data-name="fullscreen" title="全屏显示" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-fullscreen" unselectable="on"></span></span></div><div style="display: block; height: 300px;" class="ke-edit"><iframe class="ke-edit-iframe" hidefocus="true" frameborder="0" tabindex="" style="width: 100%; height: 300px;"></iframe><textarea class="ke-edit-textarea" hidefocus="true" tabindex="" style="width: 100%; height: 300px; display: none;"></textarea></div><div class="ke-statusbar"><span class="ke-inline-block ke-statusbar-center-icon"></span><span class="ke-inline-block ke-statusbar-right-icon"></span></div></div><textarea name="row[content]" id="c-content" class="form-control editor" rows="5" data-tip="" style="display: none;"></textarea>
                                            </div>
                                            链接：：：<?php echo url('/addons/summernote'); ?>
                                        </div>

                                        <div class="form-group">
                                            <div class="control-label col-xs-12 col-sm-2">图片</div>
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="input-group">
                                                    <input id="c-image" class="form-control" name="row[image]" type="text" value="" data-rule="" data-tip="">
                                                    <div class="input-group-addon no-border no-padding">
                                                        <span style="position: relative;"><button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="c-image" data-preview-id="p-image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="true" initialized="true" style="position: relative; z-index: 1;"><i class="fa fa-upload"></i> 上传</button><div id="html5_1dhbesrlp1otpav71v51tmgbaa4_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: -5px; left: 0px; width: 65px; height: 31px; overflow: hidden; z-index: 0;"><input id="html5_1dhbesrlp1otpav71v51tmgbaa4" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/gif,.gif,image/jpeg,.jpg,.jpeg,.jpe,image/png,.png,image/bmp,.bmp"></div></span>
                                                        <span class="msg-box n-right" for="c-image"></span>
                                                    </div>
                                                </div>
                                                <ul class="row list-inline plupload-preview" id="p-image" data-listidx="0"></ul>
                                            </div>
                                        </div>

                                        <div class="form-group normal-footer">
                                            <label class="control-label col-xs-12 col-sm-2"></label>
                                            <div class="col-xs-12 col-sm-8">
                                                <button type="submit" class="btn btn-primary btn-embossed">确定</button>
                                                <button type="reset" class="btn btn-default btn-embossed">重置</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <!-- E 正文 -->
                        </div>

                        <div class="clearfix"></div>
                    </section>
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