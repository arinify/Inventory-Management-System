<?php include ("includes/header.php");?>
<?php
if (isset($_POST['submit']))
{
    $sql="INSERT INTO shop_inventory (itemcord, type, itemunique, quantity) VALUES ( '".$_POST['sno']."', '".$_POST['type']."', '".$_POST['sno'].$_POST['type']."', '".$_POST['qty']."' )";
    //$a=1;
    if (mysqli_query($con, $sql)) {
    //if ($a == 1) {
    echo " ?><div class='rowzzz'>
	       <div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Success
              </div></div>
    <?php ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
}
else 
{
    echo "NOT isset submit";
}
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Shop item
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Shop Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">New Item For Shop</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="submit" action="" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Item Name</label>
                  <input type="text" name="sno" required class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label>Item Type</label>
                  <input type="text" name="type" class="form-control" placeholder="Enter Type of Item" >
                </div>
                <div class="form-group">
                  <label>Item Quantity</label>
                  <input type="number" name="qty" required class="form-control" placeholder="Enter Number of Items" >
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