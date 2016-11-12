<?php include("includes/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Shop Inventory
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Shop Inventory</li>
      </ol>
    </section>

    <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="shop" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Item Cord</th>
                  <th>Item Type</th>
                  <th>Qty</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = mysqli_query($con,"SELECT * FROM shop_inventory");
                while($result = mysqli_fetch_array($sql))
                {
                ?>
                <tr>
                  <td><?php echo $result['itemcord'] ?></td>
                  <td><?php echo $result['type'] ?></td>
                  <td><?php echo $result['quantity'] ?></td>
                  <td><a class="btn btn-block btn-default" href="editshopitem.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i> Edit</a></td>
                  <td><a class="btn btn-block btn-danger" href="deleteshopitem.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash"></i> Delete</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Item Cord</th>
                  <th>Item Type</th>
                  <th>Qty</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
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
<?php include("includes/footer.php"); ?>