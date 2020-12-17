<?php
include "../share/lock.php";
error_reporting(E_ALL || ~E_NOTICE);

if($user_type > 1)
{
	header("Location: ../pages/login.php");
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
function showpj()
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
var url="../action/getpj-translator.php";

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
<body onload="showpj();">
       

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><i class="feather icon-home"></i> 首页</li>
                                    </ol>
                                </div>
                               
							   
							   
							   
                                        <div class="button-list mt-3">
                                            <a href="newProject.php" target = "_blank" ><button type="button" class="btn btn-outline-primary">新建项目</button></a>
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
                        <div>
                            <div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h5>项目列表</h5>
                                </div>
                                <div class="slimscroll" style="max-height: 425px;">
                                    <div class="card-body p-0">
                                        <div class="table-responsive border-top mb-0">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Project ID</th>
                                                        <th>项目经理</th>
                                                        <th>建项时间</th>
                                                        <th>结项时间</th>
                                                        <th>项目处理</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="txtHint">
                                                    <tr>
                                                        <td>#INV-<span>348</span></td>
                                                        <td>Resturant</td>
                                                        <td>17-12-2019</td>
                                                        <td>
                                                            <a href="translation_managePage.php" target = "_blank" class="btn btn-icon btn-primary mr-1" data-toggle="tooltip" title="编辑（进入翻译任务页面）"><i class="feather icon-edit-2"></i></a>															
                                                            <a href="#!"  class="btn btn-icon btn-danger mr-1" data-toggle="tooltip" title="结项（进入确认结项页面）"><i class="feather icon-trash-2"></i></a>
                                                            <a href="memberManagement.php" target="_blank" class="btn btn-icon btn-success mr-1" data-toggle="tooltip" title="译员管理"><i class="feather icon-users"></i></a>
														</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-md-4">
                                  
                                    <div>
                                      
                                    </div>
                                
                            
                        </div>

                        

                    </div>
                   

                </div> 

            </div> 

            <!-- ============================================================= -->
            <!-- ===============    footer content start  ================= -->
            <!-- ============================================================= -->
<?php

include "../share/foot.php";

?>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- Required js -->
    <script src="../assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('.more-user-details').popover({
                placement: 'top',
                trigger: 'hover',
                html: true,
                content: '<div><div class="media align-items-center"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle ui-w-50 mr-3" alt="Avtar image"><div class="media-body"><h4 class="mt-0 mb-1">Jacob Doe <small class="mdi mdi-checkbox-blank-circle text-success"></small><small>Active</small></h4><p class="mb-0">Jacob_Doe@example.com</p></div></div></div><div class="alert alert-warning p-2 mb-1 mt-3 rounded"><div class="media align-items-center"><h3 class="mdi mdi-bell-ring-outline alert-heading m-0"></h3><div class="media-body pl-3"><small><b class="d-block">Unpaid invoice</b></small><small>This account will be disabled starting <b>14 March 1996</b>.</small></div></div></div><div class="no-gutters text-center row pt-3"><div class="col-6"><div><i class="feather icon-pie-chart h4 text-danger"></i></div><div class="mt-2"><b class="mb-1">$9,693</b><span class="d-block">revenue</span></div></div><div class="col-6"><div><i class="feather icon-users h4 text-primary"></i></div><div class="mt-2"><b class="mb-1">2,345</b><span class="d-block">users</span></div></div></div>'
            });
        });
    </script>
    <script src="../assets/js/ui/component.todo.js"></script>
	<script src="../assets/js/app.js"></script>

</body>

</html>
