<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>研究生课程中心</title>
<link rel="stylesheet" type="text/css" href="../style/teacher_add_res.css" />
<link rel="stylesheet" type="text/css" href="../style/main_menu.css" />
<link rel="stylesheet" type="text/css" href="../style/foot.css" />
</head>
<script>
	function init()
	{
		var url = self.location.href;
		var urls = url.split('?');
		if(urls.length>=2)
		document.getElementById("back_url").value=urls[1];
		//alert(document.getElementById("back_url").value);
	}
	function check()
	{
		var title = document.getElementById("title").value;
		var file = document.getElementById("file").value;
		if(!title)
		{
			alert("请输入资源名称");
			return false;
		}
		if(!file)
		{
			alert("请选择上传文件！");
			return false;
		}
		return true;
	}
</script>
<body onload="init()">
	<div id="all">
    	<?php include_once('../course/formwork/main_menu.php'); ?>
    	<div id="body">
        	<div id="position">
            	<table style="width:100%; height:100%;">
            		<tr><td><span>你现在的位置：</span><span><a href="../course/?id=<?php echo $course->__get('id'); ?>"><?php echo $course->__get('name'); ?></a>--></span><span><a href="./?id=<?php echo $course->__get('id');?>">老师</a>--></span><span><a href="">资源发布</a></span><td align="right"><span><a href="../logout.php?id=<?php echo $course->__get('id'); ?>">【退出】</a></span></td></tr>
            	</table>
        	</div>
           <form action="../sub/AddRes.php" method="post" enctype="multipart/form-data" onsubmit="return check()">
            <table id="table_new_add" align="center" cellpadding="3" cellspacing="1" bordercolor="#718EBB">
            		<tbody>
                    	<tr><th id="_th1" valign="middle" colspan="8" align="center" height="25">资源发布</th></tr>
                        <input type='hidden' name='course_id' value='<?php echo $course->__get('id');?>'/>
                        <input type='hidden' name='promulgator' value='<?php ?>'/>
                        <tr><td>资源名称</td><td><input type="text" name='title' id="title"/></td></tr>
                        <tr><td>上传附件</td><td><input type="file" name='file' id='file'/></td></tr>
                        <tr><td colspan="3" align="center"><input type="hidden" id="back_url" name="back_url" value=""/><input type="submit" name='sub' /></td></tr>
                    </tbody>
                </table>
            </form>
      </div>
        <?php include_once('../globals/foot.php');?>
    </div>
</body>
</html>
