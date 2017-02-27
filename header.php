<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!Doctype html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title><?php $this->archiveTitle(array('category'=>_t(' %s '),'search'=>_t(' %s '),'tag'=>_t(' %s '),'author'=>_t(' %s ')),'',' - ');?><?php $this->options->title();?>
    </title>
    <meta name="keywords" content="<?php $this->options->keywords()?>" />
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <link rel="dns-prefetch" href="//m.helingqi.com" />
    <link rel="dns-prefetch" href="//img.helingqi.com" />
    <link rel="shortcut icon" href="<?php if($this->options->faviconUrl): $this->options->faviconUrl(); else: $this->options->siteUrl('/favicon.ico');endif; ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/base.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/font-awesome.css'); ?>">
    <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- 搜索框 -->
    <form role="search" method="post" class="search-form" action="">
        <span class="search-close">&times;</span>
        <label>
            <input type="search" class="search-field" placeholder="请输入关键字搜索" value="" name="s" autocomplete="off">
        </label>
        <input type="submit" class="search-submit" value="搜索">
    </form>
    <!-- banner -->
    <div class="banner" style="background: url(<?php $this->options->bannerUrl();?>);">
        <!-- header -->
        <div class="header container">
            <!--个人信息-->
            <div class="row">
                <div class="col-md-12">
                    <div class="personInfo">
                        <div class="logo">
                            <a href="<?php $this->options ->siteUrl(); ?>">
                  <img src="<?php if($this->options->logoUrl): $this->options->logoUrl(); else: $this->options->themeUrl('/images/logo.jpg');endif; ?>" alt="logo">
                  </a>
                        </div>
                        <div class="logoTheme">
                            <h1><?php if($this->options->headerTxt): $this->options->headerTxt(); else: echo "专注于web开发";;endif; ?>
            </h1>
                            <h3><?php if($this->options->headerTxt3): $this->options->headerTxt3(); else: echo "专注于web开发3";;endif; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>