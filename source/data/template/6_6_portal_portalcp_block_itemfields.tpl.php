<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if(is_array($theclass['fields'])) foreach($theclass['fields'] as $fieldname => $field) { ?><tr<?php if(empty($showfields[$fieldname])) { ?> style="display:none;"<?php } ?>>
<th><?php echo $field['name'];?></th>
<td>
<?php if($field['formtype']=='title') { $_titlelength = !empty($block['param']['titlelength']) ? $block['param']['titlelength'] : 40;?><input type="text" name="title" class="px" value="<?php echo $itemfields['title'];?>" onkeyup="strLenCalc(this, 'titlechk', <?php echo $_titlelength;?>);" _maxlength="<?php echo $_titlelength;?>" />
<br><span id="titlechk" style="display:none"></span>
<div class="ss mtn">
<em <?php echo $showstylearr['title_b'];?> id="span_title_b"  onclick="block_showstyle('title_b')"><b>B</b></em>
<input type="hidden" id="value_title_b" name="showstyle[title_b]" value="<?php echo $blockitem['showstyle']['title_b'];?>" />
<em <?php echo $showstylearr['title_i'];?> id="span_title_i"  onclick="block_showstyle('title_i')"><i>I</i></em>
<input type="hidden" id="value_title_i" name="showstyle[title_i]" value="<?php echo $blockitem['showstyle']['title_i'];?>" />
<em <?php echo $showstylearr['title_u'];?> id="span_title_u"  onclick="block_showstyle('title_u')"><u>U</u></em>
<input type="hidden" id="value_title_u" name="showstyle[title_u]" value="<?php echo $blockitem['showstyle']['title_u'];?>" />
<input type="text" name="showstyle[title_c]" id="title_color_value" class="px p_fre vm" size="6" value="<?php echo $blockitem['showstyle']['title_c'];?>" /><input type="button" id="ctitlepb" class="pn colorwd" onclick="createPalette('titlepb', 'title_color_value');" value="" style="background-color: <?php echo $blockitem['showstyle']['title_c'];?>" />
</div>
<?php } elseif($field['formtype']=='summary') { $_summarylength = !empty($block['param']['summarylength']) ? $block['param']['summarylength'] : 80;?><textarea name="summary" class="pt" onkeyup="strLenCalc(this, 'summarychk', <?php echo $_summarylength;?>);" _maxlength="<?php echo $_summarylength;?>" ><?php echo $itemfields['summary'];?></textarea>
<br><span id="summarychk" style="display:none"></span>
<div class="ss mtn">
<em <?php echo $showstylearr['summary_b'];?> id="span_summary_b"  onclick="block_showstyle('summary_b')"><b>B</b></em>
<input type="hidden" id="value_summary_b" name="showstyle[summary_b]" value="<?php echo $blockitem['showstyle']['summary_b'];?>" />
<em <?php echo $showstylearr['summary_i'];?> id="span_summary_i"  onclick="block_showstyle('summary_i')"><i>I</i></em>
<input type="hidden" id="value_summary_i" name="showstyle[summary_i]" value="<?php echo $blockitem['showstyle']['summary_i'];?>" />
<em <?php echo $showstylearr['summary_u'];?> id="span_summary_u"  onclick="block_showstyle('summary_u')"><u>U</u></em>
<input type="hidden" id="value_summary_u" name="showstyle[summary_u]" value="<?php echo $blockitem['showstyle']['summary_u'];?>" />
<input type="text" name="showstyle[summary_c]" id="summary_color_value" class="px p_fre vm" size="6" value="<?php echo $blockitem['showstyle']['summary_c'];?>" /><input type="button" id="csummarypb" class="pn colorwd" value="" onclick="createPalette('summarypb', 'summary_color_value');" style="background-color: <?php echo $blockitem['showstyle']['summary_c'];?>" />
</div>
<?php } elseif($field['formtype'] == 'textarea') { ?>
<textarea name="<?php echo $fieldname;?>" class="pt"><?php echo $itemfields[$fieldname];?></textarea>
<?php } elseif($field['formtype'] == 'pic') { ?>
<label for="picway_remote"><input type="radio" class="pr" id="picway_remote" name="picway" onclick="showpicedit()" checked="checked" />Ô¶³Ì</label>
<label for="picway_upload"><input type="radio" class="pr" id="picway_upload" name="picway" onclick="showpicedit()" />ÉÏ´«</label><br />
<div id="pic_remote">
<input type="text" name="pic" class="px" id="oldpicurl" value="<?php echo $itemfields['oldpic'];?>" style="width: 280px;" />
<a href="javascript:;" onclick="openCropper($('oldpicurl').value);" class="xi2">²ÃÇÐ</a>
</div>
<input type="hidden" name="picflag" value="<?php echo $itemfields['picflag'];?>" />
<input type="file" name="pic" class="pf" id="pic_upload" style="display: none" />
<?php if($itemfields['pics']) { ?>
<div class="ptm cl" style="width: 300px;">
<style type="text/css">
#slidePre, #slideNext { float: left; width: 30px; height: 80px; background: #F5F5F5; line-height: 80px; text-align: center; cursor: pointer; }
#slidePre:hover, #slideNext:hover { background-color: #C2D5E3; }
#slideNext { float: right; }
.selected { border: 4px solid #F60; width: 72px; height: 72px; }
</style>
<?php if(count($itemfields['pics'])>3) { ?>
<div id="slideNext" class="nextNormal" onclick="$('smallImgs').scrollLeft+=240;">&rarr;</div>
<div id="slidePre" class="preNone" onclick="$('smallImgs').scrollLeft-=240;">&larr;</div>
<?php } ?>
<div id="smallImgs" style="width: 240px;height: 80px;overflow: hidden;display: block;">
<div id="imgList" style="display: block;height:80px;width:<?php echo count($itemfields['pics'])*80;?>px;"><?php if(is_array($itemfields['pics'])) foreach($itemfields['pics'] as $pic) { ?><img src="<?php echo $pic['thumb'];?>" <?php if($itemfields['picflag']) { ?> onerror="this.src='<?php echo $pic['big'];?>';this.parentNode.href=this.src;"<?php } ?> onclick="$('oldpicurl').value='<?php echo $pic['attachment'];?>';activateIdent(this);openCropper('<?php echo $pic['attachment'];?>');" alt="" width="80" height="80" class="z <?php if($pic['first']) { ?>selected<?php } ?>" />
<?php } ?>
</div>
</div>
</div>
<?php } ?>
<input type="hidden" name="icflag" id="icflag" value="0" />
<script type="text/javascript">
function activateIdent(obj) {
var imgList = $('imgList').getElementsByTagName('img');
for(i in imgList) {
imgList[i].className = 'z';
}
obj.className = 'z selected';
}
function openCropper(pic) {
$('icflag').value=0;
var url = 'misc.php?mod=imgcropper&width=<?php echo $block['picwidth'];?>&height=<?php echo $block['picheight'];?>&bid=<?php echo $bid;?>&ictype=block&picflag=<?php echo $itemfields['picflag'];?>&img='+pic;
showWindow('cropper', url, 'get', 0);
}
</script>
<?php } elseif($field['formtype'] == 'date') { ?>
<input type="text" class="px" name="<?php echo $fieldname;?>" value="<?php echo $itemfields[$fieldname];?>" onclick="showcalendar(event, this, true)" />
<?php } else { ?>
<input type="text" class="px" name="<?php echo $fieldname;?>" value="<?php echo $itemfields[$fieldname];?>" />
<?php } ?>
</td>
</tr>
<?php } ?>