<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('85,86,87,88,90,91,92');?><?php include template('common/header'); ?><style id="diy_style" type="text/css"></style>
<div class="bus_slider">
<!--[diy=diy_bus_slider]--><div id="diy_bus_slider" class="area"><div id="frameKcqBS6" class="frame move-span cl frame-1"><div id="frameKcqBS6_left" class="column frame-1-c"><div id="frameKcqBS6_left_temp" class="move-span temp"></div><?php block_display('85');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
<!--[diy=diy_bus_indexbd]--><div id="diy_bus_indexbd" class="area"><div id="frameD4s5G5" class="frame move-span cl frame-1"><div id="frameD4s5G5_left" class="column frame-1-c"><div id="frameD4s5G5_left_temp" class="move-span temp"></div><?php block_display('86');?><?php block_display('87');?><?php block_display('88');?><?php block_display('90');?><?php block_display('91');?><?php block_display('92');?></div></div></div><!--[/diy]-->
<div class="clear"></div>
<script id="jsID" type="text/javascript">jQuery("#slideBox_top").slide({mainCell:".bd ul",effect:"left",autoPlay:true,easing:"swing",delayTime:500});</script>
<script id="jsID" type="text/javascript">jQuery("#bus_avatar").slide({mainCell:".bd ul",effect:"fade",autoPlay:true,easing:"easeInQuad",delayTime:500});</script>
<script>jQuery('.busblock').smoove({offset:'40%'});</script><?php include template('common/footer'); ?>