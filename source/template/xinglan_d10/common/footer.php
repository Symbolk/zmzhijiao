<?php exit; ?>
</div>
<!--{if empty($topic) || ($topic[usefooter])}-->
<!--{eval $focusid = getfocus_rand($_G[basescript]);}-->
<!--{if $focusid !== null}-->
<!--{eval $focus = $_G['cache']['focus']['data'][$focusid];}-->
<!--{eval $focusnum = count($_G['setting']['focus'][$_G[basescript]]);}-->
<link rel="stylesheet" type="text/css" href="index.css">
<div class="focus" id="sitefocus">
  <div class="bm">
    <div class="bm_h cl"> <a href="javascript:;" onclick="setcookie('nofocus_$_G[basescript]', 1, $_G['cache']['focus']['cookie']*3600);$('sitefocus').style.display='none'" class="y" title="{lang close}">{lang close}</a>
      <h2> 
        <!--{if $_G['cache']['focus']['title']}-->{$_G['cache']['focus']['title']}<!--{else}-->{lang focus_hottopics}<!--{/if}--> 
        <span id="focus_ctrl" class="fctrl"><img src="{IMGDIR}/pic_nv_prev.gif" alt="{lang footer_previous}" title="{lang footer_previous}" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/$focusnum</em> <img src="{IMGDIR}/pic_nv_next.gif" alt="{lang footer_next}" title="{lang footer_next}" id="focusnext" class="cur1" onclick="showfocus('next')" /></span> </h2>
    </div>
    <div class="bm_c" id="focus_con"> </div>
  </div>
</div>
<!--{eval $focusi = 0;}--> 
<!--{loop $_G['setting']['focus'][$_G[basescript]] $id}-->
<div class="bm_c" style="display: none" id="focus_$focusi">
  <dl class="xld cl bbda">
    <dt><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2" target="_blank">$_G['cache']['focus']['data'][$id]['subject']</a></dt>
    <!--{if $_G['cache']['focus']['data'][$id][image]}-->
    <dd class="m"><a href="{$_G['cache']['focus']['data'][$id]['url']}" target="_blank"><img src="{$_G['cache']['focus']['data'][$id]['image']}" alt="$_G['cache']['focus']['data'][$id]['subject']" /></a></dd>
    <!--{/if}-->
    <dd>$_G['cache']['focus']['data'][$id]['summary']</dd>
  </dl>
  <p class="ptn cl"><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2 y" target="_blank">{lang focus_show} &raquo;</a></p>
</div>
<!--{eval $focusi ++;}--> 
<!--{/loop}--> 
<script type="text/javascript">
			var focusnum = $focusnum;
			if(focusnum < 2) {
				$('focus_ctrl').style.display = 'none';
			}
			if(!$('focuscur').innerHTML) {
				var randomnum = parseInt(Math.round(Math.random() * focusnum));
				$('focuscur').innerHTML = Math.max(1, randomnum);
			}
			showfocus();
			var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
		</script> 
<!--{/if}--> 
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
<div class="focus patch" id="patch_notice"></div>
<!--{/if}--> 

<!--{ad/footerbanner/wp a_f/1}--><!--{ad/footerbanner/wp a_f/2}--><!--{ad/footerbanner/wp a_f/3}--> 
<!--{ad/float/a_fl/1}--><!--{ad/float/a_fr/2}--> 
<!--{ad/couplebanner/a_fl a_cb/1}--><!--{ad/couplebanner/a_fr a_cb/2}--> 
<!--{ad/cornerbanner/a_cn}--> 

<!--{hook/global_footer}-->

<div class="ft_wp">

