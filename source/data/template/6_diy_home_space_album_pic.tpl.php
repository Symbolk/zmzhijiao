<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_album_pic');
0
|| checktplrefresh('./template/mobanbus_h5cpv1/home/space_album_pic.htm', './template/mobanbus_h5cpv1/home/space_header.htm', 1496222318, 'diy', './data/template/6_diy_home_space_album_pic.tpl.php', './template/mobanbus_h5cpv1', 'home/space_album_pic')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/space_album_pic.htm', './template/default/common/seccheck.htm', 1496222318, 'diy', './data/template/6_diy_home_space_album_pic.tpl.php', './template/mobanbus_h5cpv1', 'home/space_album_pic')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/space_album_pic.htm', './template/mobanbus_h5cpv1/home/space_userabout.htm', 1496222318, 'diy', './data/template/6_diy_home_space_album_pic.tpl.php', './template/mobanbus_h5cpv1', 'home/space_album_pic')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/space_album_pic.htm', './template/mobanbus_h5cpv1/common/header_common.htm', 1496222318, 'diy', './data/template/6_diy_home_space_album_pic.tpl.php', './template/mobanbus_h5cpv1', 'home/space_album_pic')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/space_album_pic.htm', './template/mobanbus_h5cpv1/home/space_diy.htm', 1496222318, 'diy', './data/template/6_diy_home_space_album_pic.tpl.php', './template/mobanbus_h5cpv1', 'home/space_album_pic')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/space_album_pic.htm', './template/mobanbus_h5cpv1/home/space_header_personalnv.htm', 1496222318, 'diy', './data/template/6_diy_home_space_album_pic.tpl.php', './template/mobanbus_h5cpv1', 'home/space_album_pic')
;?>
<?php $_G['home_tpl_titles'] = array(getstr($pic['title'], 60, 0, 0, 0, -1), $album['albumname'], '���');?><?php $friendsname = array(1 => '�����ѿɼ�',2 => 'ָ�����ѿɼ�',3 => '���Լ��ɼ�',4 => 'ƾ����ɼ�');?><?php if($_G['setting']['homepagestyle']) { $_G[cookie][extstyle] = false;?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?><?php } if(empty($nobbname)) { ?> - <?php echo $_G['setting']['bbname'];?><?php } ?></title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_6_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_6_home_space.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?><script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_space.css?<?php echo VERHASH;?>' />
<link id="style_css" rel="stylesheet" type="text/css" href="<?php echo STATICURL;?>space/<?php if($space['theme']) { ?><?php echo $space['theme'];?><?php } else { ?>t1<?php } ?>/style.css?<?php echo VERHASH;?>">
<style id="diy_style"><?php echo $space['spacecss'];?></style>
</head>

<body id="space" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<?php if($space['self'] && $_GET['diy'] == 'yes' && $do == 'index' ) { ?>
<link rel="stylesheet" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>' /><div id="controlpanel" class="cl">
<div id="controlheader" class="cl">
<p class="y">
<span id="navcancel"><a href="javascript:;" onclick="spaceDiy.cancel();return false;">�ر�</a></span>
<span id="navsave"><a href="javascript:;" onclick="javascript:spaceDiy.save();return false;">����</a></span>
<span id="button_redo" class="unusable"><a href="javascript:;" onclick="spaceDiy.redo();return false;" title="����" onfocus="this.blur();">����</a></span>
<span id="button_undo" class="unusable"><a href="javascript:;" onclick="spaceDiy.undo();return false;" title="����" onfocus="this.blur();">����</a></span>
</p>
<ul id="controlnav">
<li id="navstart" class="current"><a href="javascript:" onclick="spaceDiy.getdiy('start');this.blur();return false;">��ʼ</a></li>
<li id="navlayout"><a href="javascript:;" onclick="spaceDiy.getdiy('layout');this.blur();return false;">��ʽ/����</a></li>
<li id="navstyle"><a href="javascript:;" onclick="spaceDiy.getdiy('style');this.blur();return false;">���</a></li>
<li id="navblock"><a href="javascript:;" onclick="spaceDiy.getdiy('block');this.blur();return false;">ģ��</a></li>
<li id="navdiy"><a href="javascript:;" onclick="spaceDiy.getdiy('diy');this.blur();return false;">�Զ���װ��</a></li>
</ul>
</div>
<div id="controlcontent" class="cl">
<ul id="contentstart" class="content">
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('layout');return false;"><img src="<?php echo STATICURL;?>image/diy/layout.png" />��ʽ</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('style');return false;"><img src="<?php echo STATICURL;?>image/diy/style.png" />���</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('block');return false;"><img src="<?php echo STATICURL;?>image/diy/module.png" />���ģ��</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('diy', 'topicid', '<?php echo $topic['topicid'];?>');return false;"><img src="<?php echo STATICURL;?>image/diy/diy.png" />�Զ���</a></li>
</ul>
</div>
<div id="cpfooter"><table cellpadding="0" cellspacing="0" width="100%"><tr><td class="l">&nbsp;</td><td class="c">&nbsp;</td><td class="r">&nbsp;</td></tr></table></div>
</div>
<form method="post" autocomplete="off" name="diyform" action="home.php?mod=spacecp&amp;ac=index">
<input type="hidden" name="spacecss" value="" />
<input type="hidden" name="style" value="<?php echo $space['theme'];?>" />
<input type="hidden" name="layoutdata" value="" />
<input type="hidden" name="currentlayout" value="<?php echo $userdiy['currentlayout'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="diysubmit" value="true"/>
</form><?php } ?>

