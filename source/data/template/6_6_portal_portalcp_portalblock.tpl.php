<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portalcp_portalblock');
0
|| checktplrefresh('./template/default/portal/portalcp_portalblock.htm', './template/default/portal/portalcp_pageblock.htm', 1496222323, '6', './data/template/6_6_portal_portalcp_portalblock.tpl.php', './template/mobanbus_h5cpv1', 'portal/portalcp_portalblock')
|| checktplrefresh('./template/default/portal/portalcp_portalblock.htm', './template/default/portal/portalcp_pageblock.htm', 1496222323, '6', './data/template/6_6_portal_portalcp_portalblock.tpl.php', './template/mobanbus_h5cpv1', 'portal/portalcp_portalblock')
|| checktplrefresh('./template/default/portal/portalcp_portalblock.htm', './template/default/portal/portalcp_nav.htm', 1496222323, '6', './data/template/6_6_portal_portalcp_portalblock.tpl.php', './template/mobanbus_h5cpv1', 'portal/portalcp_portalblock')
;?><?php include template('common/header'); if(!$_G['inajax']) { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<?php if($_G['setting']['portalstatus'] ) { ?><a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php } ?>
<a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>�Ż�����<?php } else { ?>ģ�����<?php } ?></a> <em>&rsaquo;</em>
<?php if($_G['setting']['portalstatus'] ) { ?>ģ�����<?php } ?>
</div>
</div>

