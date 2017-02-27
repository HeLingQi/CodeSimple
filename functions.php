<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    //logo
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('网站LOGO'), _t('在这里填入一个图片 URL 地址, 作为网站LOGO'));
    $form->addInput($logoUrl);
    //favicon
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('网站favicon'), _t('在这里填入一个图片 URL 地址, 作为网站favicon'));
    $form->addInput($faviconUrl);
    //顶部banner
    
    $bannerUrl = new Typecho_Widget_Helper_Form_Element_Text('bannerUrl', NULL, NULL, _t('网站banner图片'), _t('在这里填入一个图片 URL 地址, 作为网站banner'));
    $form->addInput($bannerUrl);
    //header h1

    $headerTxt = new Typecho_Widget_Helper_Form_Element_Text('headerTxt', NULL, NULL, _t('首页顶部文字'), _t('首页顶部文字 h1'));
    $form->addInput($headerTxt);
    //header h3

    $headerTxt3 = new Typecho_Widget_Helper_Form_Element_Text('headerTxt3', NULL, NULL, _t('首页顶部文字 h3'), _t('首页顶部文字 h3'));
    $form->addInput($headerTxt3);
    // //QQ

    $qqNum = new Typecho_Widget_Helper_Form_Element_Text('qqNum', NULL, NULL, _t('QQ号码'), _t('输入你的QQ号码'));
    $form->addInput($qqNum);

    //微博
    $weiBo = new Typecho_Widget_Helper_Form_Element_Text('weiBo', NULL, NULL, _t('微博用户名'), _t('输入你的微博昵称'));
    $form->addInput($weiBo);

    $weiBoUrl = new Typecho_Widget_Helper_Form_Element_Text('weiBoUrl', NULL, NULL, _t('微博地址'), _t('输入你的微博地址'));
    $form->addInput($weiBoUrl);

    //QQ群
     $qqGroup = new Typecho_Widget_Helper_Form_Element_Text('qqGroup', NULL, NULL, _t('QQ群名称'), _t('输入你的QQ群名称'));
     $form->addInput($qqGroup);

     $qqGroupNum = new Typecho_Widget_Helper_Form_Element_Text('qqGroupNum', NULL, NULL, _t('QQ群号码'), _t('输入你的QQ群号码'));
     $form->addInput($qqGroupNum);

     $qqGroupUrl = new Typecho_Widget_Helper_Form_Element_Text('qqGroupUrl', NULL, NULL, _t('QQ群地址'), _t('输入你的加群链接'));
     $form->addInput($qqGroupUrl);
    //友情链接1
    $linkName1 = new Typecho_Widget_Helper_Form_Element_Text('linkName1', NULL, NULL, _t('友情链接1'), _t('站点名称'));
    $form->addInput($linkName1);

    $linkUrl1 = new Typecho_Widget_Helper_Form_Element_Text('linkUrl1', NULL, NULL, _t(' '), _t('站点地址1'));
    $form->addInput($linkUrl1);
    //友情链接2

    $linkName2 = new Typecho_Widget_Helper_Form_Element_Text('linkName2', NULL, NULL, _t('友情链接2'), _t('站点名称'));
    $form->addInput($linkName2);

    $linkUrl2 = new Typecho_Widget_Helper_Form_Element_Text('linkUrl2', NULL, NULL, _t(' '), _t('站点地址2'));
    $form->addInput($linkUrl2);
    //友情链接3

    $linkName3 = new Typecho_Widget_Helper_Form_Element_Text('linkName3', NULL, NULL, _t('友情链接3'), _t('站点名称'));
    $form->addInput($linkName3);

    $linkUrl3 = new Typecho_Widget_Helper_Form_Element_Text('linkUrl3', NULL, NULL, _t(' '), _t('站点地址3'));
    $form->addInput($linkUrl3);
    //友情链接4

    $linkName4 = new Typecho_Widget_Helper_Form_Element_Text('linkName4', NULL, NULL, _t('友情链接4'), _t('站点名称'));
    $form->addInput($linkName4);

    $linkUrl4 = new Typecho_Widget_Helper_Form_Element_Text('linkUrl4', NULL, NULL, _t(' '), _t('站点地址4'));
    $form->addInput($linkUrl4);
    //友情链接5
    $linkName5 = new Typecho_Widget_Helper_Form_Element_Text('linkName5', NULL, NULL, _t('友情链接5'), _t('站点名称'));
    $form->addInput($linkName5);

    $linkUrl5 = new Typecho_Widget_Helper_Form_Element_Text('linkUrl5', NULL, NULL, _t(' '), _t('站点地址5'));
    $form->addInput($linkUrl5);

    //友情链接6

    $linkName6 = new Typecho_Widget_Helper_Form_Element_Text('linkName6', NULL, NULL, _t('友情链接6'), _t('站点名称'));
    $form->addInput($linkName6);

    $linkUrl6 = new Typecho_Widget_Helper_Form_Element_Text('linkUrl6', NULL, NULL, _t(' '), _t('站点地址6'));
    $form->addInput($linkUrl6);
    //版权信息
    $copyRight  = new Typecho_Widget_Helper_Form_Element_Text('copyRight', NULL, NULL, _t('版权信息'), _t('版权信息'));
    $form->addInput($copyRight);

    //备案号
    $beiAn  = new Typecho_Widget_Helper_Form_Element_Text('beiAn', NULL, NULL, _t('备案号'), _t('备案号'));
    $form->addInput($beiAn);
}

/*文章阅读次数统计*/
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}
/*文章缩略图*/
function thumbimg($obj,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');
    $attach = $obj->attachments(1)->attachment;
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
    }
    if($link){
        return $thumb;
    }
}
/*随机缩略图*/ 
function thumbimg2($cid) {
        if (empty($imgurl)) {
            $rand_num = 220; //随机图片数量
            if ($rand_num == 0) {
                $imgurl = "https://m.helingqi.com/thumb/0.jpg";            
            } else {
                $imgurl = "https://m.helingqi.com/thumb/" . rand(1, $rand_num) . ".jpg";            
            }
        }
        if (empty($img)) {
            echo $imgurl;
        }
         else {
            echo 'https://m.helingqi.com/thumb/0.jpg';
        }
}
?>