<?php

include "../share/head2.php";

?>
<style>

	.editarea textarea 
	{

		height: 110px; 
		width: 10px; 
		overflow: hidden; 
		min-height: 2em; 
		margin: 0px;
	}

	.editarea button {
    display: inline-block;
    border: none;
    padding: 1rem 2rem;
    margin: 0;
    text-decoration: none;
    background: #0069ed;
    color: #ffffff;
    font-family: sans-serif;
    font-size: 1rem;
    cursor: pointer;
    text-align: center;
    transition: background 250ms ease-in-out, 
                transform 150ms ease;
    -webkit-appearance: none;
    -moz-appearance: none;
}

.editarea button:hover,
.editarea button:focus {
    background: #0053ba;
}

.editarea button:focus {
    outline: 1px solid #fff;
    outline-offset: -4px;
}

button:active {
    transform: scale(0.99);
}

.highlight {
            background-color: yellow;
        }
	</style>

</head>
<body onload='showtext()'>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		</div>		
	  </div>
   </div>
   
   <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
		<form>
                <table class='table table-bordered table-striped'>
                    <thead>
						<tr>
                            <th width="45%">原文</th>
                            <th width="45%">译文</th>
                        </tr>
                    </thead>
                    <tbody id="trans">
<?php


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


$file = $_POST["button"];

$sql = "select id,ST,TT from translation where file_name LIKE '$file'";				

$text = mysqli_query($conn,$sql); 


while($row = mysqli_fetch_array($text,MYSQLI_ASSOC)){
    echo "<tr>";
    echo "<td id='ST'>".$row['ST']."</td>";
    echo "<td ><div class='edit_translations editarea' id=".$row['id'].">".$row['TT']."</div></td>";
    echo "</tr>";
}
    

 
 
mysqli_close($conn);

?>
				</tbody>
                </table>
				</form>
				<script>
$(document).ready(function() {
    $(".edit_translations").editable(
	"../action/save_tt.php", 
		{ 
			type : 'textarea',
			cancel : 'Cancel', 
			submit : 'OK', 
			tooltip : 'Click to edit...' ,
			onblur    : "ignore",
			width     : "100%",
			rows      : "5",
			name	:"TT",
			id:'textID',
			
			});
});
</script>
            </div>
        </div>

    </div>
</div>
</body>
<!--php

include "../share/foot.php";
error_reporting(E_ALL || ~E_NOTICE);

-->
