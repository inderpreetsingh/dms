<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

          <?php 
            if($profilePic!=''){
              echo '<img src="'.$fronturl.'/uploads/admindocs/'.$profilePic.'" class="img-circle" alt="User Image">';

            }else{

          ?>
          <img src="<?php echo $domain; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        <?php } ?>

        </div>

        <div class="pull-left info">

           <p><?php echo $loginNm; ?></p>

          <i class="fa fa-circle text-success"></i> Online

        </div>

      </div>

<?php /*
      <!-- search form -->

      <form action="home.html" method="get" class="sidebar-form">

        <div class="input-group">

          <input type="text" name="q" class="form-control" placeholder="Search...">

          <span class="input-group-btn">

                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

                </button>

              </span>

        </div>

      </form>

      <!-- /.search form -->
*/?>

      <!-- sidebar menu: : style can be found in sidebar.less -->     

	 <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>

        <li>

          <a href="<?php echo $domain;?>/dashboard">

            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

            </a>

          <!--<ul class="treeview-menu">

            <li class="active"><a href="home.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>

            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>

          </ul>-->

        </li>

        <li>

          <a href="<?php echo $domain;?>/dashboard/userrecord"">

            <i class="fa fa-user" aria-hidden="true"></i>

            <!--<span>User Module</span>-->
            <span>User Module</span>
          </li></a>

			<!--<ul class="treeview-menu">

            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Driver Module</a></li>

            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Customer Module</a></li>

            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Vehicle Module</a></li>

            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>

          </ul>-->

        </li>

		<li>  

          <a href="<?php echo $domain;?>/dashboard/companyrecord">

            <i class="fa fa-drivers-license" aria-hidden="true"></i>

            <span>Company Module</span></li></a>

      </li>

		<li>  

          <a href="<?php echo $domain;?>/dashboard/driversrecord">

            <i class="fa fa-drivers-license" aria-hidden="true"></i>

            <span>Driver Module</span></li></a>

			</li>

			<li>

          <a href="<?php echo $domain;?>/dashboard/vehiclerecord">

            <i class="fa fa-taxi"></i> <span>Vehicles Module</span>

          </a>

        </li>

        <li>

          <a href="<?php echo $domain;?>/dashboard/permit">

            <i class="fa fa-drivers-license"></i> <span>Registrations & Permits</span>

          </a>

        </li>
<li>

          <a href="<?php echo $domain;?>/dashboard/ticketsviolators ">

            <i class="fa fa-drivers-license"></i> <span>Tickets & Violators </span>

          </a>

        </li>
        
        <?php /*<li>

          <a href="<?php echo $domain;?>/dashboard/taskrecord">

            <i class="fa fa-th"></i> <span>Task List</span>

          </a>

        </li>

		<li class="treeview">

          <a href="home.html">

            <i class="fa fa-folder"></i> <span>Customers</span>

          </a>

        </li>

        <li>

          <a href="home.html">

            <i class="fa fa-files-o"></i>

            <span>Notes</span></li></a>

            <!--<span class="pull-right-container">

              <span class="label label-primary pull-right">4</span>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>

            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>

            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>

            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>

          </ul>-->

        

        

        <!--<li class="treeview">

          <a href="home.html">

            <i class="fa fa-pie-chart"></i>

            <span>Charts</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>

            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>

            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>

            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>

          </ul>

        </li>-->

        <li>

          <a href="home.html">

            <i class="fa fa-cogs" aria-hidden="true"></i>

            <span>Setting</span>

          </a>

          <!--<ul class="treeview-menu">

            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>

            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>

            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>

            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>

            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>

            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>

          </ul>-->

        </li>

        <li>

          <a href="home.html">

            <i class="fa fa-edit"></i> <span>Helps</span>

          </a>

          <!--<ul class="treeview-menu">

            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>

            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>

            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>

          </ul>-->

        </li>

        <li>

          <a href="home.html">

            <i class="fa fa-table"></i> <span>Reports</span>

          </a>

          <!---<ul class="treeview-menu">

            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>

            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>

          </ul>-->

        </li>

        <li>

          <a href="home.html">

            <i class="fa fa-calendar"></i> <span>Status</span>

          </a>

        </li>*/?>

        

        

    

      </ul>

    </section>

    <!-- /.sidebar -->

  </aside>