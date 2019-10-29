<!--sidebar start-->
      <aside id="aside">
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li <?php if($menu==0){ echo "class='active'"; } ?>>
                      <a class="" href="index.php">
                          <i class="icon-dashboard"></i>
                          <span>学生服务系统</span>
                      </a>
                  </li>
                  <li class="sub-menu <?php if($menu==1){ echo "active"; } ?>">
                      <a href="javascript:;" class="">
                          <i class="icon-credit-card"></i>
                          <span>钱包与积分</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="cards_index.php">我的卡券</a></li>
                          <li><a class="" href="cash_main.php">我的余额</a></li>
                          <li><a class="" href="sec.php">第二课堂积分</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu <?php if($menu==2){ echo "active"; } ?>">
                      <a href="stu_list.php" class="">
                        <i class="fa fa-graduation-cap"></i>
                          <span>团学与社团</span>
                          <!--<span class="arrow"></span>-->
                      </a>
                      <!--<ul class="sub">
                         <?php //$tuanxue_sql="select * from stu_stulist;"; $tuanxue_result=mysqli_query($con,$tuanxue_sql); 
						  //while($tuanxue=mysqli_fetch_row($tuanxue_result)){
						  ?>
                          <li><a class="" href="<?php // echo $tuanxue[4]; ?>"><?php //echo $tuanxue[1]; ?></a></li>
                          <?php //} ?>
                      </ul>-->
                  </li>
                  <li class="sub-menu <?php if($menu==3){ echo "active"; } ?>">
                      <a href="isquare.php" class="">
                          <i class="fa fa-paper-plane"></i>
                          <span>爱生活广场</span>
                      </a>
                  </li>
                  <li class="sub-menu <?php if($menu==4){ echo "active"; } ?>">
                      <a href="sec.php" class="">
                          <i class="fa fa-cubes"></i>
                          <span>第二课堂</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="../live/index.html">
                          <i class="fa fa-television"></i>
                          <span>校园IPTV </span>
                         <!-- <span class="label label-danger pull-right mail-info">2</span>-->
                      </a>
                  </li>
                  <li>
                      <a class="" href="../system/lost&find/index.php">
                          <i class="fa fa-search"></i>
                          <span>失物招领 </span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="../system/top/index.php">
                          <i class="fa fa-codepen"></i>
                          <span>TOP电脑社 </span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->