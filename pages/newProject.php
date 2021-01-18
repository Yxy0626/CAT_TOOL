<?php
include "../share/lock.php";
error_reporting(E_ALL || ~E_NOTICE);

if($user_type > 1)
{
	header("Location: login.php");
}
?>
<?php

include "../share/head.php";
error_reporting(E_ALL || ~E_NOTICE);

?>
	
<?php

include "../share/navbar.php";

?>

<html>
<head>
<script type="text/javascript">
function showterm()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
var url="../action/teamshow.php";

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
</script>
</head>
<body onload="showterm();">


                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="project_managePage.php"><i class="feather icon-home"></i></a></li>
    
                                        <li class="breadcrumb-item active">新建项目</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">新建项目</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
								<form action="../action/projectupload.php" method="POST">
								<div class="col-md-4 mb-3">
						<label for="validationTooltip01">项目ID</label>
						<input type="text" class="form-control" id="validationTooltip01" name="projectid" value="请填入“字母-日期”的格式，如:A20201127" required placeholder="A-YEAR-MONTH-DAY: A20200422" required></br>

<label for="validationTooltip01">项目经理</label>

						<input type="text" name="user" class="form-control" value=<?php 
         echo $login_session; 
         ?> readonly="readonly"/></br>
<label for="validationTooltip01">结项时间</label>
						<input type="text" class="form-control" id="validationTooltip01" name="projectdate" value="时间格式如: 2020-04-22" required placeholder="2020-04-22" required>
				               
				               </div>


							  <!--此处想创建一个邀请译员加入项目的框，输入要邀请译员的邮箱，点击按钮即可邀请并清空，邀请下一位译员--> 
<div class="col-md-6">
                                            <h6 class="mb-1 mt-3">人员选择</h6>
                                            <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ..." id="txtHint" name="teammember[]">           
                                            </select>
                                        </div>

                                    </div>

                                </div>
<button class="btn  btn-primary" type="submit">新建</button>
                            </div>
                        </div>
                    </div>
 
</form>
			        
						<br/>
							 
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
    
            <!-- ============================================================= -->
            <!-- ===============    footer content start  ================= -->
            <!-- ============================================================= -->
    
            <?php

include "../share/foot.php";

?>





    <!-- file preview template -->
    <div class="d-none" id="uploadPreviewTemplate">
        <div class="card mt-1 mb-0 shadow-none border">
            <div class="p-2">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img data-dz-thumbnail class="avatar-sm rounded bg-light" alt="">
                    </div>
                    <div class="col pl-0">
                        <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                        <p class="mb-0" data-dz-size></p>
                    </div>
                    <div class="col-auto">
                        <!-- Button -->
                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                            <i class="dripicons-cross"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Required js -->
    <script src="../assets/js/app.js"></script>


    <!-- Dropzone js -->
    <script src="../assets/js/vendor/dropzone.min.js"></script>
    
    <!-- File upload js -->
    <script src="../assets/js/ui/component.fileupload.js"></script>

</body>

</html>
