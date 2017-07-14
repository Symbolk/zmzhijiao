<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('group_my');?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em><a href="group.php?mod=index"><?php echo $_G['setting']['navs']['3']['navname'];?></a><em>&rsaquo;</em><a href="group.php?mod=my"><?php echo $_G['username'];?>的<?php echo $_G['setting']['navs']['3']['navname'];?></a>
</div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['my_header'])) echo $_G['setting']['pluginhooks']['my_header'];?>

<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2 wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="tb cl" style="margin-top: 0;">
<ul>
<li <?php echo $actives['groupthread'];?>><a href="group.php?mod=my&amp;view=groupthread"><?php echo $_G['setting']['navs']['3']['navname'];?>话题</a></li>
<li <?php echo $actives['mythread'];?>><a href="group.php?mod=my&amp;view=mythread">我的话题</a></li>
<li <?php echo $actives['join'];?>><a href="group.php?mod=my&amp;view=join">我参与的</a></li>
<li <?php echo $actives['manager'];?>><a href="group.php?mod=my&amp;view=manager">我管理的</a></li>
<li class="y"><a href="group.php?mod=index" class="groupbtn xi2"><span>所有<?php echo $_G['setting']['navs']['3']['navname'];?>&nbsp;&rsaquo;</span></a></li>

<li class="y">
                	<a onclick="showWindow('attentiongroup', 'group.php?mod=attentiongroup', 'get', 0);" class="groupbtn xi2"><span>关注<?php echo $_G['setting']['navs']['3']['navname'];?></span></a>
                </li>
<script language="javascript">
function succeedhandle_attentiongroup(locationhref) {
hideWindow('attentiongroup');
location.href = locationhref;
} 
</script>

</ul>
</div>
<?php if($view == 'groupthread' || $view == 'mythread') { ?>
<ul class="ttp cl">
<li id="ttp_all"<?php if(empty($typeid)) { ?> class="xw1 a"<?php } ?>><a href="group.php?mod=my&amp;view=<?php echo $view;?>">全部</a></li><?php if(is_array($usergroups['grouptype'])) foreach($usergroups['grouptype'] as $type) { ?><li<?php if($typeid == $type['fid']) { ?> class="xw1 a"<?php } ?>><a href="group.php?mod=my&amp;view=<?php echo $view;?><?php if($typeid != $type['fid']) { ?>&amp;typeid=<?php echo $type['fid'];?><?php } ?>"><?php echo $type['name'];?></a></li>
<?php } ?>
</ul>

<?php if($attentionthread) { if(is_array($attentionthread)) foreach($attentionthread as $groupid => $threads) { ?><div class="bm tl">
<div class="th">
<table cellspacing="0" cellpadding="0" class="th">
<tr>
<td colspan="2"><a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" target="_blank" class="xw1"><?php echo $usergroups['groups'][$groupid];?></a></td>
<td class="num">回复/查看</td>
<td class="by">最后发表</td>
</tr>
</table>
</div>
<div class="bm_c">
<table cellspacing="0" cellpadding="0"><?php if(is_array($threads)) foreach($threads as $tid => $thread) { ?><tr>
<td class="icn">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>" title="!open_new_window!" target="_blank">
<?php if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" /></a>
<?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<img src="<?php echo IMGDIR;?>/pin_<?php echo $thread['displayorder'];?>.gif" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" /></a>
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/folder_<?php echo $thread['folder'];?>.gif" /></a>
<?php } ?>
</td>
<td><a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>" target="_blank"><?php echo $thread['subject'];?></a></td>
<td class="num">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>" class="xi2"><?php echo $thread['replies'];?></a>
<em><?php echo $thread['views'];?></em>
</td>
<td class="by">
<cite><?php if($thread['lastposter']) { ?><a href="home.php?mod=space&amp;username=<?php echo $thread['lastposter'];?>"><?php echo $thread['lastposter'];?></a><?php } else { ?>匿名<?php } ?></cite>
<em><a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>&amp;page=<?php echo max(1, $thread['pages']);; ?>"><?php echo $thread['lastpost'];?></a></em>
</td>
</tr>
<?php } ?>
</table>
<div class="ptm"><a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" class="xi2">更多...</a></div>
</div>
</div>
<?php } } ?>

