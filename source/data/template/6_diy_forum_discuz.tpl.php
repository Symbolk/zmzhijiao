<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?><?php include template('common/header'); if(empty($gid)) { ?><?php echo adshow("text/wp a_t");?><?php } ?>
<style id="diy_style" type="text/css"></style>

<div id="ct" class="cl<?php if($_G['setting']['forumallowside']) { ?> ct2<?php } ?>">
  <?php if(empty($gid)) { ?>
  <div id="chart" class="bm bw0 cl">
    <p class="chart z">今日: <em><?php echo $todayposts;?></em><span class="pipe">|</span>昨日: <em><?php echo $postdata['0'];?></em><span class="pipe">|</span>帖子: <em><?php echo $posts;?></em><span class="pipe">|</span>会员: <em><?php echo $_G['cache']['userstats']['totalmembers'];?></em>
      <?php if($_G['cache']['userstats']['newsetuser']) { ?>
      <span class="pipe">|</span>欢迎新会员: <em><a href="home.php?mod=space&amp;username=<?php echo rawurlencode($_G['cache']['userstats']['newsetuser']); ?>" target="_blank" class="xi2"><?php echo $_G['cache']['userstats']['newsetuser'];?></a></em>
      <?php } ?>
    </p>
    <div class="y">
      <?php if(!empty($_G['setting']['pluginhooks']['index_nav_extra'])) echo $_G['setting']['pluginhooks']['index_nav_extra'];?>
      <?php if($_G['uid']) { ?>
      <a href="forum.php?mod=guide&amp;view=my" title="我的帖子" class="xi2">我的帖子</a>
      <?php } ?>
      <?php if(!empty($_G['setting']['search']['forum']['status'])) { ?>
      <?php if($_G['uid']) { ?>
      <span class="pipe">|</span>
      <?php } ?>
      <a href="forum.php?mod=guide&amp;view=new" title="最新回复" class="xi2">最新回复</a>
      <?php } ?>
    </div>
  </div>
  <?php } ?>
  <!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->

