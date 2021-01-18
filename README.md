# LoCAT——CATTOOL小组项目作业

##### 组长：于欣雨

##### 组员：李浩贤、鞠林玲、李諾怡

## 使用说明

1. 文件保存，解压在xampp/htdocs/目录下，根据个人信息修改share/config.php文件的localhost的用户名和密码，在phpmyadmin页面上传cat_database2.sql文件，即可使用。
2. 主页面为：localhost/CAT2/pages，从index.php页面点击小人头像进入。
3. 有自由译者与项目经理两种身份；可以注册；测试登入数据：项目经理邮箱：knkn@qq.com，密码：knkn；普通译员 邮箱：1111@qq.com，密码：123;

## 前期准备

### 开发工具

开发环境：PHP+XAMPP+MYSQL

IDE：Notepad++

测试环境：Chorme

### 数据库ER图

![er](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/er.jpg)

### 数据库设计

cat_database2数据库下有7个表分别为file（文件表）、project（项目表）、terms（术语表）、translation（译文表）、translation_memory（翻译记忆表）、user（用户表）、user_project（用户项目表）

![tablelist](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/tablelist.png)

**file（文件表）**

其中有四个元素，id为主键并且自增。用来存储文件名与项目名。

![tablelist](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/file.png)

**project（项目表）**

其中有四个元素，project_id为主键。存储项目、项目经理、项目开始与结束时间的信息。

![project](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/project.png)

**terms（术语表）**

其中有5个元素，id为主键且自增。ST为源语言，TT为目标语言，存储术语信息。

![term](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/term.png)

**translation（译文表）**

其中有6个元素，id为主键且自增。ST为源语言，TT为目标语言，存储译文信息。

![translation](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/translation.png)

**translation_memory（翻译记忆表）**

其中有4个元素，id为主键且自增。ST为源语言，TT为目标语言，存储翻译记忆信息。

![translation_memory](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/translation_memory.png)

**user（用户表）**

其中有四个元素，用来储存注册用户信息，Email为主键，以此避免重复注册。存储姓名，密码，authority值为1则是项目经理，0为普通译员。

![user](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/user.png)

**user_project（用户项目表）**

其中有3个元素，用来存储用户是否加入项目的信息，Email为主键。

![user_project](https://github.com/Yxy0626/CAT_TOOL/blob/main/img/user_project.png)

## 人员分工

##### 代码分工：

**pages文件夹下（前端）：**

**于欣雨**：zhuce.php（注册页面）；login.php（登陆页面）；logout.php（退出登陆页面）；trans_text.php（翻译界面）；MemberManagement.php（项目人员管理界面）；translation_managePage（翻译文件管理界面）；project_managePage（项目管理界面）；

**李浩贤**：UPLOAD-TM.php（上传翻译记忆页面）；UPLOAD-TB.php（上传术语页面；UPLOAD.php（上传翻译文件页面）；translation_memory.php（翻译记忆库界面）；term_base.php（术语库界面）；newterm.php（添加术语页面）；newProject.php（新建项目页面）；MemberManagement.php（项目人员管理界面）；translation_managePage（翻译文件管理界面）；project_managePage（项目管理界面）；

**鞠林玲**：translation_translatorPage.php（译者翻译管理页面）；translation_managePage（翻译文件管理界面）；project_managePage（项目管理界面）；pagesCommingsoon.html（404页面）；Over.php（结项页面）；MemberManagement.php（项目人员管理界面）；index.html（欢迎页面）

**action文件夹下：**

**于欣雨**：save_tt.php（保存编辑后的译文）；show_translist.php（任务分配后端）；task.php（任务分配界面）；adduser.php（注册用户）

**李浩贤**：projectupload.php（新建项目）；术语的增删改与显示（addterm.php/deleteterm.php/get_term.php）；增删显示项目成员（addtranslator.php/delete_TeamMember.php/get_TransMember.php）；翻译记忆的增删改与显示（deletetm.php/get_TransMemory.php）；jump.php（注册后跳转页面）；export.php（导出页面）；show_TeamTransManage.php（显示项目管理信息）；get_pjID.php（获取项目Id）；getpj-translator.php（项目中译员信息）；teamshow.php（显示项目人员）；upload_file.php（上传翻译文件）；upload_tb.php(上传术语文件)；upload_tm.php（上传翻译记忆文件）；

**鞠林玲**：export.php（导出页面）；overlist.php（结项导出表单）；upload_file.php（上传翻译文件）；upload_tb.php(上传术语文件)；upload_tm.php（上传翻译记忆文件）；

**share文件夹下（需要引用的代码）：**

**于欣雨**：config.php；foot.php；head.php；head2.php；lock.php；navbar.php；require.php；

##### 其他工作：

**数据测试**：李浩贤、于欣雨、鞠林玲，李諾怡；

**提供测试文件**：李諾怡，鞠林玲；

**上传代码**：于欣雨；

**整理说明**：于欣雨

## 代码分析

**share/config.php** 连接数据库

```
`<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'cat_database2');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(! $conn )
{
	die("Could not connect: " . mysqli_error());
}

