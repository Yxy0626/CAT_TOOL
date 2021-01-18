<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include "../share/lock.php";

//----------login database---------//
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'cat_database2');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn)
{
  echo "连接失败了！！";
}
mysqli_select_db($conn,"cat_database2"); //连接数据库

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

//----------get project_id---------//
$sqll = "select project_id from project where project_pm LIKE '$login_session'";				

$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}

//----------check file's validity---------//

if($_FILES["file"]["type"] != "application/octet-stream"){
	echo "<script language=\"JavaScript\">alert(\"文件格式不正确，请选择文件后缀为\'.tmx\'的文件\");</script>";
	header('refresh:0;url=../pages/UPLOAD-TM.php');
}
else{
	if($_FILES["file"]["error"]>0)
	{
		echo "文件上传错误：".$_FILES["file"]["error"]."<br>";
	}
	
	else
	{
		if(file_exists("../upload/tm".$_FILES["file"]["name"]))
		{
			echo "该文件已存在";
		}
		else 
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/tm/".$_FILES["file"]["name"]);
			echo "文件已上传至："."../upload/tm/".$_FILES["file"]["name"];

//----------import tmx data---------//

			$saveplace = "../upload/tm/".$_FILES["file"]["name"];
			$xml = simplexml_load_file($saveplace);
			$json = json_encode($xml);
			$jsondata = json_decode($json,true);
			foreach ($jsondata["body"]["tu"] as $tu)
			{
				$zh = $tu["tuv"][0]["seg"];
				$en = $tu["tuv"][1]["seg"];

				$insert_sql = "INSERT INTO `cat_database2`.`translation_memory`(ST, TT,project_id) VALUES ('{$zh}', '{$en}','$pjid')";

				$status = mysqli_query($conn,$insert_sql);
			}
			echo "<script language='JavaScript'>alert('文件已上传至：../upload/tm/".$_FILES['file']['name']."');</script>";
			header('refresh:0;url=../pages/translation_memory.php'); 

			//echo "文件临时储存在".$_FILES["file"]["tmp_name"];
		}
	}
}
?>