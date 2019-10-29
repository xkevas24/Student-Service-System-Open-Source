<!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="导航菜单" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo">学生服务系统<span>5.0</span></a>
            <!--logo end-->
            
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <!--<img alt="" src="http://weixin.ynudcc.cn/Weixin/app/student/photos_get_nosession.php?poststuno=<?php echo $sn; ?>" width="29px">-->
                            <img alt="" src="app/xj_time.php?poststuno=<?php echo $sn; ?>" width="29px">
                            <span class="username"><?php echo $name; ?></span>
                            <b class="caret"></b>
                        </a>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
<?php include("public_weixin.php")?>