?>
```

**share/lock.php** 核心代码 判断用户类型显示不同页面

```
mysqli_select_db($conn,"cat_database2"); //连接数据库
$ses_sql=mysqli_query($conn,"SELECT Email FROM user WHERE Email='{$user_check}' ");
```

**share/navbar.php** 根据用户类型判断不同位置

```
if($user_type ==1)
				{
					echo '<a href="../pages/project_managePage.php" class="menu-link"><i class="feather icon-home"></i><span>我的项目</span></a>';
					

			}
		else
		{
			echo'<a href="../pages/translation_translatorPage.php" class="menu-link"><i class="feather icon-home"></i><span>我的项目</span></a>';
		}
```

**zhuce.php+adduser.php** 添加用户

```
$sql = "INSERT INTO `cat_database2`.`user`(Email,name,password,authority) VALUES('{$_POST["email"]}','{$_POST["name"]}','{$_POST["password"]}','{$_POST["authority"]}')";
```

**upload-tm.php/upload-_tb.php/upload_file.php** 上传翻译记忆页面/上传术语页面/上传翻译文件页面 此处tb与file上传的excel的表格类文件使用PHPExcel插件处理。

```
//将文件传到项目中
$sqll = "select project_id from project where project_pm LIKE '$login_session'";				

$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}
//判断文件类型
if(($_FILES["file"]["type"] != "application/vnd.ms-excel")&&
($_FILES["file"]["type"] != "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")){
	echo "文件格式不正确，请选择文件后缀为\".docx\"或\".xlsx\"的文件";
}
else{
//error_reporting(E_ALL || ~E_NOTICE);
	if($_FILES["file"]["error"]>0)
	{
		echo "文件上传错误：".$_FILES["file"]["error"]."<br>";
	}
	

​```
else
{
	if(file_exists("../upload/tanslation_file/".$_FILES["file"]["name"]))
	{
		echo "该文件已存在";
	}
	
	//对excel类型文件进行处理
	else 
	{
		move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/translation_file/".$_FILES["file"]["name"]);
		echo "文件已上传至："."../upload/translation_file/".$_FILES["file"]["name"];

		$saveplace = "../upload/translation_file/".$_FILES["file"]["name"];
		$excel = PHPExcel_IOFactory::load($saveplace);
		$sheetCount = $excel -> getSheetCount();
		for($i=0;$i<$sheetCount;$i++)
		{
			$data = $excel->getSheet($i)->toArray();
			$roww = count($data);
			for($j=1;$j<$roww;$j++){
				$ST =  $data[$j][0];
				$TT =  $data[$j][1];
				$insert_sql = "INSERT INTO `cat_database2`.`translation`(email, ST, TT, project_id,file_name) VALUES ('$login_session','$ST', '$TT','$pjid','".$_FILES["file"]["name"]."')";

			$status = mysqli_query($conn,$insert_sql);

			}

		}
		$sql="INSERT INTO `cat_database2`.`file`(file_name,project_pm) VALUES ('{$_FILES["file"]["name"]}', '{$login_session}')";
		$insert = mysqli_query($conn,$sql);  
		echo "<script language='JavaScript'>alert('文件已上传至：../upload/tm/".$_FILES['file']['name']."');</script>";
		header('refresh:0;url=../pages/translation_managePage.php'); 

		//echo "文件临时储存在".$_FILES["file"]["tmp_name"];
	}
}
​```

}


//上传处理tmx文件

if(file_exists("../upload/tm".$_FILES["file"]["name"]))
		{
			echo "该文件已存在";
		}
		else 
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/tm/".$_FILES["file"]["name"]);
			echo "文件已上传至："."../upload/tm/".$_FILES["file"]["name"];

