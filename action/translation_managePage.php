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
<script type="text/javascript">
function show_list()
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
var url="../action/show_translist.php";

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("liststart").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
</script>
<body onload="show_list()">
                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item active">翻译文件列表</li>
                                    </ol>
                                </div>
                                <div class="button-list mt-3">
									<a href="UPLOAD.php"><button type="button" class="btn btn-outline-primary">添加翻译文件</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <!-- end page title -->

                    <!-- Data widget starts -->             
                        <div class="col-xl-8 col-md-12">
                            <div class="card sale-card">
                                </div>
                            </div>
                        </div>
                        

                      
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h5>翻译文件列表</h5>
                                </div>

                                    <div class="card-body p-0">
                                        <div class="table-responsive border-top mb-0">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>翻译人员</th>
                                                        <th>文件名</th>
                                                        <th>翻译文件处理</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="liststart">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                                  
                                    <div>
                                    </div>
                                
                            
                        </div>
                    </div>
                    <!-- Data widget end -->

                </div> <!-- container -->

            </div> <!-- content -->

<?php

include "../share/foot.php";

?>



    <!-- Required js -->
    <script src="../assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('.more-user-details').popover({
                placement: 'top',
                trigger: 'hover',
                html: true,
                content: '<div><div class="media align-items-center"><img src="../assets/images/users/avatar-4.jpg" class="rounded-circle ui-w-50 mr-3" alt="Avtar image"><div class="media-body"><h4 class="mt-0 mb-1">Jacob Doe <small class="mdi mdi-checkbox-blank-circle text-success"></small><small>Active</small></h4><p class="mb-0">Jacob_Doe@example.com</p></div></div></div><div class="alert alert-warning p-2 mb-1 mt-3 rounded"><div class="media align-items-center"><h3 class="mdi mdi-bell-ring-outline alert-heading m-0"></h3><div class="media-body pl-3"><small><b class="d-block">Unpaid invoice</b></small><small>This account will be disabled starting <b>14 March 1996</b>.</small></div></div></div><div class="no-gutters text-center row pt-3"><div class="col-6"><div><i class="feather icon-pie-chart h4 text-danger"></i></div><div class="mt-2"><b class="mb-1">$9,693</b><span class="d-block">revenue</span></div></div><div class="col-6"><div><i class="feather icon-users h4 text-primary"></i></div><div class="mt-2"><b class="mb-1">2,345</b><span class="d-block">users</span></div></div></div>'
            });
        });
    </script>
    <script src="../assets/js/ui/component.todo.js"></script>
	<script src="../assets/js/app.js"></script>

</body>

</html>
