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
    
                                        <li class="breadcrumb-item active">翻译记忆文件上传</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">翻译记忆文件上传</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title m-t-0">文件拖拽上传</h4>
                                    <form action="../action/upload_tm.php" method="POST" enctype="multipart/form-data" role="form" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                            <input type="file" name="file" multiple>

    
                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                                            <h3>选择文件或拖拽到此区域上传文件</h3>
                                            <span class="text-muted font-13">（文件仅支持
                                                <strong>.tmx</strong>格式。）</span>
                                        </div>
    
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>
<div>&nbsp</div>
<input type="submit" name="submit" value="上传">
                               </form>
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
    
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            © LoCAT - by 18bdh Team
                        </div>
                        <div class="col-md-6">
                          
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ============================================================= -->
            <!-- ===============    footer content start  ================= -->
            <!-- ============================================================= -->


        </div>
    
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->





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
