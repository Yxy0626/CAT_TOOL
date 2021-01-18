<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include "../assets/PHPExcel/Classes/PHPExcel.php";

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
$sqll = "select project_id from user_project where Email LIKE '$login_session'";				

$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}

//----------check file's validity---------//


if(($_FILES["file"]["type"] != "application/vnd.ms-excel")&&($_FILES["file"]["type"] != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")){
	echo "<script language=\"JavaScript\">alert(\"文件格式不正确，请选择文件后缀为\'.xlsx\'的文件\");</script>";
	header('refresh:0;url=../pages/UPLOAD-TB.php'); 
}
else{
error_reporting(E_ALL || ~E_NOTICE);
	if($_FILES["file"]["error"]>0)
	{
		echo "文件上传错误：".$_FILES["file"]["error"]."<br>";
	}
	else
	{
		if(file_exists("../upload/tb/".$_FILES["file"]["name"]))
		{
			echo "该文件已存在。";
		}
		else 
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/tb/".$_FILES["file"]["name"]);
			echo "文件已上传至："."../upload/tb/";
			$saveplace = "../upload/tb/".$_FILES["file"]["name"];
			$excel = PHPExcel_IOFactory::load($saveplace);
			$sheetCount = $excel -> getSheetCount();
			for($i=0;$i<$sheetCount;$i++)
			{
				$data = $excel->getSheet($i)->toArray();
				$roww = count($data);
				for($j=1;$j<$roww;$j++){
					$ST =  $data[$j][0];
					$TT =  $data[$j][1];
					$insert_sql = "INSERT INTO `cat_database2`.`terms`(name, ST, TT, project_id) VALUES ('$login_session','$ST', '$TT','$pjid')";

				$status = mysqli_query($conn,$insert_sql);

				}

			}
			echo "<script language='JavaScript'>alert('文件已上传至：../upload/tb/".$_FILES['file']['name']."');</script>";
			header('refresh:0;url=../pages/term_base.php'); 


			
			//echo "文件临时储存在".$_FILES["file"]["tmp_name"];
		}
	}
}
?>