<?php
/**
 * 一款基于bootstrap3的简洁大气的响应式单栏博客主题
 * 
 * @package CodeSimple
 * @author victoryss
 * @version 1.2
 * @link https://www.helingqi.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<!--文章列表-->
  <div class="articleList container">
    <div class="row">
      <div class="col-md-12">
       <?php if($this->have()):?>
        <?php while($this->next()): ?>
      <!--single article-->
        <div class="article">
          <div class="articleHeader">
            <h1 class="articleTitle"><a href="<?php $this->permalink();?>"><?php $this->title();?></a></h1>
          </div>
          <div class="articleBody clearfix">
            <!--缩略图-->
            <div class="articleThumb">
            <a href="<?php $this->permalink();?>">
              <?php if(isset($this->fields->thumb)): ?>
                            <img class="thumb-square" src="<?php echo $this->fields->thumb;?>" alt="<?php $this->title();?>" />
                        <?php else : ?>
                          <?php $thumb = thumbimg($this,true); if(!empty($thumb)):?>
                            <img class="thumb-square" src="<?php echo $thumb;?>" alt="<?php $this->title();?>" />
                          <?php else :?>
                            <img src="<?php echo thumbimg2($this->cid); ?>" alt="<?php $this->title();?>" />
                          <?php endif;?>
                <?php endif;?>
            </a>
            </div>
            <!--摘要-->
            <div class="articleFeed">
                <p>
                <?php $this->excerpt(140 ,'...')?></p>
            </div>
            <!--tags-->
            <div class="articleTags">
              <ul>
                <?php $this->tags(' ', true, 'none'); ?>
              </ul>
            </div>
          </div>
          <div class="articleFooter clearfix">
            <ul class="articleStatu">
              <li><i class="fa fa-calendar"></i> <?php $this->date('y-m-d'); ?></li>
              <li><i class="fa fa-eye"></i><?php get_post_view($this); ?>次浏览</li>
              <li><a href=""><i class="fa fa-folder-o"></i><?php $this->category();?></a></li>
            </ul>
            <a href="<?php $this->permalink();?>" class="btn btn-readmore btn-info btn-md">阅读更多</a>
          </div>
        </div>
        <!--single article-->
        <?php endwhile;?>
      <?php endif;?>
      </div>
    </div>
  </div>
  <div class="container pageNav">
    <div class="row"> 
      <div class="col-md-12">
        <nav>
          <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        </nav>
      </div>
    </div>
  </div>
<?php $this->need('footer.php'); ?>
