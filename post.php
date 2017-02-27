<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="articleDetail container">
    <div class="row">
        <div class="col-md-12">
            <div class="articleContent">
                <!-- 标题 -->
                <div class="title"><?php $this->title();?></div>
                <!-- 访问量 ...-->
                <div class="secTitleBar">
                    <ul>
                        <li>分类：<?php $this->category();?></li>
                        <li>发表：<?php $this->date('Y-m-d'); ?></li>
                        <li>围观：<?php get_post_view($this) ?> 次</li>
                        <li><a href="#comments">评论：<?php $this->commentsNum('%d'); ?></a>条</li>
                    </ul>
                </div>
                <!-- 内容 -->
                <div class="articleCon post_content">
                    <?php $this->content();?>
                </div>
                <!-- 标签 -->
                <div class="articleTagsBox">
                    <ul><span>标签：</span><?php $this->tags(' ', true, 'none'); ?></ul>
                </div>
                <!-- 评论 -->
                <div class="post_content">
                    <?php $this->need('comments.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>