<div class="zjdba">
<div id="zjdb" class="wp">
<div id="gll">
	<div id="gywm">
	<ul>
		<span id="listtitle">关于我们</span>
        <li><a href="#">网站简介</a></li>
        <li><a href="#">付费推广</a></li>
		<li><a href="#">合作联盟</a></li>
	  </ul>
	</div>
	
	<div id="bzzx">
	<ul>
		<span id="listtitle">帮助中心</span>
        <li><a href="#">新手上路</a></li>
        <li><a href="#">常见问题</a></li>
		<li><a href="#">在线答疑</a></li>
	  </ul>
	</div>
	
	<div id="lxwm">
	<ul>
		<span id="listtitle">联系我们</span>
        <li><a href="#">咨询电话：0000 - 12345678  9999888877</a></li>
        <li><a href="#">邮箱：123456789@qq . com</a></li>
		<li><a href="#">地址：北京市海定区通州路群芳园二园1号楼9号</a></li>
	  </ul>
	</div>
	
    <div id="yyonload">
	<ul> 
	    <span id="listtitle">移动客户端</span>
		<li class="a1"><a href="#"><i></i>安卓客户端</a></li>
		<li class="a2"><a href="#"><i></i>苹果客户端</a></li>	
		<li class="a3"><a href="#"><i></i>win8客户端</a></li>
	</ul>
	</div>	
	
	<div id="gzwm">
	<ul>
		<span id="listtitle">关注我们</span>
        <li><a href="#">微信公众号：123cwyy</a></li>
        <li><a href="#">扫描右侧二维码关注我们</a></li>
		<li><a href="#">最专业的在线地方门户</a></li>
	  </ul>
	</div>
	
	<div id="erwm">
	<p></p>
	</div>
	

</div>
</div>
</div>
 
  <div id="ft" class=" cl">
  
  		
  
		<div id="flk">
		
			<p>
			<!--{if !empty($_G['setting']['boardlicensed'])}-->  
			<a href="http://license.comsenz.com/?pid=1&host=$_SERVER[HTTP_HOST]" target="_blank">Licensed</a>
			<!--{/if}-->Copyright &copy; 2001-2015 <a href="http://www.discuz.net/">Discuz!</a> X3.2 &copy; 2001-2013<a href="http://www.comsenz.com/"> Comsenz Inc.</a>  <a href="#" target="_blank">京 ICP备11000000号－4</a></p>
		
			<p>
				<!--{if $_G['setting']['site_qq']}--><a href="http://wpa.qq.com/msgrd?V=3&Uin=$_G['setting']['site_qq']&Site=$_G['setting']['bbname']&Menu=yes&from=discuz" target="_blank" title="QQ"><img src="{IMGDIR}/site_qq.jpg" alt="QQ" /></a><span class="pipe">|</span><!--{/if}-->
				<!--{loop $_G['setting']['footernavs'] $nav}--><!--{if $nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
						!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))}-->$nav[code]<span class="pipe">|</span><!--{/if}--><!--{/loop}-->
						<a href="$_G['setting']['siteurl']" target="_blank">$_G['setting']['sitename']</a>
				<!--{if $_G['setting']['icp']}-->( <a href="http://www.miitbeian.gov.cn/" target="_blank">$_G['setting']['icp']</a> )<!--{/if}-->
				<!--{hook/global_footerlink}-->
				<!--{if $_G['setting']['statcode']}-->$_G['setting']['statcode']<!--{/if}-->
			</p>
			
		</div>
		
		<div id="ftl" style="display:none;">
		<p>Powered by <a href="http://www.discuz.net" target="_blank">Discuz!</a> <em>$_G['setting']['version']</em>
		<!--{if !empty($_G['setting']['boardlicensed'])}-->  
		<a href="http://license.comsenz.com/?pid=1&host=$_SERVER[HTTP_HOST]" target="_blank">Licensed</a>
		<!--{/if}-->Copyright <br /> &copy; 2001-2013 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a></p>
		</div>
		
		
		<div id="frt" style="display:none;">
			
            
            <p>
				<!--{if $_G['setting']['site_qq']}--><a href="http://wpa.qq.com/msgrd?V=3&Uin=$_G['setting']['site_qq']&Site=$_G['setting']['bbname']&Menu=yes&from=discuz" target="_blank" title="QQ"><img src="{IMGDIR}/site_qq.jpg" alt="QQ" /></a><span class="pipe">|</span><!--{/if}-->
				<!--{loop $_G['setting']['footernavs'] $nav}--><!--{if $nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
						!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))}-->$nav[code]<span class="pipe">|</span><!--{/if}--><!--{/loop}-->
						<a href="$_G['setting']['siteurl']" target="_blank">$_G['setting']['sitename']</a>
				<!--{if $_G['setting']['icp']}-->( <a href="http://www.miitbeian.gov.cn/" target="_blank">$_G['setting']['icp']</a> )<!--{/if}-->
				<!--{hook/global_footerlink}-->
				<!--{if $_G['setting']['statcode']}-->$_G['setting']['statcode']<!--{/if}-->
			</p><p>{lang time_now}
                   <!--{if debuginfo()}-->, Processed in $_G[debuginfo][time] second(s), $_G[debuginfo][queries] queries<!--{if $_G['gzipcompress']}-->, Gzip On<!--{/if}--><!--{if C::memory()->type}-->, <!--{echo ucwords(C::memory()->type)}--> On<!--{/if}-->.<!--{/if}--></p>
		</div>
		<!--{eval updatesession();}-->
		<!--{if $_G['uid'] && $_G['group']['allowinvisible']}-->
			<script type="text/javascript">
			var invisiblestatus = '<!--{if $_G['session']['invisible']}-->{lang login_invisible_mode}<!--{else}-->{lang login_normal_mode}<!--{/if}-->';
			var loginstatusobj = $('loginstatusid');
			if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
			</script>
		<!--{/if}-->
	</div>
