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


while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC))
{
    echo "<tr>";
	if($row['email']==NULL){
		echo "<td>暂没有人员</td>";
	}
	else{
	echo "<td align='center'>".$row['email']."</td>";}
    echo "<td align='center'>".$row['file_name']."</td>";
	echo"<td>
<form action='../pages/trans_text.php' method='POST'>
    <button align='center' type='summit' class='btn btn-icon btn-primary mr-1' data-toggle='tooltip' title='编辑（进入翻译页面）' name='button' value='".$row['file_name']."'>
	<i class='feather icon-edit-2'></i></button></form>
    </td>";
	
if($row['email']==NULL){
	echo"<td><form action='../action/task.php' method='POST'>
	<input class='form-control' type='text' id='email2' name='email2' required placeholder='请输入邮箱地址'/>
	<button class='btn btn-primary btn-block' type='submit' name='button' value='".$row['file_name']."' width='20%'>确认</button>
	</td></tr></form>";
}
else{
	echo "<td>已分配人员</td>";

}

};
mysqli_close($conn);

?>