<div id="toptb" class="cl">
<?php if($_G['uid']) { ?>
<div class="y">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" class="xw1" target="_blank" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?></a>
<a href="javascript:;" id="myspace" class="showmenu cur1" onmouseover="showMenu(this.id);">��ݵ���</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<a href="home.php?mod=spacecp">����</a>
<a href="home.php?mod=space&amp;do=pm" id="pm_ntc" target="_blank"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>��Ϣ<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } ?></a>
<a href="home.php?mod=space&amp;do=notice" id="myprompt" target="_blank"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>����<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if($_G['group']['allowmanagearticle'] || $_G['group']['allowdiy']|| getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3) || in_array($_G['uid'], $_G['setting']['ext_portalmanager'])) { ?><a href="portal.php?mod=portalcp">�Ż�����</a><?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a><?php } if($_G['uid'] && ($_G['group']['radminid'] == 1 || getstatus($_G['member']['allowadmincp'], 1))) { ?><a href="admin.php" target="_blank">��������</a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
<?php if($space['self'] && $do == 'index') { ?><a id="diy-tg" href="javascript:openDiy();" title="װ��ռ�">DIY</a><?php } ?>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<div class="y">
<a id="loginuser" class="xw1"><?php echo $_G['cookie']['loginuser'];?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">����</a>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</div>
<?php } elseif($_G['connectguest']) { ?>
<div class="y">
<a href="member.php?mod=connect" target="_blank">�����ʺ���Ϣ</a> <a href="member.php?mod=connect&amp;ac=bind" target="_blank">�������ʺ�</a>
</div>
<?php } else { ?>
<div class="y">
<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>"><?php echo $_G['setting']['reglinkname'];?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">��¼</a>
</div>
<?php } ?>
<div class="z">
<a href="./" title="<?php echo $_G['setting']['bbname'];?>" class="xw1"><?php echo $_G['setting']['bbname'];?></a>
<a href="home.php?mod=space&amp;do=home" id="navs" class="showmenu" onmouseover="showMenu(this.id);">������ҳ</a>
</div>
</div>
<?php if($space['status'] == -1 && $_G['adminid'] == 1 ) { ?>
<p class="ptw xw1 xi1 hm"><img src="<?php echo IMGDIR;?>/locked.gif" alt="Locked" class="vm" /> ��ʾ: ���߱���ֹ��ɾ�� �����Զ����Σ�ֻ�й���Ա�ɼ�</p>
<?php } ?>
<div id="hd" class="wp cl">

