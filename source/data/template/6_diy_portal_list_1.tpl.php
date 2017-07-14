<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_1');
block_get('79,75,76,78');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><link rel="stylesheet" type="text/css" href="template/xinglan_d10/common/index.css">

<style id="diy_style" type="text/css"></style>
<div class="wp">

<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <a href="portal.php">&nbsp;&nbsp;首页</a>
<em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?>
<?php echo $cat['catname'];?> 
</div>

</div>
<!--[diy=diyab]--><div id="diyab" class="area"><div id="framesAM4E5" class="frame move-span cl frame-1"><div id="framesAM4E5_left" class="column frame-1-c"><div id="framesAM4E5_left_temp" class="move-span temp"></div><?php block_display('79');?></div></div></div><!--[/diy]-->
</div><?php echo adshow("text/wp a_t");?><div id="ct" class="ct2 wp cl">
<div class="mn"><?php echo adshow("articlelist/mbm hm/1");?><?php echo adshow("articlelist/mbm hm/2");?><div class="bm2">
<div class="tttop">
<div class="bm_h cl">
<?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="portal.php?mod=rss&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 rss" target="_blank" title="RSS">我要订阅</a><?php } if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 addnew">发布文章</a>
<?php } ?>
<h1 class="xs2"><?php echo $cat['catname'];?>列表</h1>
</div>
<?php if($cat['subs']) { ?>
<div class="bm_c bbda">
            <span class="xiajfl">下级分类:</span><?php $i = 1;?><?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { if($i != 1) { ?><span class="pipe">|</span><?php } ?><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="xi2"><?php echo $value['catname'];?></a><?php $i--;?><?php } ?>
</div>
<?php } ?>
</div>

<div class="bm_c xld zxlblb">
            <?php $i = 1;?><?php if(is_array($list['list'])) foreach($list['list'] as $value) { $highlight = article_title_style($value);?><?php $article_url = fetch_article_url($value);?><?php if(isset($_G['cache']['plugin']['will_subnav'])) { $art_comment = get_commentnum($value[aid]);?><?php } else { $art_comment =0;?><?php } ?>
                 
<div class="top_new cl newss_<?php echo $i;?>">
              
<div class="box01 cl">
<?php if($value['pic']) { ?>
<div class="new_pic pic02">
    <a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" class="tn" /></a>
</div>
<?php } ?>	
<div class="rig">


<h2><a href="<?php echo $article_url;?>" target="_blank" class="xi2" <?php echo $highlight;?>><?php echo cutstr($value['title'],70); ?></a> <?php if($value['status'] == 1) { ?>(待审核)<?php } ?> </h2>
                           
<div class="new_weibo">
                             
<span class="xg1 time">发表于：<?php echo $value['dateline'];?></span>&nbsp;&nbsp;&nbsp;
<span class="xg1 zuoz">作者：<?php echo $value['username'];?></span>&nbsp;&nbsp;&nbsp;
<?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $value['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $value['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
<span class="xg1">
<span class="pipe">|</span>
<label><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $value['aid'];?>">编辑</a></label>
<span class="pipe">|</span>
<label><a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $value['aid'];?>" id="article_delete_<?php echo $value['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a></label>
</span>
<?php } ?><!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more">分享到：</span>
<a class="bds_qzone"></a>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="bds_t163"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->								
</div>

<div id="weibo_info01" class="new_body body02 grey64"><?php echo cutstr($value['summary'],180); ?></div>

<a class="zxreadall" href="<?php echo $article_url;?>" target="_blank">+阅读全文</a>

</div>
</div>
</div>
       <?php $i++;?><?php } ?> 
            
            
</div>
<!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]-->
</div><?php echo adshow("articlelist/mbm hm/3");?><?php echo adshow("articlelist/mbm hm/4");?><?php if($list['multi']) { ?><div class="pgs cl"><?php echo $list['multi'];?></div><?php } ?>	

</div>




<div class="sd pph">

<div class="drag">
<!--[diy=diyrighttop]--><div id="diyrighttop" class="area"><div id="framehNf5P5" class="frame move-span cl frame-1"><div id="framehNf5P5_left" class="column frame-1-c"><div id="framehNf5P5_left_temp" class="move-span temp"></div><?php block_display('75');?><?php block_display('76');?><?php block_display('78');?></div></div></div><!--[/diy]-->
</div>

<?php if($cat['others']) { ?>
<div class="bm wd_sd" style="display:none;">
<div class="bm_h cl">
<span class="titletext">相关分类</span>
</div>
<div class="bm_c">
<ul class="xl xl2 cl"><?php if(is_array($cat['others'])) foreach($cat['others'] as $value) { ?><li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>

<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>


<!--[diy=wd_new_t02]--><div id="wd_new_t02" class="area"></div><!--[/diy]-->

<!--[diy=wd_new_t03]--><div id="wd_new_t03" class="area"></div><!--[/diy]-->
    <!--[diy=wd_new_t04]--><div id="wd_new_t04" class="area"></div><!--[/diy]-->


</div>
</div><?php include template('common/footer'); ?>