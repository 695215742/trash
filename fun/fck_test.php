<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
include('ckeditor/ckeditor.php');
$sBasePath=$_SERVER['PHP_SELF'];
$sBasePath=dirname($sBasePath).'/ckeditor/';
$ed=new CKEditor;

$ed->BasePath=$sBasePath;


?>
<div class="editor" style="width:800px; height:500px;">
<form action="show.php" method="post">
<?
$ed->editor('con');
?>
<input type="submit" value="commit" name="sub" />
</form>
</div>
</body>
</html>