</div>
</div>
<!--bottombg结束--> 
<!--{/if}--> 

<!--{if !$_G['setting']['bbclosed']}--> 
<!--{if $_G[uid] && !isset($_G['cookie']['checkpm'])}--> 
<script type="text/javascript" src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=$_G[timestamp]"></script> 
<!--{/if}--> 

<!--{if $_G[uid] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])}--> 
<script type="text/javascript" src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=$_G[timestamp]"></script> 
<!--{/if}--> 

<!--{if !isset($_G['cookie']['sendmail'])}--> 
<script type="text/javascript" src="home.php?mod=misc&ac=sendmail&rand=$_G[timestamp]"></script> 
<!--{/if}--> 

<!--{if $_G[uid] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])}--> 
<script type="text/javascript" src="misc.php?mod=patch&action=checkpatch&rand=$_G[timestamp]"></script> 
<!--{/if}--> 

<!--{/if}--> 

<!--{if $_GET['diy'] == 'yes'}--> 
<!--{if check_diy_perm($topic) && (empty($do) || $do != 'index')}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script> 
<script type="text/javascript" src="{$_G[setting][jspath]}portal_diy{if !check_diy_perm($topic, 'layout')}_data{/if}.js?{VERHASH}"></script> 
<!--{/if}--> 
<!--{if $space['self'] && CURMODULE == 'space' && $do == 'index'}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script> 
<script type="text/javascript" src="{$_G[setting][jspath]}space_diy.js?{VERHASH}"></script> 
<!--{/if}--> 
<!--{/if}--> 
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}--> 
<script type="text/javascript">patchNotice();</script> 
<!--{/if}--> 
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])}-->
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script> 
<!--{/if}--> 
<!--{if $_G['uid'] && !empty($_G['cookie']['lip'])}-->
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script> 
<!--{/if}--> 
<!--{if $_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G[uid]]) || $_G['cookie']['promptstate_'.$_G[uid]] != $_G['member']['newprompt']) && $_GET['do'] != 'notice'}--> 
<script type="text/javascript">noticeTitle();</script> 
<!--{/if}--> 

<!--{if ($_G[member][newpm] || $_G[member][newprompt]) && empty($_G['cookie']['ignore_notice'])}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}html5notification.js?{VERHASH}"></script> 
<script type="text/javascript">
	var h5n = new Html5notification();
	if(h5n.issupport()) {
		<!--{if $_G[member][newpm] && $_GET[do] != 'pm'}-->
		h5n.shownotification('pm', '$_G[siteurl]home.php?mod=space&do=pm', '<!--{avatar($_G[uid],small,true)}-->', '{lang newpm_subject}', '{lang newpm_notice_info}');
		<!--{/if}-->
		<!--{if $_G[member][newprompt] && $_GET[do] != 'notice'}-->
				<!--{loop $_G['member']['category_num'] $key $val}-->
					<!--{eval $noticetitle = lang('template', 'notice_'.$key);}-->
					h5n.shownotification('notice_$key', '$_G[siteurl]home.php?mod=space&do=notice&view=$key', '<!--{avatar($_G[uid],small,true)}-->', '$noticetitle ($val)', '{lang newnotice_notice_info}');
				<!--{/loop}-->
		<!--{/if}-->
	}
	</script> 
