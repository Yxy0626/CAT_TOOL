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

$sqll = "select project_id from project where project_pm LIKE '$login_session'";				

$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}



 
$sql = "select * from user_project where project_id LIKE '$pjid'";

$huoqu = mysqli_query($conn,$sql);  

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
           	 echo "<tr align='center'>";
	   	 echo "<td>".$row['Email']."</td>";
           	 echo "<td>".$row['Email']."</td>";
           	 echo "<td><div name='pjid'>".$row['project_id']."</div></td>";
           	 echo "<td>
                                                                    <a class='dropdown-item' href='#!'><i class='mdi mdi-delete mr-2'></i>Delete</a>

                                                        </td>";
           	 echo "</td>";
            	echo "</tr>";
            }

 
mysqli_close($conn);

?>