<?php echo '模板巴士原创模板，版权所有，盗版必究，官网 www.mobanbus.cn';exit;?>
		<div class="bus_favatar">
			$post[newpostanchor] $post[lastpostanchor]
			<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
				<!--{if !$postshowavatars}-->
					<div class="bus_auther_logo">
					<a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" title="$_G[forum_thread][author]"><!--{avatar($_G[forum_thread][authorid],big)}--></a>
					<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
						<!--{if $_G['setting']['authoronleft']}-->
						<span {if $post[groupcolor]} style="color: $post[groupcolor]"{/if}>$_G[forum_thread][author]</span>
						<!--{/if}-->
					<!--{/if}-->
					</div>
				<!--{elseif $post['avatar'] && $showavatars}-->
					<!--{if $post[mobiletype]}-->
					<div class="mobile-type mobile-type-$post[mobiletype]">
						<a></a>
					</div>
					<!--{/if}-->
					<div class="avatar"{if !($_G['setting']['threadguestlite'] && !$_G['uid'])} onmouseover="showauthor(this, 'userinfo$post[pid]')"{/If}><a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" class="avtm" target="_blank">$post[avatar]</a></div>
				<!--{/if}-->
				<!--{if !($_G['setting']['threadguestlite'] && !$_G['uid'])}-->
					<div class="bus_uinfo"></div>
					<!--{if $_G[forum_thread][authorid] != $_G[uid]}-->
						<ul class="xl xl2 o cl">
							<!--{if helper_access::check_module('follow')}-->
							<li class="addflw">
								<a href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$_G[forum_thread][authorid]" id="followmod_$_G[forum_thread][authorid]" title="{lang follow}" class="xi2" onclick="showWindow('followmod', this.href, 'get', 0);">{lang follow}</a>
							</li>
							<!--{/if}-->
							<li class="pm2"><a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$_G[forum_thread][authorid]&touid=$_G[forum_thread][authorid]&pmid=0&daterange=2&pid=$post[pid]&tid=$post[tid]" onclick="showWindow('sendpm', this.href);" title="{lang viewthread_left_sendpm}" class="xi2">{lang viewthread_left_sendpm}</a></li>
						</ul>
					<!--{/if}-->
				<!--{/if}-->
			<!--{elseif getstatus($post['status'], 5)}-->
			<!--{else}-->
			<!--{/if}-->
			<!--{if ($_G['group']['allowedituser'] || $_G['group']['allowbanuser'] || ($_G['forum']['ismoderator'] && $_G['group']['allowviewip'])) && !getstatus($post['status'], 5)}-->
				<p class="cp_pls cl">
					<!--{if $_G['forum']['ismoderator'] && $_G['group']['allowviewip']}-->
						<a href="forum.php?mod=topicadmin&action=getip&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if $_G['forum_auditstatuson']}&modthreadkey=$_GET[modthreadkey]{/if}" onclick="ajaxmenu(this, 0, 0, 2);doane(event)">IP</a>
					<!--{/if}-->
					<!--{if $_G['group']['allowedituser']}-->
						<a href="{if $_G['adminid'] == 1}admin.php?frames=yes&action=members&operation=search&uid=$_G[forum_thread][authorid]&submit=yes{else}forum.php?mod=modcp&action=member&op=edit&uid=$_G[forum_thread][authorid]{/if}" target="_blank">{lang edit}</a>
					<!--{/if}-->
					<!--{if $_G['group']['allowbanuser']}-->
						<!--{if $_G['adminid'] == 1}-->
							<a href="admin.php?action=members&operation=ban&username=$post[usernameenc]&frames=yes" target="_blank">{lang ban_member}</a>
						<!--{else}-->
							<a href="forum.php?mod=modcp&action=member&op=ban&uid=$_G[forum_thread][authorid]" target="_blank">{lang ban_member}</a>
						<!--{/if}-->
					<!--{/if}-->
					<a href="forum.php?mod=modcp&action=thread&op=post&do=search&searchsubmit=1&users=$post[usernameenc]" target="_blank">{lang posts}</a>
					<!--{if $_G['adminid'] == 1}-->
						<a href="forum.php?mod=ajax&action=quickclear&uid=$_G[forum_thread][authorid]" onclick="showWindow('qclear_$_G[forum_thread][authorid]', this.href, 'get', 0)">{lang clear}</a>
					<!--{/if}-->
				</p>
			<!--{/if}-->
		</div>