<div id="ct" class="ct2_a wp cl">
<div class="mn">
<h1 class="mt">ģ�����</h1>
<div class="bm bw0">
<div id="block_selection">
<?php } if($op=='recommend') { if($_GET['getdata']) { ?><tr>
<td>
<div<?php if($_G['inajax']) { ?> style="width:520px;height:<?php if($hasinblocks) { ?>310px<?php } else { ?>225px<?php } ?>;overflow-x:hidden;overflow-y:auto;"<?php } ?>>
<?php if($hasinblocks) { ?>
<div id="hasinblocks">
<h3 class="ptn pbn">�ѱ����͵���ģ��</h3>
<ul class="xl xl2 mbm cl" id="recommenditem_ul"><?php if(is_array($hasinblocks)) foreach($hasinblocks as $block) { ?><li id="recommenditem_<?php echo $block['dataid'];?>">
<span class="cur1 xi2"<?php if($op=='recommend') { ?> onclick="if($('recommendto')){$('recommendto').value=(this.innerText ? this.innerText : this.textContent);}recommenditem_byblock('<?php echo $block['bid'];?>', '<?php echo $_GET['id'];?>', '<?php echo $_GET['idtype'];?>')"<?php } ?>><?php if(empty($block['name'])) { ?>#<?php echo $block['bid'];?><?php } else { ?><?php echo $block['name'];?><?php } ?></span>
<a href="javascript:;" onclick="delete_recommenditem(<?php echo $block['dataid'];?>, <?php echo $block['bid'];?>);">[ȡ��]</a>
</li>
<?php } ?>
</ul>
<hr class="mtn mbn da" />
</div>
<?php } if(!empty($blocks)) { ?>
<h3 class="ptn pbn">��������ѡ��Ҫ���͵�ģ��</h3>
<ul class="xl xl2 cl"><?php if(is_array($blocks)) foreach($blocks as $block) { ?><li <?php if(!$block['favorite']) { ?>onmouseover="display('bfav_<?php echo $block['bid'];?>');" onmouseout="display('bfav_<?php echo $block['bid'];?>');"<?php } ?>>
<span class="cur1 xi2"<?php if($op=='recommend') { ?> onclick="if($('recommendto')){$('recommendto').value=(this.innerText ? this.innerText : this.textContent);}recommenditem_byblock('<?php echo $block['bid'];?>', '<?php echo $_GET['id'];?>', '<?php echo $_GET['idtype'];?>')"<?php } ?>><?php echo $block['name'];?></span>
<a href="javascript:;" id="bfav_<?php echo $block['bid'];?>" onclick="blockFavorite(<?php echo $block['bid'];?>);"<?php if(!$block['favorite']) { ?> style="visibility:hidden"<?php } ?>><?php if($block['favorite']) { ?><img src="<?php echo IMGDIR;?>/fav.gif" alt="fav" title="ȡ���ղ�" class="favmark" /><?php } else { ?><img src="<?php echo IMGDIR;?>/fav_grey.gif" alt="normal" title="�ղ�" class="favmark" /><?php } ?></a>
</li>
<?php } ?>
</ul>
<?php } else { ?>
<p class="emp">û��Ҫ���͵�ģ��</p>
<?php } ?>
</div>
<?php if($multi) { ?><div class="pgs mtm cl"><?php echo $multi;?></div><?php } ?>
</td>
</tr>
<?php } else { ?>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">����</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="�ر�">�ر�</a></span><?php } ?>
</h3>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form id="recommendform" method="post" enctype="multipart/form-data" action="portal.php?mod=portalcp&amp;ac=block&amp;op=recommend&amp;id=<?php echo $_GET['id'];?>&amp;idtype=<?php echo $_GET['idtype'];?>" onsubmit="if(recommenditem_check()) { ajaxpost('recommendform','return_<?php echo $_GET['handlekey'];?>','return_<?php echo $_GET['handlekey'];?>','onerror');} return false;">
<div class="c">
<p<?php if($_G['inajax']) { ?> style="width:520px;"<?php } ?>>
<?php if($tpls) { ?>
����ҳ��:
<select name="targettplname" id="rtargettplname"class="ps vm" onchange="$('rsearchkey').value='';listblock_bypage('<?php echo $_GET['id'];?>', '<?php echo $_GET['idtype'];?>')">
<option value="">ȫ��ҳ��</option><?php if(is_array($tpls)) foreach($tpls as $tpl => $tplname) { ?><option value="<?php echo $tpl;?>"<?php if($tpl == $_GET['targettplname']) { ?>selected<?php } ?>><?php echo $tplname;?></option>
<?php } ?>
</select>&nbsp;
<?php } ?>
ģ���ʶ:
<input type="text" class="px vm" name="searchkey" id="rsearchkey" value="<?php echo $_GET['searchkey'];?>" />&nbsp;
<button type="button" class="pn vm" onclick="listblock_bypage('<?php echo $_GET['id'];?>', '<?php echo $_GET['idtype'];?>')"><em>����</em></button>
</p>
<input type="hidden" name="recommend_bid" id="recommend_bid" value="" />
<input type="hidden" name="recommend_thread_pid" id="recommend_thread_pid" value="<?php echo $_GET['pid'];?>" />
<table class="tfm">
<tbody id="itemeditarea"><tr>
<td>
<div<?php if($_G['inajax']) { ?> style="width:520px;height:<?php if($hasinblocks) { ?>310px<?php } else { ?>225px<?php } ?>;overflow-x:hidden;overflow-y:auto;"<?php } ?>>
<?php if($hasinblocks) { ?>
<div id="hasinblocks">
<h3 class="ptn pbn">�ѱ����͵���ģ��</h3>
<ul class="xl xl2 mbm cl" id="recommenditem_ul"><?php if(is_array($hasinblocks)) foreach($hasinblocks as $block) { ?><li id="recommenditem_<?php echo $block['dataid'];?>">
<span class="cur1 xi2"<?php if($op=='recommend') { ?> onclick="if($('recommendto')){$('recommendto').value=(this.innerText ? this.innerText : this.textContent);}recommenditem_byblock('<?php echo $block['bid'];?>', '<?php echo $_GET['id'];?>', '<?php echo $_GET['idtype'];?>')"<?php } ?>><?php if(empty($block['name'])) { ?>#<?php echo $block['bid'];?><?php } else { ?><?php echo $block['name'];?><?php } ?></span>
<a href="javascript:;" onclick="delete_recommenditem(<?php echo $block['dataid'];?>, <?php echo $block['bid'];?>);">[ȡ��]</a>
</li>
<?php } ?>
</ul>
<hr class="mtn mbn da" />
</div>
<?php } if(!empty($blocks)) { ?>
<h3 class="ptn pbn">��������ѡ��Ҫ���͵�ģ��</h3>
<ul class="xl xl2 cl"><?php if(is_array($blocks)) foreach($blocks as $block) { ?><li <?php if(!$block['favorite']) { ?>onmouseover="display('bfav_<?php echo $block['bid'];?>');" onmouseout="display('bfav_<?php echo $block['bid'];?>');"<?php } ?>>
<span class="cur1 xi2"<?php if($op=='recommend') { ?> onclick="if($('recommendto')){$('recommendto').value=(this.innerText ? this.innerText : this.textContent);}recommenditem_byblock('<?php echo $block['bid'];?>', '<?php echo $_GET['id'];?>', '<?php echo $_GET['idtype'];?>')"<?php } ?>><?php echo $block['name'];?></span>
<a href="javascript:;" id="bfav_<?php echo $block['bid'];?>" onclick="blockFavorite(<?php echo $block['bid'];?>);"<?php if(!$block['favorite']) { ?> style="visibility:hidden"<?php } ?>><?php if($block['favorite']) { ?><img src="<?php echo IMGDIR;?>/fav.gif" alt="fav" title="ȡ���ղ�" class="favmark" /><?php } else { ?><img src="<?php echo IMGDIR;?>/fav_grey.gif" alt="normal" title="�ղ�" class="favmark" /><?php } ?></a>
</li>
<?php } ?>
</ul>
<?php } else { ?>
<p class="emp">û��Ҫ���͵�ģ��</p>
<?php } ?>
</div>
<?php if($multi) { ?><div class="pgs mtm cl"><?php echo $multi;?></div><?php } ?>
</td>
</tr>
</tbody>
<tbody id="olditemeditarea" style="display:none;"></tbody>
</table>
</div>
<p class="o pns">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="recommendsubmit" value="1" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>">
<?php if(($_GET['idtype'] == 'tid' || $_GET['idtype'] == 'gtid')) { ?>
<input type="hidden" class="px vm" name="recommendto" id="recommendto" value="" />&nbsp;
<label for="showrecommendtip"><input type="checkbox" name="showrecommendtip" id="showrecommendtip" class="pc" fwin="mods" value="1">��ʾ���ͱ�־</label>&nbsp;
<label for="sendreasonpm"><input type="checkbox" name="sendreasonpm" id="sendreasonpm" class="pc"<?php if($_G['group']['reasonpm'] == 2 || $_G['group']['reasonpm'] == 3) { ?> checked="checked" disabled="disabled"<?php } ?> value="1"/>֪ͨ����</label>&nbsp;
<?php } ?>
<button type="submit" class="pn pnc" value="true"><strong>�ύ</strong></button>
</p>
</form>
<script type="text/javascript" reload="1">
function errorhandle_recommenditem(message) {
var editarea = $('itemeditarea');
ajaxinnerhtml(editarea, '<tr><td>&nbsp;</td><td>' + message + '</td></tr>');
}
ajaxupdateevents($('itemeditarea'));
</script>
<?php } } else { ?>
<form action="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=<?php echo $op;?>" method="get" class="mbm">
<input type="hidden" name="mod" value="portalcp" />
<input type="hidden" name="ac" value="portalblock" />
<input type="hidden" name="op" value="<?php echo $op;?>" />
<?php if($tpls) { ?>
����ҳ��:
<select name="targettplname" class="vm" onchange="this.form.submit();">
<option value="">ȫ��ҳ��</option><?php if(is_array($tpls)) foreach($tpls as $tpl => $tplname) { ?><option value="<?php echo $tpl;?>"<?php if($tpl == $_GET['targettplname']) { ?>selected<?php } ?>><?php echo $tplname;?></option>
<?php } ?>
</select>&nbsp;
<?php } ?>
ģ���ʶ:
<input type="text" class="px vm" name="searchkey" id="searchkey" value="<?php echo $_GET['searchkey'];?>" />&nbsp;
<button type="submit" class="pn vm"><em>����</em></button>
</form>

<?php if(!empty($_GET['targettplname'])) { ?>
<p>
����ʾ���������µ�ģ�顣 <a href="portal.php?mod=portalcp&amp;ac=portalblock" class="xi2">��������б�ҳ</a>
</p>
<?php } if($blocks) { if(in_array($op, array('getblocklist', 'verifydata', 'verifieddata'))) { $addurl = $_GET['targettplname'] ? '&targettplname='.$_GET['targettplname'] : '';
$addurl .= $_GET['searchkey'] ? '&searchkey='.$_GET['searchkey'] : '';
$_block = count($blocks) == 1 ? current($blocks) : array();?><ul class="tb cl">
<?php if($_GET['searchkey'] && $_block) { ?>
<li<?php if($op === 'getblocklist') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=getblocklist<?php echo $addurl;?>"><?php echo $_block['name'];?></a></li>
<?php } else { ?>
<li<?php if($op === 'getblocklist') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=getblocklist">ģ���б�</a></li>
<?php } ?>
<li<?php if($op === 'verifydata') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=verifydata<?php echo $addurl;?>">δ�������</a></li>
<li<?php if($op === 'verifieddata') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=verifieddata<?php echo $addurl;?>">���������</a></li>
<?php if($_GET['searchkey'] && $_block) { ?>
<li class="o"><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=getblocklist">����ģ���б�</a></li>
<?php } ?>
</ul>
<form action="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=<?php echo $op;?>" method="post">
<?php } ?>
<table class="dt mtm">
<?php if($initemdata) { if($blockdata) { if($op === 'verifieddata') { ?>
<tr>
<th width="40">ɾ��</th>
<th>��ʾλ��</th>
<th>����</th>
<th>����ҳ��</th>
<th>ģ���ʶ</th>
<th>ͨ�����ʱ��</th>
<th>�Ƿ��ö�</th>
<th width="80">����</th>
</tr><?php if(is_array($blockdata)) foreach($blockdata as $value) { ?><tr>
<td><input type="checkbox" class="pc" name="ids[]" value="<?php echo $value['dataid'];?>" /></td>
<td><input type="hidden" name="olddisplayorder[<?php echo $value['dataid'];?>]" value="<?php echo $value['displayorder'];?>" />
<input type="input" class="px" name="displayorder[<?php echo $value['dataid'];?>]" value="<?php echo $value['displayorder'];?>" size="2" maxlength="4" /></td>
<td><a href="<?php echo $value['url'];?>" target="_blank"><?php echo $value['title'];?></a></td><?php $page = empty($blocks[$value[bid]]['page']) ? 'δʹ��' : implode('<br/>' ,$blocks[$value[bid]]['page']);?><td><?php echo $page;?></td>
<td><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid=<?php echo $value['bid'];?>" target="_blank"><?php echo $blocks[$value['bid']]['name'];?></a></td>
<td><?php echo $value['verifiedtime'];?></td>
<td><?php if($value['stickgrade']) { ?>�ö� <?php echo $value['stickgrade'];?><?php } else { ?>��<?php } ?></td>
<td>
<a href="portal.php?mod=portalcp&amp;ac=block&amp;op=managedata&amp;bid=<?php echo $value['bid'];?>&amp;dataid=<?php echo $value['dataid'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('showblock', this.getAttribute('href'));">�༭</a>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="8">
<label for="chkall" onclick="checkall(this.form, 'ids')"><input type="checkbox" name="chkall" id="chkall" class="pc" />ȫѡ</label>
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="verifieddatasubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" class="pn pnc"><strong>ȷ��</strong></button>
</td>
</tr>
<?php } elseif($op === 'verifydata') { ?>
<tr>
<th width="40">ѡ��</th>
<th>����</th>
<th>����ҳ��</th>
<th>ģ���ʶ</th>
<th>������</th>
<th>����ʱ��</th>
<th width="80">����</th>
</tr><?php if(is_array($blockdata)) foreach($blockdata as $value) { ?><tr>
<td><input type="checkbox" name="ids[]" class="pc" value="<?php echo $value['dataid'];?>" /></td>
<td><a href="<?php echo $value['url'];?>" target="_blank"><?php echo $value['title'];?></a></td><?php $page = empty($blocks[$value[bid]]['page']) ? 'δʹ��' : implode('<br/>' ,$blocks[$value[bid]]['page']);?><td><?php echo $page;?></td>
<td><a href="portal.php?mod=portalcp&amp;ac=block&amp;bid=<?php echo $value['bid'];?>" target="_blank"><?php echo $blocks[$value['bid']]['name'];?></a></td>
<td><a href="home.php?uid=<?php echo $value['uid'];?>" target="_blank"><?php echo $value['username'];?></a></td>
<td><?php echo $value['dateline'];?></td>
<td>
<a href="portal.php?mod=portalcp&amp;ac=block&amp;op=verifydata&amp;bid=<?php echo $value['bid'];?>&amp;dataid=<?php echo $value['dataid'];?>" onclick="showWindow('verifydata', this.href, 'get', 0)" class="xi2">���</a>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="7">
<label for="chkall" onclick="checkall(this.form, 'ids')"><input type="checkbox" name="chkall" id="chkall" class="pc" />ȫѡ</label>
<label for="op_delete"><input id="op_delete" class="pr" value="delete" name="optype" type="radio">ɾ��</label>
<label for="op_pass"><input id="op_pass" class="pr" value="pass" name="optype" type="radio">ͨ��</label>
<input type="hidden" name="verifydatasubmit" value="1" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" value="true" name="trashsubmit" class="pn vm"><em>�ύ</em></button>
[����ͨ������Ժ���Ӧ��ģ�齫������¶���]
</td>
</tr>
<?php } } else { ?>
<tr><td>û���������</td></tr>
<?php } } else { if($blocks) { ?>
<tr>
<th width="50">&nbsp;</th>
<th width="260">ģ���ʶ</th>
<th>ģ�����</th>
<th>������Դ</th>
<th>����ҳ��</th>
<th width="120">����</th>
</tr><?php if(is_array($blocks)) foreach($blocks as $block) { ?><tr>
<?php if($op == 'getblocklist') { ?>
<td><?php if($block['cachetime']) { ?><input type="checkbox" name="bids[]" class="pc" value="<?php echo $block['bid'];?>" /><?php } ?></td><?php $updatetime = $block['cachetime'] ? $block['cachetime'] - (TIMESTAMP - $block['dateline']) : false;?><td title="<?php if($updatetime > 0 ) { ?><?php echo $updatetime;?> ��������¶���<?php } elseif($updatetime !== false ) { ?>�ѽ�����¶���<?php } else { } ?>"<?php if(!$block['favorite']) { ?> onmouseover="display('bfav_<?php echo $block['bid'];?>');" onmouseout="display('bfav_<?php echo $block['bid'];?>');"<?php } ?>><?php echo $block['name'];?> <a href="javascript:;" id="bfav_<?php echo $block['bid'];?>" onclick="blockFavorite(<?php echo $block['bid'];?>);"<?php if(!$block['favorite']) { ?> style="visibility:hidden"<?php } ?>><?php if($block['favorite']) { ?><img src="<?php echo IMGDIR;?>/fav.gif" alt="fav" title="ȡ���ղ�" class="favmark" /><?php } else { ?><img src="<?php echo IMGDIR;?>/fav_grey.gif" alt="normal" title="�ղ�" class="favmark" /><?php } ?></a></td>
<?php } else { ?>
<td<?php if(!$block['favorite']) { ?> onmouseover="display('bfav_<?php echo $block['bid'];?>');" onmouseout="display('bfav_<?php echo $block['bid'];?>');"<?php } ?>><?php echo $block['name'];?> <a href="javascript:;" id="bfav_<?php echo $block['bid'];?>" onclick="blockFavorite(<?php echo $block['bid'];?>);"<?php if(!$block['favorite']) { ?> style="visibility:hidden"<?php } ?>><?php if($block['favorite']) { ?><img src="<?php echo IMGDIR;?>/fav.gif" alt="fav" title="ȡ���ղ�" class="favmark" /><?php } else { ?><img src="<?php echo IMGDIR;?>/fav_grey.gif" alt="normal" title="�ղ�" class="favmark" /><?php } ?></a></td>
<?php } ?>
<td><?php echo $block['blockclassname'];?></td>
<td><?php echo $block['datasrc'];?></td><?php $page = empty($block['page']) ? 'δʹ��' : implode('<br/>' ,$block['page']);?><td><?php echo $page;?></td>
<td>
<?php if($block['perm']['allowproperty']) { ?>
<a href="portal.php?mod=portalcp&amp;ac=block&amp;op=block&amp;bid=<?php echo $block['bid'];?>" target="_blank">����</a>
<?php } else { ?>
&minus;
<?php } if($block['perm']['allowdata']) { ?>
<a href="portal.php?mod=portalcp&amp;ac=block&amp;op=data&amp;bid=<?php echo $block['bid'];?>" target="_blank">����</a>
<?php } else { ?>
&minus;
<?php } if($block['isrecommendable']) { ?>
<a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=verifydata&amp;searchkey=<?php echo $block['bid'];?>">���</a>
<a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=verifieddata&amp;searchkey=<?php echo $block['bid'];?>">���Ϳ�</a>
<?php } else { ?>
&minus;
&minus;
<?php } ?>
</td>
</tr>
<?php } if($op == 'getblocklist') { ?>
<tr>
<td>
<label for="chkall"><input type="checkbox" name="chkall" id="chkall" class="pc" onclick="checkall(this.form, 'bids')" />ȫѡ</label>
</td>
<td colspan="5">
<input type="hidden" name="<?php echo $op;?>submit" value="1" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" value="true" name="submit" class="pn"><em>������¶���</em></button>
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="�Ѿ�������¶��е�ģ�鲢���������£�����ģ�����ڵ�ҳ�汻����ʱ�Ŵ������£������ĵȴ�" />
</td>
</tr>
<?php } } else { ?>
<tr><td>û���������</td></tr>
<?php } } ?>
</table>
<?php if($multi) { ?><div class="pgs mtn cl"><?php echo $multi;?></div><?php } if(in_array($op, array('getblocklist', 'verifydata', 'verifieddata'))) { ?>
</form>
<?php } } else { ?>
<p class="emp">û�пɹ����ģ��</p>
<?php } } if(!$_G['inajax']) { ?>
</div>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda"><?php if($_G['setting']['portalstatus'] ) { ?>�Ż�����<?php } else { ?>ģ�����<?php } ?></h2>
<ul>
<?php if($_G['setting']['portalstatus'] ) { if($admincp2 || $_G['group']['allowmanagearticle']) { ?><li<?php if($ac == 'index') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=index">Ƶ����Ŀ</a></li><?php } if($admincp2 || $admincp3 || $_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle']) { ?><li<?php if($ac == 'category') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=category">���¹���</a></li><?php } } if($admincp4 || $admincp6 || $_G['group']['allowdiy']) { ?>
<li<?php if($ac == 'portalblock' || $ac=='block') { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=portalblock">ģ�����</a></li>
<?php } if(!$_G['inajax'] && !empty($_G['setting']['plugins']['portalcp'])) { if(is_array($_G['setting']['plugins']['portalcp'])) foreach($_G['setting']['plugins']['portalcp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="portal.php?mod=portalcp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } if(!empty($modsession->islogin)) { ?>
<li><a href="portal.php?mod=portalcp&amp;ac=logout">�˳�</a></li>
<?php } ?>
</ul>
</div></div>
</div>
<?php } include template('common/footer'); ?>