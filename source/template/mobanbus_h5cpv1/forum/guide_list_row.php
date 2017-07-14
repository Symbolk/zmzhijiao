<?php echo '模板巴士原创模板，版权所有，盗版必究，官网 www.mobanbus.cn';exit;?>
				<!--{if $list['threadcount']}-->
						<!--{loop $list['threadlist'] $key $thread}-->
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
										<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
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
											<em><!--{echo dnumber($thread[replies])}-->/<span>$thread[views]</span></em></p>
											<!--{else}-->
											<!--{if $thread[replies] > 50}-->
											<p class="p2">
											<!--{else}-->
											<p class="p2">
											<!--{/if}-->
											<em><!--{echo dnumber($thread[replies])}-->/<span>$thread[views]</span></em></p>
											<!--{/if}-->
											</td>
										</tr>
									</tbody>
							<!--{if $view == 'my' && $viewtype=='reply' && !empty($tids[$thread[tid]])}-->
								<tbody class="bw0_all">
									<tr>
										<td class="icn">&nbsp;</td>
										<td colspan="5">
											<!--{loop $tids[$thread[tid]] $pid}-->
											<!--{eval $post = $posts[$pid];}-->
											<div class="tl_reply pbm xg1"><a href="forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid=$pid" target="_blank"><!--{if $post[message]}-->{$post[message]}<!--{else}-->...<!--{/if}--></a></div>
											<!--{/loop}-->
										</td>
									</tr>
								</tbody>
								<tr><td colspan="6"></td></tr>
							<!--{/if}-->
							<!--{if $view == 'my' && $viewtype=='postcomment'}-->
								<tr>
									<td class="icn">&nbsp;</td>
									<td colspan="5" class="xg1">$thread[comment]</td>
								</tr>
							<!--{/if}-->
						<!--{/loop}-->
				<!--{else}-->
						<tbody class="bw0_all"><tr><th colspan="5"><p class="emp">{lang guide_nothreads}</p></th></tr></tbody>
				<!--{/if}-->