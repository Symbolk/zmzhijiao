<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($select_form) { ?>
<p class="tbmu">
����
<select id="mySelect" onchange="select_form()">
  <option value="uid" <?php echo $order_selected['uid'];?>>��ע��ʱ��</option>
  <option value="posts" <?php echo $order_selected['posts'];?>>����������</option>
  <option value="blogs" <?php echo $order_selected['blogs'];?>>����־����</option>
  <option value="credits" <?php echo $order_selected['credits'];?>>����������</option>
</select>
<script type="text/javascript">
function select_form() {
x = $('mySelect');
y = x.options[x.options.selectedIndex].value;
location.href = location.href.replace(/\&select.*/, '') +  '&select=' + y;
}
</script>
</p>
<?php } if($postsrank_change) { ?>
<p id="orderby" class="tbmu">
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=post&amp;orderby=posts" id="posts"<?php if($now_choose == 'posts') { ?> class="a"<?php } ?>>������</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=post&amp;orderby=digestposts" id="digestposts"<?php if($now_choose == 'digestposts') { ?> class="a"<?php } ?>>������</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=post&amp;orderby=thismonth" id="thismonth"<?php if($now_choose == 'thismonth') { ?> class="a"<?php } ?>>���30�췢����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=post&amp;orderby=today" id="today"<?php if($now_choose == 'today') { ?> class="a"<?php } ?>>���24Сʱ������</a>
</p>
<?php } if($inviterank_change) { ?>
<p id="orderby" class="tbmu">
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=invite&amp;orderby=thisweek" id="thisweek"<?php if($now_choose == 'thisweek') { ?> class="a"<?php } ?>>����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=invite&amp;orderby=thismonth" id="thismonth"<?php if($now_choose == 'thismonth') { ?> class="a"<?php } ?>>����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=invite&amp;orderby=today" id="today"<?php if($now_choose == 'today') { ?> class="a"<?php } ?>>����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=invite&amp;orderby=all" id="all"<?php if($now_choose == 'all') { ?> class="a"<?php } ?>>ȫ��</a>
</p>
<?php } if($onlinetimerank_change) { ?>
<p id="orderby" class="tbmu">
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=onlinetime&amp;orderby=thismonth" id="thismonth"<?php if($now_choose == 'thismonth') { ?> class="a"<?php } ?>>����</a><span class="pipe">|</span>
<a href="misc.php?mod=ranklist&amp;type=member&amp;view=onlinetime&amp;orderby=all" id="all"<?php if($now_choose == 'all') { ?> class="a"<?php } ?>>ȫ��</a>
</p>
<?php } if($list) { ?>
<div class="xld xlda hasrank"><?php if(is_array($list)) foreach($list as $key => $value) { ?><dl class="bbda cl">
<dd class="ranknum"><?php if($value['rank'] <= 3) { ?><img src="<?php echo IMGDIR;?>/rank_<?php echo $value['rank'];?>.gif" alt="<?php echo $value['rank'];?>" /><?php } else { ?><?php echo $value['rank'];?><?php } ?></dd>
<dd class="m avt"><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" target="_blank" c="1"><?php echo avatar($value[uid],small);?></a></dd>
<dt class="y">
<p class="xw0"><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" target="_blank">ȥ������</a></p>
<p class="xw0"><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $value['uid'];?>" id="a_poke_<?php echo $key;?>" onclick="showWindow(this.id, this.href, 'get', 0);" title="����к�">����к�</a></p>
<p class="xw0"><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $value['uid'];?>&amp;touid=<?php echo $value['uid'];?>&amp;pmid=0&amp;daterange=2" id="a_sendpm_<?php echo $key;?>" onclick="showWindow('showMsgBox', this.href, 'get', 0)">������Ϣ</a></p>
<?php if(isset($value['isfriend']) && !$value['isfriend']) { ?><p class="xw0"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $value['uid'];?>" id="a_friend_<?php echo $key;?>" onclick="showWindow('friend_<?php echo $key;?>', this.href, 'get', 0)" title="��Ϊ����">��Ϊ����</a></p><?php } ?>
</dt>
<dt>
<a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>" target="_blank"<?php g_color($value[groupid]);?>><?php echo $value['username'];?></a>
<?php if($ols[$value['uid']]) { ?><img src="<?php echo IMGDIR;?>/ol.gif" alt="online" title="����" class="vm" /> <?php } ?>
</dt>
<dd>
<p>
<?php echo $_G['cache']['usergroups'][$value['groupid']]['grouptitle'];?> <?php g_icon($value[groupid]);?><?php if($value['credits']) { ?>������: <?php echo $value['credits'];?><?php } if($value['extcredits']) { ?><?php echo $extcredits[$now_choose]['title'];?>: <?php echo $value['extcredits'];?> <?php echo $extcredits[$now_choose]['unit'];?><?php } if($value['invitenum']) { ?>������: <a href="home.php?mod=spacecp&amp;ac=invite" target="_blank"><?php echo $value['invitenum'];?></a><?php } if($value['posts']) { ?>������: <a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=thread&amp;view=me&amp;from=space" target="_blank"><?php echo $value['posts'];?></a><?php } if($value['blogs']) { ?>��־��: <a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;view=me&amp;from=space" target="_blank"><?php echo $value['blogs'];?></a><?php } if($value['views']) { ?>����: <?php echo $value['views'];?><?php } if($value['onlinetime']) { ?>����ʱ��: <?php echo $value['onlinetime'];?> ����<?php } ?>
</p>

<?php if($value['friends']) { ?><p>������: <?php echo $value['friends'];?></p><?php } if($value['lastactivity']) { ?><p>����Ծ: <?php echo $value['lastactivity'];?></p><?php } if($value['unitprice']) { ?><p>���۵���: <span id="<?php if($value['uid'] == $_G['uid']) { ?>show_unitprice<?php } ?>"><?php echo $value['unitprice'];?></span><?php if($value['uid'] == $_G['uid']) { ?>&nbsp;<a href="home.php?mod=spacecp&amp;ac=common&amp;op=modifyunitprice" id="a_modify_unitprice" onclick="showWindow(this.id, this.href, 'get', 0);">(�޸�)</a><?php } ?></p><?php } if($value['show_credit']) { ?><p>ʣ�ྺ��<?php echo $extcredits[$creditid]['title'];?>: <?php echo $value['show_credit'];?> <?php echo $extcredits[$creditid]['unit'];?></p><?php } if($value['show_note']) { ?><p>��������: <?php echo $value['show_note'];?></p><?php } ?>
</dd>
</dl>
<?php } if($multi) { ?><div class="pgs cl mtm"><?php echo $multi;?></div><?php } ?>
</div>
<?php } else { ?>
<div class="emp">û����س�Ա��</div>
<?php } if($cachetip) { ?><div class="notice">���а������ѱ����棬�ϴ��� <?php echo $lastupdate;?> �����£��´ν��� <?php echo $nextupdate;?> ���и���</div><?php } ?>