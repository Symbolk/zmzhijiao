<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('report');?><?php include template('common/header'); ?><h3 class="flb">
<em>�ٱ�</em>
<span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="�ر�">�ر�</a></span>
</h3>
<form style="width:28em" method="post" autocomplete="off" id="form_<?php echo $_GET['handlekey'];?>" name="form_<?php echo $_GET['handlekey'];?>" action="misc.php?mod=report" <?php if($_G['inajax']) { ?>onsubmit="if(!$('report_message').value) return false;ajaxpost(this.id, 'form_<?php echo $_GET['handlekey'];?>');"<?php } ?>>
<div class="reason_slct c" id="return_<?php echo $_GET['handlekey'];?>">
<p>�����ٱ�����</p>
<p class="mtn mbn" id="report_reasons"></p>
<div id="report_other" style="display:none">
<textarea id="report_message" name="message" class="reasonarea pt mtn xg1" onfocus="this.innerHTML='';this.focus=null;this.className='reasonarea pt mtn'" onkeydown="ctrlEnter(event, 'reportsubmit', 1);" onkeyup="strLenCalc(this, 'checklen');" rows="4">����д�ٱ�����</textarea>		
</div>
</div>
<p class="o pns">
<span id="report_msg" style="display:none"><span class="z">�������� <strong id="checklen">200</strong> ���ַ�</span></span>
<button id="report_submit" type="submit" value="true" class="pn pnc"><strong>ȷ��</strong></button>
</p>
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="reportsubmit" value="true" />
<input type="hidden" name="rtype" value="<?php echo $_GET['rtype'];?>" />
<input type="hidden" name="rid" value="<?php echo $_GET['rid'];?>" />
<?php if($_GET['fid']) { ?>
<input type="hidden" name="fid" value="<?php echo $_GET['fid'];?>" />
<?php } if($_GET['uid']) { ?>
<input type="hidden" name="uid" value="<?php echo $_GET['uid'];?>" />
<?php } ?>
<input type="hidden" name="url" value="<?php echo $_GET['url'];?>" />
<input type="hidden" name="inajax" value="<?php echo $_G['inajax'];?>" />
<?php if($_G['inajax']) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
<script type="text/javascript" reload="1">
var reasons = ['�������','Υ������','�����ˮ','�ظ�����','����'];
var reasonstring = '';
for (i=0; i<reasons.length; i++) {
reasonstring += '<label><input type="radio" name="report_select" class="pr" onclick="' + (i < reasons.length -1 ? '$(\'report_message\').innerHTML=this.value;' : '') + '$(\'report_other\').style.display=\'' + (i < reasons.length -1 ? 'none' : '') + '\';$(\'report_msg\').style.display=\'' + (i < reasons.length -1 ? 'none' : '') + '\'" value="' + reasons[i] + '"> ' + reasons[i] + '</label><br />';
}
$('report_reasons').innerHTML = reasonstring;
</script><?php include template('common/footer'); ?>