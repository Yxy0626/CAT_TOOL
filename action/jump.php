<meta charset="utf-8" />
<html>
<head>
<title>登陆反馈</title>
</head>
</html>

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

session_start();

echo $_POST["email"];

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(empty($_POST["email"]) || empty($_POST["password"]))  
    {  
         echo '<script>alert("请完整填写用户名和密码,3秒后跳转到登录页面...")</script>';  
		 header('refresh:3;url=../pages/login.php'); 
         exit; 
    } 	
	else
	{
		// username and password sent from form 

		$myemail=mysqli_real_escape_string($conn,$_POST['email']); 
		$mypassword=mysqli_real_escape_string($conn,$_POST['password']);

		$sql="SELECT * FROM user WHERE email='$myemail'";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		$authority=$row['authority'];
	
		//$userid=$row['id'];//获取登录用户的唯一ID
		$hashdecode = $row['password'];
	
		if($count==1)
		{
			if ($mypassword == $hashdecode) 
			{
				
				$_SESSION['login_user']=$myemail;
				$_SESSION['authority']=$authority;//获取登录用户的身份类型
				//$_SESSION['ID']=$userid;//将登录用户的唯一ID至于会话中向后传递				
				
				if($_SESSION['authority']==1)
				{
					header("location: ../pages/project_managePage.php");
				}
				else if($_SESSION['authority']==0)
				{
					header("location: ../pages/translation_translatorPage.php");
				}
				
			}
			else
			{
				$error="用户名或密码不正确，请确认后重试，3秒后跳转...";
				echo "<div class='alert alert-danger alert-dismissable'>";						
				echo "		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>";
				echo "			× ";
				echo "		</button>";
				echo "		<h4> ";
				echo $error;
				echo "		</h4>";
				echo "	</div>";
				header('refresh:3;url=../pages/login.php'); 
                exit; 
			}
		}
		else 
		{
			
				$error="当前用户不存在，请确认后重试，3秒后跳转...";
				echo "<div class='alert alert-danger alert-dismissable'>";						
				echo "		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>";
				echo "			× ";
				echo "		</button>";
				echo "		<h4> ";
				echo $error;
				echo "		</h4>";
				echo "	</div>";
				header('refresh:3;url=../pages/login.php'); 
                exit; 
		
		}
	}
}
?>