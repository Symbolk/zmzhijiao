<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('group');
0
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/mobanbus_h5cpv1/group/group_index.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/mobanbus_h5cpv1/group/group_list.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/mobanbus_h5cpv1/group/group_memberlist.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/mobanbus_h5cpv1/group/group_create.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/mobanbus_h5cpv1/group/group_invite.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/mobanbus_h5cpv1/group/group_manage.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/mobanbus_h5cpv1/group/group_right.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/default/common/seccheck.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/default/common/seditor.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
|| checktplrefresh('./template/mobanbus_h5cpv1/group/group.htm', './template/default/common/seditor.htm', 1496227086, 'diy', './data/template/6_diy_group_group.tpl.php', './template/mobanbus_h5cpv1', 'group/group')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em><a href="group.php"><?php echo $_G['setting']['navs']['3']['navname'];?></a><?php if($groupnav) { ?><?php echo $groupnav;?><?php } elseif($action == 'create') { ?><em>&rsaquo;</em>����<?php echo $_G['setting']['navs']['3']['navname'];?><?php } ?>
</div>
</div><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2 wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<?php if($action != 'create') { if($_G['forum']['banner']) { ?>
<div id="gh">
<img src="<?php echo $_G['forum']['banner'];?>" alt="" />
<div class="bm bmw bw0">
<div class="bm_h bw0 cl">
<h1 class="xs2"><?php echo $_G['forum']['name'];?></h1>
</div>
<div class="bm_c">
<?php if($_G['forum']['description']) { ?><div class="pbn"><?php echo $_G['forum']['description'];?></div><?php } ?>
<div>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=group&amp;id=<?php echo $_G['forum']['fid'];?>&amp;handlekey=sharealbumhk_<?php echo $_G['forum']['fid'];?>&amp;formhash=<?php echo FORMHASH;?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" title="�ղ�" class="fa_fav">�ղ�</a><span class="pipe">|</span><?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="forum.php?mod=rss&amp;fid=<?php echo $_G['fid'];?>&amp;auth=<?php echo $rssauth;?>" target="_blank" title="RSS" class="fa_rss">RSS</a><?php } if($status == 'isgroupuser' && helper_access::check_module('group')) { ?><span class="pipe">|</span><a href="javascript:;" onclick="showWindow('invite','misc.php?mod=invite&action=group&id=<?php echo $_G['fid'];?>')" class="fa_ivt"><strong class="xi2">�������</strong></a><?php } ?>
<span class="pipe">|</span><?php if($_G['current_grouplevel']['icon']) { ?><img src="<?php echo $_G['current_grouplevel']['icon'];?>" title="<?php echo $_G['setting']['navs']['3']['navname'];?>�ȼ�: <?php echo $_G['current_grouplevel']['leveltitle'];?>" class="vm"> <?php } ?>����: <?php echo $_G['forum']['commoncredits'];?><span class="pipe">|</span>Ⱥ��: <?php $i = 1;?><?php if(is_array($groupmanagers)) foreach($groupmanagers as $manage) { if($i <= 0) { ?>, <?php } $i--;?><a href="home.php?mod=space&amp;uid=<?php echo $manage['uid'];?>" target="_blank" class="xi2"><?php echo $manage['username'];?></a><?php } ?>
</div>
<?php if($status != 2 && $status != 3 && $status != 5) { if(helper_access::check_module('group') && $status != 'isgroupuser') { ?>
<div class="ptm pbn">
<button type="button" class="pn" onclick="location.href='forum.php?mod=group&action=join&fid=<?php echo $_G['fid'];?>'"><em>����<?php echo $_G['setting']['navs']['3']['navname'];?></em></button>
</div>
<?php } if(CURMODULE == 'group') { ?><?php if(!empty($_G['setting']['pluginhooks']['group_navlink'])) echo $_G['setting']['pluginhooks']['group_navlink'];?><?php } else { ?><?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_navlink'])) echo $_G['setting']['pluginhooks']['forumdisplay_navlink'];?><?php } } if($action == 'index' && ($status == 2 || $status == 3 || $status == 5)) { ?>
<p class="mtm">
���뷽ʽ:
<?php if($_G['forum']['jointype'] == 1) { ?>
<strong>�������</strong>
<?php } elseif($_G['forum']['jointype'] == 2) { ?>
<strong>��˼���</strong>
<?php } else { ?>
<strong>���ɼ���</strong>
<?php } ?>
���Ȩ��: <strong><?php if($_G['forum']['gviewperm'] == 0) { ?>����Ա<?php } else { ?>������<?php } ?></strong>
</p>
<p class="mtm xi1">
<?php if($status == 3 || $status == 5) { ?>
�Ѽ����<?php echo $_G['setting']['navs']['3']['navname'];?>���ȴ�Ⱥ�������...
<?php } elseif(helper_access::check_module('group')) { ?>
<button type="button" class="pn" onclick="location.href='forum.php?mod=group&action=join&fid=<?php echo $_G['fid'];?>'"><em>����<?php echo $_G['setting']['navs']['3']['navname'];?></em></button>
<?php } ?>
</p>
<?php } ?>
</div>
</div>
</div>
<?php } else { ?>
<div class="bm">
<div class="bm_c xld xlda cl">
<dl>
<dd class="m"><img src="<?php echo $_G['forum']['icon'];?>" alt="<?php echo $_G['forum']['name'];?>" width="48" height="48" /></dd>
<dt><?php echo $_G['forum']['name'];?></dt>
<?php if($_G['forum']['description']) { ?><dd><?php echo $_G['forum']['description'];?></dd><?php } ?>
<dd class="cl">
<span class="y"><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=group&amp;id=<?php echo $_G['forum']['fid'];?>&amp;handlekey=sharealbumhk_<?php echo $_G['forum']['fid'];?>&amp;formhash=<?php echo FORMHASH;?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" title="�ղ�" class="fa_fav">�ղ�</a><span class="pipe">|</span><?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="forum.php?mod=rss&amp;fid=<?php echo $_G['fid'];?>&amp;auth=<?php echo $rssauth;?>" target="_blank" title="RSS" class="fa_rss">RSS</a><?php } if($status == 'isgroupuser' && helper_access::check_module('group')) { ?><span class="pipe">|</span><a href="javascript:;" onclick="showWindow('invite','misc.php?mod=invite&action=group&id=<?php echo $_G['fid'];?>')" class="fa_ivt"><strong class="xi2">�������</strong></a><?php } ?></span>
<?php if($_G['current_grouplevel']['icon']) { ?><img src="<?php echo $_G['current_grouplevel']['icon'];?>" title="<?php echo $_G['setting']['navs']['3']['navname'];?>�ȼ�: <?php echo $_G['current_grouplevel']['leveltitle'];?>" class="vm"> <?php } ?>����: <?php echo $_G['forum']['commoncredits'];?><span class="pipe">|</span>Ⱥ��: <?php $i = 1;?><?php if(is_array($groupmanagers)) foreach($groupmanagers as $manage) { if($i <= 0) { ?>, <?php } $i--;?><a href="home.php?mod=space&amp;uid=<?php echo $manage['uid'];?>" target="_blank" class="xi2"><?php echo $manage['username'];?></a> <?php } ?>
</dd>
<?php if($action == 'index' && ($status == 2 || $status == 3 || $status == 5)) { ?>
<dd>
���뷽ʽ:
<?php if($_G['forum']['jointype'] == 1) { ?>
<strong>�������</strong>
<?php } elseif($_G['forum']['jointype'] == 2) { ?>
<strong>��˼���</strong>
<?php } else { ?>
<strong>���ɼ���</strong>
<?php } ?>
���Ȩ��: <strong><?php if($_G['forum']['gviewperm'] == 0) { ?>����Ա<?php } else { ?>������<?php } ?></strong>
</dd>
<dd class="xi1">
<?php if($status == 3 || $status == 5) { ?>
�Ѽ����<?php echo $_G['setting']['navs']['3']['navname'];?>���ȴ�Ⱥ�������...
<?php } elseif(helper_access::check_module('group')) { ?>
<button type="button" class="pn" onclick="location.href='forum.php?mod=group&action=join&fid=<?php echo $_G['fid'];?>'"><em>����<?php echo $_G['setting']['navs']['3']['navname'];?></em></button>
<?php } ?>
</dd>
<?php } ?>
</dl>
<?php if($status != 2 && $status != 3 && $status != 5) { if(helper_access::check_module('group') && $status != 'isgroupuser') { ?>
<div class="ptm pbm">
<button type="button" class="pn" onclick="location.href='forum.php?mod=group&action=join&fid=<?php echo $_G['fid'];?>'"><em>����<?php echo $_G['setting']['navs']['3']['navname'];?></em></button>
</div>
<?php } if(CURMODULE == 'group') { ?><?php if(!empty($_G['setting']['pluginhooks']['group_navlink'])) echo $_G['setting']['pluginhooks']['group_navlink'];?><?php } else { ?><?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_navlink'])) echo $_G['setting']['pluginhooks']['forumdisplay_navlink'];?><?php } } ?>
</div>
</div>
<?php } ?>
<!--[diy=diycontentmiddle]--><div id="diycontentmiddle" class="area"></div><!--[/diy]-->
<?php if(CURMODULE == 'group') { ?><?php if(!empty($_G['setting']['pluginhooks']['group_top'])) echo $_G['setting']['pluginhooks']['group_top'];?><?php } else { ?><?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_top'];?><?php } if($status != 2 && $status != 3) { ?>
<div class="tb cl<?php if($action != 'manage') { ?> mbm<?php } ?>">
<?php if(in_array($_G['adminid'], array(1,2))) { ?><span class="a bw0_all y xi2"><a href="javascript:;" onclick="showWindow('grecommend<?php echo $_G['fid'];?>', 'forum.php?mod=group&action=recommend&fid=<?php echo $_G['fid'];?>');return false;">�Ƽ������</a></span><?php } ?>
<ul id="groupnav">
<li <?php if($action == 'index') { ?>class="a"<?php } ?>><a href="forum.php?mod=group&amp;fid=<?php echo $_G['fid'];?>#groupnav" title="">��ҳ</a></li>
<li <?php if($action == 'list') { ?>class="a"<?php } ?>><a href="forum.php?mod=forumdisplay&amp;action=list&amp;fid=<?php echo $_G['fid'];?>#groupnav" title="">������</a></li>
<li <?php if($action == 'memberlist' || $action == 'invite') { ?>class="a"<?php } ?>><a href="forum.php?mod=group&amp;action=memberlist&amp;fid=<?php echo $_G['fid'];?>#groupnav" title="">��Ա�б�</a></li>
<?php if($_G['forum']['ismoderator']) { ?><li <?php if($action == 'manage') { ?>class="a"<?php } ?>><a href="forum.php?mod=group&amp;action=manage&amp;fid=<?php echo $_G['fid'];?>#groupnav">����<?php echo $_G['setting']['navs']['3']['navname'];?></a></li><?php } if(CURMODULE == 'group') { ?><?php if(!empty($_G['setting']['pluginhooks']['group_nav_extra'])) echo $_G['setting']['pluginhooks']['group_nav_extra'];?><?php } else { ?><?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_nav_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_nav_extra'];?><?php } ?>
</ul>
</div>
<?php } } if($action == 'index' && $status != 2 && $status != 3) { if($status != 2) { if($livethread) { ?>
<div id="livethread" class="tl bm bmw cl" style="padding:10px 15px;">
<div class="livethreadtitle vm">
<span class="replynumber xg1">�ظ� <span id="livereplies" class="xi1"><?php echo $livethread['replies'];?></span></span>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $livethread['tid'];?>" target="_blank"><?php echo $livethread['subject'];?></a> <img src="<?php echo IMGDIR;?>/livethreadtitle.png" />
</div>
<div class="livethreadcon"><?php echo $livemessage;?></div>
<div id="livereplycontentout">
<div id="livereplycontent">
</div>
</div>
<div id="liverefresh">���µķ����ˣ����ˢ��</div>
<div id="livefastreply">
<form id="livereplypostform" method="post" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $livethread['tid'];?>&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=livereplypost&amp;inajax=1" onsubmit="return livereplypostvalidate(this)">
<div id="livefastcomment">
<textarea id="livereplymessage" name="message" style="color:gray;<?php if(!$liveallowpostreply) { ?>display:none;<?php } ?>">#��������ٻظ�#</textarea>
<?php if(!$liveallowpostreply) { ?>
<div>
<?php if(!$_G['uid']) { ?>
����Ҫ��¼��ſ��Ի��� <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">��¼</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a>
<?php } else { ?>
��������Ȩ������<a href="javascript:;" onclick="ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));" class="xi2">����鿴ԭ��</a>
<?php } ?>
</div>
<?php } ?>
</div>
<div id="livepostsubmit" style="display:none;">
<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm sec" style="text-align:right;"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } ?>
<p class="ptm pnpost" style="margin-bottom:10px;">
<button type="submit" name="replysubmit" class="pn pnc vm" style="float:right;" value="replysubmit" id="livereplysubmit">
<strong>����</strong>
</button>
</p>
</div>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="subject" value="  ">
</form>
</div>
<span id="livereplypostreturn"></span>
</div>
<script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
var replycontentlist = new Array();
var addreplylist = new Array();
var timeoutid = timeid = movescrollid = waitescrollid = null;
var replycontentnum = 0;
getnewlivepostlist(1);
timeid = setInterval(getnewlivepostlist, 5000);
$('livereplycontent').style.width = ($('livereplycontentout').clientWidth - 50) + 'px';
$('livereplymessage').onfocus = function() {
if(this.style.color == 'gray') {
this.value = '';
this.style.color = 'black';
$('livepostsubmit').style.display = 'block';
this.style.height = '56px';
$('livefastcomment').style.height = '57px';
}
};
$('livereplymessage').onblur = function() {
if(this.value == '') {
this.style.color = 'gray';
this.value = '#��������ٻظ�#';
}
};

$('liverefresh').onclick = function() {
$('livereplycontent').style.position = 'absolute';
getnewlivepostlist();
this.style.display = 'none';
};

$('livereplycontentout').onmouseover = function(e) {

if($('livereplycontent').style.position == 'absolute' && $('livereplycontent').clientHeight > 215) {
$('livereplycontent').style.position = 'static';
this.scrollTop = this.scrollHeight;
}

if(this.scrollTop + this.clientHeight != this.scrollHeight) {
clearInterval(timeid);
clearTimeout(timeoutid);
clearInterval(movescrollid);
timeid = timeoutid = movescrollid = null;

if(waitescrollid == null) {
waitescrollid = setTimeout(function() {
$('liverefresh').style.display = 'block';
}, 60000 * 10);
}
} else {
clearTimeout(waitescrollid);
waitescrollid = null;
}
};

$('livereplycontentout').onmouseout = function(e) {

if(this.scrollTop + this.clientHeight == this.scrollHeight) {
$('livereplycontent').style.position = 'absolute';
clearInterval(timeid);
timeid = setInterval(getnewlivepostlist, 10000);
}
};

function getnewlivepostlist(first) {
var x = new Ajax('JSON');
x.getJSON('forum.php?mod=misc&action=livelastpost&fid=<?php echo $livethread['fid'];?>', function(s, x) {
var count = s.data.count;
$('livereplies').innerHTML = count;
var newpostlist = s.data.list;
for(i in newpostlist) {
var postid = i;
var postcontent = '';
postcontent += '<dt><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].avatar + '</a></dt>';
postcontent += '<dd><a href="home.php?mod=space&amp;uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].author + '</a></dd>';
postcontent += '<dd>' + newpostlist[i].message + '</dd>';
postcontent += '<dd class="dateline">' + newpostlist[i].dateline + '</dd>';
if(replycontentlist[postid]) {
$('livereply_' + postid).innerHTML = postcontent;
continue;
}
addreplylist[postid] = '<dl id="livereply_' + postid + '">' + postcontent + '</dl>';
}
if(first) {
for(i in addreplylist) {
replycontentlist[i] = addreplylist[i];
replycontentnum++;
var div = document.createElement('div');
div.innerHTML = addreplylist[i];
$('livereplycontent').appendChild(div);
delete addreplylist[i];
}
} else {
livecontentfacemove();
}
});
}

function livecontentfacemove() {
//note 从队列中取出数据
var reply = '';
for(i in addreplylist) {
reply = replycontentlist[i] = addreplylist[i];
replycontentnum++;
delete addreplylist[i];
break;
}
if(reply) {
var div = document.createElement('div');
div.innerHTML = reply;
var oldclientHeight = $('livereplycontent').clientHeight;
$('livereplycontent').appendChild(div);
$('livereplycontentout').style.overflowY = 'hidden';
$('livereplycontent').style.bottom = oldclientHeight - $('livereplycontent').clientHeight + 'px';

if(replycontentnum > 20) {
$('livereplycontent').removeChild($('livereplycontent').firstChild);
for(i in replycontentlist) {
delete replycontentlist[i];
break;
}
replycontentnum--;
}

if(!movescrollid) {
movescrollid = setInterval(function() {
if(parseInt($('livereplycontent').style.bottom) < 0) {
$('livereplycontent').style.bottom =
((parseInt($('livereplycontent').style.bottom) + 5) > 0 ? 0 : (parseInt($('livereplycontent').style.bottom) + 5)) + 'px';
} else {
$('livereplycontentout').style.overflowY = 'auto';
clearInterval(movescrollid);
movescrollid = null;
timeoutid = setTimeout(livecontentfacemove, 1000);
}
}, 100);
}
}
}

function livereplypostvalidate(theform) {
var s;
if(theform.message.value == '' || $('livereplymessage').style.color == 'gray') {
s = '��Ǹ������δ��������';
}
if(s) {
showError(s);
doane();
$('livereplysubmit').disabled = false;
return false;
}
$('livereplysubmit').disabled = true;
theform.message.value = theform.message.value.replace(/([^>=\]"'\/]|^)((((https?|ftp):\/\/)|www\.)([\w\-]+\.)*[\w\-\u4e00-\u9fa5]+\.([\.a-zA-Z0-9]+|\u4E2D\u56FD|\u7F51\u7EDC|\u516C\u53F8)((\?|\/|:)+[\w\.\/=\?%\-&~`@':+!]*)+\.(jpg|gif|png|bmp))/ig, '$1[img]$2[/img]');
theform.message.value = parseurl(theform.message.value);
ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));
return false;
}

function succeedhandle_livereplypost(url, msg, param) {
$('livereplymessage').value = '';
$('livereplycontent').style.position = 'absolute';
if(param['sechash']) {
updatesecqaa(param['sechash']);
updateseccode(param['sechash']);
}
getnewlivepostlist();
}
</script>
<?php } if(helper_access::check_module('group')) { ?>
<div id="pgt" class="bm bw0 pgs cl">
<div class="pg">
<a href="forum.php?mod=forumdisplay&amp;action=list&amp;fid=<?php echo $_G['fid'];?>" class="nxt">�鿴��������</a>
</div>
<a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')" title="����"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="����" /></a>
</div>
<?php } ?>
<div class="tl bm bml">
<div class="th">
<table cellpadding="0" cellspacing="0" border="0">
<thead>
<tr>
<td class="icn">&nbsp;</td>
<th>��������</th>
<td class="by">����/ʱ��</td>
<td class="num">�ظ�/�鿴</td>
<td class="by">��󷢱�</td>
</tr>
</thead>
</table>
</div>
<div class="bm_c">
<?php if($newthreadlist['dateline']['data']) { ?>
<table cellpadding="0" cellspacing="0" border="0">
<tbody id="<?php echo $thread['id'];?>"><?php if(is_array($newthreadlist['dateline']['data'])) foreach($newthreadlist['dateline']['data'] as $thread) { ?><tr>
<td class="icn">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" title="�´��ڴ�" target="_blank">
<?php if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" />
<?php } elseif($thread['special'] == 1) { ?>
<img src="<?php echo IMGDIR;?>/pollsmall.gif" alt="ͶƱ" />
<?php } elseif($thread['special'] == 2) { ?>
<img src="<?php echo IMGDIR;?>/tradesmall.gif" alt="��Ʒ" />
<?php } elseif($thread['special'] == 3) { ?>
<img src="<?php echo IMGDIR;?>/rewardsmall.gif" alt="����" />
<?php } elseif($thread['special'] == 4) { ?>
<img src="<?php echo IMGDIR;?>/activitysmall.gif" alt="�" />
<?php } elseif($thread['special'] == 5) { ?>
<img src="<?php echo IMGDIR;?>/debatesmall.gif" alt="����" />
<?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<img src="<?php echo IMGDIR;?>/pin_<?php echo $thread['displayorder'];?>.gif" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" />
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/folder_<?php echo $thread['folder'];?>.gif" />
<?php } ?>
</a>
</td>
<th>
<span id="thread_<?php echo $thread['tid'];?>"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" class="xst"><?php echo $thread['subject'];?></a></span>
</th>
<td class="by">
<cite>
<?php if($thread['authorid'] && $thread['author']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"><?php echo $thread['author'];?></a>
<?php } else { if($_G['forum']['ismoderator']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>">����</a>
<?php } else { ?>
����
<?php } } ?>
</cite>
<em><?php echo $thread['dateline'];?></em>
</td>
<td class="num">
<a class="xi2" href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>"><?php echo $thread['allreplies'];?></a><em><?php echo $thread['views'];?></em>
</td>
<td class="by">
<cite>
<?php if($thread['lastposterenc']) { ?>
<a href="<?php if($thread['digest'] != -2) { ?>home.php?mod=space&username=<?php echo $thread['lastposterenc'];?><?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>"><?php echo $thread['lastposter'];?></a>
<?php } else { ?>
����
<?php } ?>
</cite>
<em><a href="<?php if($thread['digest'] != -2) { ?>forum.php?mod=redirect&tid=<?php echo $thread['tid'];?>&goto=lastpost#lastpost<?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>"><?php echo $thread['lastpost'];?></a></em>
</td>
</tr>
<?php } ?>
</tbody>
<?php if($_G['forum']['threads'] > 10) { ?>
<tbody>
<tr class="bw0_all">
<td colspan="5" class="ptm"><a href="forum.php?mod=forumdisplay&amp;action=list&amp;fid=<?php echo $_G['fid'];?>#groupnav" class="y xi2">����鿴���໰��</a></td>
</tr>
</tbody>
<?php } ?>
</table>
<?php } else { ?>
<p class="emp">������ָ���ķ�Χ���������⡣</p>
<?php } ?>
</div>
</div>
<div class="bm bml">
<div class="bm_h cl">
<h2>��Ա��̬</h2>
</div>
<div class="bm_c">
<?php if($groupfeedlist) { ?>
<ul class="el"><?php if(is_array($groupfeedlist)) foreach($groupfeedlist as $feed) { ?><li>
<img src="<?php echo $feed['icon_image'];?>" class="t" />
<?php if(!empty($feed['title_template'])) { ?><?php echo $feed['title_template'];?><?php } ?> <?php if(!empty($feed['body_data']['subject'])) { ?><?php echo $feed['body_data']['subject'];?><?php } ?>
</li>
<?php } ?>
</ul>
<?php } else { ?>
<p class="emp">��<?php echo $_G['setting']['navs']['3']['navname'];?>û�����¶�̬</p>
<?php } ?>
</div>
</div>
<?php if($_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])) { ?>
<ul class="p_pop" id="newspecial_menu" style="display: none">
<?php if(!$_G['forum']['allowspecialonly']) { ?><li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>" onclick="showWindow('newthread', this.href);doane(event)">���»���</a></li><?php } if($_G['group']['allowpostpoll']) { ?><li class="poll"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">����ͶƱ</a></li><?php } if($_G['group']['allowpostreward']) { ?><li class="reward"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">��������</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li class="debate"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">��������</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li class="activity"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=4">�����</a></li><?php } if($_G['group']['allowposttrade']) { ?><li class="trade"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=2">������Ʒ</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li class="popupmenu_option"<?php if($_G['setting']['threadplugins'][$tpid]['icon']) { ?> style="background-image:url(<?php echo $_G['setting']['threadplugins'][$tpid]['icon'];?>)"<?php } ?>><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } if($_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $threadsorts) { if($_G['forum']['threadsorts']['show'][$id]) { ?>
<li class="popupmenu_option"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;extra=<?php echo $extra;?>&amp;sortid=<?php echo $id;?>"><?php echo $threadsorts;?></a></li>
<?php } } } ?>
</ul>
<?php } } } elseif($action == 'list') { if($_G['forum']['ismoderator']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<div id="pgt" class="bm bw0 pgs cl">
<?php echo $multipage;?>
<?php if(helper_access::check_module('group')) { ?>
<span <?php if($_G['setting']['visitedforums']) { ?>id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id})"<?php } ?> class="pgb y"><a href="forum.php?mod=group&amp;fid=<?php echo $_G['fid'];?>">������ҳ</a></span>

<a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')" title="����"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="����" /></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_top'];?>
</div>
<?php if($_G['forum']['threadtypes']) { ?>
<ul class="ttp bm cl">
<li id="ttp_all"<?php if(!$_GET['typeid']) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=forumdisplay&amp;action=list&amp;fid=<?php echo $_G['fid'];?>">ȫ��</a></li>
<?php if($_G['forum']['threadtypes']) { if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $id => $name) { ?><li<?php if($_GET['typeid'] == $id) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=forumdisplay&amp;action=list&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['typeid'] != $id) { ?>&amp;filter=typeid&amp;typeid=<?php echo $id;?><?php echo $forumdisplayadd['typeid'];?><?php } ?>"><?php echo $name;?></a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_filter_extra'])) echo $_G['setting']['pluginhooks']['forumdisplay_filter_extra'];?>
</ul>
<?php } ?>
<div id="threadlist" class="tl bm" style="position: relative;">
<div class="th">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="icn">&nbsp;</td>
<?php if($_G['forum']['ismoderator']) { ?><td class="o">&nbsp;</td><?php } ?>
<th>����</th>
<td class="by">����/ʱ��</td>
<td class="num">�ظ�/�鿴</td>
<td class="by">��󷢱�</td>
</tr>
</table>
</div>
<div class="bm_c">
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=<?php echo $_G['fid'];?>&amp;infloat=yes&amp;nopost=yes">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="listextra" value="<?php echo $extra;?>" />
<table cellpadding="0" cellspacing="0" border="0">
<?php if($_G['forum_threadcount']) { ?>
<tbody class="emptb"><tr><td class="icn"></td><?php if($_G['forum']['ismoderator']) { ?><td class="o"></td><?php } ?><th></th><td class="by"></td><td class="num"></td><td class="by"></td></tr></tbody><?php if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { ?><?php echo adshow("threadlist");?><tbody id="<?php echo $thread['id'];?>">
<tr>
<td class="icn">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>" title="�´��ڴ�" target="_blank">
<?php if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" />
<?php } elseif($thread['special'] == 1) { ?>
<img src="<?php echo IMGDIR;?>/pollsmall.gif" alt="ͶƱ" />
<?php } elseif($thread['special'] == 2) { ?>
<img src="<?php echo IMGDIR;?>/tradesmall.gif" alt="��Ʒ" />
<?php } elseif($thread['special'] == 3) { ?>
<img src="<?php echo IMGDIR;?>/rewardsmall.gif" alt="����" />
<?php } elseif($thread['special'] == 4) { ?>
<img src="<?php echo IMGDIR;?>/activitysmall.gif" alt="�" />
<?php } elseif($thread['special'] == 5) { ?>
<img src="<?php echo IMGDIR;?>/debatesmall.gif" alt="����" />
<?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<img src="<?php echo IMGDIR;?>/pin_<?php echo $thread['displayorder'];?>.gif" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" />
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/folder_<?php echo $thread['folder'];?>.gif" />
<?php } ?>
</td>
<?php if($_G['forum']['ismoderator']) { ?>
<td class="o">
<?php if($thread['fid'] == $_G['fid']) { if($thread['displayorder'] <= 3 || $_G['adminid'] == 1) { ?>
<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" class="pc" value="<?php echo $thread['tid'];?>" />
<?php } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } } else { ?>
<input type="checkbox" disabled="disabled" />
<?php } ?>
</td>
<?php } ?>
<th>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread'][$key];?>
<?php if($thread['moved']) { if($_G['forum']['ismoderator']) { ?>
<a href="forum.php?mod=topicadmin&amp;action=moderate&amp;optgroup=3&amp;operation=delete&amp;tid=<?php echo $thread['moved'];?>" onclick="showWindow('mods', this.href);return false">�ƶ�:</a>
<?php } else { ?>
�ƶ�:
<?php } } ?>
<?php echo $thread['typehtml'];?>
<span id="thread_<?php echo $thread['tid'];?>"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php echo $thread['highlight'];?> class="xst"><?php echo $thread['subject'];?></a></span>
<?php if($thread['readperm']) { ?> - [�Ķ�Ȩ�� <span class="xw1"><?php echo $thread['readperm'];?></span>]<?php } if($thread['price'] > 0) { if($thread['special'] == '3') { ?>
- <span style="color: #C60">[����<span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>]</span>
<?php } else { ?>
- [�ۼ� <span class="xw1"><?php echo $thread['price'];?></span> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>]
<?php } } elseif($thread['special'] == '3' && $thread['price'] < 0) { ?>
- <span style="color: #269F11">[�ѽ��]</span>
<?php } if($thread['attachment'] == 2) { ?>
<img src="<?php echo STATICURL;?>image/filetype/image_s.gif" alt="ͼƬ����" align="absmiddle" />
<?php } elseif($thread['attachment'] == 1) { ?>
<img src="<?php echo STATICURL;?>image/filetype/common.gif" alt="����" align="absmiddle" />
<?php } if($thread['displayorder'] == 0) { if($thread['recommendicon']) { ?>
<img src="<?php echo IMGDIR;?>/recommend_<?php echo $thread['recommendicon'];?>.gif" align="absmiddle" alt="recommend" title="����ָ�� <?php echo $thread['recommends'];?>" />
<?php } if($thread['heatlevel']) { ?>
<img src="<?php echo IMGDIR;?>/hot_<?php echo $thread['heatlevel'];?>.gif" align="absmiddle" alt="heatlevel" title="<?php echo $thread['heatlevel'];?> ������" />
<?php } if($thread['digest'] > 0) { ?>
<img src="<?php echo IMGDIR;?>/digest_<?php echo $thread['digest'];?>.gif" align="absmiddle" alt="digest" title="���� <?php echo $thread['digest'];?>" />
<?php } if($thread['rate'] > 0) { ?>
<img src="<?php echo IMGDIR;?>/agree.gif" align="absmiddle" alt="agree" title="���ӱ��ӷ�" />
<?php } } if($thread['multipage']) { ?>
<span class="tps"><?php echo $thread['multipage'];?></span>
<?php } ?>
</th>
<td class="by">
<cite>
<?php if($thread['authorid'] && $thread['author']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"><?php echo $thread['author'];?></a><?php if(!empty($verify[$thread['authorid']])) { ?><?php echo $verify[$thread['authorid']];?><?php } } else { if($_G['forum']['ismoderator']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>">����</a>
<?php } else { ?>
����
<?php } } ?>
</cite>
<em><?php echo $thread['dateline'];?></em>
</td>
<td class="num">
<?php echo $thread['allreplies'];?><em><?php echo $thread['views'];?></em>
</td>
<td class="by">
<cite><?php if($thread['lastposter']) { ?><a href="<?php if($thread['digest'] != -2) { ?>home.php?mod=space&username=<?php echo $thread['lastposterenc'];?><?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>"><?php echo $thread['lastposter'];?></a></cite><?php } else { ?>����<?php } ?></cite><em><a href="<?php if($thread['digest'] != -2) { ?>forum.php?mod=redirect&tid=<?php echo $thread['tid'];?>&goto=lastpost<?php echo $highlight;?>#lastpost<?php } else { ?>forum.php?mod=viewthread&tid=<?php echo $thread['tid'];?>&page=<?php echo max(1, $thread['pages']);; } ?>"><?php echo $thread['lastpost'];?></a></em>
</td>
</tr>
</tbody>
<?php } } else { ?>
<tbody><tr><th colspan="6"><p class="emp">������ָ���ķ�Χ���������⡣</p></th></tr></tbody>
<?php } ?>
</table>
<?php if($_G['forum']['ismoderator'] && $_G['forum_threadcount']) { include template('forum/topicadmin_modlayer'); } ?>
</form>
</div>
</div>
<?php if(helper_access::check_module('group')) { ?>
<div class="bm bw0 pgs cl">
<?php echo $multipage;?>
<span <?php if($_G['setting']['visitedforums']) { ?>id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id})"<?php } ?> class="pgb y"><a href="forum.php?mod=group&amp;fid=<?php echo $_G['fid'];?>">������ҳ</a></span>
<a href="javascript:;" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=<?php echo $_G['fid'];?>')" title="����"><img src="<?php echo IMGDIR;?>/pn_post.png" alt="����" /></a>
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_postbutton_bottom'];?>
</div>

