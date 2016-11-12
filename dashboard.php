<?php include ("includes/header.php");?>
<?php 
$completed_query = mysqli_query($con, "SELECT * FROM orders WHERE status = 1"); 
$count_completed = mysqli_num_rows($completed_query);
$pending_query = mysqli_query($con, "SELECT * FROM orders WHERE status = 0"); 
$count_pending = mysqli_num_rows($pending_query);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending Orders</span>
              <span class="info-box-number"><?php echo $count_pending; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Completed Orders</span>
              <span class="info-box-number"><?php echo $count_completed; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php 
                  	$order_query = mysqli_query($con, "SELECT * FROM orders LIMIT 7");
                  	while($orders=mysqli_fetch_array($order_query))
                  	{ ?>
	                  <tr>
	                    <td><a href="vieworder.php?id=<?php echo $orders['id']; ?>">ORDER#<?php echo $orders['id']; ?></a></td>
	                    <td><?php echo $orders['items']; ?></td>
	                    <td><?php if($orders['status'] == 1) { ?><span class="label label-success">Completed</span><?php } else { ?><span class="label label-warning">Pending</span><?php } ?></td>                    
	                  </tr>
	              	<?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="addorder.php" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="pending.php" class="btn btn-sm btn-default btn-flat pull-right">View Pending Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Godown Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <?php 
                $sql = mysqli_query($con, "SELECT * FROM godown_inventory LIMIT 5");
                while($values = mysqli_fetch_array($sql))
                {
                ?>
                <li class="item">
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"><?php echo $values['itemcord']; ?>
                      <span class="label label-warning pull-right"><?php echo $values['type']; ?></span></a>
                        <span class="product-description">
                          <?php echo $values['quantity']; ?>
                        </span>
                  </div>
                </li>
                <?php } ?>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include ("includes/footer.php"); ?>