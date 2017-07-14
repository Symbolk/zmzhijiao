<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('misc_imgcropper');?>
<?php if($_GET['op'] == 'loadcropper') { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>">
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>

<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>imgcropper.js?<?php echo VERHASH;?>" type="text/javascript"></script>

<style type="text/css">
body{margin: 0; padding: 0}
#rightDown{
position:absolute;
background:#FFF url(<?php echo IMGDIR;?>/r_b_resize.png) no-repeat 0 0;
width: 16px;
height: 16px;
z-index:500;
font-size:0;
opacity: 0.8;
filter:alpha(opacity=80);
cursor:nw-resize;
right:0;
bottom:0;
}
#bgDiv{width:<?php echo $cbgboxwidth;?>px; height:<?php echo $cbgboxheight;?>px; border:1px solid #666666; position:relative;}
#dragDiv{border:1px dashed #00f; width:<?php echo $cboxwidth;?>px; height:<?php echo $cboxheight;?>px; top:<?php echo $dragpt;?>px; left:<?php echo $dragpl;?>px; cursor:move; }
</style>
</head>
<body>
<div id="bgDiv" style="width:<?php echo $cbgboxwidth;?>px; height:<?php echo $cbgboxheight;?>px;">
<div id="dragDiv" style="top:<?php echo $dragpt;?>px; left:<?php echo $dragpl;?>px;">
</div>
<div id="rightDown"></div>
</div>
<script type="text/javascript">

var cropper = new ImgCropper("bgDiv", "dragDiv", "<?php echo $_GET['img'];?>", {
width: <?php echo $cbgboxwidth;?>, height: <?php echo $cbgboxheight;?>, color: "#000", min:true, minWidth:<?php echo $cboxwidth;?>, minHeight:<?php echo $cboxheight;?>,
resize: true, rightDown: "rightDown"
});
</script>
</body>
</html>

<?php } else { include template('common/header'); ?><h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">²ÃÇÐÍ¼Æ¬</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="¹Ø±Õ">¹Ø±Õ</a></span><?php } ?>
</h3>
<div id="__groupnameform_">

<form method="post" autocomplete="off" id="groupnameform_" name="groupnameform_" action="misc.php?mod=imgcropper" <?php if($_G['inajax']) { ?>onsubmit="ajaxpost(this.id, 'return_<?php echo $_GET['handlekey'];?>');"<?php } ?>>
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>">
<input type="hidden" name="imgcroppersubmit" value="true" />
<?php if($_G['inajax']) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="cutleft" id="cutleft" value="0" />
<input type="hidden" name="cuttop" id="cuttop" value="0" />
<input type="hidden" name="cutwidth" id="cutwidth" value="0" />
<input type="hidden" name="cutheight" id="cutheight" value="0" />
<input type="hidden" name="picwidth" id="picwidth" value="0" />
<input type="hidden" name="picheight" id="picheight" value="0" />
<input type="hidden" name="cutimg" value="<?php echo $_GET['img'];?>" />
<?php if($_GET['ictype'] == 'block') { ?>
<input type="hidden" name="bid" value="<?php echo $_GET['bid'];?>" />
<input type="hidden" name="picflag" value="<?php echo $_GET['picflag'];?>" />
<?php } ?>
<input type="hidden" name="ictype" value="<?php echo $_GET['ictype'];?>" />
<div class="c">
<iframe src="misc.php?mod=imgcropper&amp;op=loadcropper&amp;img=<?php echo $prefix;?><?php echo $_GET['img'];?>&amp;width=<?php echo $_GET['width'];?>&amp;height=<?php echo $_GET['height'];?>" id="cropperiframe" frameborder="0" scrolling="no" marginwidth="0" onload="setWinHeight(this)"></iframe>
</div>
<p class="o pns">
<button type="submit" name="groupnamesubmit_btn" value="true" class="pn pnc"><strong>²ÃÇÐ</strong></button>
</p>
</form>
<script type="text/javascript">
function setWinHeight(obj){
var win = obj;
if (document.getElementById) {
if (win && !window.opera) {
if (win.contentDocument && win.contentDocument.documentElement.scrollHeight) {
win.height =  win.contentDocument.documentElement.scrollHeight;
win.width =  win.contentDocument.documentElement.scrollWidth;
} else if(win.Document && win.Document.body.scrollHeight) {
win.height = win.Document.body.scrollHeight;
win.width = win.Document.body.scrollWidth;
}
}
}
}
function resetHeight(divObj, ipos, imgObj) {
var iframeObject = $('cropperiframe');
iframeObject.height =  divObj.style.height;
iframeObject.width =  divObj.style.width;
$('cutleft').value = ipos.Left;
$('cuttop').value = ipos.Top;
$('cutwidth').value = ipos.Width-2;
$('cutheight').value = ipos.Height-2;
$('picwidth').value = imgObj.width;
$('picheight').value = imgObj.height;
}
function succeedhandle_<?php echo $_GET['handlekey'];?>(url, msg, values) {
<?php if($_GET['ictype'] == 'block') { ?>
$('icflag').value = 1;
<?php } ?>
}
</script>
</div><?php include template('common/footer'); } ?>