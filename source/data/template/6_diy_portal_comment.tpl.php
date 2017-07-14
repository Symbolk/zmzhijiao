<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('comment');
0
|| checktplrefresh('./template/default/portal/comment.htm', './template/default/common/seccheck.htm', 1496801555, 'diy', './data/template/6_diy_portal_comment.tpl.php', './template/mobanbus_h5cpv1', 'portal/comment')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em>
查看评论
</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="wp cl">
<div class="mn">
<div class="bm vw">
<div class="h hm">
<h1 class="ph"><a href="<?php echo $url;?>"><?php echo $csubject['title'];?></a></h1>
<p>评论 (<?php echo $csubject['commentnum'];?>)<?php if($csubject['allowcomment'] == 1) { ?><span class="pipe">|</span><a href="javascript:;" onclick="location.href=location.href.replace(/(\#.*)/, '')+'#message';$('message').focus();return false;" class="xi2 xw1">发表评论</a><?php } ?></p>
</div>
<div class="bm_c"><?php if(is_array($commentlist)) foreach($commentlist as $comment) { include template('portal/comment_li'); } if($pricount) { ?>
<p class="mbn mtn y">提示：本页有 <?php echo $pricount;?> 个评论因未通过审核而被隐藏</p>
<?php } ?>
<div class="pgs cl mtm mbm"><?php echo $multi;?></div>
<?php if($csubject['allowcomment'] == 1) { ?>
<form id="cform" name="cform" action="portal.php?mod=portalcp&amp;ac=comment" method="post" autocomplete="off">
<div class="tedt">
<div class="area">
<textarea name="message" cols="60" rows="3" class="pt" id="message"></textarea>
</div>
</div>
<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } if($idtype == 'topicid' ) { ?>
<input type="hidden" name="topicid" value="<?php echo $id;?>">
<?php } else { ?>
<input type="hidden" name="aid" value="<?php echo $id;?>">
<?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<p class="ptn"><button type="submit" name="commentsubmit" value="true" class="pn"><strong>评论</strong></button></p>
</form>
<?php } ?>
</div>
</div>
</div>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>