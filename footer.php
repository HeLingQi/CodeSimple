<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!--footer-->
<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row footrow">
                <div class="col-md-3">
                    <div class="widget catebox">
                        <h4 class="title">分类目录</h4>
                        <div class="box category clearfix">
                            <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget tagbox">
                        <h4 class="title">文章标签</h4>
                        <div class="box tags clearfix">
                            <ul class="post_tags">
                                <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 16))->to($tags); ?>
                                <?php while($tags->next()): ?>
                                <li><a href="<?php $tags->permalink(); ?>" class="size-<?php $tags->split(5, 10, 20, 30); ?>"><?php $tags->name(); ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget linkbox">
                        <h4 class="title">友情链接</h4>
                        <div class="box friend-links clearfix">
                            <li>
                                <?php if($this->options->linkUrl1):?>
                                <a href="<?php $this->options->linkUrl1();?>" target="_blank"><?php $this->options->linkName1();?></a>
                                <?php else:?>
                                <a href="//www.helingqi.com" target="_blank">禾令奇</a>
                                <?php endif;?>
                            </li>
                            <li>
                                <?php if($this->options->linkUrl2):?>
                                <a href="<?php $this->options->linkUrl2();?>" target="_blank"><?php $this->options->linkName2();?></a>
                                <?php else:?>
                                <a href="//www.a696.com" target="_blank">油纸伞</a>
                                <?php endif;?>
                            </li>
                            <li>
                                <?php if($this->options->linkUrl3):?>
                                <a href="<?php $this->options->linkUrl3();?>" target="_blank"><?php $this->options->linkName3();?></a>
                                <?php else:?>
                                <?php endif;?>
                            </li>
                            <li>
                                <?php if($this->options->linkUrl4):?>
                                <a href="<?php $this->options->linkUrl4();?>" target="_blank"><?php $this->options->linkName4();?></a>
                                <?php else:?>
                                <?php endif;?>
                            </li>
                            <li>
                                <?php if($this->options->linkUrl5):?>
                                <a href="<?php $this->options->linkUrl5();?>" target="_blank"><?php $this->options->linkName5();?></a>
                                <?php else:?>
                                <?php endif;?>
                            </li>
                            <li>
                                <?php if($this->options->linkUrl6):?>
                                <a href="<?php $this->options->linkUrl6();?>" target="_blank"><?php $this->options->linkName6();?></a>
                                <?php else:?>
                                <?php endif;?>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget contactbox">
                        <h4 class="title">联系我们</h4>
                        <div class="contact-us clearfix">
                            <li>
                                <a href="tencent://message/?uin=<?php $this->options->qqNum(); ?>&amp;Site=121ask.com&amp;Meu=yes" target="_blank">
                                    <i class="fa fa-qq"></i>
                                    <?php $this->options->qqNum(); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php $this->options->weiBoUrl(); ?>" target="_blank">
                                    <i class="fa fa-weibo"></i>
                                    <?php $this->options->weiBo(); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php $this->options->qqGroupUrl(); ?>" title="<?php $this->options->qqGroup()?>">
                                    <i class="fa fa-users"></i>
                                    <?php $this->options->qqGroupNum(); ?>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="copyright">
                    <span>Copyright &copy; <?php echo date("Y");?> <a href="<?php $this->options->siteUrl();?>">
                <?php $this->options->copyRight();?>
              </a></span>
              <span class="hidden-xs">
              Theme By <a href="https://www.helingqi.com/" target="_blank" data-original-title="" title="Designed By LuoYe"><?php $this->options->theme();?></a>&nbsp;&nbsp;
              </span>
                    <span class="hidden-xs">
                    <?php if($this->options->beiAn):?>
                      <a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"><?php $this->options->beiAn(); ?></a> 
                    <?else:?>
                    <?endif?>
                    </span>
                    <a href="tencent://message/?uin=<?php $this->options->qqNum(); ?>&Site=121ask.com&Meu=yes" class="kefu pull-right hidden-xs"><i class="fa fa-qq"></i>在线联系我</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- 菜单&侧边栏按钮 -->
<div class="icon-search">
    <i class="fa fa-search"></i>
</div>
<div class="menu mobile-menuicon">
    <i class="fa fa-bars"></i>
</div>
<a class="to-top">
    <span class="topicon"><i class="fa fa-angle-up"></i></span>
    <span class="toptext">Top</span>
</a>
<div class="menubox">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul id="menu-menu-1" class="icon-list">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="<?php $this->options ->siteUrl(); ?>">首页</a></li>
                    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="{permalink}">{title}</a></li>'); ?>
                </ul>
            </div>
        </div>
    </div>
    <a href="javascript:;" class="menu-close">&times;</a>
</div>
<script src="<?php $this->options->themeUrl('js/jquery.toTop.min.js')?>"></script>
<script src="<?php $this->options->themeUrl('js/menu.js')?>"></script>
<script>
$(".to-top").toTop({
    position: false,
    offset: 1e3
});

$(".icon-search").click(function() {
    $(".search-form").css("top", "50%");
    $(".search-form").css("marginTop", "-80px");
    $(".search-form").css("opacity", "1");
});

$(".search-close").click(function() {
    $(".search-form").css("top", "0");
    $(".search-form").css("opacity", "0");
});
</script>
<script src="<?php $this->options->themeUrl('js/instantclick.min.js')?>" data-no-instant></script>
<script data-no-instant>
InstantClick.on('change', function(isInitialLoad) {
    if (isInitialLoad === false) {
        if (typeof Prism !== 'undefined') Prism.highlightAll(true, null);
        if (typeof MathJax !== 'undefined') // support MathJax
            MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
        if (typeof prettyPrint !== 'undefined') // support google code prettify
            prettyPrint();
        if (typeof ga !== 'undefined') // support google analytics
            ga('send', 'pageview', location.pathname + location.search);
        if (typeof DUOSHUO !== 'undefined') //多说
            DUOSHUO.EmbedThread('.ds-thread');

    }
});
InstantClick.init();
</script>

<script data-no-instant>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?601a7c4d502520d99f01fb47483fce72";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</body>
</html>
