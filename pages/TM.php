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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">翻译记忆库</a></li>
                                        <li class="breadcrumb-item active">XXX翻译记忆库</li>
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
                                    <h5>XXX翻译记忆库</h5>
                                </div>
                                <div class="card-body table-border-style">
                                    <div class="table-responsive">
                                        <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">
                                            <thead>
                                                <tr>
                                                    <th width="15%">编号</th>
                                                    <th width="80px">原文</th>
                                                    <th width="80px">译文</th>
                                                    <th width="15%">作者</th>
                                                    <th width="15%">编辑</th>
                                                    <th width="15%">删除</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道。</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道不知道。</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">编辑</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-secondary">删除</button></td>

                                                </tr>
 <tr>
                                                    <th scope="row">1</th>
                                                    <td style="word-break:break-all; word-wrap:break-word;">Mark</td>
                                                    <td style="word-break:break-all; word-wrap:break-word;">OtttOttOo</td>
                                                    <td>@mdo</td>
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

            <!-- ============================================================= -->
            <!-- ===============    footer content start  ================= -->
            <!-- ============================================================= -->
<?php

include "../share/foot.php";

?>



    </div>
    <!-- END wrapper -->



<?php

include "../share/require.php";

?>

