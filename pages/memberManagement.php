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

?>

<?php

include "../share/navbar.php";

?>

<html>
<head>
<script type="text/javascript">
function showteam()
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
var url="../action/getteam.php";

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

function showteammember()
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
var url="../action/teamshow-transmanagement.php";

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Hint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",url,true);
xmlhttp.send();
}

</script>
</head>
<body onload="showteam(); showteammember();">

 <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="project_managePage.php"><i class="feather icon-home"></i></a></li>

                                        <li class="breadcrumb-item active">译员管理</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div>
                        <div>
                        <div>
                        <div>
                                
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-xl-8 col-md-12">
                            <div class="card sale-card">
                                
                                </div>
                            </div>
                        </div>
           
                            </div>
                      
					  
					  <!--bar-->
					  
					  
					
                    <!-- chart starts -->
                   

                    <div class="div">
                        <div class="row">
                            <div class="col-lg">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h4>译员管理</h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
<form action="../action/addtranslator.php" method="POST">
                                            <table class="table">
                                                <thead>

                                                    <tr>
                                                        <th>人员</th>
                                                        <th>日期</th>
                                                        <th>项目 ID</th>
                                                        <th>操作</th>
                                                    </tr>

                                                </thead>
                                                <tbody id="txtHint">
                                                </tbody>
<tr align="right"><th colspan="6">
                                            <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ..." id="Hint" name="teammember[]">           
                                            </select>
					<button type="summit" class="btn btn-sm btn-secondary">添加译员</button></th></tr>
                                            </table>
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- container -->

            </div> <!-- content -->

            <?php

include "../share/foot.php";

?>





    <!-- Required js -->
    <script src="../assets/js/app.js"></script>


    <!-- third party:js -->
    <script src="../assets/js/vendor/apexcharts.min.js"></script>
    <!-- third party end -->

    <!-- demo:js -->
    <script src="../assets/js/demo/demo.widgets.js"></script>
    <!-- demo end -->

</body>

</html>

                               


                   
