<?php echo '模板巴士原创模板，版权所有，盗版必究，官网 www.mobanbus.cn';exit;?>
<!--{subtemplate common/header}-->
<script type="text/javascript" src="template/mobanbus_h5cpv1/mobanbus_st/js/bus_fixed.js"></script>
<!--{eval require_once(DISCUZ_ROOT."./source/function/function_post.php");}-->
<!--{if $_G['forum']['ismoderator']}-->
<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->
<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
	<div class="bus_w100 z pb20 pt20">
		<a href="./" title="{lang homepage}">$_G[setting][bbname] </a><em>&rsaquo;</em> <a href="forum.php">{$_G[setting][navs][2][navname]}</a>$navigation <em>&rsaquo;</em> <a href="forum.php?mod=viewthread&tid=$_G[tid]">$_G[forum_thread][short_subject]</a>
	</div>
	<div class="clear"></div>
<div class="bus_viewthread_c">
    <div class="<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->bus_forum bus_bd bus_sd<!--{else}-->bus_forum bus_bd bus_sd<!--{/if}-->">
	<!--{if $subexists && $_G['page'] == 1}--><!--{template forum/forumdisplay_subforum}--><!--{/if}-->		
	<div class="cl"></div>	
		<!--{if $livethread}-->
			<div id="livethread" class="tl bmw cl">
				<div class="bus_livethreadtt mb20">{lang modmenu_live}</div>
				<div class="livethreadtitle">
					<span class="replynumber xg1">{lang reply} <span id="livereplies" class="xi1">$livethread[replies]</span></span>
					<a href="forum.php?mod=viewthread&tid=$livethread[tid]" target="_blank">$livethread[subject]</a> <img src="{IMGDIR}/livethreadtitle.png" />
				</div>
				<div id="livereplycontentout">
					<div id="livereplycontent">
					</div>
				</div>
				<div id="liverefresh">{lang forum_live_newreply_refresh}</div>
				<div id="livefastreply">
					<form id="livereplypostform" method="post" action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$livethread[tid]&replysubmit=yes&infloat=yes&handlekey=livereplypost&inajax=1" onsubmit="return livereplypostvalidate(this)">
						<div id="livefastcomment">
							<textarea id="livereplymessage" name="message" style="color:gray;">{lang forum_live_fastreply_notice}</textarea>
						</div>
						<div id="livepostsubmit" style="display:none;">
						<!--{if checkperm('seccode') && ($secqaacheck || $seccodecheck)}-->
		
							<!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
							<div class="mtm sec" style="text-align:right;"><!--{subtemplate common/seccheck}--></div>
						<!--{/if}-->
						<p class="ptm pnpost" style="margin-bottom:10px;">
						<button type="submit" name="replysubmit" class="pn pnc vm" style="float:right;" value="replysubmit" id="livereplysubmit">
							<strong>{lang forum_live_post}</strong>
						</button>
						</p>
						</div>
						<input type="hidden" name="formhash" value="{FORMHASH}">
						<input type="hidden" name="subject" value="  ">
					</form>
				</div>
				<span id="livereplypostreturn"></span>
			</div>
			<script type="text/javascript">
				var postminchars = parseInt('$_G['setting']['minpostsize']');
				var postmaxchars = parseInt('$_G['setting']['maxpostsize']');
				var disablepostctrl = parseInt('{$_G['group']['disablepostctrl']}');
				var replycontentlist = new Array();
				var addreplylist = new Array();
				var timeoutid = timeid = movescrollid = waitescrollid = null;
				var replycontentnum = 0;
				getnewlivepostlist(1);
				timeid = setInterval(getnewlivepostlist, 5000);
				$('livereplycontent').style.position = 'absolute';
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
						this.value = '{lang forum_live_fastreply_notice}';
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
					x.getJSON('forum.php?mod=misc&action=livelastpost&fid=$livethread[fid]', function(s, x) {
						var count = s.data.count;
						$('livereplies').innerHTML = count;
						var newpostlist = s.data.list;
						for(i in newpostlist) {
							var postid = i;
							var postcontent = '';
							postcontent += '<dt><a href="home.php?mod=space&uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].avatar + '</a></dt>';
							postcontent += '<dd><a href="home.php?mod=space&uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].author + '</a></dd>';
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
						s = '{lang forum_live_nocontent_error}';
					}
					if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
						s = {lang forum_live_nolength_error};
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
		<!--{/if}-->

		<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
			<div class="forumlistitle">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<th colspan="{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}3{else}2{/if}">
						<!--{if CURMODULE != 'guide'}-->
							<div class="bus_fl" style=" width:100%">
								<!--{if $_GET['specialtype'] == 'reward'}-->
									<a id="filter_reward" href="javascript:;" class="showmenu xi2{if $_GET['rewardtype']} xw1{/if}" onclick="showMenu(this.id)"><!--{if $_GET['rewardtype'] == ''}-->{lang all_reward}<!--{elseif $_GET['rewardtype'] == '1'}-->{lang rewarding}<!--{elseif $_GET['rewardtype'] == '2'}-->{lang reward_solved}<!--{/if}--></a>&nbsp;
								<!--{/if}-->
								<a id="filter_special" href="javascript:;" class="showmenu xi2{if $_GET['specialtype']} xw1{/if}" onclick="showMenu(this.id)"><!--{if $_GET['specialtype'] == 'poll'}-->{lang thread_poll}<!--{elseif $_GET['specialtype'] == 'trade'}-->{lang thread_trade}<!--{elseif $_GET['specialtype'] == 'reward'}-->{lang thread_reward}<!--{elseif $_GET['specialtype'] == 'activity'}-->{lang thread_activity}<!--{elseif $_GET['specialtype'] == 'debate'}-->{lang thread_debate}<!--{else}-->{lang threads_all}<!--{/if}--></a>&nbsp;						
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=lastpost&orderby=lastpost$forumdisplayadd[lastpost]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2{if $_GET['filter'] == 'lastpost'} xw1{/if}">{lang latest}</a>&nbsp;
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2{if $_GET['filter'] == 'heat'} xw1{/if}">{lang order_heats}</a>&nbsp;
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=hot" class="xi2{if $_GET['filter'] == 'hot'} xw1{/if}">{lang hot_thread}</a>&nbsp;
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=digest&digest=1$forumdisplayadd[digest]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2{if $_GET['filter'] == 'digest'} xw1{/if}">{lang digest_posts}</a>&nbsp;
								<a id="filter_dateline" href="javascript:;" class="showmenu xi2{if $_GET['dateline']} xw1{/if}" onclick="showMenu(this.id)">{lang more}</a>&nbsp;
								<!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && (!$_G['setting']['forumseparator'] || !$separatepos) && !$_GET['filter']}-->
									<a href="javascript:;" onclick="checkForumnew_btn('{$_G['fid']}')" title="{lang showupgrade}" class="forumrefresh"></a>
								<!--{/if}-->
								<!--{if $_GET['filter'] == 'hot'}-->
									<script type="text/javascript" src="{$_G[setting][jspath]}calendar.js?{VERHASH}"></script>
									<span>$ctime</span>
									<img src="{IMGDIR}/date_magnify.png" class="cur1" alt="" id="hottime" value="$ctime" fid="$_G[fid]" onclick="showcalendar(event, this, false, false, false, false, function(){viewhot(this);});" align="absmiddle" />
								<!--{/if}-->
								<span id="clearstickthread" style="display: none;">
									<span class="pipe">|</span>
									<a href="javascript:;" onclick="clearStickThread()" class="xi2" title="{lang showdisplayorder}">{lang showdisplayorder}</a>
								</span>
								<!--{hook/forumdisplay_filter_extra}-->
								<a id="atarget" {if $_G['cookie']['atarget'] > 0}onclick="setatarget(-1)" atarget_1"{else}onclick="setatarget(1)" {/if} title="{lang new_window_thread}">{lang new_window}</a>
						<!--{if empty($_G['forum']['picstyle'])}-->
							<!--{if CURMODULE == 'guide'}-->
								{lang forum_group}
							<!--{/if}-->
						<!--{else}-->
							<a{if empty($_G['cookie']['forumdefstyle'])} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=yes" class="chked"{else} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=no" class="unchk"{/if} title="{lang view_thread_imagemode}{lang view_thread}">{lang view_thread_imagemode}</a>
						<!--{/if}-->
							</div>
						<!--{else}-->
							{lang title}
						<!--{/if}-->
						</th>
					</tr>
				</table>
			</div>
			<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0}-->
				<div class="bus_sort">
				<ul id="thread_types" class="bus_sorta">
					<!--{hook/forumdisplay_threadtype_inner}-->
					<li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">全部分类</a></li>
					<!--{if $_G['forum']['threadtypes']}-->
						<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
							<!--{if $_GET['typeid'] == $id}-->
							<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
							<!--{else}-->
							<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
							<!--{/if}-->
						<!--{/loop}-->
					<!--{/if}-->
			
					<!--{if $_G['forum']['threadsorts']}-->
						<!--{if $_G['forum']['threadtypes']}--><li><span class="pipe">|</span></li><!--{/if}-->
						<!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
							<!--{if $_GET['sortid'] == $id}-->
							<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
							<!--{else}-->
							<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
							<!--{/if}-->
						<!--{/loop}-->
					<!--{/if}-->
					<!--{hook/forumdisplay_filter_extra}-->
				</ul>
				</div>
				<script type="text/javascript">showTypes('thread_types');</script>
			<!--{/if}-->
			<!--{hook/forumdisplay_threadtype_extra}-->

		<!--{else}-->
		<div class="bus_bd  bus_fl">
			<div class="forumlistitle">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<th colspan="{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}3{else}2{/if}">
						<!--{if CURMODULE != 'guide'}-->
							<div class="bus_fl" style=" width:100%">
								<!--{if $_GET['specialtype'] == 'reward'}-->
									<a id="filter_reward" href="javascript:;" class="showmenu xi2{if $_GET['rewardtype']} xw1{/if}" onclick="showMenu(this.id)"><!--{if $_GET['rewardtype'] == ''}-->{lang all_reward}<!--{elseif $_GET['rewardtype'] == '1'}-->{lang rewarding}<!--{elseif $_GET['rewardtype'] == '2'}-->{lang reward_solved}<!--{/if}--></a>&nbsp;
								<!--{/if}-->
								<a id="filter_special" href="javascript:;" class="showmenu xi2{if $_GET['specialtype']} xw1{/if}" onclick="showMenu(this.id)"><!--{if $_GET['specialtype'] == 'poll'}-->{lang thread_poll}<!--{elseif $_GET['specialtype'] == 'trade'}-->{lang thread_trade}<!--{elseif $_GET['specialtype'] == 'reward'}-->{lang thread_reward}<!--{elseif $_GET['specialtype'] == 'activity'}-->{lang thread_activity}<!--{elseif $_GET['specialtype'] == 'debate'}-->{lang thread_debate}<!--{else}-->{lang threads_all}<!--{/if}--></a>&nbsp;						
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=lastpost&orderby=lastpost$forumdisplayadd[lastpost]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2{if $_GET['filter'] == 'lastpost'} xw1{/if}">{lang latest}</a>&nbsp;
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2{if $_GET['filter'] == 'heat'} xw1{/if}">{lang order_heats}</a>&nbsp;
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=hot" class="xi2{if $_GET['filter'] == 'hot'} xw1{/if}">{lang hot_thread}</a>&nbsp;
								<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=digest&digest=1$forumdisplayadd[digest]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="xi2{if $_GET['filter'] == 'digest'} xw1{/if}">{lang digest_posts}</a>&nbsp;
								<a id="filter_dateline" href="javascript:;" class="showmenu xi2{if $_GET['dateline']} xw1{/if}" onclick="showMenu(this.id)">{lang more}</a>&nbsp;
								<!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && (!$_G['setting']['forumseparator'] || !$separatepos) && !$_GET['filter']}-->
									<a href="javascript:;" onclick="checkForumnew_btn('{$_G['fid']}')" title="{lang showupgrade}" class="forumrefresh"></a>
								<!--{/if}-->
								<!--{if $_GET['filter'] == 'hot'}-->
									<script type="text/javascript" src="{$_G[setting][jspath]}calendar.js?{VERHASH}"></script>
									<span>$ctime</span>
									<img src="{IMGDIR}/date_magnify.png" class="cur1" alt="" id="hottime" value="$ctime" fid="$_G[fid]" onclick="showcalendar(event, this, false, false, false, false, function(){viewhot(this);});" align="absmiddle" />
								<!--{/if}-->
								<span id="clearstickthread" style="display: none;">
									<span class="pipe">|</span>
									<a href="javascript:;" onclick="clearStickThread()" class="xi2" title="{lang showdisplayorder}">{lang showdisplayorder}</a>
								</span>
								<!--{hook/forumdisplay_filter_extra}-->
								<a id="atarget" {if $_G['cookie']['atarget'] > 0}onclick="setatarget(-1)" atarget_1"{else}onclick="setatarget(1)" {/if} title="{lang new_window_thread}">{lang new_window}</a>
						<!--{if empty($_G['forum']['picstyle'])}-->
							<!--{if CURMODULE == 'guide'}-->
								{lang forum_group}
							<!--{/if}-->
						<!--{else}-->
							<a{if empty($_G['cookie']['forumdefstyle'])} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=yes" class="chked"{else} href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=no" class="unchk"{/if} title="{lang view_thread_imagemode}{lang view_thread}">{lang view_thread_imagemode}</a>
						<!--{/if}-->
							</div>
						<!--{else}-->
							{lang title}
						<!--{/if}-->
						</th>
					</tr>
				</table>
			</div>
			<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0}-->
				<div class="bus_sort">
				<ul id="thread_types" class="bus_sorta">
					<!--{hook/forumdisplay_threadtype_inner}-->
					<li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">全部分类</a></li>
					<!--{if $_G['forum']['threadtypes']}-->
						<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
							<!--{if $_GET['typeid'] == $id}-->
							<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
							<!--{else}-->
							<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
							<!--{/if}-->
						<!--{/loop}-->
					<!--{/if}-->
			
					<!--{if $_G['forum']['threadsorts']}-->
						<!--{if $_G['forum']['threadtypes']}--><li><span class="pipe">|</span></li><!--{/if}-->
						<!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
							<!--{if $_GET['sortid'] == $id}-->
							<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
							<!--{else}-->
							<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
							<!--{/if}-->
						<!--{/loop}-->
					<!--{/if}-->
					<!--{hook/forumdisplay_filter_extra}-->
				</ul>
				</div>
				<script type="text/javascript">showTypes('thread_types');</script>
			<!--{/if}-->
			<!--{hook/forumdisplay_threadtype_extra}-->
			<div class="bus_box bus_list_ads bus_fl">
			<!--[diy=diy_bus_list_ads]--><div id="diy_bus_list_ads" class="area"></div><!--[/diy]-->
			</div>
		</div>
		<!--{/if}-->

		
		<!--{if empty($_G['forum']['sortmode'])}-->
		
		<!--模板巴士list开始-->		
		<div id="threadlist" class="box_wrap thread_page bus_fl bus_list"{if $_G['uid']} style="position: relative;"{/if}>
			<!--{if $quicksearchlist && !$_GET['archiveid']}-->
				<!--{subtemplate forum/search_sortoption}-->
			<!--{/if}-->
			<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
			<script type="text/javascript">var lasttime = $_G['timestamp'];</script>
			<!--{/if}-->
			<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&action=moderate&fid=$_G[fid]&infloat=yes&nopost=yes">
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					<input type="hidden" name="listextra" value="$extra" />
					<!--{if $_G['forum_threadcount']}-->
					<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
					<div class="tab_box tl" style="width:100%;">
					<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
					<script type="text/javascript">var lasttime = $_G['timestamp'];var listcolspan= '{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}6{else}5{/if}';</script>
					<!--{/if}-->
					<!--{if (!$simplestyle || !$_G['forum']['allowside'] && $page == 1) && !empty($announcement)}-->
					<div class="bus_announcement">
					<strong class="xst">{lang announcement}</strong>: <!--{if empty($announcement['type'])}--><a href="forum.php?mod=announcement&id=$announcement[id]#$announcement[id]" target="_blank">$announcement[subject]</a><!--{else}--><a href="$announcement[message]" target="_blank">$announcement[subject]</a><!--{/if}-->
					</div>
					<!--{/if}-->					
					
					<table summary="forum_$_G[fid]" width="100%" class="mb20">
								<!--{loop $_G['forum_threadlist'] $key $thread}-->
								<!--{if $_G[setting][forumseparator] == 1 && $separatepos == $key + 1}-->
										<tbody id="separatorline">
											<tr class="ts">
												<td>&nbsp;</td>
												<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}--><td>&nbsp;</td><!--{/if}-->
												<th><!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && !$_GET['filter']}--><a href="javascript:;" onclick="checkForumnew_btn('{$_G['fid']}')" title="{lang showupgrade}" class="forumrefresh">{lang forum_thread}</a><!--{else}-->&nbsp;<!--{/if}--></th><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
											</tr>
										</tbody>
										<script type="text/javascript">hideStickThread();</script>
									<!--{/if}-->
									<!--{if $separatepos <= $key + 1}-->
										<!--{ad/threadlist}-->
									<!--{/if}-->
									<tbody id="$thread[id]" class="bus_forum_tbody {if in_array($thread['displayorder'], array(3))}zd_on{/if}">
										<tr class="bus_forumlist {eval $i++;} {if ($i % 2 === 0)} {eval $i=0;} bus_list2 {/if}" >
											<td class="icon">
													<a href="home.php?mod=space&uid=$thread[authorid]" class="arvtx" c="1"><!--{avatar($thread[authorid],small)}--></a>
											</td>
											<td class="$thread[folder] subject">
												<div class="posttitle">
												<!--{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}-->
													<!--{if $thread['fid'] == $_G[fid]}-->
														<!--{if $thread['displayorder'] <= 3 || $_G['adminid'] == 1}-->
															<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="$thread[tid]" />
														<!--{else}-->
															<input type="checkbox" disabled="disabled" />
														<!--{/if}-->
													<!--{else}-->
														<input type="checkbox" disabled="disabled" />
													<!--{/if}-->
												<!--{/if}-->
												$thread[typehtml] $thread[sorthtml]
												<!--{if $thread['moved']}-->{lang thread_moved}:<!--{eval $thread[tid]=$thread[closed];}--><!--{/if}--><a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"$thread[highlight]{if $thread['isgroup'] == 1 || $thread['forumstick']} target="_blank"{else} onclick="atarget(this)"{/if} class="st">$thread[subject]</a>
												<!--{if $thread['replycredit'] > 0}-->
													- <span class="xi1">[{lang replycredit} <strong> $thread['replycredit']</strong> ]</span>
												<!--{/if}-->
												<!--{if $thread[icon] >= 0}-->
													<img src="{STATICURL}image/stamp/{$_G[cache][stamps][$thread[icon]][url]}" alt="{$_G[cache][stamps][$thread[icon]][text]}" align="absmiddle" />
												<!--{/if}-->
												<!--{if $stemplate && $sortid}-->$stemplate[$sortid][$thread[tid]]<!--{/if}-->
												<!--{if $thread['readperm']}--> - [{lang readperm} <span class="xw1">$thread[readperm]</span>]<!--{/if}-->
												<!--{if $thread['price'] > 0}-->
													<!--{if $thread['special'] == '3'}-->
													- <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=1" title="{lang show_rewarding_only}"><span class="xi1">[{lang thread_reward} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][title]}]</span></a>
													<!--{else}-->
													- [{lang price} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][title]}]
													<!--{/if}-->
												<!--{elseif $thread['special'] == '3' && $thread['price'] < 0}-->
													- <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=2" title="{lang show_rewarded_only}">[{lang reward_solved}]</a>
												<!--{/if}-->
												<!--{if $thread['attachment'] == 2}-->
													<img src="{STATICURL}image/filetype/image_s.gif" alt="attach_img" title="{lang attach_img}" align="absmiddle" />
												<!--{elseif $thread['attachment'] == 1}-->
													<img src="{STATICURL}image/filetype/common.gif" alt="attachment" title="{lang attachment}" align="absmiddle" />
												<!--{/if}-->
												<!--{if $thread['mobile']}-->
													<img src="{IMGDIR}/mobile-attach-$thread['mobile'].png" alt="{lang post_mobile}" align="absmiddle" />
												<!--{/if}-->
												<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
													<img src="{IMGDIR}/digest_$thread[digest].gif" align="absmiddle" alt="digest" title="{lang thread_digest} $thread[digest]" />
												<!--{/if}-->
												<!--{if $thread['displayorder'] == 0}-->
													<!--{if $thread[recommendicon] && $filter != 'recommend'}-->
														<img src="{IMGDIR}/recommend_$thread[recommendicon].gif" align="absmiddle" alt="recommend" title="{lang thread_recommend} $thread[recommends]" />
													<!--{/if}-->
													<!--{if $thread[heatlevel]}-->
														<img src="{IMGDIR}/hot_$thread[heatlevel].gif" align="absmiddle" alt="heatlevel" title="{lang heats}: {$thread[heats]}" />
													<!--{/if}-->
													<!--{if $thread['rate'] > 0}-->
														<img src="{IMGDIR}/agree.gif" align="absmiddle" alt="agree" title="{lang rate_credit_add}" />
													<!--{elseif $thread['rate'] < 0}-->
														<img src="{IMGDIR}/disagree.gif" align="absmiddle" alt="disagree" title="{lang posts_deducted}" />
													<!--{/if}-->
												<!--{/if}-->
												<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
													<i class="s1">精</i>
													<!-- <img src="{IMGDIR}/digest_$thread[digest].gif" align="absmiddle" alt="digest" title="{lang thread_digest} $thread[digest]" /> -->
												<!--{/if}-->
												<!--{if $thread['displayorder'] == 0}-->
													<!--{if $thread[recommendicon] && $filter != 'recommend'}-->
														<img src="{IMGDIR}/recommend_$thread[recommendicon].gif" align="absmiddle" alt="recommend" title="{lang thread_recommend} $thread[recommends]" />
													<!--{/if}-->
													<!--{if $thread[heatlevel]}-->
														<i class="s1">火</i>
														<!-- <img src="{IMGDIR}/hot_$thread[heatlevel].gif" align="absmiddle" alt="heatlevel" title="{lang heats}: {$thread[heats]}" /> -->
													<!--{/if}-->
													<!--{if $thread['rate'] > 0}-->
														<i class="s3">赞</i>
														<!-- <img src="{IMGDIR}/agree.gif" align="absmiddle" alt="agree" title="{lang rate_credit_add}" /> -->
													<!--{elseif $thread['rate'] < 0}-->
														<i class="s3">踩</i>
														<!-- <img src="{IMGDIR}/disagree.gif" align="absmiddle" alt="disagree" title="{lang posts_deducted}" /> -->
													<!--{/if}-->
												<!--{/if}-->
												
												<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
													<!--{eval $thread[tid]=$thread[closed];}-->
												<!--{/if}-->
												<!--{if $thread[folder] == 'lock'}-->
												<i class="s3">锁</i>
													<!-- <img src="{IMGDIR}/folder_lock.gif" /> -->
												<!--{elseif $thread['special'] == 1}-->
													<img src="{IMGDIR}/pollsmall.gif" alt="{lang thread_poll}" />
												<!--{elseif $thread['special'] == 2}-->
													<img src="{IMGDIR}/tradesmall.gif" alt="{lang thread_trade}" />
												<!--{elseif $thread['special'] == 3}-->
													<img src="{IMGDIR}/rewardsmall.gif" alt="{lang thread_reward}" />
												<!--{elseif $thread['special'] == 4}-->
													<img src="{IMGDIR}/activitysmall.gif" alt="{lang thread_activity}" />
												<!--{elseif $thread['special'] == 5}-->
													<img src="{IMGDIR}/debatesmall.gif" alt="{lang thread_debate}" />
												<!--{/if}-->
												<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
													<i class="s2">顶</i>
													<img src="{IMGDIR}/pin_$thread[displayorder].gif" alt="$_G[setting][threadsticky][3-$thread[displayorder]]" />
												<!--{elseif $thread[folder] == 'new'}-->
													<i class="s1">new</i>
												<!--{/if}-->
												<!--{if $thread['rushreply']}-->
												<i class="s1">抢</i>
													<!-- <img src="{IMGDIR}/rushreply_s.png" alt="{lang rushreply}" align="absmiddle" /> -->
												<!--{/if}-->
												<!--{hook/forumdisplay_thread_subject $key}-->
												
												<!--{if !$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
													<!--{if $thread['related_group'] == 0 && $thread['closed'] > 1}-->
														<!--{eval $thread[tid]=$thread[closed];}-->
													<!--{/if}-->
													<!--{if $groupnames[$thread[tid]]}-->
														<span class="fromg xg1"> [{lang from}: <a href="forum.php?mod=forumdisplay&fid={$groupnames[$thread[tid]][fid]}" target="_blank" class="xg1">{$groupnames[$thread[tid]][name]}</a>]</span>
													<!--{/if}-->
												<!--{/if}-->
										<a href="javascript:;" id="content_$thread[tid]" class="showcontent y" title="{lang content_actions}" onclick="CONTENT_TID='$thread[tid]';CONTENT_ID='$thread[id]';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
										<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
											<a href="javascript:void(0);" onclick="hideStickThread('$thread[tid]')" class="showhide y" title="{lang hidedisplayorder}">{lang hidedisplayorder}</a></em>
										<!--{/if}-->
										<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
										<!--{/if}-->
										<!--{if !$_G['setting']['forumdisplaythreadpreview'] && !($thread['readperm'] && $thread['readperm'] > $_G['group']['readaccess'] && !$_G['forum']['ismoderator'] && $thread['authorid'] != $_G['uid'])}-->
											<!--{if !(!empty($_G['setting']['antitheft']['allow']) && empty($_G['setting']['antitheft']['disable']['thread']) && empty($_G['forum']['noantitheft']))}-->
												<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('{echo $thread['moved'] ? $thread[closed] : $thread[tid]}', '$thread[id]');">{lang preview}</a>
											<!--{/if}-->
										<!--{/if}-->
										<!--{hook/forumdisplay_thread $key}-->
										<!--{if $thread['moved']}-->
											{lang thread_moved}:<!--{eval $thread[tid]=$thread[closed];}-->
										<!--{/if}-->
										<!--{if !empty($thread['images'])}-->
										<!--{loop $thread['images'] $img}-->
										<img src="$_G['setting']['attachurl']forum/{$img[attachment]}" height="90px;"/>
										<!--{/loop}-->
										<!--{/if}-->
												</div>
												
												<div class="con">
													<em class="a">
													<!--{if $thread['authorid'] && $thread['author']}-->
													<a href="home.php?mod=space&uid=$thread[authorid]" c="1">作者：<!--{$thread[author]}--></a>
													<!--{else}-->
														<a href="home.php?mod=space&uid=$thread[authorid]" c="1">$_G[setting][anonymoustext]</a>
													<!--{/if}-->
													<!--{if $thread['displayorder'] != 0 || 1}-->
													<code class="creat_time {if $thread['istoday']}xi1{/if}">$thread[dateline]</code>
													<!--{/if}-->
													</em>
													<!--{if $thread['displayorder'] == 0}-->
													<!--{if $thread['lastposter']}-->
													<em class="b">
													<a href="{if $thread[digest] != -2}home.php?mod=space&uid=$thread[lastposter_id]{else}forum.php?mod=viewthread&tid=$thread[tid]&page={echo max(1, $thread[pages]);}{/if}">最后回复：$thread[lastposter]</a>
													<code class="creat_time">$thread[lastpost]</code>
													</em>
													<!--{else}-->$_G[setting][anonymoustext]
													<!--{/if}-->
													<!--{/if}-->
												</div>
											</td>

											<td class="reply">
											<!--{if in_array($thread['displayorder'], array(3))}-->
											<p class="p2">
											<em><!--{echo dnumber($thread[replies])}-->/$thread[views]</em></p>
											<!--{else}-->
											<!--{if $thread[replies] > 50}-->
											<p class="p2">
											<!--{else}-->
											<p class="p2">
											<!--{/if}-->
											<em><!--{echo dnumber($thread[replies])}-->/<span style="font-size:16px;">$thread[views]</span></em></p>
											<!--{/if}-->
											</td>
										</tr>
									</tbody>
								<!--{/loop}-->
								</table>
								$multipage
								</div>
								<div class="cl"></div>
								<!-- end of table "forum_G[fid]" branch 1/3 -->
							<!--{else}--><!-- end of table "forum_G[fid]" branch 2/3 -->
							  <div class="bus_w100 bu_fl pt20"></div>
								<ul class="post big-post cl">


									<!--{loop $_G['forum_threadlist'] $key $thread}-->
									<!--{if $_G['hiddenexists'] && $thread['hidden']}-->
										<!--{eval continue;}-->
									<!--{/if}-->
									<!--{if !$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
										<!--{if $thread['related_group'] == 0 && $thread['closed'] > 1}-->
											<!--{eval $thread[tid]=$thread[closed];}-->
										<!--{/if}-->
									<!--{/if}-->

									<!--{eval $waterfallwidth = $_G[setting][forumpicstyle][thumbwidth] + 24; }-->
									<li class="bus_postbd busbb">
                                    <div class="bus_wtf_box">
										<!--{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}-->
											<div style="position:absolute;margin:1px;padding:2px;background:#FFF;z-index:9">
											<!--{if $thread['fid'] == $_G[fid]}-->
												<!--{if $thread['displayorder'] <= 3 || $_G['adminid'] == 1}-->
													<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="$thread[tid]" />
												<!--{else}-->
													<input type="checkbox" disabled="disabled" />
												<!--{/if}-->
											<!--{else}-->
												<input type="checkbox" disabled="disabled" />
											<!--{/if}-->
											</div>
										<!--{/if}-->
										<div class="cover">
											<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" {if $thread['isgroup'] == 1 || $thread['forumstick'] || CURMODULE == 'guide'} target="_blank"{else} onclick="atarget(this)"{/if} title="$thread[subject]" class="z">
												<!--{if $thread['cover']}-->
													<img src="$thread[coverpath]" alt="$thread[subject]"/>
												<!--{else}-->
													<span class="nopic" style="width:100%; height:250px; display:block"></span>
												<!--{/if}-->
											</a>
											<div class="overlay">
												<!--{hook/forumdisplay_thread $key}-->
		                                        <a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" {if $thread['isgroup'] == 1 || $thread['forumstick'] || CURMODULE == 'guide'} target="_blank"{else} onclick="atarget(this)"{/if} title="$thread[subject]" ><!--{echo messagecutstr(DB::result_first('SELECT `message` FROM '.DB::table('forum_post').' WHERE `tid` ='.$thread[tid].' AND `first` =1'),80);}-->...</a>
											</div>
										</div>
										<dl class="bus_auth">
											<dd><b><a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"$thread[highlight]{if $thread['isgroup'] == 1 || $thread['forumstick']} target="_blank"{else} onclick="atarget(this)"{/if} title="$thread[subject]">$thread[subject]</a></b></dd>
											<dd>
											<span class="times">$thread[dateline]</span>
											<span class="views">$thread[views]</span>
											<span class="comments">$thread[replies]</span>
											</dd>
											<!--{hook/forumdisplay_author $key}-->
										</dl>
									</div>
									</li>
									<!--{/loop}-->
								</ul>

								<div class="bus_w100 bu_fr pg pb20">$multipage</div>

								<div id="tmppic" style="display: none;"></div>
								<script type="text/javascript" src="{$_G[setting][jspath]}redef.js?{VERHASH}"></script>
								<script type="text/javascript" reload="1">
								var wf = {};
		
								_attachEvent(window, "load", function () {
									if($("waterfall")) {
										wf = waterfall();
									}
		
									<!--{if $page < $_G['page_next'] && !$subforumonly}-->
										var page = $page + 1,
											maxpage = Math.min($page + 10,$maxpage + 1),
											stopload = 0,
											scrolltimer = null,
											tmpelems = [],
											tmpimgs = [],
											markloaded = [],
											imgsloaded = 0,
											loadready = 0,
											showready = 1,
											nxtpgurl = 'forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&page=',
											wfloading = "<img src=\"{IMGDIR}/loading.gif\" alt=\"\" width=\"16\" height=\"16\" class=\"vm\" /> {lang onloading}...",
											pgbtn = $("pgbtn").getElementsByTagName("a")[0];
		
										function loadmore() {
											var url = nxtpgurl + page + '&t=' + parseInt((+new Date()/1000)/(Math.random()*1000));
											var x = new Ajax("HTML");
											x.get(url, function (s) {
												s = s.replace(/\n|\r/g, "");
												if(s.indexOf("id=\"pgbtn\"") == -1) {
													$("pgbtn").style.display = "none";
													stopload++;
													window.onscroll = null;
												}
		
												s = s.substring(s.indexOf("<ul id=\"waterfall\""), s.indexOf("<div id=\"tmppic\""));
												s = s.replace("id=\"waterfall\"", "");
												$("tmppic").innerHTML = s;
												loadready = 1;
											});
										}
		
										window.onscroll = function () {
											if(scrolltimer == null) {
												scrolltimer = setTimeout(function () {
													try {
														if(page < maxpage && stopload < 2 && showready && ((document.documentElement.scrollTop || document.body.scrollTop) + document.documentElement.clientHeight + 500) >= document.documentElement.scrollHeight) {
															pgbtn.innerHTML = wfloading;
															loadready = 0;
															showready = 0;
															loadmore();
															tmpelems = $("tmppic").getElementsByTagName("li");
															var waitingtimer = setInterval(function () {
																stopload >= 2 && clearInterval(waitingtimer);
																if(loadready && stopload < 2) {
																	if(!tmpelems.length) {
																		page++;
																		pgbtn.href = nxtpgurl + Math.min(page, $maxpage);
																		pgbtn.innerHTML = "{lang next_page_extra}";
																		showready = 1;
																		clearInterval(waitingtimer);
																	}
																	for(var i = 0, j = tmpelems.length; i < j; i++) {
																		if(tmpelems[i]) {
																			tmpimgs = tmpelems[i].getElementsByTagName("img");
																			imgsloaded = 0;
																			for(var m = 0, n = tmpimgs.length; m < n; m++) {
																				tmpimgs[m].onerror = function () {
																					this.style.display = "none";
																				};
																				markloaded[m] = tmpimgs[m].complete ? 1 : 0;
																				imgsloaded += markloaded[m];
																			}
																			if(imgsloaded == tmpimgs.length) {
																				$("waterfall").appendChild(tmpelems[i]);
																				wf = waterfall({
																					"index": wf.index,
																					"totalwidth": wf.totalwidth,
																					"totalheight": wf.totalheight,
																					"columnsheight": wf.columnsheight
																				});
																			}
																		}
																	}
																}
															}, 40);
														}
													} catch(e) {}
													scrolltimer = null;
												}, 320);
											}
										};
									<!--{/if}-->
		
								});
		
								</script>
							<!--{/if}-->
						<!--{else}-->
								<tbody class="bw0_all"><tr><th colspan="{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}6{else}5{/if}"><p class="emp">{lang forum_nothreads}</p></th></tr></tbody>
							</table><!-- end of table "forum_G[fid]" branch 3/3 -->
						<!--{/if}-->
					<!--{if $_G['forum']['ismoderator'] && $_G['forum_threadcount']}-->
						<!--{template forum/topicadmin_modlayer}-->
					<!--{/if}-->
				</form>
			
			<!--{if ($_G[forum][picstyle] || $_G[cookie][forumdefstyle])}-->
				<div id="pgbtn" class="pgbtn"><a href="forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&{$multipage_archive}&page=$nextpage" hidefocus="true">{lang next_page_extra}</a></div>
			<!--{/if}-->
			<!--{hook/forumdisplay_threadlist_bottom}-->
		  </div>
		<!--{if $multipage && $filter != 'hot'}-->
		<!--{if !empty($_G['forum']['picstyle']) && !$_G['cookie']['forumdefstyle']}-->
								<div id="tmppic" style="display: none;"></div>
								<script type="text/javascript" src="{$_G[setting][jspath]}redef.js?{VERHASH}"></script>
								<script type="text/javascript" reload="1">
								var wf = {};
		
								_attachEvent(window, "load", function () {
									if($("waterfall")) {
										wf = waterfall();
									}
		
									<!--{if $page < $_G['page_next'] && !$subforumonly}-->
										var page = $page + 1,
											maxpage = Math.min($page + 10,$maxpage + 1),
											stopload = 0,
											scrolltimer = null,
											tmpelems = [],
											tmpimgs = [],
											markloaded = [],
											imgsloaded = 0,
											loadready = 0,
											showready = 1,
											nxtpgurl = 'forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&page=',
											wfloading = "<img src=\"{IMGDIR}/loading.gif\" alt=\"\" width=\"16\" height=\"16\" class=\"vm\" /> {lang onloading}...",
											pgbtn = $("pgbtn").getElementsByTagName("a")[0];
		
										function loadmore() {
											var url = nxtpgurl + page + '&t=' + parseInt((+new Date()/1000)/(Math.random()*1000));
											var x = new Ajax("HTML");
											x.get(url, function (s) {
												s = s.replace(/\n|\r/g, "");
												if(s.indexOf("id=\"pgbtn\"") == -1) {
													$("pgbtn").style.display = "none";
													stopload++;
													window.onscroll = null;
												}
		
												s = s.substring(s.indexOf("<ul id=\"waterfall\""), s.indexOf("<div id=\"tmppic\""));
												s = s.replace("id=\"waterfall\"", "");
												$("tmppic").innerHTML = s;
												loadready = 1;
											});
										}
		
										window.onscroll = function () {
											if(scrolltimer == null) {
												scrolltimer = setTimeout(function () {
													try {
														if(page < maxpage && stopload < 2 && showready && ((document.documentElement.scrollTop || document.body.scrollTop) + document.documentElement.clientHeight + 500) >= document.documentElement.scrollHeight) {
															pgbtn.innerHTML = wfloading;
															loadready = 0;
															showready = 0;
															loadmore();
															tmpelems = $("tmppic").getElementsByTagName("li");
															var waitingtimer = setInterval(function () {
																stopload >= 2 && clearInterval(waitingtimer);
																if(loadready && stopload < 2) {
																	if(!tmpelems.length) {
																		page++;
																		pgbtn.href = nxtpgurl + Math.min(page, $maxpage);
																		pgbtn.innerHTML = "{lang next_page_extra}";
																		showready = 1;
																		clearInterval(waitingtimer);
																	}
																	for(var i = 0, j = tmpelems.length; i < j; i++) {
																		if(tmpelems[i]) {
																			tmpimgs = tmpelems[i].getElementsByTagName("img");
																			imgsloaded = 0;
																			for(var m = 0, n = tmpimgs.length; m < n; m++) {
																				tmpimgs[m].onerror = function () {
																					this.style.display = "none";
																				};
																				markloaded[m] = tmpimgs[m].complete ? 1 : 0;
																				imgsloaded += markloaded[m];
																			}
																			if(imgsloaded == tmpimgs.length) {
																				$("waterfall").appendChild(tmpelems[i]);
																				wf = waterfall({
																					"index": wf.index,
																					"totalwidth": wf.totalwidth,
																					"totalheight": wf.totalheight,
																					"columnsheight": wf.columnsheight
																				});
																			}
																		}
																	}
																}
															}, 40);
														}
													} catch(e) {}
													scrolltimer = null;
												}, 320);
											}
										};
									<!--{/if}-->
		
								});
		
								</script>
				<!--{/if}-->
		<!--{/if}-->
		<!--{if !IS_ROBOT}-->
			<div id="filter_special_menu" class="p_pop" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=$_G[fid]&filter='+$('filter_special').value">
				<ul>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang all}{lang forum_threads}</a></li>
					<!--{if $showpoll}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=poll$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_poll}</a></li><!--{/if}-->
					<!--{if $showtrade}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=trade$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_trade}</a></li><!--{/if}-->
					<!--{if $showreward}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_reward}</a></li><!--{/if}-->
					<!--{if $showactivity}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=activity$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_activity}</a></li><!--{/if}-->
					<!--{if $showdebate}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=debate$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_debate}</a></li><!--{/if}-->
				</ul>
			</div>
			<div id="filter_reward_menu" class="p_pop" style="display:none" change="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype='+$('filter_reward').value">
				<ul>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang all_reward}</a></li>
					<!--{if $showpoll}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=1">{lang rewarding}</a></li><!--{/if}-->
					<!--{if $showtrade}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=2">{lang reward_solved}</a></li><!--{/if}-->
				</ul>
			</div>
			<div id="filter_dateline_menu" class="p_pop" style="display:none">
				<ul class="pop_moremenu">
					<li>{lang orderby}: 
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=author&orderby=dateline$forumdisplayadd[author]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['orderby'] == 'dateline'}class="xw1"{/if}>{lang list_post_time}</a><span class="pipe">|</span>
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=replies$forumdisplayadd[reply]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['orderby'] == 'replies'}class="xw1"{/if}>{lang replies}</a><span class="pipe">|</span>
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=views$forumdisplayadd[view]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['orderby'] == 'views'}class="xw1"{/if}>{lang views}</a>
					</li>
					<li>{lang time}: 
					<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if !$_GET['dateline']}class="xw1"{/if}>{lang all}{lang search_any_date}</a><span class="pipe">|</span>
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=86400$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '86400'}class="xw1"{/if}>{lang last_1_days}</a><span class="pipe">|</span>
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=172800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '172800'}class="xw1"{/if}>{lang last_2_days}</a><span class="pipe">|</span>
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=604800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '604800'}class="xw1"{/if}>{lang list_one_week}</a><span class="pipe">|</span>
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=2592000$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '2592000'}class="xw1"{/if}>{lang list_one_month}</a><span class="pipe">|</span>
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=7948800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '7948800'}class="xw1"{/if}>{lang list_three_month}</a>
					</li>
				</ul>
			</div>
			<!--{if !$_G['setting']['closeforumorderby']}-->
			<div id="filter_orderby_menu" class="p_pop" style="display:none">
				<ul>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_default_sort}</a></li>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=author&orderby=dateline$forumdisplayadd[author]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_post_time}</a></li>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=replies$forumdisplayadd[reply]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang replies}</a></li>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=views$forumdisplayadd[view]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang views}</a></li>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=lastpost&orderby=lastpost$forumdisplayadd[lastpost]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang lastpost}</a></li>
					<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang order_heats}</a></li>
				<ul>
			</div>
			<!--{/if}-->
		<!--{/if}-->
		<!--模板巴士list结束-->
				
		<!--{else}-->
			<!--{subtemplate forum/forumdisplay_sort}-->
		<!--{/if}-->
		</div>
        <div class="clear"></div>
        <!--{if $fastpost}-->
        	<div class="bus_fastpost">
			<!--{template forum/forumdisplay_fastpost}-->
			<div class="hs"></div>
			</div>
		<!--{/if}-->
