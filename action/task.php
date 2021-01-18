<?php

$myemail= $_POST["email2"];  

  
//连接服务器

$dbhost = "localhost";  //MySQL服务器主机地址
$dbuser = "root";      //MySQL用户名
$dbpass = ""; //MySQL用户名密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$conn)
{
  echo "连接失败了！！";
}

mysqli_select_db($conn,"cat_database2"); //连接数据库

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

$sql = "UPDATE `file` SET email = '{$_POST["email2"]}' WHERE file_name = '{$_POST["button"]}'";

  
$insert = mysqli_query($conn,$sql);  


if(!$insert)  
    {  
        echo "无法分配: ".mysqli_error($conn);  
    }  
    else  
    {   
		echo "成功"; 
    }  

      
  


mysqli_close($conn);  
?>
 