<?php if(empty($gid)) { ?>
<div class="wp">
  <div class="busmn <?php if($_G['setting']['forumallowside']) { ?> busforuml <?php } else { ?> bus_w99 <?php } ?>">
  <script language="javascript">
function bus_tab(area,id) {
var tabArea=document.getElementById(area);
var contents=tabArea.childNodes;
for(i=0; i<contents.length; i++) {
if(contents[i].className=='tabcontent'){contents[i].style.display='none';}
}
document.getElementById(id).style.display='';

var tabs=document.getElementById(area+'tabs').getElementsByTagName('li');
for(i=0; i<tabs.length; i++) { tabs[i].className='tab'; }
document.getElementById(id+'tab').className='tab curtab';
document.getElementById(id+'tab').blur();
}

</script>
<div class="bus_box">
<div class="bus_show cl">
<div class="bus_show_pic busbb">
<!--[diy=diy_bus_recommended_pic]--><div id="diy_bus_recommended_pic" class="area"></div><!--[/diy]-->
</div>
</div></div>
  	<?php } ?>
  	<div class="clear"></div>
  
    <?php if(!empty($_G['setting']['grid']['showgrid'])) { ?>
    <!-- index four grid -->
    <div class="fl bm">
      <div class="bm bmw cl bus_box">
        <div id="category_grid" class="bm_c" >
          <table cellspacing="0" cellpadding="0">
            <tr>
              <?php if(!$_G['setting']['grid']['gridtype']) { ?>
              <td valign="top" class="category_l1"><div class="newimgbox">
                  <h4><span class="tit_newimg"></span>最新图片</h4>
                  <div class="module cl slidebox_grid" style="width:218px">
                    <script type="text/javascript">
var slideSpeed = 5000;
var slideImgsize = [218,200];
var slideBorderColor = '<?php echo $_G['style']['specialborder'];?>';
var slideBgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchColor = '<?php echo $_G['style']['tabletext'];?>';
var slideSwitchbgColor = '<?php echo $_G['style']['commonbg'];?>';
var slideSwitchHiColor = '<?php echo $_G['style']['specialborder'];?>';<?php $k = 1;?><?php if(is_array($grids['slide'])) foreach($grids['slide'] as $stid => $svalue) { ?>slideImgs[<?php echo $k; ?>] = '<?php echo $svalue['image'];?>';
slideImgLinks[<?php echo $k; ?>] = '<?php echo $svalue['url'];?>';
slideImgTexts[<?php echo $k; ?>] = '<?php echo $svalue['subject'];?>';<?php $k++;?><?php } ?>
</script>
                    <script src="<?php echo $_G['setting']['jspath'];?>forum_slide.js?<?php echo VERHASH;?>" type="text/javascript"></script>
                  </div>
                </div></td>
              <?php } ?>
              <td valign="top" class="category_l2"><div class="subjectbox">
                  <h4><span class="tit_subject"></span>最新主题</h4>
                  <ul class="category_newlist">
                    <?php if(is_array($grids['newthread'])) foreach($grids['newthread'] as $thread) { ?>                    <?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { ?>
                    <?php $thread[tid]=$thread[closed];?>                    <?php } ?>
                    <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
                    <?php } ?>
                  </ul>
                </div></td>
              <td valign="top" class="category_l3"><div class="replaybox">
                  <h4><span class="tit_replay"></span>最新回复</h4>
                  <ul class="category_newlist">
                    <?php if(is_array($grids['newreply'])) foreach($grids['newreply'] as $thread) { ?>                    <?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { ?>
                    <?php $thread[tid]=$thread[closed];?>                    <?php } ?>
                    <li><a href="forum.php?mod=redirect&amp;tid=<?php echo $thread['tid'];?>&amp;goto=lastpost#lastpost"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?>tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
                    <?php } ?>
                  </ul>
                </div></td>
              <td valign="top" class="category_l3"><div class="hottiebox">
                  <h4><span class="tit_hottie"></span>热帖</h4>
                  <ul class="category_newlist">
                    <?php if(is_array($grids['hot'])) foreach($grids['hot'] as $thread) { ?>                    <?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { ?>
                    <?php $thread[tid]=$thread[closed];?>                    <?php } ?>
                    <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
                    <?php } ?>
                  </ul>
                </div></td>
              <?php if($_G['setting']['grid']['gridtype']) { ?>
              <td valign="top" class="category_l4"><div class="goodtiebox">
                  <h4><span class="tit_goodtie"></span>精华帖子</h4>
                  <ul class="category_newlist">
                    <?php if(is_array($grids['digest'])) foreach($grids['digest'] as $thread) { ?>                    <?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { ?>
                    <?php $thread[tid]=$thread[closed];?>                    <?php } ?>
                    <li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;extra=<?php echo $extra;?>"<?php if($thread['highlight']) { ?> <?php echo $thread['highlight'];?><?php } if($_G['setting']['grid']['showtips']) { ?> tip="标题: <strong><?php echo $thread['oldsubject'];?></strong><br/>作者: <?php echo $thread['author'];?> (<?php echo $thread['dateline'];?>)<br/>查看/回复: <?php echo $thread['views'];?>/<?php echo $thread['replies'];?>" onmouseover="showTip(this)"<?php } else { ?> title="<?php echo $thread['oldsubject'];?>"<?php } if($_G['setting']['grid']['targetblank']) { ?> target="_blank"<?php } ?>><?php echo $thread['subject'];?></a></li>
                    <?php } ?>
                  </ul>
                </div></td>
              <?php } ?>
          </table>
        </div>
      </div>
    </div>
    <!-- index four grid end -->
    <?php } ?>
    <?php if(!empty($_G['setting']['pluginhooks']['index_top'])) echo $_G['setting']['pluginhooks']['index_top'];?>
    <?php if(!empty($_G['cache']['heats']['message'])) { ?>
    <div class="bm">
      <div class="bm_h cl">
        <h2><?php echo $_G['setting']['navs']['2']['navname'];?>热点</h2>
      </div>
      <div class="bm_c cl">
        <div class="heat z">
          <?php if(is_array($_G['cache']['heats']['message'])) foreach($_G['cache']['heats']['message'] as $data) { ?>          <dl class="xld">
            <dt>
              <?php if($_G['adminid'] == 1) { ?>
              <a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a>
              <?php } ?>
              <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></dt>
            <dd><?php echo $data['message'];?></dd>
          </dl>
          <?php } ?>
        </div>
        <ul class="xl xl1 heatl">
          <?php if(is_array($_G['cache']['heats']['subject'])) foreach($_G['cache']['heats']['subject'] as $data) { ?>          <li>
            <?php if($_G['adminid'] == 1) { ?>
            <a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a>
            <?php } ?>
            &middot; <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <?php } ?>
    <?php if(!empty($_G['setting']['pluginhooks']['index_catlist_top'])) echo $_G['setting']['pluginhooks']['index_catlist_top'];?>
    <div class="fl bm">
      <?php if(!empty($collectiondata['follows'])) { ?>
      <?php $forumscount = count($collectiondata['follows']);?>      <?php $forumcolumns = 4;?>      <?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?>      <div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_-1_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-1'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_-1');" /> </span>
          <h2 class="tt"><a href="forum.php?mod=collection&amp;op=my">我订阅的专辑</a></h2>
        </div>
        <div id="category_-1" class="bm_c" style="<?php echo $collapse['category_-1']; ?>">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <?php $ctorderid = 0;?>              <?php if(is_array($collectiondata['follows'])) foreach($collectiondata['follows'] as $key => $colletion) { ?>              <?php if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
            </tr>
            <?php if($ctorderid < $forumscount) { ?>
            <tr class="fl_row">
              <?php } ?>
              <?php } ?>
              <td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>><div class="fl_icn_g"> <a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/forum<?php if($followcollections[$key]['lastvisit'] < $colletion['lastupdate']) { ?>_new<?php } ?>.gif" alt="<?php echo $colletion['name'];?>" /></a> </div>
                <dl>
                  <dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
                  <dd><em>主题:
                    <?php echo dnumber($colletion['threadnum']); ?>                    </em>, <em>评论:
                    <?php echo dnumber($colletion['commentnum']); ?>                    </em></dd>
                  <dd>
                    <?php if($colletion['lastpost']) { ?>
                    <?php if($forumcolumns < 3) { ?>
                    <a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2">
                    <?php echo cutstr($colletion['lastsubject'], 30); ?>                    </a> <cite>
                    <?php echo dgmdate($colletion[lastposttime]);?>                    <?php if($colletion['lastposter']) { ?>
                    <?php echo $colletion['lastposter'];?>
                    <?php } else { ?>
                    <?php echo $_G['setting']['anonymoustext'];?>
                    <?php } ?>
                    </cite>
                    <?php } else { ?>
                    <a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">最后发表:
                    <?php echo dgmdate($colletion[lastposttime]);?>                    </a>
                    <?php } ?>
                    <?php } else { ?>
                    从未
                    <?php } ?>
                  </dd>
                  <?php if(!empty($_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]];?>
                </dl></td>
              <?php $ctorderid++;?>              <?php } ?>
              <?php if(($columnspad = $ctorderid % $forumcolumns) > 0) { ?>
              <?php echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; ?>              <?php } ?>
            </tr>
          </table>
        </div>
      </div>
      <?php } ?>
      <?php if(empty($gid) && !empty($forum_favlist)) { ?>
      <?php $forumscount = count($forum_favlist);?>      <?php $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;?>      <?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?>      <div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_0_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_0'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_0');" /> </span>
          <h2 class="tt"><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">我收藏的版块</a></h2>
        </div>
        <div id="category_0" class="bm_c" style="<?php echo $collapse['category_0']; ?>">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <?php $favorderid = 0;?>              <?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { ?>              <?php if($favforumlist[$favorite['id']]) { ?>
              <?php $forum=$favforumlist[$favorite[id]];?>              <?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?>              <?php if($forumcolumns>1) { ?>
              <?php if($favorderid && ($favorderid % $forumcolumns == 0)) { ?>
            </tr>
            <?php if($favorderid < $forumscount) { ?>
            <tr class="fl_row">
              <?php } ?>
              <?php } ?>
              <div class="fl_g" style="width:50%; padding:10px 0; float: left; border-bottom:1px dashed #ddd;"><div class="fl_icn_g" style="width:100px">
                  <?php if($forum['icon']) { ?>
                  <?php echo $forum['icon'];?>
                  <?php } else { ?>
                  <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo $_G['style']['styleimgdir'];?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                  <?php } ?>
                </div>
                <dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left:100px"<?php } ?>>
                <dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a>
                  <?php if($forum['todayposts'] && !$forum['redirect']) { ?>
                  <em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em>
                  <?php } ?>
                </dt>
                <?php if(empty($forum['redirect'])) { ?>
                <dd><em>主题:
                  <?php echo dnumber($forum['threads']); ?>                  </em>, <em>帖数:
                  <?php echo dnumber($forum['posts']); ?>                  </em></dd>
                <?php } ?>
                <dd>
                  <?php if($forum['permission'] == 1) { ?>
                  私密版块
                  <?php } else { ?>
                  <?php if($forum['redirect']) { ?>
                  <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                  <?php } elseif(is_array($forum['lastpost'])) { ?>
                  <?php if($forumcolumns < 3) { ?>
                  <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2">
                  <?php echo cutstr($forum['lastpost']['subject'], 30); ?>                  </a> <cite><?php echo $forum['lastpost']['dateline'];?>
                  <?php if($forum['lastpost']['author']) { ?>
                  <?php echo $forum['lastpost']['author'];?>
                  <?php } else { ?>
                  <?php echo $_G['setting']['anonymoustext'];?>
                  <?php } ?>
                  </cite>
                  <?php } else { ?>
                  <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo $forum['lastpost']['dateline'];?></a>
                  <?php } ?>
                  <?php } else { ?>
                  从未
                  <?php } ?>
                  <?php } ?>
                </dd>
                <?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
                </dl>
              </div>
              <?php $favorderid++;?>              <?php } else { ?>
              <td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width:<?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>><?php if($forum['icon']) { ?>
                <?php echo $forum['icon'];?>
                <?php } else { ?>
                <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo $_G['style']['styleimgdir'];?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                <?php } ?>
              </td>
              <td class="bus_md" style="margin-left:<?php echo $forum['extra']['iconwidth'];?>px;"><h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a>
                  <?php if($forum['todayposts'] && !$forum['redirect']) { ?>
                  <em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em>
                  <?php } ?>
                </h2>
                <?php if($forum['description']) { ?>
                <p class="xg2"><?php echo $forum['description'];?></p>
                <?php } ?>
                <?php if($forum['subforums']) { ?>
                <p>子版块: <?php echo $forum['subforums'];?></p>
                <?php } ?>
                <?php if($forum['moderators']) { ?>
                <p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p>
                <?php } ?>
                <?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
              </td>
              <td class="fl_by"><div>
                  <?php if($forum['permission'] == 1) { ?>
                  私密版块
                  <?php } else { ?>
                  <?php if($forum['redirect']) { ?>
                  <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                  <?php } elseif(is_array($forum['lastpost'])) { ?>
                  <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">
                  <?php echo cutstr($forum['lastpost']['subject'], 30); ?>                  </a>
                  <?php if($forum['lastpost']['author']) { ?>
                  <p>by <?php echo $forum['lastpost']['author'];?>
                    <?php } else { ?>
                    <?php echo $_G['setting']['anonymoustext'];?></p>
                  <?php } ?>
                  <cite><?php echo $forum['lastpost']['dateline'];?></cite>
                  <?php } else { ?>
                  从未
                  <?php } ?>
                  <?php } ?>
                </div></td>
              <td class="fl_i"><div class="bus_relative pr20">
                  <?php if(empty($forum['redirect'])) { ?>
                  <span class="f_threads">
                  <?php echo dnumber($forum['threads']); ?>                  </span><span class="line bus_big"> / </span><span class="f_posts">
                  <?php echo dnumber($forum['posts']); ?>                  </span>
                  <?php } ?>
                </div></td>
            </tr>
            <tr class="fl_row">
              <?php } ?>
              <?php } ?>
              <?php } ?>
              <?php if(($columnspad = $favorderid % $forumcolumns) > 0) { ?>
              <?php echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; ?>              <?php } ?>
            </tr>
          </table>
        </div>
      </div>
      <?php echo adshow("intercat/bm a_c/-1");?>      <?php } ?>
      <?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?>      <?php if(!empty($_G['setting']['pluginhooks']['index_catlist'][$cat[fid]])) echo $_G['setting']['pluginhooks']['index_catlist'][$cat[fid]];?>
      <div class="bm bmw <?php if($cat['forumcolumns']) { ?> flg<?php } ?> cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_<?php echo $cat['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $cat['collapseimg'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" /> </span>
          <?php if($cat['moderators']) { ?>
          <span class="y">分区版主: <?php echo $cat['moderators'];?></span>
          <?php } ?>
          <?php $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?>          <h2 class="tt"><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a></h2>
        </div>
        <div id="category_<?php echo $cat['fid'];?>" class="bm_c" style="<?php echo $collapse['category_'.$cat['fid']]; ?>">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { ?>              <?php $forum=$forumlist[$forumid];?>              <?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?>              <?php if($cat['forumcolumns']) { ?>
              <?php if($forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)) { ?>
            </tr>
            <?php if($forum['orderid'] < $cat['forumscount']) { ?>
            <tr class="fl_row">
              <?php } ?>
              <?php } ?>
              <td class="fl_g" width="<?php echo $cat['forumcolwidth'];?>"><div class="fl_icn_g"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                  <?php if($forum['icon']) { ?>
                  <?php echo $forum['icon'];?>
                  <?php } else { ?>
                  <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo $_G['style']['styleimgdir'];?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                  <?php } ?>
                </div>
                <dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                <dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a>
                  <?php if($forum['todayposts'] && !$forum['redirect']) { ?>
                  <em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em>
                  <?php } ?>
                </dt>
                <?php if(empty($forum['redirect'])) { ?>
                <dd><em>主题:
                  <?php echo dnumber($forum['threads']); ?>                  </em>, <em>帖数:
                  <?php echo dnumber($forum['posts']); ?>                  </em></dd>
                <?php } ?>
                <dd>
                  <?php if($forum['permission'] == 1) { ?>
                  私密版块
                  <?php } else { ?>
                  <?php if($forum['redirect']) { ?>
                  <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                  <?php } elseif(is_array($forum['lastpost'])) { ?>
                  <?php if($cat['forumcolumns'] < 3) { ?>
                  <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2">
                  <?php echo cutstr($forum['lastpost']['subject'], 30); ?>                  </a> <cite><?php echo $forum['lastpost']['dateline'];?>
                  <?php if($forum['lastpost']['author']) { ?>
                  <?php echo $forum['lastpost']['author'];?>
                  <?php } else { ?>
                  <?php echo $_G['setting']['anonymoustext'];?>
                  <?php } ?>
                  </cite>
                  <?php } else { ?>
                  <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo $forum['lastpost']['dateline'];?></a>
                  <?php } ?>
                  <?php } else { ?>
                  从未
                  <?php } ?>
                  <?php } ?>
                </dd>
                <?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
                </dl>
              </td>
              <?php } else { ?>
              <td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>><?php if($forum['icon']) { ?>
                <?php echo $forum['icon'];?>
                <?php } else { ?>
                <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo $_G['style']['styleimgdir'];?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                <?php } ?>
              </td>
              <td class="fl_name"><h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a>
                  <?php if($forum['todayposts'] && !$forum['redirect']) { ?>
                  <em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em>
                  <?php } ?>
                </h2>
                <?php if($forum['description']) { ?>
                <p class="xg2"><?php echo $forum['description'];?></p>
                <?php } ?>
                <?php if($forum['subforums']) { ?>
                <p>子版块: <?php echo $forum['subforums'];?></p>
                <?php } ?>
                <?php if($forum['moderators']) { ?>
                <p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p>
                <?php } ?>
                <?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
              </td>
              <td class="fl_by"><div>
                  <?php if($forum['permission'] == 1) { ?>
                  私密版块
                  <?php } else { ?>
                  <?php if($forum['redirect']) { ?>
                  <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                  <?php } elseif(is_array($forum['lastpost'])) { ?>
                  <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">
                  <?php echo cutstr($forum['lastpost']['subject'], 30); ?>                  </a>
                  <?php if($forum['lastpost']['author']) { ?>
                  <p>by <?php echo $forum['lastpost']['author'];?>
                    <?php } else { ?>
                    <?php echo $_G['setting']['anonymoustext'];?></p>
                  <?php } ?>
                  <cite><?php echo $forum['lastpost']['dateline'];?></cite>
                  <?php } else { ?>
                  从未
                  <?php } ?>
                  <?php } ?>
                </div></td>
              <td class="fl_i"><div class="bus_relative pr20">
                  <?php if(empty($forum['redirect'])) { ?>
                  <span class="f_threads">
                  <?php echo dnumber($forum['threads']); ?>                  </span><span class="line bus_big"> / </span><span class="f_posts">
                  <?php echo dnumber($forum['posts']); ?>                  </span>
                  <?php } ?>
                </div></td>
            </tr>
            <tr class="fl_row">
              <?php } ?>
              <?php } ?>
              <?php echo $cat['endrows'];?> </tr>
          </table>
        </div>
      </div>
      <?php echo adshow("intercat/bm a_c/$cat[fid]");?>      <?php } ?>
      <?php if(!empty($collectiondata['data'])) { ?>
      <?php $forumscount = count($collectiondata['data']);?>      <?php $forumcolumns = 4;?>      <?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?>      <div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_-2_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_-2'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_-2');" /> </span>
          <h2 class="tt"><a href="forum.php?mod=collection">淘专辑推荐</a></h2>
        </div>
        <div id="category_-2" class="bm_c" style="<?php echo $collapse['category_-2']; ?>">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <?php $ctorderid = 0;?>              <?php if(is_array($collectiondata['data'])) foreach($collectiondata['data'] as $key => $colletion) { ?>              <?php if($ctorderid && ($ctorderid % $forumcolumns == 0)) { ?>
            </tr>
            <?php if($ctorderid < $forumscount) { ?>
            <tr class="fl_row">
              <?php } ?>
              <?php } ?>
              <td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>><div class="fl_icn_g"> <a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/forum.gif" alt="<?php echo $colletion['name'];?>" /></a> </div>
                <dl>
                  <dt><a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $colletion['ctid'];?>"><?php echo $colletion['name'];?></a></dt>
                  <dd><em>主题:
                    <?php echo dnumber($colletion['threadnum']); ?>                    </em>, <em>评论:
                    <?php echo dnumber($colletion['commentnum']); ?>                    </em></dd>
                  <dd>
                    <?php if($colletion['lastpost']) { ?>
                    <?php if($forumcolumns < 3) { ?>
                    <a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost" class="xi2">
                    <?php echo cutstr($colletion['lastsubject'], 30); ?>                    </a> <cite>
                    <?php echo dgmdate($colletion[lastposttime]);?>                    <?php if($colletion['lastposter']) { ?>
                    <?php echo $colletion['lastposter'];?>
                    <?php } else { ?>
                    <?php echo $_G['setting']['anonymoustext'];?>
                    <?php } ?>
                    </cite>
                    <?php } else { ?>
                    <a href="forum.php?mod=redirect&amp;tid=<?php echo $colletion['lastpost'];?>&amp;goto=lastpost#lastpost">最后发表:
                    <?php echo dgmdate($colletion[lastposttime]);?>                    </a>
                    <?php } ?>
                    <?php } else { ?>
                    从未
                    <?php } ?>
                  </dd>
                  <?php if(!empty($_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]];?>
                </dl></td>
              <?php $ctorderid++;?>              <?php } ?>
              <?php if(($columnspad = $ctorderid % $forumcolumns) > 0) { ?>
              <?php echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; ?>              <?php } ?>
            </tr>
          </table>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php if(!empty($_G['setting']['pluginhooks']['index_middle'])) echo $_G['setting']['pluginhooks']['index_middle'];?>
    <div class="wp mtn">
      <!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
    </div>
    <?php if(empty($gid) && $_G['setting']['whosonlinestatus']) { ?>
    <div id="online" class="oll bus_oll">
      <div class="bm_h">
        <?php if($detailstatus) { ?>
        <span class="o"><a href="forum.php?showoldetails=no#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_no.gif" alt="收起/展开" /></a></span>
        <h3> <strong><a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">在线会员</a></strong> <span class="xs1">- <strong><?php echo $onlinenum;?></strong> 人在线
          - <strong><?php echo $membercount;?></strong> 会员(<strong><?php echo $invisiblecount;?></strong> 隐身), <strong><?php echo $guestcount;?></strong> 位游客
          - 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span> </h3>
        <?php } else { ?>
        <?php if(empty($_G['setting']['sessionclose'])) { ?>
        <span class="o"><a href="forum.php?showoldetails=yes#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="收起/展开" /></a></span>
        <?php } ?>
        <h3> <strong>
          <?php if(!empty($_G['setting']['whosonlinestatus'])) { ?>
          在线会员
          <?php } else { ?>
          <a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">在线会员</a>
          <?php } ?>
          </strong> <span class="xs1">- 总计 <strong><?php echo $onlinenum;?></strong> 人在线
          <?php if($membercount) { ?>
          - <strong><?php echo $membercount;?></strong> 会员,<strong><?php echo $guestcount;?></strong> 位游客
          <?php } ?>
          - 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span> </h3>
        <?php } ?>
      </div>
      <?php if($_G['setting']['whosonlinestatus'] && $detailstatus) { ?>
      <dl id="onlinelist" class="bm_c">
        <dt class="ptm pbm bbda"><?php echo $_G['cache']['onlinelist']['legend'];?></dt>
        <?php if($detailstatus) { ?>
        <dd class="ptm pbm">
          <ul class="cl">
            <?php if($whosonline) { ?>
            <?php if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?>            <li title="时间: <?php echo $online['lastactivity'];?>"> <img src="<?php echo STATICURL;?>image/common/<?php echo $online['icon'];?>" alt="icon" />
              <?php if($online['uid']) { ?>
              <a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a>
              <?php } else { ?>
              <?php echo $online['username'];?>
              <?php } ?>
            </li>
            <?php } ?>
            <?php } else { ?>
            <li style="width: auto">当前只有游客或隐身会员在线</li>
            <?php } ?>
          </ul>
        </dd>
        <?php } ?>
      </dl>
      <?php } ?>

    <?php if(empty($gid) && ($_G['cache']['forumlinks']['0'] || $_G['cache']['forumlinks']['1'] || $_G['cache']['forumlinks']['2'])) { ?>
    <div class="lk">
      <div id="category_lk" class="bm_c ptm">
        <?php if($_G['cache']['forumlinks']['0']) { ?>
        <ul class="m mbn cl">
          <?php echo $_G['cache']['forumlinks']['0'];?>
        </ul>
        <?php } ?>
        <?php if($_G['cache']['forumlinks']['1']) { ?>
        <div class="mbn cl"> <?php echo $_G['cache']['forumlinks']['1'];?> </div>
        <?php } ?>
        <?php if($_G['cache']['forumlinks']['2']) { ?>
        <ul class="x mbm cl">
          <?php echo $_G['cache']['forumlinks']['2'];?>
        </ul>
        <?php } ?>
      </div>
    </div>
    <?php } ?>

     </div>
    <?php } ?>
   <?php if(!empty($_G['setting']['pluginhooks']['index_bottom'])) echo $_G['setting']['pluginhooks']['index_bottom'];?>
  </div>
  <?php if($_G['setting']['forumallowside']) { ?>
  <div id="sd" class="sd bus_forumright">
      <a class="bus_discuzpost bus_sd" href="forum.php?mod=misc&amp;action=nav" onClick="showWindow('nav', this.href, 'get', 0)" ><i class="icon icon_post"></i><p>发布</p></a>
 <div class="clear"></div>
    <?php if(!empty($_G['setting']['pluginhooks']['index_side_top'])) echo $_G['setting']['pluginhooks']['index_side_top'];?>
      <!--[diy=diy2]-->
      <div id="diy2" class="area"></div>
      <!--[/diy]-->
  <div class="bus_hotuser row3 mobanbus_radius">
  <dl class="dla"><dt><span class="t1">会员榜单</span></dt><dd></dd></dl>
      <!--[diy=diy_hotuser]-->
      <div id="diy_hotuser" class="area"></div>
      <!--[/diy]-->
  </div>
    <?php if(!empty($_G['setting']['pluginhooks']['index_side_bottom'])) echo $_G['setting']['pluginhooks']['index_side_bottom'];?>
  </div>
  <?php } ?>
</div>
<?php if($_G['group']['radminid'] == 1) { helper_manyou::checkupdate();?><?php } include template('common/footer'); ?>