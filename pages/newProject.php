
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
								
								<div class="col-md-4 mb-3">
						<label for="validationTooltip01">项目ID</label>
						<input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="请填入“字母-日期”的格式，如:A20201127" required placeholder="x-AAAA-BB-CC" required>
						<br/>
						<label for="validationTooltip02">项目负责人</label>
					    <input type="text" class="form-control" id="validationTooltip02" placeholder="项目负责人" value="请输入姓名" required>
				               </div>
							   <!--此处想创建一个邀请译员加入项目的框，输入要邀请译员的邮箱，点击按钮即可邀请并清空，邀请下一位译员-->
					    <label for="validationTooltipUsername">这是一个测试框 需要后期替换</label>
			            <div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
						</div>
							<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
						<div class="invalid-tooltip">
							Please choose a unique and valid username.
						</div>
						</div>
						<br/>
							   
							   
								
                                    <h4 class="header-title m-t-0">文件拖拽上传</h4>
                                    <form role="form" action="file.php" method="POST" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
    
                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                                            <h3>选择文件或拖拽到此区域上传文件</h3>
                                            <span class="text-muted font-13">（文件仅支持
                                                <strong>.docx</strong>或<strong>.xlsx</strong>格式。）</span>
                                        </div>
    
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>
<div>&nbsp</div>
<div align="right"><button type="submit" class="btn btn-sm btn-secondary">上传</button></div>

							 
                               </form>
							   <br/>
							   <a href="#!" ><button class="btn  btn-primary" type="submit">新建</button></a>
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
