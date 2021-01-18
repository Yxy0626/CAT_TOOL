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

$sqll = "select project_id from user_project where Email LIKE '$login_session'";
$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}

//------------获取project_id一致的term-----------//
 
$sql = "select * from translation_memory where project_id LIKE '$pjid'";

$huoqu = mysqli_query($conn,$sql);  

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
           	 echo "<tr align='center'>";
           	 echo "<td>".$row['ST']."</td>";
           	 echo "<td>".$row['TT']."</td>";
		 if($login_type == 1){
			echo "<td><form action='../action/deletetm.php' method='POST'>";
                  	echo "<button type='summit' class='btn btn-sm btn-secondary' name='button' value='".$row['id']."'>删除</button>";
			echo "</form></td>";}
		 else{
			echo "<td>没有操作权限</td>";
		 }
            	echo "</tr>";
            }

 
mysqli_close($conn);

?>