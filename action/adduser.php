<?php

$myemail= $_POST["email"];  

  
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



/*$sqll="SELECT count(id) from UserInfo where [name]= '$myusername'";
$search = mysqli_query($conn,$sqll);  

if ($search>0)
{
	echo "该用户名已被注册！";
	echo "请重新"."<a href='zhuce.php'>注册</a>";
}
else
{*/
$sql = "INSERT INTO `cat_database2`.`user`(Email,name,password,authority) VALUES('{$_POST["email"]}','{$_POST["name"]}','{$_POST["password"]}','{$_POST["authority"]}')";  //一次插入的东西插入语句要写在一起，否则不在一个记录
  
$insert = mysqli_query($conn,$sql);  


if(!$insert)  
    {  
        echo "无法插入用户信息: ".mysqli_error($conn);  
    }  
    else  
    {  
        echo "恭喜你注册成功！"."<br>";  
		echo "<a href='../pages/login.php'>登录</a>"; 
    }  

      
  


mysqli_close($conn);  
?>
 