</div><!--Mobanbus_cn bus_viewthread_c end-->

<div {if $leftside} class="bus_viewthread_r" {else} {if $_G['forum']['allowside']} class="bus_viewthread_r" {/if} class="bus_hide" {/if}>
	<aside>
		<div class="busbox_bussidebar bussidebar">
		<div class="mobanbus_tj bus_yt">
		<!--{subtemplate forum/forumdisplay_busyt}-->
        </div>
        </div>
		<!-- bus_sidebox-->
		<div class="bus_sidebox bus_sd">	
			<!--[diy=diy_ads1]--><div id="diy_ads1" class="area"></div><!--[/diy]-->
		</div>
		<!-- bus_sidebox end -->
		<div class="clear"></div>
		<!--{subtemplate forum/bus_forumdisplay_left}-->
		<div class="clear"></div>
		<!--[diy=diy_bus_rightbox]--><div id="diy_bus_rightbox" class="area"></div><!--[/diy]-->
		<div class="clear"></div>
	</aside>
</div><!--Mobanbus_cn bus_viewthread_r end-->
<script id="jsID" type="text/javascript">jQuery("#bus_sideMen").slide({titCell:"h3", targetCell:"ul",defaultIndex:1,effect:"slideDown",delayTime:300});</script>
<script type="text/javascript">
  jQuery(document).ready( function() {
	jQuery(".bussidebar").autofix_anything();
  });

</script>
<div class="cl"></div>
<!--{subtemplate common/footer}-->