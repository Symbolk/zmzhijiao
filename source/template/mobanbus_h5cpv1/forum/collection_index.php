<?php echo '模板巴士原创模板，版权所有，盗版必究，官网 www.mobanbus.cn';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="forum.php?mod=collection">{lang collection}</a> <em>&rsaquo;</em>
		<a href="forum.php?mod=collection">{lang collection_recommended}</a>
	</div>
</div>

<div id="ct" class="bus_box cl">
	<div class="bm">
		<div class="tb tb_h cl">
			<!--{subtemplate forum/collection_nav}-->
		</div>
		<div class="bm_c">
			<!--{hook/collection_index_top}-->
			<!--{subtemplate forum/collection_list}-->
			<!--{hook/collection_index_bottom}-->
		</div>
	</div>
	$multipage
	<br /><br />
</div>
<!--{template common/footer}-->