<h2 id="spaceinfoshow"><?php space_merge($space, 'field_home'); $space[domainurl] = space_domain($space);getuserdiydata($space);$personalnv = isset($_G['blockposition']['nv']) ? $_G['blockposition']['nv'] : '';?><strong id="spacename" class="mbn">
<?php if($space['spacename']) { ?><?php echo $space['spacename'];?><?php } else { ?><?php echo $space['username'];?>�ĸ��˿ռ�<?php } ?>
</strong>
<span class="xs0 xw0">
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '�ռ��ַ���Ƴɹ�');return false;"><?php echo $space['domainurl'];?></a>
<a href="javascript:;" onclick="addFavorite(location.href, document.title)">[�ղ�]</a>
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '�ռ��ַ���Ƴɹ�');return false;">[����]</a>
<?php if(!$space['self']) { if(helper_access::check_module('share')) { ?>
<a id="share_space" href="home.php?mod=spacecp&amp;ac=share&amp;type=space&amp;id=<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">[����]</a>
<?php } ?>
<a href="home.php?mod=rss&amp;uid=<?php echo $space['uid'];?>">[RSS]</a>
<?php } ?>
</span>
<span id="spacedescription" class="xs1 xw0 mtn"><?php echo $space['spacedescription'];?></span>
</h2><?php if($_G['adminid'] == 1 && empty($space['self'])) { $personalnv['items'] = array(); $personalnv['banitems'] = array(); $personalnv['nvhidden'] = 0;?><?php } $nvclass = !empty($personalnv['nvhidden']) ? ' class="mininv"' : '';?><div id="nv">
<ul<?php echo $nvclass;?>>
<?php if(empty($personalnv['nvhidden'])) { if(empty($personalnv['banitems']['index'])) { if($_G['adminid'] == 1 && $_G['setting']['allowquickviewprofile'] == 1) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index&amp;view=admin"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>�ռ���ҳ<?php } ?></a></li>
<?php } else { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>�ռ���ҳ<?php } ?></a></li>
<?php } } if(empty($personalnv['banitems']['feed']) && helper_access::check_module('feed')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=home&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['feed'])) { ?><?php echo $personalnv['items']['feed'];?><?php } else { ?>��̬<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['doing']) && helper_access::check_module('doing')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=doing&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['doing'])) { ?><?php echo $personalnv['items']['doing'];?><?php } else { ?>��¼<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['blog']) && helper_access::check_module('blog')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['blog'])) { ?><?php echo $personalnv['items']['blog'];?><?php } else { ?>��־<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['album']) && helper_access::check_module('album')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['album'])) { ?><?php echo $personalnv['items']['album'];?><?php } else { ?>���<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['follow']) && helper_access::check_module('follow')) { ?>
<li><a href="home.php?mod=follow&amp;uid=<?php echo $space['uid'];?>&amp;do=view"><?php if(!empty($personalnv['items']['follow'])) { ?><?php echo $personalnv['items']['follow'];?><?php } else { ?>�㲥<?php } ?></a></li>
<?php } if($_G['setting']['allowviewuserthread'] !== false && (empty($personalnv['banitems']['topic']))) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=thread&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['topic'])) { ?><?php echo $personalnv['items']['topic'];?><?php } else { ?>����<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['share']) && helper_access::check_module('share')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=share&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['share'])) { ?><?php echo $personalnv['items']['share'];?><?php } else { ?>����<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['wall']) && helper_access::check_module('wall')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall"><?php if(!empty($personalnv['items']['wall'])) { ?><?php echo $personalnv['items']['wall'];?><?php } else { ?>���԰�<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['profile'])) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=profile"><?php if(!empty($personalnv['items']['profile'])) { ?><?php echo $personalnv['items']['profile'];?><?php } else { ?>��������<?php } ?></a></li>
<?php } } ?>
</ul>
</div></div>

<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?>     <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
     <li><?php echo $module['url'];?></li>
     <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?><?php $mnid = getcurrentnav();?><ul id="navs_menu" class="p_pop topnav_pop" style="display:none;"><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { $nav_showmenu = strpos($nav['nav'], 'onmouseover="showMenu(');?>    <?php $nav_navshow = strpos($nav['nav'], 'onmouseover="navShow(')?>    <?php if($nav_hidden !== false || $nav_navshow !== false) { $nav['nav'] = preg_replace("/onmouseover\=\"(.*?)\"/i", '',$nav['nav'])?>    <?php } ?>
    <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<ul id="myspace_menu" class="p_pop" style="display:none;">
    <li><a href="home.php?mod=space">�ҵĿռ�</a></li><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm">
<div class="bm_h">
<?php if($space['self'] && helper_access::check_module('album')) { ?><span class="xi2 y"><a href="home.php?mod=spacecp&amp;ac=upload" class="addnew">�ϴ�ͼƬ</a></span><?php } ?>
<h1 class="mt">���</h1>
</div>
<div class="bm_c">
<?php } else { include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;view=me&amp;from=space">���</a>
</div>
</div>
<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div><?php include template('home/space_menu'); ?><div id="ct" class="ct1 wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<div class="bm_c">
<?php } ?>

