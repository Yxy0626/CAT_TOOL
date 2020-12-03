<?php
error_reporting(E_ALL || ~E_NOTICE);
include('config.php');
session_start();

$user_check=$_SESSION['login_user'];
$user_type = $_SESSION['authority'];
$user_email = $_SESSION['Email'];

mysqli_select_db($conn,"cat_database"); //连接数据库
$ses_sql=mysqli_query($conn,"SELECT Email FROM user WHERE Email='{$user_check}' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session=$row['Email'];

if(!isset($login_session))
{
	header("Location: login.php");
}
?>