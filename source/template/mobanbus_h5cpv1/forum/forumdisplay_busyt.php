<?php echo '模板巴士原创模板，版权所有，盗版必究，官网 www.mobanbus.cn';exit;?>
        	<dl>
            	<dt>
				<!--{if $_G['forum'][icon]}-->
				<!--{eval $_G['forum'][icon] =  get_forumimg($_G['forum']['icon']);}-->
					<a class="bus_fl" href="forum.php?mod=forumdisplay&fid=$_G['forum'][fid]"><img src="$_G['forum'][icon]" alt="$_G['forum']['name']" /></a>
				<!--{else}-->
					<a class="bus_fl" href="forum.php?mod=forumdisplay&fid=$_G['forum'][fid]"><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
				<!--{/if}-->
				
				
                	<div class="bus_fl tit">
                    	<h1><a href="forum.php?mod=forumdisplay&fid=$_G['forum'][fid]">$_G['forum'][name]</a></h1>
                        <p>
                        <!--{if !in_array($_G['forum']['fid'],$favfids)}-->
                    	<a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);">+ 关注</a>
                    	<!--{else}-->
		                  <a href="home.php?mod=spacecp&ac=favorite&op=delete&favid={$threadfavid[$_G['forum']['fid']]}&handlekey=favoriteforum" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);">取消关注</a>
		                  <!--{/if}-->
                        </p>
                   	</div>
				
				</dt>
                <dd>
                    <div class="bus_fl xg">
                    	<p>
						<!--{if $favoritenum}--><span>关注：<i>$favoritenum</i></span><!--{/if}-->
						<span>关注：<i>$_G[forum][favtimes]</i></span></p>
                        <p>所属分类：$navigation</p>
						<!--{if $moderatedby}--><p>{lang forum_modedby}: <span class="xi2">$moderatedby</span></p><!--{/if}-->
                   	</div>
                </dd>
                <dd>
                </dd>
                <dd>
				<!--{if $_G['page'] == 1 && $_G['forum']['rules']}--><span class="bus_rules">$_G['forum'][rules]</span><!--{/if}-->
                </dd>
                <dd class="bus_forumpost">
				<!--{if !$_G['forum_thread']['is_archived']}-->
				<a class="view_post" {if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} href="javascript:;" title="{lang send_posts}">{lang send_posts}</a><!--{/if}-->
				<!--{if $_GET[mod] == 'viewthread'}-->
				<a class="view_reply" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$post[pid]&extra=$_GET[extra]&page=$page" onclick="showWindow('reply', this.href)">{lang reply}</a>
				<!--{else}-->
				<!--{/if}-->
                </dd>
                <dd>
                   	<!--{if $_G['forum']['ismoderator']}-->
                   	<div class="bus_fr xg">
                    	<p></p>
                        <p class="recycle">
                   	
						<!--{if $_G['forum']['recyclebin']}-->
							<a href="{if $_G['adminid'] == 1}admin.php?mod=forum&action=recyclebin&frames=yes{elseif $_G['forum']['ismoderator']}forum.php?mod=modcp&action=recyclebin&fid=$_G[fid]{/if}" target="_blank">{lang forum_recyclebin}</a>
						<!--{/if}-->
						<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}-->
						<!--{if $_G['forum']['status'] != 3}-->
								| <a href="forum.php?mod=modcp&fid=$_G[fid]">{lang modcp}</a>
							<!--{else}-->
								| <a href="forum.php?mod=group&action=manage&fid=$_G[fid]">{lang modcp}</a>
							<!--{/if}-->
						<!--{/if}-->
						</p></div>
						<!--{/if}-->
                </dd>
            </dl>
