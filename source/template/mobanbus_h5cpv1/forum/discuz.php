<?php echo 'ģ���ʿԭ��ģ�壬��Ȩ���У�����ؾ������� www.mobanbus.cn';exit;?>
<!--{template common/header}-->
<!--{if empty($gid)}-->
<!--{ad/text/wp a_t}-->
<!--{/if}-->
<style id="diy_style" type="text/css"></style>

<div id="ct" class="cl{if $_G['setting']['forumallowside']} ct2{/if}">
  <!--{if empty($gid)}-->
  <div id="chart" class="bm bw0 cl">
    <p class="chart z">{lang index_today}: <em>$todayposts</em><span class="pipe">|</span>{lang index_yesterday}: <em>$postdata[0]</em><span class="pipe">|</span>{lang index_posts}: <em>$posts</em><span class="pipe">|</span>{lang index_members}: <em>$_G['cache']['userstats']['totalmembers']</em>
      <!--{if $_G['cache']['userstats']['newsetuser']}-->
      <span class="pipe">|</span>{lang welcome_new_members}: <em><a href="home.php?mod=space&username={echo rawurlencode($_G['cache']['userstats']['newsetuser'])}" target="_blank" class="xi2">$_G['cache']['userstats']['newsetuser']</a></em>
      <!--{/if}-->
    </p>
    <div class="y">
      <!--{hook/index_nav_extra}-->
      <!--{if $_G['uid']}-->
      <a href="forum.php?mod=guide&view=my" title="{lang my_posts}" class="xi2">{lang my_posts}</a>
      <!--{/if}-->
      <!--{if !empty($_G['setting']['search']['forum']['status'])}-->
      <!--{if $_G['uid']}-->
      <span class="pipe">|</span>
      <!--{/if}-->
      <a href="forum.php?mod=guide&view=new" title="{lang show_newthreads}" class="xi2">{lang show_newthreads}</a>
      <!--{/if}-->
    </div>
  </div>
  <!--{/if}-->
  <!--[diy=diy_chart]-->
  <div id="diy_chart" class="area"></div>
  <!--[/diy]-->

	<!--{if empty($gid)}-->
	<div class="wp">
	  <div class="busmn {if $_G['setting']['forumallowside']} busforuml {else} bus_w99 {/if}">
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
		<!--[diy=diy_bus_recommended_pic]-->
		<div id="diy_bus_recommended_pic" class="area"></div>
		<!--[/diy]-->
		</div>
		</div></div>
  	<!--{/if}-->
  	<div class="clear"></div>
  
    <!--{if !empty($_G['setting']['grid']['showgrid'])}-->
    <!-- index four grid -->
    <div class="fl bm">
      <div class="bm bmw cl bus_box">
        <div id="category_grid" class="bm_c" >
          <table cellspacing="0" cellpadding="0">
            <tr>
              <!--{if !$_G['setting']['grid']['gridtype']}-->
              <td valign="top" class="category_l1"><div class="newimgbox">
                  <h4><span class="tit_newimg"></span>{lang latest_images}</h4>
                  <div class="module cl slidebox_grid" style="width:218px">
                    <script type="text/javascript">
									var slideSpeed = 5000;
									var slideImgsize = [218,200];
									var slideBorderColor = '{$_G['style']['specialborder']}';
									var slideBgColor = '{$_G['style']['commonbg']}';
									var slideImgs = new Array();
									var slideImgLinks = new Array();
									var slideImgTexts = new Array();
									var slideSwitchColor = '{$_G['style']['tabletext']}';
									var slideSwitchbgColor = '{$_G['style']['commonbg']}';
									var slideSwitchHiColor = '{$_G['style']['specialborder']}';
									{eval $k = 1;}
									<!--{loop $grids['slide'] $stid $svalue}-->
										slideImgs[<!--{echo $k}-->] = '$svalue[image]';
										slideImgLinks[<!--{echo $k}-->] = '{$svalue[url]}';
										slideImgTexts[<!--{echo $k}-->] = '$svalue[subject]';
										{eval $k++;}
									<!--{/loop}-->
									</script>
                    <script language="javascript" type="text/javascript" src="{$_G[setting][jspath]}forum_slide.js?{VERHASH}"></script>
                  </div>
                </div></td>
              <!--{/if}-->
              <td valign="top" class="category_l2"><div class="subjectbox">
                  <h4><span class="tit_subject"></span>{lang collection_lastthread}</h4>
                  <ul class="category_newlist">
                    <!--{loop $grids['newthread'] $thread}-->
                    <!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
                    <!--{eval $thread[tid]=$thread[closed];}-->
                    <!--{/if}-->
                    <li><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']} tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
                    <!--{/loop}-->
                  </ul>
                </div></td>
              <td valign="top" class="category_l3"><div class="replaybox">
                  <h4><span class="tit_replay"></span>{lang show_newthreads}</h4>
                  <ul class="category_newlist">
                    <!--{loop $grids['newreply'] $thread}-->
                    <!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
                    <!--{eval $thread[tid]=$thread[closed];}-->
                    <!--{/if}-->
                    <li><a href="forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost#lastpost"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']}tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
                    <!--{/loop}-->
                  </ul>
                </div></td>
              <td valign="top" class="category_l3"><div class="hottiebox">
                  <h4><span class="tit_hottie"></span>{lang hot_thread}</h4>
                  <ul class="category_newlist">
                    <!--{loop $grids['hot'] $thread}-->
                    <!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
                    <!--{eval $thread[tid]=$thread[closed];}-->
                    <!--{/if}-->
                    <li><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']} tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
                    <!--{/loop}-->
                  </ul>
                </div></td>
              <!--{if $_G['setting']['grid']['gridtype']}-->
              <td valign="top" class="category_l4"><div class="goodtiebox">
                  <h4><span class="tit_goodtie"></span>{lang post_digest_thread}</h4>
                  <ul class="category_newlist">
                    <!--{loop $grids['digest'] $thread}-->
                    <!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
                    <!--{eval $thread[tid]=$thread[closed];}-->
                    <!--{/if}-->
                    <li><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra"{if $thread['highlight']} $thread['highlight']{/if}{if $_G['setting']['grid']['showtips']} tip="{lang title}: <strong>$thread[oldsubject]</strong><br/>{lang author}: $thread[author] ($thread[dateline])<br/>{lang show}/{lang reply}: $thread[views]/$thread[replies]" onmouseover="showTip(this)"{else} title="$thread[oldsubject]"{/if}{if $_G['setting']['grid']['targetblank']} target="_blank"{/if}>$thread[subject]</a></li>
                    <!--{/loop}-->
                  </ul>
                </div></td>
              <!--{/if}-->
          </table>
        </div>
      </div>
    </div>
    <!-- index four grid end -->
    <!--{/if}-->
    <!--{hook/index_top}-->
    <!--{if !empty($_G['cache']['heats']['message'])}-->
    <div class="bm">
      <div class="bm_h cl">
        <h2>{lang hotthreads_forum}</h2>
      </div>
      <div class="bm_c cl">
        <div class="heat z">
          <!--{loop $_G['cache']['heats']['message'] $data}-->
          <dl class="xld">
            <dt>
              <!--{if $_G['adminid'] == 1}-->
              <a class="d" href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()">delete</a>
              <!--{/if}-->
              <a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></dt>
            <dd>$data[message]</dd>
          </dl>
          <!--{/loop}-->
        </div>
        <ul class="xl xl1 heatl">
          <!--{loop $_G['cache']['heats']['subject'] $data}-->
          <li>
            <!--{if $_G['adminid'] == 1}-->
            <a class="d" href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()">delete</a>
            <!--{/if}-->
            &middot; <a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></li>
          <!--{/loop}-->
        </ul>
      </div>
    </div>
    <!--{/if}-->
    <!--{hook/index_catlist_top}-->
    <div class="fl bm">
      <!--{if !empty($collectiondata['follows'])}-->
      <!--{eval $forumscount = count($collectiondata['follows']);}-->
      <!--{eval $forumcolumns = 4;}-->
      <!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->
      <div class="bm bmw {if $forumcolumns} flg{/if} cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_-1_img" src="{IMGDIR}/$collapse['collapseimg_-1']" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_-1');" /> </span>
          <h2 class="tt"><a href="forum.php?mod=collection&op=my">{lang my_order_collection}</a></h2>
        </div>
        <div id="category_-1" class="bm_c" style="{echo $collapse['category_-1']}">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <!--{eval $ctorderid = 0;}-->
              <!--{loop $collectiondata['follows'] $key $colletion}-->
              <!--{if $ctorderid && ($ctorderid % $forumcolumns == 0)}-->
            </tr>
            <!--{if $ctorderid < $forumscount}-->
            <tr class="fl_row">
              <!--{/if}-->
              <!--{/if}-->
              <td class="fl_g"{if $forumcolwidth} width="$forumcolwidth"{/if}><div class="fl_icn_g"> <a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}" target="_blank"><img src="$_G['style'][styleimgdir]/forum{if $followcollections[$key]['lastvisit'] < $colletion['lastupdate']}_new{/if}.gif" alt="$colletion[name]" /></a> </div>
                <dl>
                  <dt><a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}">$colletion[name]</a></dt>
                  <dd><em>{lang forum_threads}:
                    <!--{echo dnumber($colletion[threadnum])}-->
                    </em>, <em>{lang collection_commentnum}:
                    <!--{echo dnumber($colletion[commentnum])}-->
                    </em></dd>
                  <dd>
                    <!--{if $colletion['lastpost']}-->
                    <!--{if $forumcolumns < 3}-->
                    <a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost" class="xi2">
                    <!--{echo cutstr($colletion[lastsubject], 30)}-->
                    </a> <cite>
                    <!--{date($colletion[lastposttime])}-->
                    <!--{if $colletion['lastposter']}-->
                    $colletion['lastposter']
                    <!--{else}-->
                    $_G[setting][anonymoustext]
                    <!--{/if}-->
                    </cite>
                    <!--{else}-->
                    <a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost">{lang forum_lastpost}:
                    <!--{date($colletion[lastposttime])}-->
                    </a>
                    <!--{/if}-->
                    <!--{else}-->
                    {lang never}
                    <!--{/if}-->
                  </dd>
                  <!--{hook/index_followcollection_extra $colletion[ctid]}-->
                </dl></td>
              <!--{eval $ctorderid++;}-->
              <!--{/loop}-->
              <!--{if ($columnspad = $ctorderid % $forumcolumns) > 0}-->
              <!--{echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);}-->
              <!--{/if}-->
            </tr>
          </table>
        </div>
      </div>
      <!--{/if}-->
      <!--{if empty($gid) && !empty($forum_favlist)}-->
      <!--{eval $forumscount = count($forum_favlist);}-->
      <!--{eval $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;}-->
      <!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->
      <div class="bm bmw {if $forumcolumns} flg{/if} cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_0_img" src="{IMGDIR}/$collapse['collapseimg_0']" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_0');" /> </span>
          <h2 class="tt"><a href="home.php?mod=space&do=favorite&type=forum">{lang forum_myfav}</a></h2>
        </div>
        <div id="category_0" class="bm_c" style="{echo $collapse['category_0']}">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <!--{eval $favorderid = 0;}-->
              <!--{loop $forum_favlist $key $favorite}-->
              <!--{if $favforumlist[$favorite[id]]}-->
              <!--{eval $forum=$favforumlist[$favorite[id]];}-->
              <!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
              <!--{if $forumcolumns>1}-->
              <!--{if $favorderid && ($favorderid % $forumcolumns == 0)}-->
            </tr>
            <!--{if $favorderid < $forumscount}-->
            <tr class="fl_row">
              <!--{/if}-->
              <!--{/if}-->
              <div class="fl_g" style="width:50%; padding:10px 0; float: left; border-bottom:1px dashed #ddd;"><div class="fl_icn_g" style="width:100px">
                  <!--{if $forum[icon]}-->
                  $forum[icon]
                  <!--{else}-->
                  <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                  <!--{/if}-->
                </div>
                <dl{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="margin-left:100px"{/if}>
                <dt><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a>
                  <!--{if $forum[todayposts] && !$forum['redirect']}-->
                  <em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em>
                  <!--{/if}-->
                </dt>
                <!--{if empty($forum[redirect])}-->
                <dd><em>{lang forum_threads}:
                  <!--{echo dnumber($forum[threads])}-->
                  </em>, <em>{lang forum_posts}:
                  <!--{echo dnumber($forum[posts])}-->
                  </em></dd>
                <!--{/if}-->
                <dd>
                  <!--{if $forum['permission'] == 1}-->
                  {lang private_forum}
                  <!--{else}-->
                  <!--{if $forum['redirect']}-->
                  <a href="$forumurl" class="xi2">{lang url_link}</a>
                  <!--{elseif is_array($forum['lastpost'])}-->
                  <!--{if $forumcolumns < 3}-->
                  <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2">
                  <!--{echo cutstr($forum[lastpost][subject], 30)}-->
                  </a> <cite>$forum[lastpost][dateline]
                  <!--{if $forum['lastpost']['author']}-->
                  $forum['lastpost']['author']
                  <!--{else}-->
                  $_G[setting][anonymoustext]
                  <!--{/if}-->
                  </cite>
                  <!--{else}-->
                  <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
                  <!--{/if}-->
                  <!--{else}-->
                  {lang never}
                  <!--{/if}-->
                  <!--{/if}-->
                </dd>
                <!--{hook/index_favforum_extra $forum[fid]}-->
                </dl>
              </div>
              <!--{eval $favorderid++;}-->
              <!--{else}-->
              <td class="fl_icn" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width:{$forum[extra][iconwidth]}px;"{/if}><!--{if $forum[icon]}-->
                $forum[icon]
                <!--{else}-->
                <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                <!--{/if}-->
              </td>
              <td class="bus_md" style="margin-left:{$forum[extra][iconwidth]}px;"><h2><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a>
                  <!--{if $forum[todayposts] && !$forum['redirect']}-->
                  <em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em>
                  <!--{/if}-->
                </h2>
                <!--{if $forum[description]}-->
                <p class="xg2">$forum[description]</p>
                <!--{/if}-->
                <!--{if $forum['subforums']}-->
                <p>{lang forum_subforums}: $forum['subforums']</p>
                <!--{/if}-->
                <!--{if $forum['moderators']}-->
                <p>{lang forum_moderators}: <span class="xi2">$forum[moderators]</span></p>
                <!--{/if}-->
                <!--{hook/index_favforum_extra $forum[fid]}-->
              </td>
              <td class="fl_by"><div>
                  <!--{if $forum['permission'] == 1}-->
                  {lang private_forum}
                  <!--{else}-->
                  <!--{if $forum['redirect']}-->
                  <a href="$forumurl" class="xi2">{lang url_link}</a>
                  <!--{elseif is_array($forum['lastpost'])}-->
                  <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">
                  <!--{echo cutstr($forum[lastpost][subject], 30)}-->
                  </a>
                  <!--{if $forum['lastpost']['author']}-->
                  <p>by $forum['lastpost']['author']
                    <!--{else}-->
                    $_G[setting][anonymoustext]</p>
                  <!--{/if}-->
                  <cite>$forum[lastpost][dateline]</cite>
                  <!--{else}-->
                  {lang never}
                  <!--{/if}-->
                  <!--{/if}-->
                </div></td>
              <td class="fl_i"><div class="bus_relative pr20">
                  <!--{if empty($forum[redirect])}-->
                  <span class="f_threads">
                  <!--{echo dnumber($forum[threads])}-->
                  </span><span class="line bus_big"> / </span><span class="f_posts">
                  <!--{echo dnumber($forum[posts])}-->
                  </span>
                  <!--{/if}-->
                </div></td>
            </tr>
            <tr class="fl_row">
              <!--{/if}-->
              <!--{/if}-->
              <!--{/loop}-->
              <!--{if ($columnspad = $favorderid % $forumcolumns) > 0}-->
              <!--{echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);}-->
              <!--{/if}-->
            </tr>
          </table>
        </div>
      </div>
      <!--{ad/intercat/bm a_c/-1}-->
      <!--{/if}-->
      <!--{loop $catlist $key $cat}-->
      <!--{hook/index_catlist $cat[fid]}-->
      <div class="bm bmw {if $cat['forumcolumns']} flg{/if} cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_$cat[fid]_img" src="{IMGDIR}/$cat[collapseimg]" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_$cat[fid]');" /> </span>
          <!--{if $cat['moderators']}-->
          <span class="y">{lang forum_category_modedby}: $cat[moderators]</span>
          <!--{/if}-->
          <!--{eval $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';}-->
          <h2 class="tt"><a href="{if !empty($caturl)}$caturl{else}forum.php?gid=$cat[fid]{/if}" style="{if $cat[extra][namecolor]}color: {$cat[extra][namecolor]};{/if}">$cat[name]</a></h2>
        </div>
        <div id="category_$cat[fid]" class="bm_c" style="{echo $collapse['category_'.$cat[fid]]}">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <!--{loop $cat[forums] $forumid}-->
              <!--{eval $forum=$forumlist[$forumid];}-->
              <!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
              <!--{if $cat['forumcolumns']}-->
              <!--{if $forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)}-->
            </tr>
            <!--{if $forum['orderid'] < $cat['forumscount']}-->
            <tr class="fl_row">
              <!--{/if}-->
              <!--{/if}-->
              <td class="fl_g" width="$cat[forumcolwidth]"><div class="fl_icn_g"{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
                  <!--{if $forum[icon]}-->
                  $forum[icon]
                  <!--{else}-->
                  <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                  <!--{/if}-->
                </div>
                <dl{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="margin-left: {$forum[extra][iconwidth]}px;"{/if}>
                <dt><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a>
                  <!--{if $forum[todayposts] && !$forum['redirect']}-->
                  <em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em>
                  <!--{/if}-->
                </dt>
                <!--{if empty($forum[redirect])}-->
                <dd><em>{lang forum_threads}:
                  <!--{echo dnumber($forum[threads])}-->
                  </em>, <em>{lang forum_posts}:
                  <!--{echo dnumber($forum[posts])}-->
                  </em></dd>
                <!--{/if}-->
                <dd>
                  <!--{if $forum['permission'] == 1}-->
                  {lang private_forum}
                  <!--{else}-->
                  <!--{if $forum['redirect']}-->
                  <a href="$forumurl" class="xi2">{lang url_link}</a>
                  <!--{elseif is_array($forum['lastpost'])}-->
                  <!--{if $cat['forumcolumns'] < 3}-->
                  <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2">
                  <!--{echo cutstr($forum[lastpost][subject], 30)}-->
                  </a> <cite>$forum[lastpost][dateline]
                  <!--{if $forum['lastpost']['author']}-->
                  $forum['lastpost']['author']
                  <!--{else}-->
                  $_G[setting][anonymoustext]
                  <!--{/if}-->
                  </cite>
                  <!--{else}-->
                  <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
                  <!--{/if}-->
                  <!--{else}-->
                  {lang never}
                  <!--{/if}-->
                  <!--{/if}-->
                </dd>
                <!--{hook/index_forum_extra $forum[fid]}-->
                </dl>
              </td>
              <!--{else}-->
              <td class="fl_icn" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}><!--{if $forum[icon]}-->
                $forum[icon]
                <!--{else}-->
                <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                <!--{/if}-->
              </td>
              <td class="fl_name"><h2><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a>
                  <!--{if $forum[todayposts] && !$forum['redirect']}-->
                  <em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em>
                  <!--{/if}-->
                </h2>
                <!--{if $forum[description]}-->
                <p class="xg2">$forum[description]</p>
                <!--{/if}-->
                <!--{if $forum['subforums']}-->
                <p>{lang forum_subforums}: $forum['subforums']</p>
                <!--{/if}-->
                <!--{if $forum['moderators']}-->
                <p>{lang forum_moderators}: <span class="xi2">$forum[moderators]</span></p>
                <!--{/if}-->
                <!--{hook/index_forum_extra $forum[fid]}-->
              </td>
              <td class="fl_by"><div>
                  <!--{if $forum['permission'] == 1}-->
                  {lang private_forum}
                  <!--{else}-->
                  <!--{if $forum['redirect']}-->
                  <a href="$forumurl" class="xi2">{lang url_link}</a>
                  <!--{elseif is_array($forum['lastpost'])}-->
                  <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">
                  <!--{echo cutstr($forum[lastpost][subject], 30)}-->
                  </a>
                  <!--{if $forum['lastpost']['author']}-->
                  <p>by $forum['lastpost']['author']
                    <!--{else}-->
                    $_G[setting][anonymoustext]</p>
                  <!--{/if}-->
                  <cite>$forum[lastpost][dateline]</cite>
                  <!--{else}-->
                  {lang never}
                  <!--{/if}-->
                  <!--{/if}-->
                </div></td>
              <td class="fl_i"><div class="bus_relative pr20">
                  <!--{if empty($forum[redirect])}-->
                  <span class="f_threads">
                  <!--{echo dnumber($forum[threads])}-->
                  </span><span class="line bus_big"> / </span><span class="f_posts">
                  <!--{echo dnumber($forum[posts])}-->
                  </span>
                  <!--{/if}-->
                </div></td>
            </tr>
            <tr class="fl_row">
              <!--{/if}-->
              <!--{/loop}-->
              $cat['endrows'] </tr>
          </table>
        </div>
      </div>
      <!--{ad/intercat/bm a_c/$cat[fid]}-->
      <!--{/loop}-->
      <!--{if !empty($collectiondata['data'])}-->
      <!--{eval $forumscount = count($collectiondata['data']);}-->
      <!--{eval $forumcolumns = 4;}-->
      <!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->
      <div class="bm bmw {if $forumcolumns} flg{/if} cl bus_box busbb">
        <div class="bm_h cl"> <span class="o"> <img id="category_-2_img" src="{IMGDIR}/$collapse['collapseimg_-2']" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_-2');" /> </span>
          <h2 class="tt"><a href="forum.php?mod=collection">{lang recommend_collection}</a></h2>
        </div>
        <div id="category_-2" class="bm_c" style="{echo $collapse['category_-2']}">
          <table cellspacing="0" cellpadding="0" class="fl_tb">
            <tr>
              <!--{eval $ctorderid = 0;}-->
              <!--{loop $collectiondata['data'] $key $colletion}-->
              <!--{if $ctorderid && ($ctorderid % $forumcolumns == 0)}-->
            </tr>
            <!--{if $ctorderid < $forumscount}-->
            <tr class="fl_row">
              <!--{/if}-->
              <!--{/if}-->
              <td class="fl_g"{if $forumcolwidth} width="$forumcolwidth"{/if}><div class="fl_icn_g"> <a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}" target="_blank"><img src="$_G['style'][styleimgdir]/forum.gif" alt="$colletion[name]" /></a> </div>
                <dl>
                  <dt><a href="forum.php?mod=collection&action=view&ctid={$colletion[ctid]}">$colletion[name]</a></dt>
                  <dd><em>{lang forum_threads}:
                    <!--{echo dnumber($colletion[threadnum])}-->
                    </em>, <em>{lang collection_commentnum}:
                    <!--{echo dnumber($colletion[commentnum])}-->
                    </em></dd>
                  <dd>
                    <!--{if $colletion['lastpost']}-->
                    <!--{if $forumcolumns < 3}-->
                    <a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost" class="xi2">
                    <!--{echo cutstr($colletion[lastsubject], 30)}-->
                    </a> <cite>
                    <!--{date($colletion[lastposttime])}-->
                    <!--{if $colletion['lastposter']}-->
                    $colletion['lastposter']
                    <!--{else}-->
                    $_G[setting][anonymoustext]
                    <!--{/if}-->
                    </cite>
                    <!--{else}-->
                    <a href="forum.php?mod=redirect&tid=$colletion[lastpost]&goto=lastpost#lastpost">{lang forum_lastpost}:
                    <!--{date($colletion[lastposttime])}-->
                    </a>
                    <!--{/if}-->
                    <!--{else}-->
                    {lang never}
                    <!--{/if}-->
                  </dd>
                  <!--{hook/index_datacollection_extra $colletion[ctid]}-->
                </dl></td>
              <!--{eval $ctorderid++;}-->
              <!--{/loop}-->
              <!--{if ($columnspad = $ctorderid % $forumcolumns) > 0}-->
              <!--{echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);}-->
              <!--{/if}-->
            </tr>
          </table>
        </div>
      </div>
      <!--{/if}-->
    </div>
    <!--{hook/index_middle}-->
    <div class="wp mtn">
      <!--[diy=diy3]-->
      <div id="diy3" class="area"></div>
      <!--[/diy]-->
    </div>
    <!--{if empty($gid) && $_G['setting']['whosonlinestatus']}-->
    <div id="online" class="oll bus_oll">
      <div class="bm_h">
        <!--{if $detailstatus}-->
        <span class="o"><a href="forum.php?showoldetails=no#online" title="{lang spread}"><img src="{IMGDIR}/collapsed_no.gif" alt="{lang spread}" /></a></span>
        <h3> <strong><a href="home.php?mod=space&do=friend&view=online&type=member">{lang onlinemember}</a></strong> <span class="xs1">- <strong>$onlinenum</strong> {lang onlines}
          - <strong>$membercount</strong> {lang index_members}(<strong>$invisiblecount</strong> {lang index_invisibles}), <strong>$guestcount</strong> {lang index_guests}
          - {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span> </h3>
        <!--{else}-->
        <!--{if empty($_G['setting']['sessionclose'])}-->
        <span class="o"><a href="forum.php?showoldetails=yes#online" title="{lang spread}"><img src="{IMGDIR}/collapsed_yes.gif" alt="{lang spread}" /></a></span>
        <!--{/if}-->
        <h3> <strong>
          <!--{if !empty($_G['setting']['whosonlinestatus'])}-->
          {lang onlinemember}
          <!--{else}-->
          <a href="home.php?mod=space&do=friend&view=online&type=member">{lang onlinemember}</a>
          <!--{/if}-->
          </strong> <span class="xs1">- {lang total} <strong>$onlinenum</strong> {lang onlines}
          <!--{if $membercount}-->
          - <strong>$membercount</strong> {lang index_members},<strong>$guestcount</strong> {lang index_guests}
          <!--{/if}-->
          - {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span> </h3>
        <!--{/if}-->
      </div>
      <!--{if $_G['setting']['whosonlinestatus'] && $detailstatus}-->
      <dl id="onlinelist" class="bm_c">
        <dt class="ptm pbm bbda">$_G[cache][onlinelist][legend]</dt>
        <!--{if $detailstatus}-->
        <dd class="ptm pbm">
          <ul class="cl">
            <!--{if $whosonline}-->
            <!--{loop $whosonline $key $online}-->
            <li title="{lang time}: $online[lastactivity]"> <img src="{STATICURL}image/common/$online[icon]" alt="icon" />
              <!--{if $online['uid']}-->
              <a href="home.php?mod=space&uid=$online[uid]">$online[username]</a>
              <!--{else}-->
              $online[username]
              <!--{/if}-->
            </li>
            <!--{/loop}-->
            <!--{else}-->
            <li style="width: auto">{lang online_only_guests}</li>
            <!--{/if}-->
          </ul>
        </dd>
        <!--{/if}-->
      </dl>
      <!--{/if}-->
	
    <!--{if empty($gid) && ($_G['cache']['forumlinks'][0] || $_G['cache']['forumlinks'][1] || $_G['cache']['forumlinks'][2])}-->
    <div class="lk">
      <div id="category_lk" class="bm_c ptm">
        <!--{if $_G['cache']['forumlinks'][0]}-->
        <ul class="m mbn cl">
          $_G['cache']['forumlinks'][0]
        </ul>
        <!--{/if}-->
        <!--{if $_G['cache']['forumlinks'][1]}-->
        <div class="mbn cl"> $_G['cache']['forumlinks'][1] </div>
        <!--{/if}-->
        <!--{if $_G['cache']['forumlinks'][2]}-->
        <ul class="x mbm cl">
          $_G['cache']['forumlinks'][2]
        </ul>
        <!--{/if}-->
      </div>
    </div>
    <!--{/if}-->
	
     </div>
    <!--{/if}-->
   <!--{hook/index_bottom}-->
  </div>
  <!--{if $_G['setting']['forumallowside']}-->
  <div id="sd" class="sd bus_forumright">
      <a class="bus_discuzpost bus_sd" href="forum.php?mod=misc&amp;action=nav" onClick="showWindow('nav', this.href, 'get', 0)" ><i class="icon icon_post"></i><p>{lang publish}</p></a>
	 <div class="clear"></div>
    <!--{hook/index_side_top}-->
      <!--[diy=diy2]-->
      <div id="diy2" class="area"></div>
      <!--[/diy]-->
	  <div class="bus_hotuser row3 mobanbus_radius">
	  <dl class="dla"><dt><span class="t1">��Ա��</span></dt><dd></dd></dl>
      <!--[diy=diy_hotuser]-->
      <div id="diy_hotuser" class="area"></div>
      <!--[/diy]-->
	  </div>
    <!--{hook/index_side_bottom}-->
  </div>
  <!--{/if}-->
</div>
<!--{if $_G['group']['radminid'] == 1}-->
<!--{eval helper_manyou::checkupdate();}-->
<!--{/if}-->

<!--{template common/footer}-->