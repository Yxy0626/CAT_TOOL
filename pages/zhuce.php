<?php

include "../share/head.php";
error_reporting(E_ALL || ~E_NOTICE);

?>
<body class="">

    <div class="account-pages mt-5 mb-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card mb-0">

                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <h3 class="text-dark-50 text-center mt-0 font-weight-bold">LoCAT&nbsp;您的贴身翻译工具</h3>
                                <p class="text-muted mb-4">免费注册</p>
                            </div>

                            <form method="POST" action="../action/adduser.php">
                                <div class="form-group">
                                    <label for="email">电子邮箱</label>
                                    <input class="form-control" type="email" id="email" name="email" required placeholder="请输入邮箱地址"/>
                                </div>
								<div class="form-group">
                                    <label for="name">昵称</label>
                                    <input class="form-control" type="name" id="name" name="name" required placeholder="请输入昵称（仅支持英文和数字）"/>
                                </div>

                                <div class="form-group">
                                    <label for="password">密码</label>
                                    <input class="form-control" type="password"  id="password" name="password" required placeholder="输入密码"/>
                                </div>
								<label for="au">您的身份</label></br>
								<div class="custom-control custom-radio custom-control-inline">
								
                                                <input type="radio" id="customRadioInline1" name="authority" class="custom-control-input" value="0"/>
                                                <label class="custom-control-label" for="customRadioInline1">自由译者</label>
												</input>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="authority" class="custom-control-input" value="1"/>
                                                <label class="custom-control-label" for="customRadioInline2">项目经理</label>
												</input>
                                            </div>
							
							
                             
                                <div>&nbsp;</br></div> 								
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">注册</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Required js -->
    <script src="assets/js/app.js"></script>

</body>

</html>
