<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<a name="comment_anchor_<?php echo $comment['cid'];?>"></a>
<dl id="comment_<?php echo $comment['cid'];?>_li" class="ptm pbm bbda cl">
<dt class="mbm">
<span class="y xw0 xi2">
<?php if(!isset($_G['makehtml'])) { ?><a href="javascript:;" onclick="portal_comment_requote(<?php echo $comment['cid'];?>, '<?php echo $article['aid'];?>');">引用</a> <?php } if(($_G['group']['allowmanagearticle'] || $_G['uid'] == $comment['uid']) && $_G['groupid'] != 7 && !$article['idtype']) { ?>
<a href="portal.php?mod=portalcp&amp;ac=comment&amp;op=edit&amp;cid=<?php echo $comment['cid'];?>" id="c_<?php echo $comment['cid'];?>_edit" onclick="showWindow(this.id, this.href, 'get', 0);">编辑</a>
<a href="portal.php?mod=portalcp&amp;ac=comment&amp;op=delete&amp;cid=<?php echo $comment['cid'];?>" id="c_<?php echo $comment['cid'];?>_delete" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
<?php } ?>
</span>
<?php if(!empty($comment['uid'])) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $comment['uid'];?>" class="xi2 xw1" c="1"><?php echo $comment['username'];?></a>
<?php } else { ?>
游客
<?php } ?>
<span class="xg1 xw0"><?php echo dgmdate($comment[dateline]);?></span>
<?php if($comment['status'] == 1) { ?><b>(待审核)</b><?php } ?>
</dt>
<dd><?php if($_G['adminid'] == 1 || $comment['uid'] == $_G['uid'] || $comment['status'] != 1) { ?><?php echo $comment['message'];?><?php } else { ?> 审核未通过<?php } ?></dd>
</dl>