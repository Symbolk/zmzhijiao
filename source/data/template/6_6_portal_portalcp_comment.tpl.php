<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portalcp_comment');?><?php include template('common/header'); if($_GET['op'] == 'requote') { ?>
[quote]<?php echo $comment['username'];?>: <?php echo $comment['message'];?>[/quote]

<?php } elseif($_GET['op'] == 'edit') { ?>

<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">编辑</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form id="editcommentform_<?php echo $cid;?>" name="editcommentform_<?php echo $cid;?>" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=comment&amp;op=edit&amp;cid=<?php echo $cid;?><?php if($_GET['modarticlecommentkey']) { ?>&amp;modarticlecommentkey=<?php echo $_GET['modarticlecommentkey'];?><?php } ?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="editsubmit" value="true" />
<?php if($_G['inajax']) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c">
<p>
<label for="message">编辑内容: </label>
</p>
<textarea id="message_<?php echo $cid;?>" name="message" cols="70" onkeydown="ctrlEnter(event, 'editsubmit_btn');" rows="8" class="pt"><?php echo $comment['message'];?></textarea>
</div>
<p class="o pns">
<button type="submit" name="editsubmit_btn" id="editsubmit_btn" value="true" class="pn pnc"><strong>提交</strong></button>
</p>
</form>

<?php } elseif($_GET['op'] == 'delete') { ?>

<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">删除回复</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form id="deletecommentform_<?php echo $cid;?>" name="deletecommentform_<?php echo $cid;?>" method="post" autocomplete="off" action="portal.php?mod=portalcp&amp;ac=comment&amp;op=delete&amp;cid=<?php echo $cid;?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="deletesubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<?php if($_G['inajax']) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<div class="c">确定删除指定的回复吗？</div>
<p class="o pns">
<button type="submit" name="deletesubmitbtn" value="true" class="pn pnc"><strong>确定</strong></button>
</p>
</form>

<?php } include template('common/footer'); ?>