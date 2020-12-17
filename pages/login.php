<?php

include "../share/head.php";

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
                                <p class="text-muted mb-4">请输入您的电子邮箱和密码</p>
                            </div>
                            <form action="../action/jump.php" method="POST">
                                <div class="form-group">
                                    <label for="email">电子邮箱</label>
                                    <input class="form-control" type="email" id="email" name="email" required placeholder="xxx@example.com"/>
                                </div>
                                <div class="form-group">
                                    <label for="password">密码</label>
                                    <input class="form-control" type="password" name="password" required="" id="password"/>
                                </div>
                                <div class="form-group mb-3">
                                    <a href="pages-recoverpw.html" class="text-muted float-right"><small>忘记密码</small></a>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">登录</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-0">还没有账户？<a href="zhuce.php" class="text-muted ml-1"><b>注册一个</b></a></p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

</body>

</html>	
