<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="bm bw0 mdcp">
<h1 class="mt">��¼�������</h1>
<div class="mbw">�״ν�������������ʱ�����, ������������ܽ��롣�������������󳬹� 5 �Σ�������彫������ 15 ���ӡ�</div>
<form method="post" autocomplete="off" action="<?php echo $cpscript;?>?mod=modcp&action=login" class="exfm">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="fid" value="<?php echo $_G['fid'];?>">
<input type="hidden" name="submit" value="yes">
<input type="hidden" name="login_panel" value="yes">
<table cellspacing="0" cellpadding="5">
<tr>
<th width="60">�û���:</th>
<td><?php echo $_G['member']['username'];?></td>
</tr>
<tr>
<th>����:</th>
<td><input type="password" name="cppwd" id="cppwd" class="px" /></td>
</tr>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="submit" id="submit" class="pn" value="true"><strong>�ύ</strong></button></td>
</tr>
</table>
</form>
</div>
<script type="text/javascript">
$("cppwd").focus();
</script>