<div class="bm tl">
<div class="th">
<table cellpadding="0" cellspacing="0" class="th">
<tr>
<td colspan="2">
<?php if($view == 'groupthread') { ?>新话题(最近30天)<?php } else { ?>我在<?php echo $_G['setting']['navs']['3']['navname'];?>中发表的话题<?php } ?>
</td>
<td class="by"><?php echo $_G['setting']['navs']['3']['navname'];?></td>
<td class="num">回复/查看</td>
<td class="by">最后发表</td>
</tr>
</table>
</div>
<div class="bm_c">
<table cellspacing="0" cellpadding="0">
<?php if($groupthreadlist) { if(is_array($groupthreadlist)) foreach($groupthreadlist as $tid => $thread) { ?><tr>
<td class="icn">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>" title="!open_new_window!" target="_blank">
<?php if($thread['folder'] == 'lock') { ?>
<img src="<?php echo IMGDIR;?>/folder_lock.gif" /></a>
<?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
<img src="<?php echo IMGDIR;?>/pin_<?php echo $thread['displayorder'];?>.gif" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" /></a>
<?php } else { ?>
<img src="<?php echo IMGDIR;?>/folder_<?php echo $thread['folder'];?>.gif" /></a>
<?php } ?>
</td>
<td><a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>" target="_blank"><?php echo $thread['subject'];?></a></td>
<td class="by"><a href="forum.php?mod=group&amp;fid=<?php echo $thread['fid'];?>" target="_blank" class="xg1"><?php echo $thread['groupname'];?></a></td>
<td class="num">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>" class="xi2"><?php echo $thread['replies'];?></a>
<em><?php echo $thread['views'];?></em>
</td>
<td class="by">
<cite><?php if($thread['lastposter']) { ?><a href="home.php?mod=space&amp;username=<?php echo $thread['lastposter'];?>"><?php echo $thread['lastposter'];?></a><?php } else { ?>匿名<?php } ?></cite>
<em><a href="forum.php?mod=viewthread&amp;tid=<?php echo $tid;?>&amp;page=<?php echo max(1, $thread['pages']);; ?>"><?php echo $thread['lastpost'];?></a></em>
</td>
</tr>
<?php } } else { ?>
<tr><td colspan="4"><div class="emp">还没有相关的帖子。</div></td></tr>
<?php } ?>
</table>
</div>
</div>

<?php if($multipage) { ?><div class="pgs cl"><?php echo $multipage;?></div><?php } } elseif($view == 'manager' || $view == 'join') { if($grouplist) { ?>
<div class="bm bml bw0">
<div class="bm_h cl">
<h2><?php if($view == 'manager') { ?>我管理的<?php echo $_G['setting']['navs']['3']['navname'];?> <?php } elseif($view == 'join') { ?>我加入的<?php echo $_G['setting']['navs']['3']['navname'];?> <?php } ?></h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($grouplist)) foreach($grouplist as $groupid => $group) { ?><li>
<a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" title="<?php echo $group['name'];?>" class="avt"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" /></a>
<p><?php if($group['flevel'] == '-1') { ?>(待审核)<?php } ?><a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" title="<?php echo $group['name'];?>"><?php echo $group['name'];?></a></p>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php if($multipage) { ?><div class="pgs"><?php echo $multipage;?></div><?php } } else { ?>
<div class="emp"><?php if($view == 'manager') { ?>您还没创建<?php echo $_G['setting']['navs']['3']['navname'];?>，<a href="forum.php?mod=group&amp;action=create">现在创建</a> <?php } elseif($view == 'join') { ?>您还没有加入任何<?php echo $_G['setting']['navs']['3']['navname'];?>，<a href="group.php?mod=index">找喜欢的<?php echo $_G['setting']['navs']['3']['navname'];?></a>。 <?php } ?></div>
<?php } } ?>
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
<?php if(!empty($_G['setting']['pluginhooks']['my_bottom'])) echo $_G['setting']['pluginhooks']['my_bottom'];?>

</div>
<div class="sd">
<div class="drag">
<!--[diy=diysidebtntop]--><div id="diysidebtntop" class="area"></div><!--[/diy]-->
</div>
<?php if(helper_access::check_module('group')) { ?>
<div class="hm pbm">
<a href="forum.php?mod=group&amp;action=create" id="create_group_btn">创建<?php echo $_G['setting']['navs']['3']['navname'];?></a>
</div>
<?php } ?>
<div class="drag">
<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['my_side_top'])) echo $_G['setting']['pluginhooks']['my_side_top'];?>
<?php if($randgroup) { ?>
<div class="bm">
<div class="bm_h cl">
<h2>热门<?php echo $_G['setting']['navs']['3']['navname'];?></h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($randgroup)) foreach($randgroup as $key => $group) { ?><li>
<a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" class="avt" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" /></a>
<p><a href="forum.php?mod=group&amp;fid=<?php echo $group['fid'];?>" title="<?php echo $group['name'];?>" target="_blank"><?php echo $group['name'];?></a></p>
</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
<div class="drag">
<!--[diy=diysidemiddle]--><div id="diysidemiddle" class="area"></div><!--[/diy]-->
</div>
<div class="bm">
<div class="bm_h cl">
<h2>好友加入的<?php echo $_G['setting']['navs']['3']['navname'];?></h2>
</div>
<div class="bm_c">
<ul class="ml mls cl"><?php if(is_array($friendgrouplist)) foreach($friendgrouplist as $groupid => $group) { ?><li>
<a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" title="<?php echo $group['name'];?>" class="avt" target="_blank"><img src="<?php echo $group['icon'];?>" alt="<?php echo $group['name'];?>" /></a>
<p><a href="forum.php?mod=group&amp;fid=<?php echo $groupid;?>" title="<?php echo $group['name'];?>" target="_blank"><?php echo $group['name'];?></a></p>
</li>
<?php } ?>
</ul>
</div>
</div>
<div class="drag">
<!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
</div>
<?php if(!empty($_G['setting']['pluginhooks']['my_side_bottom'])) echo $_G['setting']['pluginhooks']['my_side_bottom'];?>
</div>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>