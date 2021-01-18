<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'cat_database2');

include "../share/lock.php";

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn)
{
  echo "连接失败了！！";
}

mysqli_select_db($conn,"cat_database2"); //连接数据库

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况
 
$sql = "select * from project where project_pm LIKE '$login_session'";				

$huoqu = mysqli_query($conn,$sql);  

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
           	 echo "<tr align='center'>";
           	 echo "<td>".$row['project_id']."</td>";
           	 echo "<td>".$row['project_pm']."</td>";
		 echo "<td>".$row['project_start']."</td>";
		 echo "<td>".$row['project_end']."</td>";
echo "<td><a href='translation_managePage.php' target = '_blank' class='btn btn-icon btn-primary mr-1' data-toggle='tooltip' title='编辑（进入翻译任务页面）'><i class='feather icon-edit-2'></i></a>								
<a href='../pages/Over.php'  class='btn btn-icon btn-danger mr-1' data-toggle='tooltip' title='结项（进入确认结项页面）'><i class='feather icon-trash-2'></i></a>
<a href='memberManagement.php' target='_blank' class='btn btn-icon btn-success mr-1' data-toggle='tooltip' title='译员管理'><i class='feather icon-users'></i></a>";
           	 echo "</form></td>";
            	echo "</tr>";
            }

 
mysqli_close($conn);

?>