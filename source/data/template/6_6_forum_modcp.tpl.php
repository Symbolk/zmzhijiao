<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('modcp');?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['2']['filename'];?>"><?php echo $_G['setting']['navs']['2']['navname'];?></a> <em>&rsaquo;</em>
<a href="forum.php?mod=modcp"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a>
</div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<?php if($script == 'noperm') { ?>
<div class="bm bw0">
<h1 class="mt">ϵͳ����</h1>
<p>��Ǹ�����޴�Ȩ��</p>
<p class="notice">��̳����Ա�ڡ�������塱��Ȩ�޺ͳ�������������ͬ�������Ҫ���๦�ܣ������ <a href="admin.php?mod=forum" target="_blank"><u>��������</u></a> </p>
</div>
<?php } elseif(!empty($modtpl)) { include(template($modtpl));?><?php } ?>
</div>
<div class="appl">
<div class="tbn">
<h2 class="mt bbda"><?php echo $_G['setting']['navs']['2']['navname'];?>����</h2>
<ul>
<li<?php if($_GET['action'] == 'home') { ?> class="a cl"<?php } else { ?> class="cl"<?php } ?>><span class="y mtn"><?php echo $notenum;?></span><a href="<?php echo $cpscript;?>?mod=modcp&action=home<?php echo $forcefid;?>">�ڲ�����</a></li>
<?php if($modforums['fids']) { if($_G['group']['allowmodpost'] || $_G['group']['allowmoduser']) { ?>
<li<?php if($_GET['action'] == 'moderate') { ?> class="a cl"<?php } else { ?> class="cl"<?php } ?>><span class="y mtn"><?php echo $modnum;?></span><a href="<?php echo $cpscript;?>?mod=modcp&action=moderate&op=<?php if($_G['group']['allowmodpost']) { ?>threads<?php echo $forcefid;?><?php } else { ?>members<?php } ?>">���</a></li>
<?php } } if(!empty($_G['setting']['plugins']['modcp_base'])) { if(is_array($_G['setting']['plugins']['modcp_base'])) foreach($_G['setting']['plugins']['modcp_base'] as $id => $module) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=plugin&op=base&id=<?php echo $id;?><?php echo $forcefid;?>"><?php echo $module['name'];?></a></li>
<?php } } if($_G['group']['allowedituser'] || $_G['group']['allowbanuser'] || $_G['group']['allowbanvisituser'] || $_G['group']['allowbanip']) { if($_G['group']['allowbanuser'] || $_G['group']['allowbanvisituser']) { ?><li<?php if($_GET['action'] == 'member' && $op == 'ban') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=member&op=ban<?php echo $forcefid;?>">��ֹ�û�</a></li><?php } if($_G['group']['allowbanip']) { ?><li<?php if($_GET['action'] == 'member' && $op == 'ipban') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=member&op=ipban<?php echo $forcefid;?>">��ֹ IP</a></li><?php } if($modforums['fids']) { ?><li<?php if($_GET['action'] == 'forumaccess') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=forumaccess<?php echo $forcefid;?>">�û�Ȩ��</a></li><?php } if($_G['group']['allowedituser']) { ?><li<?php if($_GET['action'] == 'member' && $op == 'edit') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=member&op=edit<?php echo $forcefid;?>">�༭�û�</a></li><?php } } if($modforums['fids']) { ?>
<li<?php if($_GET['action'] == 'thread' || $_GET['action'] == 'recyclebin') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=thread&op=thread<?php echo $forcefid;?>">�������</a></li>
<?php if($_G['group']['allowrecommendthread']) { ?><li<?php if($_GET['action'] == 'forum' && $op == 'recommend') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=forum&op=recommend&show=all<?php echo $forcefid;?>">�Ƽ�����</a></li><?php } if($_G['group']['alloweditforum']) { ?><li<?php if($_GET['action'] == 'forum' && $op == 'editforum') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=forum&op=editforum<?php echo $forcefid;?>">���༭</a></li><?php } } if($_G['group']['allowpostannounce'] || $_G['group']['allowviewlog']) { if($_G['group']['allowpostannounce']) { ?><li<?php if($_GET['action'] == 'announcement') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=announcement<?php echo $forcefid;?>">����</a></li><?php } if($_G['group']['allowviewlog']) { ?><li<?php if($_GET['action'] == 'log') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=log<?php echo $forcefid;?>">������־</a></li><?php } } if(!empty($_G['setting']['plugins']['modcp_tools'])) { if(is_array($_G['setting']['plugins']['modcp_tools'])) foreach($_G['setting']['plugins']['modcp_tools'] as $id => $module) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=plugin&op=tools&id=<?php echo $id;?>"><?php echo $module['name'];?></a></li>
<?php } } ?>
<li<?php if($_GET['action'] == 'report') { ?> class="a"<?php } ?>><a href="<?php echo $cpscript;?>?mod=modcp&action=report<?php echo $forcefid;?>">����ٱ�</a></li>
<li><a href="<?php if($forcefid) { ?>forum.php?mod=forumdisplay<?php echo $forcefid;?><?php } else { ?>forum.php<?php } ?>">������̳</a></li>
<li><a href="<?php echo $cpscript;?>?mod=modcp&action=logout">�˳�</a></li>
</ul>
</div>
</div>
</div><?php include template('common/footer'); ?>