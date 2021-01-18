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
$no= $_POST['button'];

$sql = "DELETE FROM terms WHERE id LIKE '$no'";

$insert = mysqli_query($conn,$sql);  
 
if(!$insert)  
    {  
        echo "无法删除术语信息: ".mysqli_error($conn);  
    }  
    else  
    {  
		header("location: ../pages/term_base.php");
    }  
 
mysqli_close($conn);

?>