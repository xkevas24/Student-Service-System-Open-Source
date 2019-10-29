    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>请稍等...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php" title="点击返回主菜单">人事和公共管理系统 - <?php echo $org; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../../service/app/xj_time.php?poststuno=<?php echo $sn; ?>" width="60" height="60" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?>-<?php echo $dep; ?></div>
                    <div class="email"><?php echo $sn; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../../stu/dashboard.php"><i class="material-icons">person</i>学生服务系统</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="#"><i class="material-icons">group</i>网络服务系统</a></li>
                            <li><a href="../../stu/stulist.php"><i class="material-icons">school</i>社团与学生会</a></li>
                            <li><a href="../../../login/login.php"><i class="material-icons">lock_outline</i>锁屏</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>注销</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">工具箱</li>
                    <li class="<?php if($active==0){ echo "active"; } ?>">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>概览窗口</span>
                        </a>
                    </li>
                    <li class="<?php if($active==1){ echo "active"; } ?>">
                        <a href="output.php">
                            <i class="material-icons">file_download</i>
                            <span>内容导出</span>
                        </a>
                    </li>
                    <li class="<?php if($active==2){ echo "active"; } ?>">
                        <a href="profile_change.php">
                            <i class="material-icons">assignment_late</i>
                            <span>信息变更</span>
                        </a>
                    </li>
                    <li class="<?php if($active==3 or $active==4){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">vpn_key</i>
                            <span>权限变更</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?php if($active==3){ echo "active"; } ?>">
                                <a href="auth_change_long.php">
                                    <span>权限授予</span>
                                </a>
                            </li>
                            <li class="<?php if($active==4){ echo "active"; } ?>">
                                <a href="auth_delete_long.php">
                                    <span>权限解除</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($active==5){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">hourglass_full</i>
                            <span>状态变更</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="ban_for_short.php">短期封禁</a>
                            </li>
                            <li>
                                <a href="ban_for_long.php">长期封禁</a>
                            </li>
                            <li>
                                <a href="member_delete.php">删除成员</a>
                            </li>

                            <li>
                                <a href="member_add.php">添加成员</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($active==6){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">clear_all</i>
                            <span>批量操作</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="batch_addition_member.php">批量添加成员</a>
                            </li>
                            <li>
                                <a href="batch_delete.php">批量删除成员</a>
                            </li>
                            <li>
                                <a href="batch_update.php">批量更新部门信息</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($active==7){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">card_giftcard</i>
                            <span>卡券管理</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="card_manage.php">卡券发布</a>
                            </li>
                            <li>
                                <a href="card_scanner.php">验票员管理</a>
                            </li>
                            <li>
                                <a href="card_manage.php">卡券销毁</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($active==8){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">accessibility</i>
                            <span>活动管理</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="activity_manage.php">活动管理</a>
                            </li>
							<?php $man="select til from stu_manager where xh='$sn' and state='正常';";
								$manager=mysqli_fetch_row(mysqli_query($con,$man))[0];
								if($manager<>"" and date("Y年m月d日")<=$manager){
							?>
                            <li>
                                <a href="activity_shenhe.php">文章审核</a>
                            </li>
							<?php } ?>
                        </ul>
                    </li>
                    <li class="<?php if($active==9){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>投票管理</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">投票发布</a>
                            </li>
                            <li>
                                <a href="#">投票管理</a>
                            </li>
                            <li>
                                <a href="#">投票删除</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($active==10){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dns</i>
                            <span>资源管理</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">物资公示</a>
                            </li>
                            <li>
                                <a href="gongwen_manage.php">公文管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment_ind</i>
                            <span>报名表和申请表管理</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">招新申请表</a>
                            </li>
                            <li>
                                <a href="#">活动报名表</a>
                            </li>
                            <li>
                                <a href="#">表格导出</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($active==11){ echo "active"; } ?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>其他功能</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">
                                    <span>1+100留言反馈</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>云盘</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>站内信</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                            <span>站内信</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">update</i>
                            <span>版本信息</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date("Y"); ?> <a href="javascript:void(0);">学生服务系统</a>.
                </div>
                <div class="version">
                    <b>本页作者: </b> 许潇
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">皮肤</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>红色</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>粉色</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>紫色</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>深紫色</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>靛蓝色</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>蓝色</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>亮蓝色</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>蓝绿色</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>茶色</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>绿色</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>亮绿色</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>绿黄色</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>黄色</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>琥珀色</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>橙色</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>深橙色</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>棕色</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>灰色</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>蓝灰色</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>黑色<span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>