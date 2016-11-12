<?php include("includes/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pending Orders
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pending Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="godown" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Order Number</th>
                  <th>Name</th>
                  <th>Delivery Date</th>
                  <th>Edit</th>
                  <th>View</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = mysqli_query($con,"SELECT * FROM orders WHERE status = 0");
                while($result = mysqli_fetch_array($sql))
                {
                ?>
                <tr>
                  <td>ORDER#<?php echo $result['id'] ?></td>
                  <td><?php echo $result['name'] ?></td>
                  <td><?php echo $result['del_date'] ?></td>
                  <td><a class="btn btn-block btn-default" href="editorder.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i> Edit</a></td>
                  <td><a class="btn btn-block btn-default" href="vieworder.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye"></i> View</a></td>
                  <td><a class="btn btn-block btn-danger" href="deleteorder.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash"></i> Delete</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Order Number</th>
                  <th>Name</th>
                  <th>Delivery Date</th>
                  <th>Edit</th>
                  <th>View</th>
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