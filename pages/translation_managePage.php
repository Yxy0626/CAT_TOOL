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


                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item active">Widgets</li>
                                    </ol>
                                </div>
                                <div class="button-list mt-3">
									<a href="UPLOAD.php" target = "_blank" type="button" class="btn btn-outline-primary" >添加翻译文件</a>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <!-- end page title -->

                    <!-- Data widget starts -->  
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
                                    <h5>翻译文件列表</h5>
                                </div>
                                <div class="slimscroll" style="max-height: 425px;">
                                    <div class="card-body p-0">
                                        <div class="table-responsive border-top mb-0">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Project ID</th>
                                                        <th>文件上传者</th>
                                                        <th>进度</th>
                                                        <th>字数</th>
                                                        <th>时长设定</th>
                                                        <th>翻译文件处理</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>A<span>20200101</span></td>
                                                        <td>Resturant</td>
                                                        <td>

														<div class="progress mb-4">
															<div class="progress-bar" role="progressbar" 
															style="width: 50%" 
															aria-valuenow="30" 
															aria-valuemin="0" aria-valuemax="100">
															</div>
														</div>
														
														</td>
                                                        <td class="font-weight-semibold fs-16 num-font">530</td>
                                                        <td>
														    <div class="form-group mb-3">
																<label> </label>
																<input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
															</div>
														</td>
                                                        <td>
														     
                                                            <a href="#!" class="btn btn-icon btn-primary mr-1" data-toggle="tooltip" title="编辑（进入翻译页面）"><i class="feather icon-edit-2"></i></a>
															<a href="#!" class="btn btn-icon btn-danger mr-1" data-toggle="tooltip" title="删除（删除项目）"><i class="feather icon-trash-2"></i></a>
															<a href="#!" class="btn btn-icon btn-success mr-1" data-toggle="tooltip" title="任务分配"><i class="feather icon-check-square"></i></a>
										
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#INV-<span>186</span></td>
                                                        <td>Rela Estate</td>
                                                        <td>
														<div class="progress mb-4">
															<div class="progress-bar" role="progressbar" 
															style="width: 80%" 
															aria-valuenow="30" 
															aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														</td>
                                                        <td class="font-weight-semibold fs-16 num-font">450</td>
                                                        <td>
														    <div class="form-group mb-3">
																<label> </label>
																<input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
															</div>
														</td>
                                                        <td>
                                                            <a href="#!" class="btn btn-icon btn-primary mr-1" data-toggle="tooltip" title="编辑（进入翻译页面）"><i class="feather icon-edit-2"></i></a>
                                                            <a href="#!" class="btn btn-icon btn-danger mr-1" data-toggle="tooltip" title="删除（删除项目）"><i class="feather icon-trash-2"></i></a>
															<a href="#!" class="btn btn-icon btn-success mr-1" data-toggle="tooltip" title="任务分配"><i class="feather icon-check-square" ></i></a>
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