<!--{/if}--> 

<!--{eval userappprompt();}--> 
<!--{if $_G['basescript'] != 'userapp'}--> 
<!--<div id="scrolltop"> 
  <!--{if $_G[fid] && $_G['mod'] == 'viewthread'}--> 
<span><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$_GET[extra]&page=$page{if $_GET[from]}&from=$_GET[from]{/if}" onclick="showWindow('reply', this.href)" class="replyfast" title="{lang fastreply}"><b>{lang fastreply}</b></a></span> 
<!--{/if}--> 
<span hidefocus="true"><a title="{lang scrolltop}" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>{lang scrolltop}</b></a></span> 
<!--{if $_G[fid]}--> 
<span> 
<!--{if $_G['mod'] == 'viewthread'}--> 
<a href="forum.php?mod=forumdisplay&fid=$_G[fid]" hidefocus="true" class="returnlist" title="{lang return_list}"><b>{lang return_list}</b></a> 
<!--{else}--> 
<a href="forum.php" hidefocus="true" class="returnboard" title="{lang return_forum}"><b>{lang return_forum}</b></a> 
<!--{/if}--> 
</span> 
<!--{/if}-->
</div>
--> 

<!--{if $_G['basescript'] == 'portal'}-->
<div id="scrolltop">
  <ul>
    <!--<li><a href="javascript:void(0)" title="设为首页" onclick="setHomepage(window.location);" class="set_home"><span>设为首页</span></a></li>-->
	<li><a href="javascript:void(0)" title="{lang scrolltop}" onclick="window.scrollTo('0','0')" class="scroll_top"><span>返回顶部</span></a></li>
    <li><a href="portal.php#wd_home7" title="生活" class="scroll_news"><span>生活</span></a></li>
    <li><a href="portal.php#wd_home3" title="轻松" class="scroll_pic"><span>轻松</span></a></li>
	<li><a href="javascript:void(0)" title="设为首页" onclick="setHomepage(window.location);" class="set_home"><span>设为首页</span></a></li>
  </ul>
</div>
<!--{else}-->
<div id="scrolltop"> 
  <!--{if $_G[fid] && $_G['mod'] == 'viewthread'}--> 
  <span><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$_GET[extra]&page=$page{if $_GET[from]}&from=$_GET[from]{/if}" onclick="showWindow('reply', this.href)" class="replyfast" title="{lang fastreply}"><b>{lang fastreply}</b></a></span> 
  <!--{/if}--> 
  <span hidefocus="true"><a title="{lang scrolltop}" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>{lang scrolltop}</b></a></span> 
  <!--{if $_G[fid]}--> 
  <span> 
  <!--{if $_G['mod'] == 'viewthread'}--> 
  <a href="forum.php?mod=forumdisplay&fid=$_G[fid]" hidefocus="true" class="returnlist" title="{lang return_list}"><b>{lang return_list}</b></a> 
  <!--{else}--> 
  <a href="forum.php" hidefocus="true" class="returnboard" title="{lang return_forum}"><b>{lang return_forum}</b></a> 
  <!--{/if}--> 
  </span> 
  <!--{/if}--> 
</div>
<!--{/if}--> 
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script> 
<!--{/if}--> 
<!--{if isset($_G['makehtml'])}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}html2dynamic.js?{VERHASH}"></script> 
<script type="text/javascript">
		var html_lostmodify = {TIMESTAMP};
		htmlGetUserStatus();
		<!--{if isset($_G['htmlcheckupdate'])}-->
		htmlCheckUpdate();
		<!--{/if}-->
	</script> 
<!--{/if}--> 
<!--{eval output();}-->
</body></html>