<?php

echo "<script src='../assets/js/jquery-2.1.1.min.js'></script>
<script src='../assets/js/jquery.jeditable.min.js'></script>
<script src='../assets/js/jquery.jeditable.autogrow.min.js'></script>
<script src='../assets/js/jquery.autogrowtextarea.js'></script> ";

echo "<script>
$(document).ready(function() {
    $('.edit_translations').editable(
	'savetranslations.php', 
		{ 

			type : 'textarea',
			cancel : 'Cancel', 
			submit : 'OK', 
			tooltip : 'Click to edit...' ,
			onblur    : 'ignore',
			width     : '100%',
			rows      : '5'
			
			});
});
</script>";

echo "<div class='edit_translations'>abc</div>";

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

/*$id=$_POST["id"];

$file_name = $_POST["file_name"];

$email=$_POST["Email"];*/

$sql = "select id, ST,TT from translation_memory where project_id LIKE 'A20000817'";				

$text = mysqli_query($conn,$sql); 


while($row = mysqli_fetch_array($text,MYSQLI_ASSOC)){
    echo "<tr'>";
    echo "<td>".$row['ST']."</td>";
    echo "<td><div class='edit_translations editarea' id='".$row['id']."'>".$row['TT']."</div></td>";
    echo "<td><div class='feather icon-edit'></div></td>";
    echo "</tr>";
}
    

 
 
mysqli_close($conn);

?>
