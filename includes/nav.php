  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user_id']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?php if($currentPage =='dashboard' ){echo 'active';}?>">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php if($currentPage =='addshopitem' || $currentPage =='addgodownitem' || $currentPage =='addorder' ){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Add New</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='addshopitem'){echo 'active';}?>"><a href="addshopitem.php"><i class="fa fa-circle-o"></i> Shop Products</a></li>
            <li class="<?php if($currentPage =='addgodownitem'){echo 'active';}?>"><a href="addgodownitem.php"><i class="fa fa-circle-o"></i> Godown Products</a></li>
            <li class="<?php if($currentPage =='addorder'){echo 'active';}?>"><a href="addorder.php"><i class="fa fa-circle-o"></i> Order</a></li>
          </ul>
        </li>
        <!--<li class="treeview <?php if($currentPage =='toshop' || $currentPage =='togodown'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-suitcase"></i> <span>Export Stock</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='toshop'){echo 'active';}?>"><a href="finished.php"><i class="fa fa-circle-o"></i> To Shop</a></li>
            <li class="<?php if($currentPage =='togodown'){echo 'active';}?>"><a href="pending.php"><i class="fa fa-circle-o"></i> To Godown</a></li>
          </ul>
        </li>-->
        <li class="treeview <?php if($currentPage =='shop' || $currentPage =='godown'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-table"></i> <span>View Items</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='shop'){echo 'active';}?>"><a href="shop.php"><i class="fa fa-circle-o"></i> Shop Inventory</a></li>
            <li class="<?php if($currentPage =='godown'){echo 'active';}?>"><a href="godown.php"><i class="fa fa-circle-o"></i> Godown Inventory</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($currentPage =='pending' || $currentPage =='finished'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-money"></i> <span>View Orders</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='finished'){echo 'active';}?>"><a href="finished.php"><i class="fa fa-circle-o"></i> Finished Orders</a></li>
            <li class="<?php if($currentPage =='pending'){echo 'active';}?>"><a href="pending.php"><i class="fa fa-circle-o"></i> Pending Orders</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($currentPage =='notifications'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Settings</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($currentPage =='notifications'){echo 'active';}?>"><a href="notifications.php"><i class="fa fa-gear"></i> Notifications</a></li>
          </ul>
        </li>        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
