<?php


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

$user = $_POST["user"];

$sqll = "select project_id from user_project where Email LIKE '$user'";								

$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}

//---------//
 
$sql = "INSERT INTO `cat_database2`.`terms`(name,ST,TT,project_id) VALUES ('{$_POST["user"]}','{$_POST["ST"]}','{$_POST["TT"]}', '$pjid')";

$insert = mysqli_query($conn,$sql);  
 
if(!$insert)  
    {  
        echo "无法新增术语信息: ".mysqli_error($conn);  
    }  
    else  
    {  
		header("location: ../pages/term_base.php");
    }  
 
 
mysqli_close($conn);

?>