<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_upload');
0
|| checktplrefresh('./template/mobanbus_h5cpv1/home/spacecp_upload.htm', './template/default/common/upload.htm', 1496220382, '6', './data/template/6_6_home_spacecp_upload.tpl.php', './template/mobanbus_h5cpv1', 'home/spacecp_upload')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <a href="home.php?mod=space&amp;do=album">���</a> <em>&rsaquo;</em> �ϴ�ͼƬ</div>
</div>

<div id="ct" class="wp cl">
<div class="mn">
<div class="bm">
<div class="bm_h"><h1>�ϴ�ͼƬ</h1></div>
<div class="bm_c">
<ul class="tb cl">
<?php if($albumid) { ?>
<li><a href="home.php?mod=spacecp&amp;ac=album&amp;op=edit&amp;albumid=<?php echo $albumid;?>">�༭�����Ϣ</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=album&amp;op=editpic&amp;albumid=<?php echo $albumid;?>">�༭ͼƬ</a></li>
<?php } ?>
<li<?php echo $actives['js'];?>><a href="home.php?mod=spacecp&amp;ac=upload&amp;albumid=<?php echo $albumid;?>">��ͨ�ϴ�</a></li>
<li<?php echo $actives['cam'];?>><a href="home.php?mod=spacecp&amp;ac=upload&amp;op=cam&amp;albumid=<?php echo $albumid;?>">��ͷ��</a></li>
<li class="y"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;view=me">&laquo; �����ҵ����</a></li>
<?php if($_G['setting']['magicstatus'] && $_G['setting']['magics']['doodle']) { ?>
<li class="y doodle"><a id="a_doodle" class="y" href="home.php?mod=magic&amp;mid=doodle&amp;showid=album_doodle&amp;target=album_message&amp;from=album" onclick="showWindow(this.id, this.href, 'get', '0')"><?php echo $_G['setting']['magics']['doodle'];?></a></li>
<?php } ?>
</ul>

