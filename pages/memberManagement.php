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
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>ProjectID</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mr-3">
                                                                    <div class="ui-demo-avatar text-white bg-primary">
                                                                        AL
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    Alta Lucas
                                                                    <div class="text-muted">Connecticut</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            31 Aug 2018
                                                            <div class="text-muted">9:30 am</div>
                                                        </td>
                                                        <td>
                                                            6770 Verner Burgs
                                                            <div class="text-muted">View on map</div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown dropleft">
                                                                <button class="btn p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                                </button>
                                                                <div class="dropdown-menu" data-x-placement="left-start">
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-grease-pencil mr-2"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-delete mr-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mr-3">
                                                                    <div class="ui-demo-avatar text-white bg-success">
                                                                        TS
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    Teresa Shaw
                                                                    <div class="text-muted">Florida</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            13 May 2018
                                                            <div class="text-muted">10:30 am</div>
                                                        </td>
                                                        <td>
                                                            1300 Gideon Divide Apt. 400
                                                            <div class="text-muted">Start session</div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown dropleft">
                                                                <button class="btn p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                                </button>
                                                                <div class="dropdown-menu" data-x-placement="left-start">
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-grease-pencil mr-2"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-delete mr-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mr-3">
                                                                    <div class="ui-demo-avatar text-white bg-danger">
                                                                        RU
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    Rosa Underwood
                                                                    <div class="text-muted">North Dakota</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            02 Jan 2018
                                                            <div class="text-muted">11:00 am</div>
                                                        </td>
                                                        <td>
                                                            9576 Rempel Extension
                                                            <div class="text-muted">End session</div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown dropleft">
                                                                <button class="btn p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                                </button>
                                                                <div class="dropdown-menu" data-x-placement="left-start">
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-grease-pencil mr-2"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-delete mr-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mr-3">
                                                                    <div class="ui-demo-avatar text-white bg-warning">
                                                                        WA
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    Warren Arnold
                                                                    <div class="text-muted">North Dakota</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            02 Jan 2018
                                                            <div class="text-muted">11:00 am</div>
                                                        </td>
                                                        <td>
                                                            9576 Rempel Extension
                                                            <div class="text-muted">End session</div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown dropleft">
                                                                <button class="btn p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                                </button>
                                                                <div class="dropdown-menu" data-x-placement="left-start">
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-grease-pencil mr-2"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="mdi mdi-delete mr-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

                               


                   