<?php if($_G['setting']['fastpost']) { include template('forum/forumdisplay_fastpost'); } if($_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])) { ?>
<ul class="p_pop" id="newspecial_menu" style="display: none">
<?php if(!$_G['forum']['allowspecialonly']) { ?><li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>" onclick="showWindow('newthread', this.href);doane(event)">���»���</a></li><?php } if($_G['group']['allowpostpoll']) { ?><li class="poll"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">����ͶƱ</a></li><?php } if($_G['group']['allowpostreward']) { ?><li class="reward"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">��������</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li class="debate"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">��������</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li class="activity"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=4">�����</a></li><?php } if($_G['group']['allowposttrade']) { ?><li class="trade"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=2">������Ʒ</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li class="popupmenu_option"<?php if($_G['setting']['threadplugins'][$tpid]['icon']) { ?> style="background-image:url(<?php echo $_G['setting']['threadplugins'][$tpid]['icon'];?>)"<?php } ?>><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>
<?php } } } elseif($action == 'memberlist') { if($op == 'alluser') { if($adminuserlist) { ?>
<div class="bm bml">
<div class="bm_h cl">
<h2>�����Ա</h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($adminuserlist)) foreach($adminuserlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" title="<?php if($user['level'] == 1) { ?>Ⱥ��<?php } elseif($user['level'] == 2) { ?>��Ⱥ��<?php } if($user['online']) { ?> ����<?php } ?>" class="avt" c="1">
<?php if($user['level'] == 1) { ?>
<em class="gm"></em>
<?php } elseif($user['level'] == 2) { ?>
<em class="gm" style="filter:alpha(opacity=50); opacity: 0.5"></em>
<?php } if($user['online']) { ?>
<em class="gol" style="margin-top: 15px;"></em>
<?php } echo avatar($user['uid'], 'small'); ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a></p>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } if($staruserlist || $alluserlist) { ?>
<div class="bm bml">
<div class="bm_h cl">
<h2>��Ա</h2>
</div>
<div class="bm_c">
<?php if($staruserlist) { ?>
<ul class="ml mls cl"><?php if(is_array($staruserlist)) foreach($staruserlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" title="���ǳ�Ա<?php if($user['online']) { ?> ����<?php } ?>" class="avt" c="1">
<em class="gs"></em>
<?php if($user['online']) { ?>
<em class="gol"<?php if($user['level'] <= 3) { ?> style="margin-top: 15px;"<?php } ?> title="����"></em>
<?php } echo avatar($user['uid'], 'small'); ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a></p>
</li>
<?php } ?>
</ul>
<?php } if($alluserlist) { ?>
<ul class="ml mls cl"><?php if(is_array($alluserlist)) foreach($alluserlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" class="avt" c="1"><?php echo avatar($user['uid'], 'small'); ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a></p>
</li>
<?php } ?>
</ul>
<?php } ?>
</div>
</div>
<?php } if($multipage) { ?><div class="pgs cl"><?php echo $multipage;?></div><?php } } } elseif($action == 'create') { ?><div class="bm bml" id="main_messaqge">
<div class="bm_h cl">
<h1 class="xs2">������<?php echo $_G['setting']['navs']['3']['navname'];?>
<?php if($_G['setting']['groupmod']) { ?>&nbsp;&nbsp;&nbsp;(��Ҫ��˿�ͨ)<?php } ?>
</h1>
</div>
<div class="bm_c">
<form method="post" autocomplete="off" name="groupform" id="groupform" class="s_clear" onsubmit="checkCategory();ajaxpost('groupform', 'returnmessage4', 'returnmessage4', 'onerror');return false;" action="forum.php?mod=group&amp;action=create">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="handlekey" value="creategroup" />
<table cellspacing="0" cellpadding="0" class="tfm" summary="����<?php echo $_G['setting']['navs']['3']['navname'];?>">
<tbody>
<tr>
<th>&nbsp;</th>
<td>
<style type="text/css">
#returnmessage4 { display: none; color: <?php echo NOTICETEXT;?>; font-weight: bold; }
#returnmessage4.onerror { display: block; }
</style>
<p id="returnmessage4"></p>
</td>
</tr>
<tr>
<th><strong class="rq y">*</strong><?php echo $_G['setting']['navs']['3']['navname'];?>����:</th>
<td>
<input type="text" name="name" id="name" class="px" size="36" tabindex="1" value="" autocomplete="off" onBlur="checkgroupname()" tabindex="1" />
<span id="groupnamecheck" class="xi1"></span>
</td>
</tr>
<tr>
<th><strong class="rq y">*</strong>��������:</th>
<td>
<select name="parentid" tabindex="2" class="ps" onchange="ajaxget('forum.php?mod=ajax&action=secondgroup&fupid='+ this.value, 'secondgroup');">
<option value="0">��ѡ��</option>
<?php echo $groupselect['first'];?>
</select>
<em id="secondgroup"></em>
<span id="groupcategorycheck" class="xi1"></span>
</td>
</tr>
<tr>
<th><?php echo $_G['setting']['navs']['3']['navname'];?>���:</th>
<td>
<script type="text/javascript">
var allowbbcode = allowimgcode = parsetype = 1;
var allowhtml = forumallowhtml = allowsmilies = 0;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>bbcode.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div id="descriptionpreview"></div>
<div class="tedt">
<div class="bar">
<div class="y"><a href="javascript:;" onclick="$('descriptionpreview').innerHTML = bbcode2html($('descriptionmessage').value)">Ԥ��</a></div><?php $seditor = array('description', array('bold', 'color', 'img', 'link'));?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="���ּӴ�" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="����������ɫ" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="ͼƬ" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="�������" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="����" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="����" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@����" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@����</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div></div>
<div class="area">
<textarea id="descriptionmessage" name="descriptionnew" tabindex="3" class="pt" rows="8"></textarea>
</div>
</div>
</tr>
<tr>
<th><strong class="rq y">*</strong>���Ȩ��:</th>
<td>
<label class="lb"><input type="radio" name="gviewperm" class="pr" tabindex="4" value="1" checked="checked" />������</label>
<label class="lb"><input type="radio" name="gviewperm" class="pr" value="0" />����Ա</label>
</td>
</tr>
<tr>
<th><strong class="rq y">*</strong>���뷽ʽ:</th>
<td>
<label class="lb"><input type="radio" name="jointype" class="pr" tabindex="5" value="0" checked="checked" />���ɼ���</label>
<label class="lb"><input type="radio" name="jointype" class="pr" value="2" />��˼���</label>
<label class="lb"><input type="radio" name="jointype" class="pr" value="1" />�������</label>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<input type="hidden" name="createsubmit" value="true"><button type="submit" class="pn pnc" tabindex="6"><strong>����</strong></button>
<?php if($_G['group']['buildgroupcredits']) { ?>&nbsp;&nbsp;&nbsp;(<strong class="rq">����<?php echo $_G['setting']['navs']['3']['navname'];?>��Ҫ���� <?php echo $_G['group']['buildgroupcredits'];?> <?php echo $_G['setting']['extcredits'][$creditstransextra]['unit'];?><?php echo $_G['setting']['extcredits'][$creditstransextra]['title'];?></strong>)<?php } ?>
</td>
</tr>
</tbody>
</table>
</form>
</div>
</div>
<script type="text/javascript">
function checkgroupname() {
var groupname = trim($('name').value);
ajaxget('forum.php?mod=ajax&forumcheck=1&infloat=creategroup&handlekey=creategroup&action=checkgroupname&groupname=' + (BROWSER.ie && document.charset == 'utf-8' ? encodeURIComponent(groupname) : groupname), 'groupnamecheck');
}
function checkCategory(){
var groupcategory = trim($('fup').value);
if(groupcategory == ''){
$('groupcategorycheck').innerHTML = '��ѡ��<?php echo $_G['setting']['navs']['3']['navname'];?>����';
return false;
} else {
$('groupcategorycheck').innerHTML = '';
}
}
<?php if($_GET['fupid']) { ?>
ajaxget('forum.php?mod=ajax&action=secondgroup&fupid=<?php echo $_GET['fupid'];?><?php if($_GET['groupid']) { ?>&groupid=<?php echo $_GET['groupid'];?><?php } ?>', 'secondgroup');
<?php } ?>
if($('name')) {
$('name').focus();
}
</script><?php } elseif($action == 'invite') { ?><div class="bm" id="main_messaqge">
<form method="post" autocomplete="off" name="groupform" id="groupform" class="s_clear" action="forum.php?mod=group&amp;action=invite">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="fid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" /><?php if(is_array($friendarray)) foreach($friendarray as $uid => $member) { ?><input type="checkbox" name="inviteuid[]" value="<?php echo $uid;?>"><?php echo $member['username'];?> <?php echo $member['avatar'];?>
<?php } ?>
<table cellspacing="0" cellpadding="0" class="tfm" summary="�������">
<caption>��ѡ����Ҫ����ĺ���</caption>
<tbody>
<tr>
<th>�����б�</th>
<td><textarea rows="4" cols="40" name="invitemsg" class="pt"></textarea></td>
</tr>
<tr>
<th>&nbsp;</th>
<td><button class="pn pnc" type="submit" name="invitesubmit" value="true" tabindex="1"><strong>���</strong></button></td>
</tr>
</tbody>
</table>
</form>
</div><?php } elseif($action == 'manage') { ?><p class="tbmu">
<a href="forum.php?mod=group&amp;action=manage&amp;op=group&amp;fid=<?php echo $_G['fid'];?>"<?php if($_GET['op'] == 'group') { ?> class="a"<?php } ?>><?php echo $_G['setting']['navs']['3']['navname'];?>����</a>
<?php if(!empty($groupmanagers[$_G['uid']]) || $_G['adminid'] == 1) { ?>
<span class="pipe">|</span><a href="forum.php?mod=group&amp;action=manage&amp;op=checkuser&amp;fid=<?php echo $_G['fid'];?>"<?php if($_GET['op'] == 'checkuser') { ?> class="a"<?php } ?>>��Ա���</a>
<span class="pipe">|</span><a href="forum.php?mod=group&amp;action=manage&amp;op=manageuser&amp;fid=<?php echo $_G['fid'];?>"<?php if($_GET['op'] == 'manageuser') { ?> class="a"<?php } ?>>��Ա����</a>
<?php } if($_G['forum']['founderuid'] == $_G['uid'] || $_G['adminid'] == 1) { ?>
<span class="pipe">|</span><a href="forum.php?mod=group&amp;action=manage&amp;op=threadtype&amp;fid=<?php echo $_G['fid'];?>"<?php if($_GET['op'] == 'threadtype') { ?> class="a"<?php } ?>>�������</a>
<span class="pipe">|</span><a href="forum.php?mod=group&amp;action=manage&amp;op=demise&amp;fid=<?php echo $_G['fid'];?>"<?php if($_GET['op'] == 'demise') { ?> class="a"<?php } ?>><?php echo $_G['setting']['navs']['3']['navname'];?>ת��</a>
<?php } ?>
</p>

<?php if($_GET['op'] == 'group') { ?>
<div class="bm bw0">
<form enctype="multipart/form-data" action="forum.php?mod=group&amp;action=manage&amp;op=group&amp;fid=<?php echo $_G['fid'];?>" name="manage" method="post" autocomplete="off">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<table cellspacing="0" cellpadding="0" class="tfm vt" summary="<?php echo $_G['setting']['navs']['3']['navname'];?>�������">
<tbody>
<tr>
<th>&nbsp;</th>
<td><strong class="rq"><em id="returnmessage4"></em></strong></td>
</tr>
<?php if(!empty($specialswitch['allowchangename']) && ($_G['uid'] == $_G['forum']['founderuid'] || $_G['adminid'] == 1)) { ?>
<tr>
<th><span class="rq">*</span><?php echo $_G['setting']['navs']['3']['navname'];?>����:</th>
<td><input type="text" id="name" name="name" class="px" size="36" tabindex="1" value="<?php echo $_G['forum']['name'];?>" autocomplete="off" tabindex="1" /></td>
</tr>
<?php } if(!empty($specialswitch['allowchangetype']) && ($_G['uid'] == $_G['forum']['founderuid'] || $_G['adminid'] == 1)) { ?>
<tr>
<th><span class="rq">*</span>��������:</th>
<td>
<select name="parentid" tabindex="2" class="ps" onchange="ajaxget('forum.php?mod=ajax&action=secondgroup&fupid='+ this.value, 'secondgroup');">
<?php echo $groupselect['first'];?>
</select>
<em id="secondgroup"><?php if($groupselect['second']) { ?><select id="fup" name="fup" class="ps" ><?php echo $groupselect['second'];?></select><?php } ?></em>
</td>
</tr>
<?php } ?>
<tr>
<th><?php echo $_G['setting']['navs']['3']['navname'];?>���</th>
<td>
<script type="text/javascript">
var allowbbcode = allowimgcode = parsetype = 1;
var allowhtml = forumallowhtml = allowsmilies = 0;
</script>
<script src="<?php echo $_G['setting']['jspath'];?>bbcode.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div id="descriptionpreview"></div>
<div class="tedt">
<div class="bar">
<div class="y"><a href="javascript:;" onclick="$('descriptionpreview').innerHTML = bbcode2html($('descriptionmessage').value)">Ԥ��</a></div><?php $seditor = array('description', array('bold', 'color', 'img', 'link'));?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="���ּӴ�" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="����������ɫ" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="ͼƬ" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="�������" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="����" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="����" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<?php if(empty($seditor['2'])) { ?>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@����" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@����</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div></div>
<div class="area">
<textarea id="descriptionmessage" name="descriptionnew" class="pt" rows="8"><?php echo $_G['forum']['descriptionnew'];?></textarea>
</div>
</div>
</tr>
<tr>
<th>���Ȩ��</th>
<td>
<label class="lb"><input type="radio" name="gviewpermnew" class="pr" value="1" <?php echo $gviewpermselect['1'];?> />������</label>
<label class="lb"><input type="radio" name="gviewpermnew" class="pr" value="0" <?php echo $gviewpermselect['0'];?> />����Ա</label>
</td>
</tr>
<tr>
<th>���뷽ʽ</th>
<td>
<label class="lb"><input type="radio" name="jointypenew" class="pr" value="0" <?php echo $jointypeselect['0'];?> />���ɼ���</label>
<label class="lb"><input type="radio" name="jointypenew" class="pr" value="2" <?php echo $jointypeselect['2'];?> />��˼���</label>
<label class="lb"><input type="radio" name="jointypenew" class="pr" value="1" <?php echo $jointypeselect['1'];?> />�������</label>
<?php if(!empty($specialswitch['allowclosegroup'])) { ?>
<label class="lb"><input type="radio" name="jointypenew" class="pr" value="-1" <?php echo $jointypeselect['-1'];?> />�ر�</label>
<p class="d">ע��<?php echo $_G['setting']['navs']['3']['navname'];?>�رպ�ֻ��Ⱥ���ſ������</p>
<?php } ?>
</td>
</tr>
<?php if($_G['setting']['allowgroupdomain'] && !empty($_G['setting']['domain']['root']['group']) && $domainlength) { ?>
<tr>
<th>��������</th>
<td>
http://<input type="text" name="domain" class="px" value="<?php echo $_G['forum']['domain'];?>" style="width: 100px;" />.<?php echo $_G['setting']['domain']['root']['group'];?>
<p class="d">
������ʹ������ <?php echo $domainlength;?> �� ����� 30 ������ĸ��������ϣ��ұ�����ĸ��ͷ��<br/>
<?php if($_G['forum']['domain'] && $consume) { ?>�޸���������Ҫ֧������<strong><?php echo $consume;?></strong>����������ӵ��<strong><?php echo $credits;?></strong><?php } ?>
</p>
</td>
</tr>
<?php } if(!empty($_G['group']['allowupbanner']) || $_G['adminid'] == 1) { ?>
<tr>
<th><?php echo $_G['setting']['navs']['3']['navname'];?>����ͼƬ</th>
<td>
<input type="file" name="bannernew" id="bannernew" class="pf" size="25" />
<?php if($_G['forum']['banner']) { ?>
<label><input type="checkbox" name="deletebanner" class="pc" value="1" />��ʹ��ͼƬ</label>
<p class="d">����<?php echo $_G['setting']['navs']['3']['navname'];?>ͼƬ��ʹ�õĻ���<?php echo $_G['setting']['navs']['3']['navname'];?>ͼ���ڸ�<?php echo $_G['setting']['navs']['3']['navname'];?>ҳ�治����ʾ</p>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<img onload="thumbImg(this, 1)" _width="544" _height="400" src="<?php echo $_G['forum']['banner'];?>?<?php echo TIMESTAMP;?>" />
<?php } ?>
<p class="d">
<?php if($_G['setting']['group_imgsizelimit']) { ?>
�ļ�С�� <?php echo $_G['setting']['group_imgsizelimit'];?> KB &nbsp;
<?php } ?>
����ʹ�óߴ�Ϊ 730��150 ��ͼƬ��ȡ�����Ч��
</p>

</td>
</tr>
<?php } ?>
<tr>
<th><?php echo $_G['setting']['navs']['3']['navname'];?>ͼ��</th>
<td>
<input type="file" id="iconnew" class="pf vm" size="25" name="iconnew" />
<p class="d">
�Զ����Գ� 48 X 48 ���ش�С��ͼƬ &nbsp;
<?php if($_G['setting']['group_imgsizelimit']) { ?>
�ļ�С�� <?php echo $_G['setting']['group_imgsizelimit'];?> KB
<?php } ?></p>
<?php if($_G['forum']['icon']) { ?>
<img width="48" height="48" alt="" class="vm" style="margin-right: 1em;" src="<?php echo $_G['forum']['icon'];?>?<?php echo TIMESTAMP;?>" />
<?php } ?>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="groupmanage" class="pn pnc" value="1"><strong>�ύ</strong></button></td>
</tr>
</tbody>
</table>
</form>
</div>
<?php } elseif($_GET['op'] == 'checkuser') { if($checkusers) { ?>
<p class="tbmu cl">
<span class="y">
<a href="forum.php?mod=group&amp;action=manage&amp;op=checkuser&amp;fid=<?php echo $_G['fid'];?>&amp;checkall=2">����ȫ��</a><span class="pipe">|</span>
<a href="forum.php?mod=group&amp;action=manage&amp;op=checkuser&amp;fid=<?php echo $_G['fid'];?>&amp;checkall=1">ȫ��ͨ��</a>
</span>
</p>
<div class="xld xlda"><?php if(is_array($checkusers)) foreach($checkusers as $uid => $user) { ?><dl class="bbda cl">
<dd class="m avt"><?php echo avatar($user['uid'], 'small'); ?></dd>
<dt><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a> <span class="xw0">(<?php echo $user['joindateline'];?>)</span></dt>
<dd class="pns"><button type="submit" name="checkusertrue" class="pn pnc" value="true" onclick="location.href='forum.php?mod=group&action=manage&op=checkuser&fid=<?php echo $_G['fid'];?>&uid=<?php echo $user['uid'];?>&checktype=1'"><em>ͨ��</em></button> &nbsp; <button type="submit" name="checkuserfalse" class="pn" value="true" onclick="location.href='forum.php?mod=group&action=manage&op=checkuser&fid=<?php echo $_G['fid'];?>&uid=<?php echo $user['uid'];?>&checktype=2'"><em>����</em></button></dd>
</dl>
<?php } ?>
</div>
<?php if($multipage) { ?><div class="pgs cl mtm"><?php echo $multipage;?></div><?php } } else { ?>
<p class="emp">������Ҫ��˳�Ա��</p>
<?php } } elseif($_GET['op'] == 'manageuser') { ?>
<script type="text/javascript">
function groupManageUser(targetlevel_val) {
$('targetlevel').value = targetlevel_val;
$('manageuser').submit();
}
</script>
<?php if($_G['forum']['membernum'] > 50) { ?>
<div class="bm_c pns">
<form action="forum.php?mod=group&amp;action=manage&amp;op=manageuser&amp;fid=<?php echo $_G['fid'];?>" method="post">
<input type="text" <?php if(empty($_GET['srchuser'])) { ?>onclick="$('groupsearch').value=''"<?php } ?> value="<?php if($_GET['srchuser']) { ?><?php echo $_GET['srchuser'];?><?php } else { ?>�������Ա����<?php } ?>" size="15" class="px p_fre vm" id="groupsearch" name="srchuser">&nbsp;
<button class="pn vm" type="submit"><span>����</span></button>
</form>
</div>
<?php } ?>
<form action="forum.php?mod=group&amp;action=manage&amp;op=manageuser&amp;fid=<?php echo $_G['fid'];?>&amp;manageuser=true" name="manageuser" id="manageuser" method="post" autocomplete="off" class="ptm">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
        <input type="hidden" value="0" name="targetlevel" id="targetlevel" />
<?php if($adminuserlist) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>�����Ա</h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($adminuserlist)) foreach($adminuserlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" title="<?php if($user['level'] == 1) { ?>Ⱥ��<?php } elseif($user['level'] == 2) { ?>��Ⱥ��<?php } if($user['online']) { ?> ����<?php } ?>" class="avt">
<?php if($user['level'] == 1) { ?>
<em class="gm"></em>
<?php } elseif($user['level'] == 2) { ?>
<em class="gm" style="filter: alpha(opacity=50); opacity: 0.5"></em>
<?php } if($user['online']) { ?>
<em class="gol"></em>
<?php } echo avatar($user['uid'], 'small'); ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a></p>
<p><?php if($_G['adminid'] == 1 || ($_G['uid'] != $user['uid'] && ($_G['uid'] == $_G['forum']['founderuid'] || $user['level'] > $groupuser['level']))) { ?><input type="checkbox" class="pc" name="muid[<?php echo $user['uid'];?>]" value="<?php echo $user['level'];?>" /><?php } ?></p>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } if($staruserlist || $userlist) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>��Ա</h2>
</div>
<div class="bm_c">
<?php if($staruserlist) { ?>
<ul class="ml mls cl"><?php if(is_array($staruserlist)) foreach($staruserlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" title="���ǳ�Ա<?php if($user['online']) { ?> ����<?php } ?>" class="avt">
<em class="gs"></em>
<?php if($user['online']) { ?>
<em class="gol"<?php if($user['level'] <= 3) { ?> style="margin-top: 15px;"<?php } ?>></em>
<?php } echo avatar($user['uid'], 'small'); ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a></p>
<p><?php if($_G['adminid'] == 1 || $user['level'] > $groupuser['level']) { ?><input type="checkbox" class="pc" name="muid[<?php echo $user['uid'];?>]" value="<?php echo $user['level'];?>" /><?php } ?></p>
</li>
<?php } ?>
</ul>
<?php } if($userlist) { ?>
<ul class="ml mls cl"><?php if(is_array($userlist)) foreach($userlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" class="avt"><?php echo avatar($user['uid'], 'small'); ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a></p>
<p><?php if($_G['adminid'] == 1 || $user['level'] > $groupuser['level']) { ?><input type="checkbox" class="pc" name="muid[<?php echo $user['uid'];?>]" value="<?php echo $user['level'];?>" /><?php } ?></p>
</li>
<?php } ?>
</ul>
<?php } ?>
</div>
</div>
<?php } if($multipage) { ?><div class="pgs cl mbm"><?php echo $multipage;?></div><?php } ?>
<div class="cl"><?php if(is_array($mtype)) foreach($mtype as $key => $name) { ?>            	<?php if($_G['forum']['founderuid'] == $_G['uid'] || $key > $groupuser['level'] || $_G['adminid'] == 1) { ?>
                <button type="button" name="manageuser" value="true" class="pn" onclick="groupManageUser('<?php echo $key;?>')"><span><?php echo $name;?></span></button>
                <?php } ?>
            <?php } ?>
</div>
</form>
<?php } elseif($_GET['op'] == 'threadtype') { ?>
<div class="bm bw0">
<?php if(empty($specialswitch['allowthreadtype'])) { ?>
Ŀǰ����<?php echo $_G['setting']['navs']['3']['navname'];?>�ȼ�����ʹ�ô˹��ܡ�
<?php } else { ?>
<script type="text/JavaScript">
var rowtypedata = [
[
[1,'<input type="checkbox" class="pc" disabled="disabled" />', ''],
[1,'<input type="checkbox" class="pc" name="newenable[]" checked="checked" value="1" />', ''],
[1,'<input class="px" type="text" size="2" name="newdisplayorder[]" value="0" />'],
[1,'<input class="px" type="text" name="newname[]" />']
],
];
var addrowdirect = 0;
var typenumlimit = <?php echo $typenumlimit;?>;
function addrow(obj, type) {
var table = obj.parentNode.parentNode.parentNode.parentNode;
if(typenumlimit <= obj.parentNode.parentNode.parentNode.rowIndex - 1) {
alert('���ֻ����'+typenumlimit+'��������ࡣ');
return false;
}
if(!addrowdirect) {
var row = table.insertRow(obj.parentNode.parentNode.parentNode.rowIndex);
} else {
var row = table.insertRow(obj.parentNode.parentNode.parentNode.rowIndex + 1);
}

var typedata = rowtypedata[type];
for(var i = 0; i <= typedata.length - 1; i++) {
var cell = row.insertCell(i);
cell.colSpan = typedata[i][0];
var tmp = typedata[i][1];
if(typedata[i][2]) {
cell.className = typedata[i][2];
}
tmp = tmp.replace(/\{(\d+)\}/g, function($1, $2) {return addrow.arguments[parseInt($2) + 1];});
cell.innerHTML = tmp;
}
addrowdirect = 0;
}
</script>
<div id="threadtypes">
<form id="threadtypeform" action="forum.php?mod=group&amp;action=manage&amp;op=threadtype&amp;fid=<?php echo $_G['fid'];?>" autocomplete="off" method="post" name="threadtypeform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<table cellspacing="0" cellpadding="0" class="tfm vt">
<tr>
<th>�����������:</th>
<td>
<label class="lb"><input type="radio" name="threadtypesnew[status]" class="pr" value="1" onclick="$('threadtypes_config').style.display = '';$('threadtypes_manage').style.display = '';" <?php echo $checkeds['status']['1'];?> />��</label>
<label class="lb"><input type="radio" name="threadtypesnew[status]" class="pr" value="0" onclick="$('threadtypes_config').style.display = 'none';$('threadtypes_manage').style.display = 'none';"  <?php echo $checkeds['status']['0'];?> />��</label>
<p class="d">�����Ƿ�����������๦�ܣ�����Ҫͬʱ�趨��Ӧ�ķ���ѡ��������ñ�����</p>
</td>
</tr>
<tbody id="threadtypes_config" style="display: <?php echo $display;?>">
<tr>
<th>�����������:</th>
<td>
<label class="lb"><input type="radio" name="threadtypesnew[required]" class="pr" value="1" <?php echo $checkeds['required']['1'];?> />��</label>
<label class="lb"><input type="radio" name="threadtypesnew[required]" class="pr" value="0" <?php echo $checkeds['required']['0'];?> />��</label>
<p class="d">�Ƿ�ǿ���û�����������ʱ����ѡ�����</p>
</td>
</tr>
<tr>
<th>���ǰ׺:</th>
<td>
<label class="lb"><input type="radio" name="threadtypesnew[prefix]" class="pr" value="0" <?php echo $checkeds['prefix']['0'];?> />����ʾ</label>
<label class="lb"><input type="radio" name="threadtypesnew[prefix]" class="pr" value="1" <?php echo $checkeds['prefix']['1'];?> />��ʾ</label>
<p class="d">�Ƿ�������ǰ����ʾ���������</p>
</td>
</tr>
</tbody>
</table>
<div id="threadtypes_manage" style="display: <?php echo $display;?>">
<h2 class="ptm pbm">�������</h2>
<table cellspacing="0" cellpadding="0" class="dt">
<thead>
<tr>
<th width="25">ɾ��</th>
<th>����</th>
<th>˳��</th>
<th>��������</th>
</tr>
</thead>
<?php if($threadtypes) { if(is_array($threadtypes)) foreach($threadtypes as $val) { ?><tbody>
<tr>
<td><input type="checkbox" class="pc" name="threadtypesnew[options][delete][]" value="<?php echo $val['typeid'];?>" /></td>
<td><input type="checkbox" class="pc" name="threadtypesnew[options][enable][<?php echo $val['typeid'];?>]" value="1" class="pc" <?php echo $val['enablechecked'];?> /></td>
<td><input type="text" name="threadtypesnew[options][displayorder][<?php echo $val['typeid'];?>]" class="px" size="2" value="<?php echo $val['displayorder'];?>" /></td>
<td><input type="text" name="threadtypesnew[options][name][<?php echo $val['typeid'];?>]" class="px" value="<?php echo $val['name'];?>" /></td>
</tr>
</tbody>
<?php } } ?>
<tr>
<td colspan="4"><img class="vm" src="<?php echo IMGDIR;?>/addicn.gif" /> <a href="javascript:;" onclick="addrow(this, 0)">��ӷ���</a></td>
</tr>
</table>
</div>
<button type="submit" class="pn pnc mtm" name="groupthreadtype" value="1"><strong>�ύ</strong></button>
</form>
</div>
<?php } ?>
</div>
<?php } elseif($_GET['op'] == 'demise') { ?>
<div class="bm bw0">
<?php if($groupmanagers) { ?>
<div class="tbmu">
<h2>����ת���ʸ�</h2><p>ֻ��ת�ø���<?php echo $_G['setting']['navs']['3']['navname'];?>�Ĺ����Ա��</p><p>������Ҫ�߱����ٴ�����<?php echo $_G['setting']['navs']['3']['navname'];?>���ʸ�</p>
<div class="mtm"><h2>��ܰ��ʾ��</h2><p><?php echo $_G['setting']['navs']['3']['navname'];?>ת�óɹ�������Ȼ�Ǹ�Ⱥ��Ⱥ������������<?php echo $_G['setting']['navs']['3']['navname'];?>��ʼ�ˣ����Կ������˳���<?php echo $_G['setting']['navs']['3']['navname'];?>��</p><p>ת�ú��޷�ֱ�ӻָ�Ⱥ���豻���������������ſ����ٴ�ת�أ������������</p></div>
</div>
<form action="forum.php?mod=group&amp;action=manage&amp;op=demise&amp;fid=<?php echo $_G['fid'];?>" name="groupdemise" method="post" class="exfm">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
<table cellspacing="0" cellpadding="0" class="tfm vt">
<tr>
<th>��<?php echo $_G['setting']['navs']['3']['navname'];?>ת�ø�:</th>
<td>
<ul class="ml mls cl"><?php if(is_array($groupmanagers)) foreach($groupmanagers as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" title="<?php if($user['level'] == 1) { ?>��ΪȺ��<?php } elseif($user['level'] == 2) { ?>��Ϊ��Ⱥ��<?php } if($user['online']) { ?> ����<?php } ?>" class="avt"><?php echo avatar($user['uid'], 'small'); ?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a></p>
<p><?php if($user['uid'] != $_G['uid']) { ?><input type="radio" class="pr" name="suid" value="<?php echo $user['uid'];?>" /><?php } ?></p>
</li>
<?php } ?>
</ul>
</td>
</tr>
<tr>
<th>�������¼����</th>
<td><input type="password" name="grouppwd" class="px p_fre" /></td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<button type="submit" name="groupdemise" class="pn pnc" value="1"><strong>�ύ</strong></button>
</td>
</tr>
</table>
</form>
<?php } else { ?>
<p class="emp"><?php echo $_G['setting']['navs']['3']['navname'];?>Ŀǰ��û�й����Ա��</p>
<?php } ?>
</div>
<?php } } if(CURMODULE == 'group') { ?><?php if(!empty($_G['setting']['pluginhooks']['group_bottom'])) echo $_G['setting']['pluginhooks']['group_bottom'];?><?php } else { ?><?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_bottom'];?><?php } ?>
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
<div class="sd">
<div class="drag">
<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]-->
</div><?php if($action == 'index') { ?>
<div class="bm bml tns">
<table cellpadding="4" cellspacing="0" border="0">
<tr>
<th><p><?php echo $_G['forum']['posts'];?></p>����</th>
<th><p><?php echo $_G['forum']['membernum'];?></p>��Ա</th>
<td><p><?php echo $groupcache['ranking']['data']['today'];?></p>����</td>
</tr>
</table>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['group_index_side'])) echo $_G['setting']['pluginhooks']['group_index_side'];?>
<?php if($status != 2 && $status != 3) { ?>
<div class="bm">
<ul class="tb tb_h cl">
<li class="a" id="new" onmouseover="this.className='a';$('top').className='';$('newuserlist').style.display='block';$('topuserlist').style.display='none';"><a href="javascript:;">�¼���</a></li>
<li id="top" onmouseover="this.className='a';$('new').className='';$('topuserlist').style.display='block';$('newuserlist').style.display='none';"><a href="javascript:;">��Ծ��Ա</a></li>
</ul>
<div class="bm_c">
<ul class="ml mls cl" id="newuserlist" style="display:block;"><?php if(is_array($newuserlist)) foreach($newuserlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" title="<?php if($user['level'] == 1) { ?>Ⱥ��<?php } elseif($user['level'] == 2) { ?>��Ⱥ��<?php } elseif($user['level'] == 3) { ?>���ǳ�Ա<?php } if($user['online']) { ?> ����<?php } ?>" class="avt" c="1">
<?php if($user['level'] == 1) { ?>
<em class="gm"></em>
<?php } elseif($user['level'] == 2) { ?>
<em class="gm" style="filter: alpha(opacity=50); opacity: 0.5"></em>
<?php } elseif($user['level'] == 3) { ?>
<em class="gs"></em>
<?php } if($user['online']) { ?>
<em class="gol"<?php if($user['level'] <= 3) { ?> style="margin-top: 15px;"<?php } ?>></em>
<?php } echo avatar($user['uid'], 'small'); ?></a>
<p>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a>
</p>
</li>
<?php } ?>
</ul>
<ul class="ml mls cl" id="topuserlist" style="display:none;"><?php if(is_array($activityuserlist)) foreach($activityuserlist as $user) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>" title="<?php if($user['level'] == 1) { ?>Ⱥ��<?php } elseif($user['level'] == 2) { ?>��Ⱥ��<?php } elseif($user['level'] == 3) { ?>���ǳ�Ա<?php } if($user['online']) { ?> ����<?php } ?>" class="avt" c="1">
<?php if($user['level'] == 1) { ?>
<em class="gm"></em>
<?php } elseif($user['level'] == 2) { ?>
<em class="gm" style="filter: alpha(opacity=50); opacity: 0.5"></em>
<?php } elseif($user['level'] == 3) { ?>
<em class="gs"></em>
<?php } if($user['online']) { ?>
<em class="gol"<?php if($user['level'] <= 3) { ?> style="margin-top: 15px;"<?php } ?>></em>
<?php } echo avatar($user['uid'], 'small'); ?></a>
<p>
<a href="home.php?mod=space&amp;uid=<?php echo $user['uid'];?>"><?php echo $user['username'];?></a>
</p>
</li>
<?php } ?>
</ul>
</div>
</div>

