<?
include('../../fun/ckeditor/ckeditor.php');
$sBasePath=$_SERVER['PHP_SELF'];
$sBasePath=dirname($sBasePath).'/ckeditor/';
$ed=new CKEditor;

$ed->BasePath='/ProjectTest/fun/ckeditor/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="../../style/head.css"/>
<link rel="stylesheet" type="text/css" href="../../style/bs_login.css"/>
<link rel="stylesheet" href="../../style/foot.css"  type="text/css"/>
<link rel="stylesheet" href="../../style/bs_notice_add.css"  type="text/css"/>
</head>

<body>
	<div id="all">
		<?php include_once('../../globals/head.php'); ?>
       <div id="body" >
            <div id="body_top">
            	<table style="width:100%; height:100%;">
            		<tr><td><span>你现在的位置：</span><span><a href="">首页</a>--></span><span><a href="">后台管理</a>--></span><span><a href="">友情链接</a></span></td><td align="right"><span><a href="">【退出】</a></span></td></tr>
            	</table>
            </div>
            <div class="_content" style="width:808px; height:678px; background:#CCC; margin-left:100px;" align="center">
            	<form method="get" action="">
           		<?
				$ed->editor('con');
				?>
                <input type="submit" name="submit" />
                </form>
            </div>
        </div>
         <?php include_once('../../globals/foot.php'); ?>
    </div>
</body>
</html>