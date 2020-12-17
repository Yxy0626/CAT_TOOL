<?php

include "../share/lock.php";

//连接服务器

$dbhost = "localhost";  //MySQL服务器主机地址
$dbuser = "root";      //MySQL用户名
$dbpass = ""; //MySQL用户名密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$conn)
{
  echo "连接失败了！！";
}

$i = 0;
mysqli_select_db($conn,"cat_database2"); //连接数据库

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

$sql = "select * from project where project_pm LIKE '$login_session'";				

$pjid = mysqli_query($conn,$sql);

	while ($row = mysqli_fetch_array($pjid, MYSQLI_ASSOC)) {
		$pjpj = $row['project_id'];
	}

$teamM = $_POST["teammember"];

for($i=0; $i<count($teamM); $i++){
		$sql = "INSERT INTO `cat_database2`.`user_project`(Email, project_id) VALUES('{$teamM[$i]}', '$pjpj')";  //一次插入的东西插入语句要写在一起，否则不在一个记录 
		$insert = mysqli_query($conn,$sql);
		if(!$insert)  
		{  
			echo "无法插入用户信息: ".mysqli_error($conn); 
		}  
	}
	header("location:../pages/project_managePage.php");

  
$insert = mysqli_query($conn,$sql);  
mysqli_close($conn);  
?>
 