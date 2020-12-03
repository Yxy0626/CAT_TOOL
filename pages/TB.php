
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">术语表</a></li>
                                        <li class="breadcrumb-item active">XXX术语表(根据表的名字变更)</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">术语表</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">XXX术语表(根据表的名字变更)</h4>

                                    <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">

                                        <thead>
					<tr align="center"><th colspan="6"><button type="button" class="btn btn-sm btn-secondary">加入术语</button></th></tr>
                                            <tr>
                                                <th>编号</th>
                                                <th>作者</th>
                                                <th>原文</th>
                                                <th>译文</th>
                                                <th>编辑</th>
                                                <th>删除</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ada</td>
                                                <td>Apple</td>
                                                <td>苹果</td>
                                                <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- container -->

            </div> <!-- content -->

            <?php

include "../share/foot.php";

?>


    </div>
    <!-- END wrapper -->





<?php

include "../share/require.php";

?>
