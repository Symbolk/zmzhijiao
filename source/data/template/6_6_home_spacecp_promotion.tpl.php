<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_promotion');
0
|| checktplrefresh('./template/mobanbus_h5cpv1/home/spacecp_promotion.htm', './template/mobanbus_h5cpv1/home/spacecp_header.htm', 1496228981, '6', './data/template/6_6_home_spacecp_promotion.tpl.php', './template/mobanbus_h5cpv1', 'home/spacecp_promotion')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/spacecp_promotion.htm', './template/mobanbus_h5cpv1/home/spacecp_footer.htm', 1496228981, '6', './data/template/6_6_home_spacecp_promotion.tpl.php', './template/mobanbus_h5cpv1', 'home/spacecp_promotion')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/spacecp_promotion.htm', './template/mobanbus_h5cpv1/home/spacecp_header_name.htm', 1496228981, '6', './data/template/6_6_home_spacecp_promotion.tpl.php', './template/mobanbus_h5cpv1', 'home/spacecp_promotion')
|| checktplrefresh('./template/mobanbus_h5cpv1/home/spacecp_promotion.htm', './template/mobanbus_h5cpv1/home/spacecp_header_name.htm', 1496228981, '6', './data/template/6_6_home_spacecp_promotion.tpl.php', './template/mobanbus_h5cpv1', 'home/spacecp_promotion')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">����</a> <em>&rsaquo;</em><?php if($actives['profile']) { ?>
��������
<?php } elseif($actives['verify']) { ?>
��֤
<?php } elseif($actives['avatar']) { ?>
�޸�ͷ��
<?php } elseif($actives['credit']) { ?>
����
<?php } elseif($actives['usergroup']) { ?>
�û���
<?php } elseif($actives['privacy']) { ?>
��˽ɸѡ
<?php } elseif($actives['sendmail']) { ?>
�ʼ�����
<?php } elseif($actives['password']) { ?>
���밲ȫ
<?php } elseif($actives['promotion']) { ?>
�����ƹ�
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></div>
</div>
<div id="ct" class="ct3_a busspacebox wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($actives['profile']) { ?>
��������
<?php } elseif($actives['verify']) { ?>
��֤
<?php } elseif($actives['avatar']) { ?>
�޸�ͷ��
<?php } elseif($actives['credit']) { ?>
����
<?php } elseif($actives['usergroup']) { ?>
�û���
<?php } elseif($actives['privacy']) { ?>
��˽ɸѡ
<?php } elseif($actives['sendmail']) { ?>
�ʼ�����
<?php } elseif($actives['password']) { ?>
���밲ȫ
<?php } elseif($actives['promotion']) { ?>
�����ƹ�
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></h1>
<!--don't close the div here--><?php if(!empty($_G['setting']['pluginhooks']['spacecp_promotion_top'])) echo $_G['setting']['pluginhooks']['spacecp_promotion_top'];?>
<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<div class="bbda pbm mbm">
<?php if($_G['setting']['creditspolicy']['promotion_visit']) { ?><p>
�����������ͨ����������һ�����ӷ���վ�㣬������û��ֽ��� <span class="xi1"><?php echo $visitstr;?></span>
</p><?php } if($_G['setting']['creditspolicy']['promotion_register']) { ?>
<p>
<?php if($_G['setting']['creditspolicy']['promotion_visit']) { ?>
����������Ѳ������ʲ���ע���Ϊ��Ա�������ٻ�û��ֽ��� <span class="xi1"><?php echo $regstr;?></span>
<?php } else { ?>
�����������ͨ����������һ�����ӷ���վ�㲢ע���»�Ա��������û��ֽ��� <span class="xi1"><?php echo $regstr;?></span>
<?php } ?>
</p>
<?php } ?>
</div>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th colspan="2" class="xs2 xw1">��ʽһ��</th>
</tr>
<tr>
<th>�ƹ�����1</th>
<td class="pns">
<input type="text" class="px vm" onclick="this.select();setCopy('<?php echo $copystr;?>'+'\n'+this.value, '�ƹ����Ӹ��Ƴɹ�');" value="<?php echo $_G['siteurl'];?>?fromuid=<?php echo $_G['uid'];?>" size="50" />
<button type="submit" class="pn vm" onclick="setCopy('<?php echo $copystr;?>'+'\n'+'<?php echo $_G['siteurl'];?>?fromuid=<?php echo $_G['uid'];?>', '�ƹ����Ӹ��Ƴɹ�');" type="submit"><em>����</em></button>
</td>
</tr>
<tr>
<th>�ƹ�����2</th>
<td class="pns">
<input type="text" class="px vm" onclick="this.select();setCopy('<?php echo $copystr;?>'+'\n'+this.value, '�ƹ����Ӹ��Ƴɹ�');" value="<?php echo $_G['siteurl'];?>?fromuser=<?php echo rawurlencode($_G['username']); ?>" size="50" />
<button type="submit" class="pn vm" onclick="setCopy('<?php echo $copystr;?>'+'\n'+'<?php echo $_G['siteurl'];?>?fromuser=<?php echo rawurlencode($_G['username']); ?>', '�ƹ����Ӹ��Ƴɹ�');"><em>����</em></button>
</td>
</tr>
<tr>
<th colspan="2" class="xs2 xw1 ptw">��ʽ����</th>
</tr>
<tr>
<th colspan="2">ͨ��������ӱ����Եġ��������ӡ����ƹ�ɹ���Ҳ���Ի�û��ֽ��� &nbsp; <a href="forum.php" class="xi2">ȥ�ƹ�����&raquo;</a></th>
</tr>
</table>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_promotion_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_promotion_bottom'];?>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">����</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">�޸�ͷ��</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">��������</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify() || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">��֤</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">����</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">�û���</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">��˽ɸѡ</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">�ʼ�����</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">���밲ȫ</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">�����ƹ�</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
</div><?php include template('common/footer'); ?>