<?php

//连接服务器

$dbhost = "localhost";  //MySQL服务器主机地址
$dbuser = "root";      //MySQL用户名
$dbpass = ""; //MySQL用户名密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$conn)
{
  echo "连接失败了！！";
}

include "../share/lock.php";

mysqli_select_db($conn,"cat_database2"); //连接数据库

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

$proid = $_POST["projectid"];
$teamM = $_POST["teammember"];
$pm = $_POST["user"];
$date = $_POST["projectdate"];
$sdate = date("Y-m-d");


$i = 0;

$sqll="SELECT * from project where project_id LIKE '$proid'";
$search = mysqli_query($conn,$sqll); 
$num = mysqli_num_rows($search); 

if ($num>0)
{
	echo "该项目ID已被使用！";
	echo "请重新"."<a href='../pages/newProject.php'>回到新增项目</a>";
}
else
{
	$sql = "INSERT INTO `cat_database2`.`project`(project_id, project_pm, project_start, project_end) VALUES('$proid', '$pm', '$sdate','$date')";
	$insert = mysqli_query($conn,$sql);

$sql = "INSERT INTO `cat_database2`.`user_project`(Email, project_id) VALUES('$login_session', '$proid')";  //一次插入的东西插入语句要写在一起，否则不在一个记录 
		$insert = mysqli_query($conn,$sql);


	for($i=0; $i<count($teamM); $i++){
		$sql = "INSERT INTO `cat_database2`.`user_project`(Email, project_id) VALUES('{$teamM[$i]}', '$proid')";  //一次插入的东西插入语句要写在一起，否则不在一个记录 
		$insert = mysqli_query($conn,$sql);
		if(!$insert)  
		{  
			echo "无法插入用户信息: ".mysqli_error($conn); 
			echo "<a href='../pages/project_managePage.php'>回到新增项目</a>";  
		}  
	}
	header("location:../pages/project_managePage.php");
}  

  


mysqli_close($conn);  
?>
 