<?php if($groupviewed_list) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>�������<?php echo $_G['setting']['navs']['3']['navname'];?></h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($groupviewed_list)) foreach($groupviewed_list as $groupid => $group) { ?><li>
<a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" title="<?php echo $group['name'];?>" class="avt"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" /></a>
<p><a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" title="<?php echo $group['name'];?>"><?php echo $group['name'];?></a></p>
<span><?php echo $group['membernum'];?></span>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } } } elseif($action == 'list') { if($groupcache['replies']['data']) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>�����Ҷ������۵Ļ���</h2>
</div>
<div class="bm_c">
<ul class="xl xl1"><?php if(is_array($groupcache['replies']['data'])) foreach($groupcache['replies']['data'] as $tid => $thread) { ?><li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>"><?php echo $thread['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } if($groupcache['digest']['data']) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>�����Ƽ�</h2>
</div>
<div class="bm_c">
<ul class="xl xl1"><?php if(is_array($groupcache['digest']['data'])) foreach($groupcache['digest']['data'] as $tid => $thread) { ?><li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>"><?php echo $thread['subject'];?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } } if(CURMODULE == 'group') { ?><?php if(!empty($_G['setting']['pluginhooks']['group_side_top'])) echo $_G['setting']['pluginhooks']['group_side_top'];?><?php } else { ?><?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_top'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_top'];?><?php } if($action == 'create') { ?>
<div class="bm bmn">
<div class="bm_c xw1 xi1">������ <?php echo $groupnum;?> ��<?php echo $_G['setting']['navs']['3']['navname'];?>�����ܴ��� <?php echo $allowbuildgroup;?> ����</div>
</div>
<?php } else { if($action != 'index' && ($status != 2 || $status != 3)) { ?>
<div class="bm bml">
<div class="bm_h cl">
<h2>�ڱ�<?php echo $_G['setting']['navs']['3']['navname'];?>��Ѱ������</h2>
</div>
<div class="bm_c hm pns">
<form method="post" action="search.php?mod=group&amp;srchfid=<?php echo $_G['fid'];?>&amp;searchsubmit=1">
<input type="text" name="srchtxt" id="groupsearch" class="px p_fre vm" size="15" value="�����������ؼ���" onclick="$('groupsearch').value=''" />&nbsp;
<button type="submit" class="pn vm"><span>����</span></button>
</form>
</div>
</div>
<?php } ?>

<div class="bm bml">
<div class="bm_h cl">
<h2><?php echo $_G['setting']['navs']['3']['navname'];?>��ַ</h2>
</div>
<div class="bm_c">
<p>
<?php if($_G['setting']['allowgroupdomain'] && !empty($_G['setting']['domain']['root']['group']) && !empty($_G['forum']['domain'])) { ?>
<a href="http://<?php echo $_G['forum']['domain'];?>.<?php echo $_G['setting']['domain']['root']['group'];?>" id="group_link"></a>
<?php } else { ?>
<a href="forum.php?mod=group&amp;fid=<?php echo $_G['fid'];?>" id="group_link"></a>
<?php } ?>
[<a href="javascript:;" onclick="setCopy($('group_link').href, '<?php echo $_G['setting']['navs']['3']['navname'];?>��ַ���Ƴɹ�')" class="xi2">����</a>]
</p>
<script type="text/javascript">$('group_link').innerHTML = $('group_link').href</script>
<p class="ptn xg1"><?php echo $_G['forum']['foundername'];?> ������ <?php echo $_G['forum']['dateline'];?></p>
<?php if($status == 'isgroupuser') { ?><p class="ptn"><a onclick="showDialog('��ȷ��Ҫ�˳���<?php echo $_G['setting']['navs']['3']['navname'];?>��', 'confirm', '', function(){location.href='forum.php?mod=group&action=out&fid=<?php echo $_G['fid'];?>'})" href="javascript:;" class="xi2">�˳�<?php echo $_G['setting']['navs']['3']['navname'];?></a><p><?php } ?>
</div>
</div>
<?php } if(CURMODULE == 'group') { ?><?php if(!empty($_G['setting']['pluginhooks']['group_side_bottom'])) echo $_G['setting']['pluginhooks']['group_side_bottom'];?><?php } else { ?><?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_side_bottom'])) echo $_G['setting']['pluginhooks']['forumdisplay_side_bottom'];?><?php } ?>

<div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>

</div>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>