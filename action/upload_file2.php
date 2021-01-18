<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
if(($_FILES["file"]["type"] != "application/vnd.ms-excel")&&($_FILES["file"]["type"] != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")&&($_FILES["file"]["type"] != "application/vnd.openxmlformats-officedocument.wordprocessingml.document")&&($_FILES["file"]["type"] != "application/msword")){
	echo "文件格式不正确，请选择文件后缀为\".docx\"或\".xlsx\"的文件";
}
else{
//error_reporting(E_ALL || ~E_NOTICE);
	if($_FILES["file"]["error"]>0)
	{
		echo "文件上传错误：".$_FILES["file"]["error"]."<br>";
	}
	
	else
	{
		if(file_exists("../upload/tanslation_file/".$_FILES["file"]["name"]))
		{
			echo "该文件已存在";
		}
		else 
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/translation_file/".$_FILES["file"]["name"]);
			echo "文件已上传至："."../upload/translation_file/".$_FILES["file"]["name"];
			
			//echo "文件临时储存在".$_FILES["file"]["tmp_name"];
		}
	}
}
?>