<?php if($haveattachsize) { ?>
<div class="tbmu">
��ǰ�����ռ仹ʣ������ <strong><?php echo $haveattachsize;?></strong> (<a href="home.php?mod=spacecp&amp;ac=upload&amp;op=recount">����ͳ��</a>)
<?php if($_G['setting']['magicstatus'] && $_G['setting']['magics']['attachsize']) { ?>
<br />
<img src="<?php echo STATICURL;?>image/magic/attachsize.small.gif" alt="attachsize" class="vm" />
<a id="a_magic_attachsize" href="home.php?mod=magic&amp;mid=attachsize" onclick="showWindow('magics', this.href, 'get', 0)">��Ҫ���Ӹ�������</a>
(�����Թ�����ߡ�<?php echo $_G['setting']['magics']['attachsize'];?>�������Ӹ����������ϴ�����ĸ���)
<?php } ?>
</div>
<?php } if(empty($_GET['op'])) { ?>
<form method="post" autocomplete="off" id="albumform" action="home.php?mod=spacecp&amp;ac=upload" onsubmit="return validate(this);">
<h2 class="mtw xs2">1. ѡ��ͼƬ</h2>
<div class="xg1"><p>�ӵ�����ѡ����Ҫ�ϴ���ͼƬ��<br />��ʾ��ѡ��ͼƬ�������Լ���ѡ��ͼƬ�������Ϳ���һ���ϴ�����ͼƬ�� </p></div>
<div class="uploadform mtn ptm pbw">

<table cellspacing="0" cellpadding="0" class="tfm up_row mbm">
<tbody id="attachbody"></tbody>
</table>

<div class="fieldset flash" id="imgUploadProgress"></div>
<div class="hm"><span id="imgSpanButtonPlaceholder"></span></div>
<?php if(empty($_G['setting']['pluginhooks']['spacecp_upload_extend'])) { if(empty($_G['uploadjs'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>upload.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php $_G['uploadjs'] = 1;?><?php } ?><script type="text/javascript">
var upload = new SWFUpload({
// Backend Settings
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=album",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"},

// File Upload Settings
file_size_limit : "<?php echo $swfconfig['max'];?>",	// 100MB
file_types : "<?php echo $swfconfig['imageexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['imageexts']['depict'];?>",
file_upload_limit : 0,
file_queue_limit : 0,

// Event Handler Settings (all my handlers are in the Handler.js file)
swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,

// Button Settings
button_image_url : "<?php echo IMGDIR;?>/uploadbutton.png",
button_placeholder_id : "imgSpanButtonPlaceholder",
button_width: 100,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",

custom_settings : {
progressTarget : "imgUploadProgress",
uploadSource: 'home',
uploadType: 'album',
imgBoxObj: $('attachbody')
},

// Debug Settings
debug: false
});

</script>
<?php } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_upload_extend'])) echo $_G['setting']['pluginhooks']['spacecp_upload_extend'];?>
<?php } ?>

</div>

<script type="text/javascript">
var check = false;
no_insert = 1;
function a_addOption() {
var obj = $('uploadalbum');
obj.value = 'addoption';
addOption(obj);
}

function album_op(id) {
$('selectalbum').style.display = 'none';
$('creatalbum').style.display = 'none';
$(id).style.display = '';
check = false;
if(id == 'creatalbum') {
check = true;
$('albumname').select();
}
}
</script>

<h2 class="mtw xs2">2. ѡ�����</h2>
<div class="uploadform mtn ptw pbw">
<?php if($albums) { ?>
<p class="hm pbw xs2 xw1">
<label for="albumop_selectalbum" class="lb"><input type="radio" name="albumop" id="albumop_selectalbum" class="pr" value="selectalbum" checked="checked" onclick="album_op(this.value);" />��ӵ��������</label>
<label for="albumop_creatalbum" class="lb"><input type="radio" name="albumop" id="albumop_creatalbum" class="pr" value="creatalbum" onclick="album_op(this.value);" />���������</label>
</p>
<div id="selectalbum" class="hm">
ѡ�����
<select name="albumid" id="uploadalbumid"><?php if(is_array($albums)) foreach($albums as $value) { if($value['albumid'] == $_GET['albumid']) { ?>
<option value="<?php echo $value['albumid'];?>" selected="selected"><?php echo $value['albumname'];?></option>
<?php } else { ?>
<option value="<?php echo $value['albumid'];?>"><?php echo $value['albumname'];?></option>
<?php } } ?>
</select>
</div>
<div id="creatalbum" style="display:none;">
<?php } else { ?>
<p class="hm pbw xs2 xw1">���������</p>
<input type="hidden" name="albumop" value="creatalbum" />
<div id="creatalbum">
<?php } ?>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>�����</th>
<td><input type="text" name="albumname" id="albumname" class="px" size="20" value="�ҵ����" /></td>
</tr>
<tr>
<th>�������</th>
<td><textarea name="depict" class="pt" cols="40" rows="3"></textarea></td>
</tr>
<?php if($_G['setting']['albumcategorystat'] && $categoryselect) { ?>
<tr>
<th>վ�����</th>
<td>
<?php echo $categoryselect;?>
<p class="d">ѡ��һ��վ����࣬������������ᱻ������������</p>
</td>
</tr>
<?php } ?>
<tr>
<th>��˽����</th>
<td>
<select name="friend" id="uploadfriend" onchange="passwordShow(this.value);" class="ps">
<option value="0">ȫվ�û��ɼ�</option>
<option value="1">�����ѿɼ�</option>
<option value="2">ָ�����ѿɼ�</option>
<option value="3">���Լ��ɼ�</option>
<option value="4">ƾ����ɼ�</option>
</select>
</td>
</tr>
<tbody id="span_password" style="display:none;">
<tr>
<th>����</th>
<td><input type="text" name="password" id="uploadpassword" class="px" value="" size="10" /></td>
</tr>
</tbody>
<tbody id="tb_selectgroup" style="display:none;">
<tr>
<th>ָ������</th>
<td>
<select name="selectgroup" class="ps" onchange="getgroup(this.value);">
<option value="">�Ӻ�����ѡ�����</option><?php if(is_array($groups)) foreach($groups as $key => $value) { ?><option value="<?php echo $key;?>"><?php echo $value;?></option>
<?php } ?>
</select>
<p class="d">���ѡ����ۼӵ�����ĺ�������</p>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<textarea name="target_names" id="target_names" class="pt" rows="3"></textarea>
<p class="d">������д��������������ÿո���зָ�</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="mtm hm">
<input type="hidden" name="albumsubmit" id="albumsubmit" value="true" />
<button type="submit" name="albumsubmit_btn" id="albumsubmit_btn" class="pn pnc" value="true"<?php if($_G['setting']['albumcategoryrequired']) { ?> onclick="return validate(this);"<?php } ?>><strong>��ʼ�ϴ�</strong></button>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</div>
</form>

<script type="text/javascript">
<?php if(empty($albums)) { ?>
if(typeof $('albumname') == 'object') {
$('albumname').select();
}
<?php } ?>
function validate(obj) {
if(!$('attachbody').getElementsByTagName('tr').length) {
showDialog('��ѡ��Ҫ�ϴ���ͼƬ', 'notice', '��ʾ��Ϣ', null, 0);
return false;
}
<?php if($_G['setting']['albumcategorystat'] && $_G['setting']['albumcategoryrequired']) { ?>
var catObj = $("catid");
if(catObj && check) {
if (catObj.value < 1) {
showDialog('��ѡ��ϵͳ����', 'notice', '��ʾ��Ϣ', null, 0);
catObj.focus();
return false;
}
}
<?php } ?>
return true;
}
</script>

<?php } elseif($_GET['op'] == 'cam') { ?>
</div>
<div class="bm">
<script type="text/javascript">
document.write(AC_FL_RunContent(
'width', '100%', 'height', '415',
'src', '<?php echo IMGDIR;?>/cam.swf?config=<?php echo $config;?>&albumid=<?php echo $_GET['albumid'];?>',
'quality', 'high', 'wmode', 'transparent'
));
</script>
<?php } ?>

</div>
</div>
</div>
</div><?php include template('common/footer'); ?>