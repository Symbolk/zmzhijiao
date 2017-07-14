<?php echo '欢迎！';exit;?>
  </div><!--mobanbus end-->
<script>fixed_top_nv();</script>
<!--{if empty($topic) || ($topic[usefooter])}-->
<!--{eval $focusid = getfocus_rand($_G[basescript]);}-->
<!--{if $focusid !== null}-->
<!--{eval $focus = $_G['cache']['focus']['data'][$focusid];}-->
<!--{eval $focusnum = count($_G['setting']['focus'][$_G[basescript]]);}-->
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

<div class="clear"></div>
<!--{hook/global_footer}-->



</div>
<div class="row pb50 mt50 bus_indexbg"><span class="bus_indexbg_col s02"></span>
<div class="bus_lxwm bus_relative">
<div class="mobanbus">
	<div class="row_t mb50">
			<h2>联系我们</h2>
			<p>对话产生契机，讨论收获惊喜</p>
	</div>
	<div class="bus_col_4 about_new">
		<img alt="" src="template/mobanbus_h5cpv1/mobanbus_st/img/adress-icon.png" style="float:left;" width="60">
		<div>
				<p class="about-p1">北京市颐和园路5号北京大学</p>
			<p class="about-p2">欢迎来这里一起喝喝茶，<br>聊聊你的想法。</p>
		</div>
	</div> 
	<div class="bus_col_4 about_new">
		<img alt="" src="template/mobanbus_h5cpv1/mobanbus_st/img/call-icon.png" style="float:left;" width="60">
		<div>
		<p class="about-p1">155-012-34567<br>(9:00AM-6:00PM)</p>
		<p class="about-p2">一切从沟通开始</p>
		</div>
	</div> 
	<div class="bus_col_4 about_new">
		<img alt="" src="template/mobanbus_h5cpv1/mobanbus_st/img/mail-icon.png" style="float:left;" width="60">
		<div>
		<p class="about-p1">合作洽谈<br>cooperation@zmzhijiao.com</p>
		<p class="about-p2">工作日12小时内回复。</p>
		</div>
	</div> 
	<div class="bus_col_4 about_new">
		<img alt="" src="template/mobanbus_h5cpv1/mobanbus_st/img/join-us.png" style="float:left;"  width="60">
		<div>
		<p class="about-p1">加入我们<br>hr@zmzhijiao.com</p>
		<p class="about-p2">我们欢迎每一个对支教事业怀<br>有热爱的人。</p>
		</div>
	</div>
</div>
</div>
</div>
<div class="clear"></div>

<div class="mobanbus">
<div id="bus_foot">
  <div class="container1">
    <div class="col bus_gy">
      <ul class="footer-content">
        <a title="关于我们" href="http://www.wolunmc.com/portal.php?mod=view&aid=1" target="_blank">关于芝麻支教</a> - 
        <a title="加入我们" href="http://www.wolunmc.com/portal.php?mod=view&aid=2" target="_blank">联系方式</a> - 
        <!--{if $_G['setting']['site_qq']}--><a href="http://wpa.qq.com/msgrd?V=3&Uin=$_G['setting']['site_qq']&Site=$_G['setting']['bbname']&Menu=yes&from=discuz" target="_blank" title="QQ"><img src="{IMGDIR}/site_qq.jpg" alt="QQ" /></a> - <!--{/if}-->
        <!--{loop $_G['setting']['footernavs'] $nav}--><!--{if $nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
            !$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))}-->$nav[code] - <!--{/if}--><!--{/loop}-->
            <strong><a href="$_G['setting']['siteurl']" target="_blank">$_G['setting']['sitename']</a></strong>
        <!--{if $_G['setting']['icp']}-->( <a href="http://www.miitbeian.gov.cn/" target="_blank">$_G['setting']['icp']</a> )<!--{/if}-->
        <!--{hook/global_footerlink}-->
        <!--{if $_G['setting']['statcode']}-->$_G['setting']['statcode']<!--{/if}-->
      </ul>
    </div>
  </div>
  <div class="mobanbus_copyright">
     <div class="mobanbus">
      <span class="bus_w100">
        <p>Powered by <strong><a href="http://www.adminbuy.cn" target="_blank" style="color: #999;">北京大学创业工程实践</a></strong> <em>$_G['setting']['version']</em></p>
        <p>Copyright &copy; 2017 - 2018 <a href="http://sc.adminbuy.cn" target="_blank">素材</a></p>
      </span>
   </div>
  </div> 
    <div id="ft" class="wp cl"> 
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
<!--{/if}-->


<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']}--> 
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
<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])}-->
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
<div id="scrolltop"> 
  <span><!--{if $_G['uid']}--><a href="home.php?mod=space&uid=$_G[uid]"  class="bus_slogin">空间</a>
  <!--{else}-->
  <a class="bus_slogin" class="bus_slogin"  href="javascript:;" onClick="javascript:lsSubmit();">{lang login}</a>
  <!--{/if}--></span>
  <span> <a class="bus_spush" href="forum.php?mod=misc&amp;action=nav" onclick="showWindow('nav', this.href, 'get', 0)">{lang publish}</a></span>

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