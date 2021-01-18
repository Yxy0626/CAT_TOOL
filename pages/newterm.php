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
<form action="../action/addterm.php" method="POST">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="project_managePage.php"><i class="feather icon-home"></i></a></li>
    
                                        <li class="breadcrumb-item active">术语上传</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">术语上传</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
								
								<div class="col-md-4 mb-3">
						<label for="Term-original">用户</label>
						<input type="text" name="user" class="form-control" value=<?php 
         echo $login_session; 
         ?> readonly="readonly"/></br>

						<label for="Term-original">术语原文</label>
						<input type="text" class="form-control" name="ST" id="ST" placeholder="原文" required>
						<br/>
						<label for="validationTooltip02">术语译文</label>
					    <input type="text" class="form-control" name="TT" id="TT" placeholder="译文" required>
				               </div>

			          
						<br/>
							   
							   
								
 
							   <br/>
							   <a href="#!" ><button class="btn  btn-primary" type="submit">上传</button></a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
</form>
    
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
