<?php

include "../share/lock.php";

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

//------------获取project_id-----------//

$sql = "select email, file_name from file where project_pm LIKE '$login_session'";				

$huoqu = mysqli_query($conn, $sql);

$sql2 = "select project_id from translation_memory where project_pm LIKE '$login_session'";				

$huoqu2 = mysqli_query($conn, $sql2);




while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC))
{
    echo "<tr>";
    echo "<td align='left'>".$row['file_name']."</td>";
	echo"<td>
<form action='../action/export.php' method='POST'>
    <button align='center' type='summit' class='btn btn-icon btn-primary mr-1' data-toggle='tooltip' title='导出翻译文件' name='button' value='".$row['file_name']."'>
	<i class='feather icon-edit-2'></i></button></form>
    </td>";
	echo "</tr>";
	
	 echo "<tr>";
	echo "<td align='left'>"."翻译记忆表"."</td>";
	echo"<td>
<form action='../action/export_tm.php' method='POST'>
    <button align='center' type='summit' class='btn btn-icon btn-primary mr-1' data-toggle='tooltip' title='导出翻译记忆文件' name='button' value='".$row['file_name']."'>
	<i class='feather icon-edit-2'></i></button></form>
    </td>";
	 echo "</tr>";
	 
	 echo "<tr>";
	echo "<td align='left'>"."术语表"."</td>";
	echo"<td>
<form action='../action/export.php' method='POST'>
    <button align='center' type='summit' class='btn btn-icon btn-primary mr-1' data-toggle='tooltip' title='导出术语表' name='button' value='".$row['file_name']."'>
	<i class='feather icon-edit-2'></i></button></form>
    </td>";
	 echo "</tr>";
	};
	
	
	



mysqli_close($conn);

?>