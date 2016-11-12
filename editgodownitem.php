<?php include ("includes/header.php");?>
<?php
$values = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM godown_inventory WHERE id = '".$_GET['id']."'"));
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Godown item
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Godown Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Item For Godown</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="submit" action="editsuccess2.php?id=<?php echo $_GET['id'];?>" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Item Serial Number</label>
                  <input type="text" name="sno" required class="form-control" value="<?php echo $values['itemcord']; ?>">
                </div>
                <div class="form-group">
                  <label>Item Type</label>
                  <input type="text" name="type" class="form-control" value="<?php echo $values['type']; ?>" >
                </div>
                <div class="form-group">
                  <label>Available Quantity</label>
                  <input type="number" name="qty" required class="form-control" value="<?php echo $values['quantity']; ?>" >
                </div>
                <div class="form-group">
                  <label>Add Quantity</label>
                  <input type="number" name="addqty" required class="form-control" value="" >
                </div>
                <div class="box-footer">
                  <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include ("includes/footer.php");?>