<?php

$ruserDetail=mysql_fetch_assoc(mysql_query("select * from admin where Admin_Id='".$_SESSION['Admin_Id']."'"));

?>







<a href="<?php echo $domain;?>/dashboard" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>DMS</b></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>Driver</b>&nbsp;Management</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="home.html" class="sidebar-toggle" data-toggle="push-menu" role="button">

        <span class="sr-only">Toggle navigation</span>

      </a>



      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

          <!-- Messages: style can be found in dropdown.less-->

          <li class="dropdown messages-menu">

           <?php /* <a href="home.html" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-envelope-o"></i>

              <span class="label label-success">4</span>

            </a>*/?>

            <ul class="dropdown-menu">

              <?php /*<li class="header">You have 4 messages</li>*/?>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li><!-- start message -->

                    <a href="home.html">

                      <div class="pull-left">
<?php 
            if($profilePic!=''){
              echo '<img src="'.$fronturl.'/uploads/admindocs/'.$profilePic.'" class="img-circle" alt="User Image">';

            }else{

          ?>
                        <img src="<?php echo $domain; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
<?php } ?>
                      </div>

                      <h4>

                        Support Team

                        <small><i class="fa fa-clock-o"></i> 5 mins</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <!-- end message -->

                  <li>

                    <a href="<?php echo $domain;?>/dashboard">

                      <div class="pull-left">
<?php 
            if($profilePic!=''){
              echo '<img src="'.$fronturl.'/uploads/admindocs/'.$profilePic.'" class="img-circle" alt="User Image">';

            }else{

          ?>
                        <img src="<?php echo $domain; ?>/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      <?php } ?>

                      </div>

                      <h4>

                        AdminLTE Design Team

                        <small><i class="fa fa-clock-o"></i> 2 hours</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <li>

                    <a href="home.html">

                      <div class="pull-left">
<?php 
            if($profilePic!=''){
              echo '<img src="'.$fronturl.'/uploads/admindocs/'.$profilePic.'" class="img-circle" alt="User Image">';

            }else{

          ?>
                        <img src="<?php echo $domain; ?>/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      <?php } ?>

                      </div>

                      <h4>

                        Developers

                        <small><i class="fa fa-clock-o"></i> Today</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <li>

                    <a href="home.html">

                      <div class="pull-left">
<?php 
            if($profilePic!=''){
              echo '<img src="'.$fronturl.'/uploads/admindocs/'.$profilePic.'" class="img-circle" alt="User Image">';

            }else{

          ?>
                        <img src="<?php echo $domain; ?>/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      <?php } ?>

                      </div>

                      <h4>

                        Sales Department

                        <small><i class="fa fa-clock-o"></i> Yesterday</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <li>

                    <a href="home.html">

                      <div class="pull-left">
<?php 
            if($profilePic!=''){
              echo '<img src="'.$fronturl.'/uploads/admindocs/'.$profilePic.'" class="img-circle" alt="User Image">';

            }else{

          ?>
                        <img src="<?php echo $domain; ?>/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">

                      <?php } ?>

                      </div>

                      <h4>

                        Reviewers

                        <small><i class="fa fa-clock-o"></i> 2 days</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                </ul>

              </li>

              <li class="footer"><a href="">See All Messages</a></li>

            </ul>

          </li>

          <!-- Notifications: style can be found in dropdown.less -->

          <li class="dropdown notifications-menu">

          <?php /*  <a href="home.html" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-bell-o"></i>

              <span class="label label-warning">10</span>

            </a>*/?>

            <ul class="dropdown-menu">

              <?php /*<li class="header">You have 10 notifications</li>*/?>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li>

                    <a href="home.html">

                      <i class="fa fa-users text-aqua"></i> 5 new members joined today

                    </a>

                  </li>

                  <li>

                    <a href="home.html">

                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the

                      page and may cause design problems

                    </a>

                  </li>

                  <li>

                    <a href="home.html">

                      <i class="fa fa-users text-red"></i> 5 new members joined

                    </a>

                  </li>

                  <li>

                    <a href="home.html">

                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made

                    </a>

                  </li>

                  <li>

                    <a href="home.html">

                      <i class="fa fa-user text-red"></i> You changed your username

                    </a>

                  </li>

                </ul>

              </li>

              <li class="footer"><a href="home.html">View all</a></li>

            </ul>

          </li>

          <!-- Tasks: style can be found in dropdown.less -->

          <li class="dropdown tasks-menu">

            <?php /*<a href="home.html" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-flag-o"></i>

              <span class="label label-danger">9</span>

            </a>*/?>

            <ul class="dropdown-menu">

              <?php /*<li class="header">You have 9 tasks</li>*/?>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li><!-- Task item -->

                    <a href="home.html">

                      <h3>

                        Design some buttons

                        <small class="pull-right">20%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">20% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="home.html">

                      <h3>

                        Create a nice theme

                        <small class="pull-right">40%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">40% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="home.html">

                      <h3>

                        Some task I need to do

                        <small class="pull-right">60%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">60% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="">

                      <h3>

                        Make beautiful transitions

                        <small class="pull-right">80%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">80% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

				  

                  <!-- end task item -->

                </ul>

              </li>

              <li class="footer">

                <a href="home.html">View all tasks</a>

              </li>

            </ul>

          </li>

          <!-- User Account: style can be found in dropdown.less -->

		 

          <li class="dropdown user user-menu">

            <a href="" class="dropdown-toggle" data-toggle="dropdown">

              <?php if($ruserDetail['Admin_Pic']!=''){ 

                echo '<img src="'.$adminurl.'/uploads/admindocs/'.$ruserDetail['Admin_Pic'].'" class="user-image" alt="User Image">';

              } else{ ?>

              <img src="<?php echo $adminurl;?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

            <?php } ?>

              <span class="hidden-xs"><?php echo ucwords($ruserDetail['Admin_Position']); ?></span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

                 <?php if($ruserDetail['Admin_Pic']!=''){ 

                echo '<img src="'.$adminurl.'/uploads/admindocs/'.$ruserDetail['Admin_Pic'].'" class="user-image" alt="User Image">';

              } else{ ?>

              <img src="<?php echo $adminurl;?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

            <?php } ?>



                <p>

                 <?php echo $ruserDetail['Name'];?>
                  <?php $getCompInfo=mysql_query("select * from companydetail where Admin_Id='".$rsLog['companyID']."'");
                    $rsCompInfo=mysql_fetch_assoc($getCompInfo);



                   ?>
                    <?php if($rsCompInfo['companyName']!=''){ ?>
                  <small>Company Name: <b><?php if($rsCompInfo['companyName']==''){ echo 'Admin';}else{ echo $rsCompInfo['companyName'];}?></b> </small> <?php } ?>
                </p>

              </li>

              <!-- Menu Body -->

            

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                  <a href="<?php echo $adminurl;?>/dashboard/updateuser/<?php echo $_SESSION['Admin_Id']; ?>" class="btn btn-default btn-flat">Profile</a>

                </div>

                <div class="pull-right">

                  <a href="<?php echo $adminurl;?>/signout" class="btn btn-default btn-flat">Sign out</a>

                </div>

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->

          <!--<li>

            <a href="home.html" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>

          </li> -->

        </ul>

      </div>

    </nav>

  </header>