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

$TT = $_POST["TT"];

$ID = $_POST["textID"];

//---------//
 
$sql = "UPDATE `translation` SET `TT` = '{$TT}' WHERE `id` = '{$ID}'";

$update = mysqli_query($conn,$sql);  
 
if(!$update)  
    {  
        echo "无法编辑信息: ".mysqli_error($conn);  
    }  
    else  
    {  
		ECHO($TT);
    }  
 
 
mysqli_close($conn);

?>