<div class="tbmu" id="pic_block">
<div class="y">
<a href="javascript:;" onclick="imageRotate('pic', 1)"><img class="vm" src="<?php echo STATICURL;?>image/common/rleft.gif" /></a>
<a href="javascript:;" onclick="imageRotate('pic', 2)"><img class="vm" src="<?php echo STATICURL;?>image/common/rright.gif" /></a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $upid;?>&amp;goto=up#pic_block">��һ��</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $nextid;?>&amp;goto=down#pic_block" id="nextlink">��һ��</a><span class="pipe">|</span>
<?php if($_GET['play']) { ?>
<a href="javascript:;" id="playid" class="osld" onclick="playNextPic(false);">ֹͣ����</a>
<?php } else { ?>
<a href="javascript:;" id="playid" class="osld" onclick="playNextPic(true);">�õƲ���</a>
<?php } ?><span id="displayNum"></span>
</div>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;id=<?php echo $pic['albumid'];?>">&laquo; ����ͼƬ�б�</a>
<?php if($album['picnum']) { ?><span class="pipe">|</span>��ǰ�� <?php echo $sequence;?> ��<span class="pipe">|</span>�� <?php echo $album['picnum'];?> ��ͼƬ<?php } ?>&nbsp;
<?php if($album['friend']) { ?>
<span class="xg1"> &nbsp; <?php echo $friendsname[$value['friend']];?></span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_top'])) echo $_G['setting']['pluginhooks']['space_album_pic_top'];?>
</div>

<div class="vw pic">

<div id="photo_pic" class="c<?php if($pic['magicframe']) { ?> magicframe magicframe<?php echo $pic['magicframe'];?><?php } ?>">
<?php if($pic['magicframe']) { ?>
<div class="pic_lb1">
<table cellpadding="0" cellspacing="0" class="">
<tr>
<td class="frame_jiao frame_top_left"></td>
<td class="frame_x frame_top_middle"></td>
<td class="frame_jiao frame_top_right"></td>
</tr>
<tr>
<td class="frame_y frame_middle_left"></td>
<td class="frame_middle_middle">
<?php } ?><a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $nextid;?>&amp;goto=down#pic_block"><img src="<?php echo $pic['pic'];?>" id="pic" alt="" /></a>
<script type="text/javascript">
function createElem(e){
var obj = document.createElement(e);
obj.style.position = 'absolute';
obj.style.zIndex = '1';
obj.style.cursor = 'pointer';
obj.onmouseout = function(){ this.style.background = 'none';}
return obj;
}
function viewPhoto(){
var pager = createElem('div');
var pre = createElem('div');
var next = createElem('div');
var cont = $('photo_pic');
var tar = $('pic');
var space = 0;
var w = tar.width/2;
if(!!window.ActiveXObject && !window.XMLHttpRequest){
space = -(cont.offsetWidth - tar.width)/2;
}
var objpos = fetchOffset(tar);

pager.style.position = 'absolute';
pager.style.top = '0';
pager.style.left = objpos['left'] + 'px';
pager.style.top = objpos['top'] + 'px';
pager.style.width = tar.width + 'px';
pager.style.height = tar.height + 'px';
pre.style.left = 0;
next.style.right = 0;
pre.style.width = next.style.width = w + 'px';
pre.style.height = next.style.height = tar.height + 'px';
pre.innerHTML = next.innerHTML = '<img src="<?php echo IMGDIR;?>/emp.gif" width="' + w + '" height="' + tar.height + '" />';

pre.onmouseover = function(){ this.style.background = 'url(<?php echo IMGDIR;?>/pic-prev.png) no-repeat 0 100px'; }
pre.onclick = function(){ window.location = 'home.php?mod=space&uid=<?php echo $pic['uid'];?>&do=<?php echo $do;?>&picid=<?php echo $upid;?>&goto=up#pic_block'; }

next.onmouseover = function(){ this.style.background = 'url(<?php echo IMGDIR;?>/pic-next.png) no-repeat 100% 100px'; }
next.onclick = function(){ window.location = 'home.php?mod=space&uid=<?php echo $pic['uid'];?>&do=<?php echo $do;?>&picid=<?php echo $nextid;?>&goto=down#pic_block'; }

//cont.style.position = 'relative';
cont.appendChild(pager);
pager.appendChild(pre);
pager.appendChild(next);
}
$('pic').onload = function(){
viewPhoto();
}
</script>
<?php if($pic['magicframe']) { ?>
</td>
<td class="frame_y frame_middle_right"></td>
</tr>
<tr>
<td class="frame_jiao frame_bottom_left"></td>
<td class="frame_x frame_bottom_middle"></td>
<td class="frame_jiao frame_bottom_right"></td>
</tr>
</table>
</div>
<?php } ?>
</div>

<div class="pns mlnv vm mtm cl">
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $upid;?>&amp;goto=up#pic_block" class="btn" title="��һ��"><img src="<?php echo STATICURL;?>image/common/pic_nv_prev.gif" alt="��һ��"/></a><?php if(is_array($piclist)) foreach($piclist as $value) { ?><a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=album&amp;picid=<?php echo $value['picid'];?>#pic_block"><img alt="" src="<?php echo $value['pic'];?>"<?php if($value['picid']==$picid) { ?> class="a"<?php } ?> /></a><?php } ?><a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $nextid;?>&amp;goto=down#pic_block" class="btn" title="��һ��"><img src="<?php echo STATICURL;?>image/common/pic_nv_next.gif" alt="��һ��"/></a>
</div>

<div class="d bbs">
<p id="a_set_title" class="albim_pic_title"><?php if($pic['title']) { ?><?php echo $pic['title'];?><?php } else { echo substr($pic['filename'], 0, strrpos($pic['filename'], '.'));?><?php } if($pic['status'] == 1) { ?><b>(�����)</b><?php } ?></p>
<p class="xg1 xs1">
<?php if($pic['hot']) { ?><span class="hot">�ȶ� <em><?php echo $pic['hot'];?></em></span><?php } if($do=='event') { ?><a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>" target="_blank"><?php echo $pic['username'];?></a><?php } ?>
�ϴ��� <?php echo dgmdate($pic[dateline]);?> (<?php echo $pic['size'];?>)
</p>
<?php if(isset($_GET['exif'])) { if($exifs) { if(is_array($exifs)) foreach($exifs as $key => $value) { if($value) { ?><p><?php echo $key;?> : <?php echo $value;?></p><?php } } } else { ?>
<p>�� EXIF ��Ϣ</p>
<?php } } ?>
<div class="o cl bw0 xs1 pbn">
<?php if(helper_access::check_module('share')) { ?>
<a href="home.php?mod=spacecp&amp;ac=share&amp;type=pic&amp;id=<?php echo $pic['picid'];?>&amp;handlekey=sharealbumhk_<?php echo $pic['picid'];?>" id="a_share_<?php echo $pic['picid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr">����</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_op_extra'])) echo $_G['setting']['pluginhooks']['space_album_pic_op_extra'];?>
<?php if($pic['uid'] == $_G['uid']) { if($_G['magic']['frame']) { ?>
<img src="<?php echo STATICURL;?>image/magic/frame.small.gif" alt="frame" class="vm" />
<?php if($pic['magicframe']) { ?>
<a id="a_magic_frame" href="home.php?mod=spacecp&amp;ac=magic&amp;op=cancelframe&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>" onclick="ajaxmenu(event,this.id)">ȡ�����</a>
<?php } else { ?>
<a id="a_magic_frame" href="home.php?mod=magic&amp;mid=frame&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>" onclick="ajaxmenu(event,this.id, 1)">�����</a>
<?php } ?>
<span class="pipe">|</span>
<?php } } if($_G['uid'] == $pic['uid'] || checkperm('managealbum')) { ?>
<a href="home.php?mod=spacecp&amp;ac=album&amp;op=editpic&amp;albumid=<?php echo $pic['albumid'];?>&amp;picid=<?php echo $pic['picid'];?>">����ͼƬ</a><span class="pipe">|</span>
<a href="home.php?mod=spacecp&amp;ac=album&amp;op=edittitle&amp;albumid=<?php echo $pic['albumid'];?>&amp;picid=<?php echo $pic['picid'];?>&amp;handlekey=edittitlehk_<?php echo $pic['picid'];?>" id="a_set_title" onclick="showWindow(this.id, this.href, 'get', 0);">�༭˵��</a>
<?php } if(checkperm('managealbum')) { ?>
<span class="pipe">|</span>IP: <?php echo $pic['postip'];?><?php if($pic['port']) { ?>:<?php echo $pic['port'];?><?php } ?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=album&amp;picid=<?php echo $pic['picid'];?>&amp;op=edithot&amp;handlekey=picedithothk_<?php echo $pic['picid'];?>" id="a_hot_<?php echo $pic['picid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">�ȶ�</a>
<?php } ?>
<!--a href="home.php?mod=spacecp&amp;ac=common&amp;op=report&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>&amp;handlekey=reportpichk_<?php echo $pic['picid'];?>" id="a_report" onclick="showWindow(this.id, this.href, 'get', 0);">�ٱ�</a-->

<span class="z">
<a href="<?php echo $pic['pic'];?>" target="_blank">�鿴ԭͼ</a>
<?php if(!isset($_GET['exif'])) { ?>
<span class="pipe">|</span><a href="<?php echo $theurl;?>&exif=1">�鿴 EXIF ��Ϣ</a>
<?php } if($_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5)) { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=recommend&amp;idtype=picid&amp;id=<?php echo $pic['picid'];?>" onclick="showWindow('recommend', this.href, 'get', 0)">ģ������</a>
<?php } if($pic['uid'] != $_G['uid']) { ?>
<span class="pipe">|</span><a href="javascript:;" onclick="showWindow('miscreport<?php echo $pic['picid'];?>', 'misc.php?mod=report&rtype=pic&uid=<?php echo $pic['uid'];?>&rid=<?php echo $pic['picid'];?>', 'get', -1);return false;">�ٱ�</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_bottom'])) echo $_G['setting']['pluginhooks']['space_album_pic_bottom'];?>
</span>
</div>
</div>

</div>
<!--[diy=diyclicktop]--><div id="diyclicktop" class="area"></div><!--[/diy]-->
<?php if($album['friend'] != 3) { ?>
<div id="click_div"><?php include template('home/space_click'); ?></div>
<?php } ?>
<!--[diy=diycommenttop]--><div id="diycommenttop" class="area"></div><!--[/diy]-->
<div id="pic_comment" class="bm bw0 mtm mbm">
<h3 class="pbn bbs">
<?php if(!empty($list)) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $pic['uid'];?>&amp;do=<?php echo $do;?>&amp;picid=<?php echo $pic['picid'];?>#quickcommentform_<?php echo $picid;?>" onclick="if($('comment_message')){$('comment_message').focus();return false;}" class="y xi2 xw0">��������</a>
<?php } ?>
����
</h3>
<div id="comment">
<?php if($cid) { ?>
<div class="i">
��ǰֻ��ʾ����������صĵ������ۣ�<a href="<?php echo $theurl;?>#comment">����˴��鿴ȫ������</a>
</div>
<?php } ?>

<div id="comment_ul" class="xld xlda"><?php if(is_array($list)) foreach($list as $k => $value) { include template('home/space_comment_li'); } ?>
</div>
</div>
<?php if($multi) { ?><div class="pgs cl mtm"><?php echo $multi;?></div><?php } ?>
</div>
<?php if(helper_access::check_module('album')) { ?>
<form id="quickcommentform_<?php echo $picid;?>" name="quickcommentform_<?php echo $picid;?>" action="home.php?mod=spacecp&amp;ac=comment&amp;handlekey=qcpic_<?php echo $picid;?>" method="post" autocomplete="off" onsubmit="ajaxpost('quickcommentform_<?php echo $picid;?>', 'return_qcpic_<?php echo $picid;?>');doane(event);" class="bm bw0" style="width: 600px;">
<?php if($_G['uid']) { ?>
<p>
<span id="comment_face" onclick="showFace(this.id, 'comment_message');return false;" class="cur1"><img src="<?php echo IMGDIR;?>/facelist.gif" alt="facelist" class="vm" /></span>
<?php if(!empty($_G['setting']['pluginhooks']['space_album_pic_face_extra'])) echo $_G['setting']['pluginhooks']['space_album_pic_face_extra'];?>
<?php if($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])) { ?>
<a id="a_magic_doodle" href="home.php?mod=magic&amp;mid=doodle&amp;showid=comment_doodle&amp;target=comment_message" onclick="showWindow(this.id, this.href, 'get', 0)"><img src="<?php echo STATICURL;?>image/magic/doodle.small.gif" alt="doodle" class="vm" /> <?php echo $_G['setting']['magics']['doodle'];?></a>
<?php } ?>
</p>
<?php } ?>
<div class="tedt mtn mbn">
<div class="area">
<?php if($_G['uid'] || $_G['group']['allowcomment']) { ?>
<textarea id="comment_message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');" name="message" rows="3" class="pt"></textarea>
<?php } else { ?>
<div class="pt hm">����Ҫ��¼��ſ������� <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">��¼</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a></div>
<?php } ?>
</div>

</div>
<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm mbm sec"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } ?>
<p class="pns">
<input type="hidden" name="refer" value="<?php echo $theurl;?>" />
<input type="hidden" name="id" value="<?php echo $picid;?>" />
<input type="hidden" name="idtype" value="picid" />
<input type="hidden" name="commentsubmit" value="true" />
<input type="hidden" name="quickcomment" value="true" />
<button type="submit" name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"<?php if(!$_G['uid']&&!$_G['group']['allowcomment']) { ?> onclick="showWindow(this.id, this.form.action);return false;"<?php } ?>><strong>����</strong></button>
<span id="__quickcommentform_<?php echo $picid;?>"></span>
<span id="return_qcpic_<?php echo $picid;?>"></span>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</p>
</form>
<?php } ?>
</div>


<script type="text/javascript">
function succeedhandle_qcpic_<?php echo $picid;?>(url, msg, values) {
if(values['cid']) {
comment_add(values['cid']);
} else {
$('return_qcpic_<?php echo $picid;?>').innerHTML = msg;
}
<?php if($sechash) { if($secqaacheck) { ?>
updatesecqaa('<?php echo $sechash;?>');
<?php } if($seccodecheck) { ?>
updateseccode('<?php echo $sechash;?>');
<?php } } ?>
}
</script>

<script type="text/javascript">
var interval = 5000;
var timerId = -1;
var derId = -1;
var replay = false;
var num = 0;
var endPlay = false;
function forward() {
window.location.href = 'home.php?mod=space&uid=<?php echo $pic['uid'];?>&do=<?php echo $do;?>&picid=<?php echo $nextid;?>&goto=down&play=1#pic_block';
}
function derivativeNum() {
num++;
$('displayNum').innerHTML = '[' + (interval/1000 - num) + ']';
}
function playNextPic(stat) {
if(stat || replay) {
derId = window.setInterval('derivativeNum();', 1000);
$('displayNum').innerHTML = '[' + (interval/1000 - num) + ']';
$('playid').onclick = function (){replay = false;playNextPic(false);};
$('playid').innerHTML = 'ֹͣ����';
timerId = window.setInterval('forward();', interval);
} else {
replay = true;
num = 0;
if(endPlay) {
$('playid').innerHTML = '���²���';
} else {
$('playid').innerHTML = '�õƲ���';
}
$('playid').onclick = function (){playNextPic(true);};
$('displayNum').innerHTML = '';
window.clearInterval(timerId);
window.clearInterval(derId);
}
}
<?php if($_GET['play']) { if($sequence && $album['picnum']) { ?>
if(<?php echo $sequence;?> == <?php echo $album['picnum'];?>) {
endPlay = true;
playNextPic(false);
} else {
playNextPic(true);
}
<?php } else { ?>
playNextPic(true);
<?php } } ?>

function update_title() {
$('title_form').style.display='';
}

var elems = selector('dd[class~=magicflicker]');
for(var i=0; i<elems.length; i++){
magicColor(elems[i]);
}
</script>

<!--end bm-->

<?php if(!$_G['setting']['homepagestyle']) { ?><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><?php } ?>
</div>
</div>
<?php if($_G['setting']['homepagestyle']) { ?>
<div class="sd"><div id="pcd" class="bm cl"><?php $encodeusername = rawurlencode($space[username]);?><div class="bm_c">
<div class="hm">
<p><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>" class="avtm"><?php echo avatar($space[uid],middle);?></a></p>
<h2 class="xs2"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a></h2>
</div>
<ul class="xl xl2 cl ul_list">
<?php if($space['self']) { if($_G['setting']['homepagestyle']) { ?>
<li class="ul_diy"><a href="home.php?mod=space&amp;do=index&amp;diy=yes">װ��ռ�</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_msg"><a href="home.php?mod=space&amp;do=wall">�鿴����</a></li>
<?php } ?>
<li class="ul_avt"><a href="home.php?mod=spacecp&amp;ac=avatar">�༭ͷ��</a></li>
<li class="ul_profile"><a href="home.php?mod=spacecp&amp;ac=profile">��������</a></li>
<?php } else { if(helper_access::check_module('follow')) { ?>
<li class="ul_broadcast"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>">�鿴�㲥</a></li>
<?php } if(helper_access::check_module('follow') && $space['uid'] != $_G['uid']) { ?>
<li class="ul_flw"><?php $follow = 0;?><?php $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);?><?php if(!$follow) { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $space['uid'];?>">����TA</a>
<?php } else { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $space['uid'];?>">ȡ������</a>
<?php } ?>
</li>
<?php } require_once libfile('function/friend');$isfriend=friend_check($space[uid]);?><?php if(!$isfriend) { ?>
<li class="ul_add"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=addfriendhk_<?php echo $space['uid'];?>" id="a_friend_li_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">��Ϊ����</a></li>
<?php } else { ?>
<li class="ul_ignore"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=ignorefriendhk_<?php echo $space['uid'];?>" id="a_ignore_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">�������</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_contect"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall">��������</a></li>
<?php } ?>
<li class="ul_poke"><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=propokehk_<?php echo $space['uid'];?>" id="a_poke_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">����к�</a></li>

<li class="ul_pm"><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $space['uid'];?>&amp;touid=<?php echo $space['uid'];?>&amp;pmid=0&amp;daterange=2" id="a_sendpm_<?php echo $space['uid'];?>" onclick="showWindow('showMsgBox', this.href, 'get', 0)">������Ϣ</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { ?>
<hr class="da mtn m0">
<ul class="ptn xl xl2 cl">
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<li>
<?php if(checkperm('allowbanuser')) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">�û�����</a>
<?php } else { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">�û�����</a>
<?php } ?>
</li>
<?php } if($_G['adminid'] == 1) { ?>
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $encodeusername;?>" id="umanageli" onmouseover="showMenu(this.id)" class="showmenu">���ݹ���</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<ul id="usermanageli_menu" class="p_pop" style="width: 80px; display:none;">
<?php if(checkperm('allowbanuser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">��ֹ�û�</a></li>
<?php } if(checkperm('allowedituser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">�༭�û�</a></li>
<?php } ?>
</ul>
<?php } if($_G['adminid'] == 1) { ?>
<ul id="umanageli_menu" class="p_pop" style="width: 80px; display:none;">
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;searchsubmit=1&amp;do=search&amp;users=<?php echo $encodeusername;?>" target="_blank">��������</a></li>
<?php if(helper_access::check_module('doing')) { ?>
<li><a href="admin.php?action=doing&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">�����¼</a></li>
<?php } if(helper_access::check_module('blog')) { ?>
<li><a href="admin.php?action=blog&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">������־</a></li>
<?php } if(helper_access::check_module('feed')) { ?>
<li><a href="admin.php?action=feed&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">����̬</a></li>
<?php } if(helper_access::check_module('album')) { ?>
<li><a href="admin.php?action=album&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">�������</a></li>
<li><a href="admin.php?action=pic&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">����ͼƬ</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li><a href="admin.php?action=comment&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;authorid=<?php echo $space['uid'];?>" target="_blank">��������</a></li>
<?php } if(helper_access::check_module('share')) { ?>
<li><a href="admin.php?action=share&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">�������</a></li>
<?php } if(helper_access::check_module('group')) { ?>
<li><a href="admin.php?action=threads&amp;operation=group&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Ⱥ������</a></li>
<li><a href="admin.php?action=prune&amp;searchsubmit=1&amp;detail=1&amp;operation=group&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">Ⱥ������</a></li>
<?php } ?>
</ul>
<?php } } ?>
</div>
</div>
</div>
<script type="text/javascript">
function succeedhandle_followmod(url, msg, values) {
var fObj = $('followmod');
if(values['type'] == 'add') {
fObj.innerHTML = 'ȡ������';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
} else if(values['type'] == 'del') {
fObj.innerHTML = '����TA';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid'];
}
}
</script><?php } ?>
</div>
</div>

<?php if(!$_G['setting']['homepagestyle']) { ?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<?php } include template('common/footer'); ?>