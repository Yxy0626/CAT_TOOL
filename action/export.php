<?php
header("Content-Type: text/html;charset=utf-8");
$titles= array('ST','TT');

ob_get_clean();
ob_start();
echo implode("\t", $titles),"\n";

$dbhost = "localhost";  //MySQL服务器主机地址
$dbuser = "root";      //MySQL用户名
$dbpass = ""; //MySQL用户名密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$conn)
{
  echo "连接失败了！！";
}

mysqli_select_db($conn,"cat_database2"); //连接数据库
error_reporting(E_ALL);
//require_once '../assets/PHPExcel/Classes/PHPExcel.php';

$fileee = $_POST['button'];
$sql = "select ST,TT from translation WHERE file_name LIKE '$fileee'";
mysqli_query($conn,"set names 'utf8'");
$gettrans = mysqli_query($conn,$sql);

if(!$gettrans)
  {
	echo "获取失败。";
  }
 else
  {
  	 $line=array();
  	 $i=0;
	 while($row = mysqli_fetch_array($gettrans,MYSQLI_ASSOC))
	 {
		 $line['ST'] = $row['ST'];
		 $line['TT'] = $row['TT'];
		 if($i==0){
		 echo implode("\t", $line);
		 $i++;
		 }
		 else{   
		 echo implode("\t", $line),"\n";
		 }
		
	 };
  }

//导出准备

$pattern = '/.*[^xlsx]/';
preg_match($pattern,$fileee,$matches);

header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
header('Content-Disposition: attachment;filename="'.$matches[0].'.xls"; charset=UTF-8');
header('Cache-Control: max-age=0; charset=UTF-8');
//设置头信息
mysqli_close($conn);
exit;
?>