//----------import tmx data---------//

			$saveplace = "../upload/tm/".$_FILES["file"]["name"];
			$xml = simplexml_load_file($saveplace);
			$json = json_encode($xml);
			$jsondata = json_decode($json,true);
			foreach ($jsondata["body"]["tu"] as $tu)
			{
				$zh = $tu["tuv"][0]["seg"];
				$en = $tu["tuv"][1]["seg"];

				$insert_sql = "INSERT INTO `cat_database2`.`translation_memory`(ST, TT,project_id) VALUES ('{$zh}', '{$en}','$pjid')";

				$status = mysqli_query($conn,$insert_sql);
			}
			echo "<script language='JavaScript'>alert('文件已上传至：../upload/tm/".$_FILES['file']['name']."');</script>";
			header('refresh:0;url=../pages/translation_memory.php'); 
```



**addterm.php/deleteterm.php/get_term.php** 术语的增删

```
//显示项目的术语

$sqll = "select project_id from user_project where Email LIKE '$login_session'";				

$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}

//------------获取project_id一致的term-----------//

$sql = "select * from terms where project_id LIKE '$pjid' ";

//增加术语

$user = $_POST["user"];

$sqll = "select project_id from user_project where Email LIKE '$user'";								

$huoqu = mysqli_query($conn, $sqll); 

while($row = mysqli_fetch_array($huoqu, MYSQLI_ASSOC)){
	$pjid = $row['project_id'];
}

//---------//

$sql = "INSERT INTO `cat_database2`.`terms`(name,ST,TT,project_id) VALUES ('{$_POST["user"]}','{$_POST["ST"]}','{$_POST["TT"]}', '$pjid')";

//删除术语

$no= $_POST['button'];

$sql = "DELETE FROM terms WHERE id LIKE '$no'";
```

**addtranslator.php/delete_TeamMember.php/get_TransMember.php** 增删显示项目成员

```
//项目中增添译者

$sql = "select * from project where project_pm LIKE '$login_session'";				

$pjid = mysqli_query($conn,$sql);

​```
while ($row = mysqli_fetch_array($pjid, MYSQLI_ASSOC)) {
	$pjpj = $row['project_id'];
}
​```

$teamM = $_POST["teammember"];

for($i=0; $i<count($teamM); $i++){
		$sql = "INSERT INTO `cat_database2`.`user_project`(Email, project_id) VALUES('{$teamM[$i]}', '$pjpj')";  //一次插入的东西插入语句要写在一起，否则不在一个记录 
		$insert = mysqli_query($conn,$sql);
		if(!$insert)  
		{  
			echo "无法插入用户信息: ".mysqli_error($conn); 
		}  
	}

//删除项目中的译者

$no= $_POST['button'];

$sql = "DELETE FROM user_project WHERE Email LIKE '$no'";

//显示项目中的译者名单

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
		if($login_session==$row['Email']){
			echo"<td></td>";}
		else{
           	 echo "<td>
                                                                    <form action='../action/delete_TeamMember.php' method='POST'>
<button type='summit' class='btn btn-sm btn-secondary' name='button' value='".$row['Email']."'>删除</button>
</form>

                                                  </td>";}
       	 echo "</td>";
        	echo "</tr>";
```

**deletetm.php/get_TransMemory.php** 翻译记忆的增删改与显示

```
//删除TM信息

$no= $_POST['button'];

$sql = "DELETE FROM translation_memory WHERE id LIKE '$no'";

//显示TM信息

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
```

**trans_text.php+save_tt.php** 译文修改

此处使用jeditable插件进行处理

```
//jeditable代码
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

//后端处理
$TT = $_POST["TT"];

$ID = $_POST["textID"];

//---------//
 
$sql = "UPDATE `translation` SET `TT` = '{$TT}' WHERE `id` = '{$ID}'";

$update = mysqli_query($conn,$sql); 

```

**export.php** 导出页面

```
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
		

​```
 };
​```

  }

//导出准备

$pattern = '/.*[^xlsx]/';
preg_match($pattern,$fileee,$matches);

header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
header('Content-Disposition: attachment;filename="'.$matches[0].'.xls"; charset=UTF-8');
header('Cache-Control: max-age=0; charset=UTF-8');

```

## 项目反思

**遇到的问题：**

1. 前期对数据库设想不够完全，后期又补上了许多键和其他表格；
2. 对PHPExecel的导出功能使用不到位；
3. 用jqgrid连接后端失败，转战jeditable；
4. 对一些功能想的太简单，实施起来很难；
5. 虽大部分使用Ajax，但有的页面无法完全前后端分离；
6. 使用了网上购买的bootsrap文件，但修改起来较为费力，对页面美化做的一般。

