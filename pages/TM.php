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
function showtm()
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
var url="../action/getTM.php";

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
<body onload="showtm();">


                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="project_managePage.php"><i class="feather icon-home"></i></a></li>

                                        <li class="breadcrumb-item active">翻译记忆库</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">翻译记忆库</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>翻译记忆库</h5>
                                </div>
                                <div class="card-body table-border-style">
                                    <div class="table-responsive">
                                        <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">
                                            <thead>
					<tr align="right"><th colspan="6"><a href="UPLOAD-TB.php"><button type="button" class="btn btn-sm btn-secondary">上传翻译记忆文档</button></a></th></tr>
                                                <tr>
                                                    <th width="80px">原文</th>
                                                    <th width="80px">译文</th>

                                                    <th width="50px">删除</th>

                                                </tr>
                                            </thead>
                                            <tbody id="txtHint">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
 

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- ============================================================= -->
            <!-- ===============    footer content start  ================= -->
            <!-- ============================================================= -->
<?php

include "../share/foot.php";

?>



    </div>
    <!-- END wrapper -->

</body>
</html>

<?php

include "../share/require.php";

?>

