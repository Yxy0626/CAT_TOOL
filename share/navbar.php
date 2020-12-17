 
<body>
	<div class="left-side-menu">
            <div class="slimscroll-menu">
        <!--logo-->
                <a href="" class="logo">
                    <span class="logo-lg">
                        <h2>LoCAT</h2>
                    </span>
                    <span class="logo-sm">
                        <h3>您的贴身翻译工具</h3>
                    </span>
                </a>
		<div class="sidenav-user">
                    <h4 class="mb-1 mt-0">
					<?php 
					echo $login_session; 
					?>
					</h4>
                </div>
		<ul class="metismenu side-nav">
		<li class="menu-item">
		<?php
			
			if($user_type ==1)
				{
					echo '<a href="../pages/project_managePage.php" class="menu-link"><i class="feather icon-home"></i><span>我的项目</span></a>';
					
				}
			else
			{
				echo'<a href="../pages/translation_translatorPage.php" class="menu-link"><i class="feather icon-home"></i><span>我的项目</span></a>';
			}
			?>
						</li>
		<li class="menu-item">
                        <a href="../pages/TM.php" class="menu-link">
                            <i class="feather icon-box"></i>
                            <span> 翻译记忆库</span>
                        </a>
						</li>
		<li class="menu-item">
                        <a href="../pages/TB.php" class="menu-link">
                            <i class="dripicons-document"></i>
                            <span> 术语库</span>
                        </a>
						</li>
		
		
		</ul>
		</div>
		</div>
		
		<div class="content-page">
            <div class="content">
		

                <!-- ============================================================= -->
                <!-- ===============    Top bar header content start  ================= -->
                <!-- ============================================================= -->
                <div class="navbar-custom">
                    <!------------------------------------->
                    <!-- right side topbar content start -->
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="dropdown notification-list">

                                <span class="account-user-avatar">
                                </span>
                                <span>
                                    <span class="account-user-name"></br>欢迎
									<?php 
									echo $login_session; 
									?> 
									登录！
									<a href="../pages/logout.php"><i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
									</span>
									
	
                                </span>
        
                        </li>
                    </ul>
					<button class="button-menu-mobile open-left">
                        <i class="feather icon-menu"></i>
                    </button>
					</div>

				
