<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('group_attentiongroup');?><?php include template('common/header'); ?><h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">选择关注的<?php echo $_G['setting']['navs']['3']['navname'];?></em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" id="attentionform" name="attentionform" action="group.php?mod=attentiongroup" onsubmit="ajaxpost('attentionform', 'return_attentiongroup', 'return_attentiongroup', 'onerror');return false;">
<?php if($_G['inajax']) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="cl">
<div class="bm_c attgroup cl">
<ul><?php if(is_array($usergroups['groups'])) foreach($usergroups['groups'] as $groupid => $groupname) { if(in_array($groupid, $attentiongroup)) { ?>
<li id="li<?php echo $groupid;?>"><label for="attentiongroupid_<?php echo $groupid;?>"><input type="checkbox" name="attentiongroupid[]" id="attentiongroupid_<?php echo $groupid;?>" class="pc" value="<?php echo $groupid;?>" checked="checked" onclick="attention_checkbox(this, 'attentionform', 'attentiongroupid', 5)" /><?php echo $groupname;?></label></li>
<?php } } ?>
<li id="heightline"></li>
</ul>
</div>
<hr class="l" />
<div class="bm_c attgroup cl">
<ul><?php if(is_array($usergroups['groups'])) foreach($usergroups['groups'] as $groupid => $groupname) { if(!in_array($groupid, $attentiongroup)) { ?>
<li id="li<?php echo $groupid;?>"><label for="attentiongroupid_<?php echo $groupid;?>"><input type="checkbox" name="attentiongroupid[]" id="attentiongroupid_<?php echo $groupid;?>" class="pc" value="<?php echo $groupid;?>" onclick="attention_checkbox(this, 'attentionform', 'attentiongroupid', 5)" /><?php echo $groupname;?></label></li>
<?php } } ?>
<li id="lowerline"></li>
</ul>
</div>
</div>
<p class="o pns">
<input type="hidden" name="attentionsubmit" value="true" />
<button type="submit" class="pn pnc"><strong>确定</strong></button>
</p>
<script language="javascript">
var p = <?php echo $counttype;?>;
function attention_checkbox(obj, formid, checkname, max_obj) {
if(obj.checked) {
p++;
for (var i = 0; i < $(formid).elements.length; i++) {
var e = $(formid).elements[i];
if(p == max_obj+1) {
if(e.name.match(checkname) && !e.checked) {
e.disabled = true;
}
}
}
} else {
p--;
for (var i = 0; i < $(formid).elements.length; i++) {
var e = $(formid).elements[i];
if(e.name.match(checkname) && e.disabled) {
e.disabled = false;
}
}
}
if(p > max_obj) {
p--;
obj.checked = false;
alert('最多可以选择'+max_obj+'个.');
return;
}
var oldNode = $('li'+obj.value);
var realvalue = obj.checked;
if(obj.checked) {
var line = $('heightline');
} else {
var line = $('lowerline');
}
oldNode.parentNode.removeChild(oldNode);
line.parentNode.insertBefore(oldNode,line);
obj.checked = realvalue;
}
</script>
</form><?php include template('common/footer'); ?>