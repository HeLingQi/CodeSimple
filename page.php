<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="articleDetail container">
    <div class="row">
        <div class="col-md-12">
            <div class="articleContent">
                <!-- 标题 -->
                <div class="title"><?php $this->title();?></div>
                <!-- 内容 -->
                <div class="articleCon post_content">
                    <?php $this->content();?>
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