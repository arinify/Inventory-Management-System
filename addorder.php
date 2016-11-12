<?php include("includes/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Order</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
	      <form role="form" method="post" action="upload.php" enctype="multipart/form-data">
              <div class="box-body">
              	<div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <label for="phone">Alternate Phone</label>
                  <input type="text" class="form-control" name="alt_phone" id="alt_phone" placeholder="Alternate Phone Number">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control" rows="3" name="address" id="address" placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group">
                  <label for="address">Items</label>
                  <textarea class="form-control" rows="5" name="items" id="items" placeholder="Enter Items"></textarea>
                  <p class="help-block">Enter Items as Item1-Quantity,Item2-Qunatity(NO SPACE IN BETWEEN)</p>
                <!-- <label>Multiple</label>
                <select class="form-control select2" multiple="multiple" name="items[]" data-placeholder="Select Multiple Items" style="width: 100%;">
                  <?php
                  	$sql = mysqli_query($con,"SELECT * FROM godown_inventory");
                  	while($result = mysqli_fetch_array($sql))
                  	{
                  	  echo "<option id='".$result['itemunique']."'>".$result['itemunique']."</option>";
                  	}
                  	$sql1 = mysqli_query($con,"SELECT * FROM shop_inventory");
                  	while($result1 = mysqli_fetch_array($sql1))
                  	{
                  	  echo "<option id='".$result1['itemunique']."'>".$result1['itemunique']."</option>";
                  	}
                  ?>
                </select> -->
              </div>
              <div class="form-group" id="quantity1234">
                  
	      </div>
	      <div class="form-group">
                  <label for="name">Delivery Date</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="del_date" class="form-control pull-right" id="datepicker">
                </div>
                </div>
	        <div class="form-group">
	          <label for="image1">Order Image</label>
	          <input type="file" name="fileToUpload" id="fileToUpload">
	          <p class="help-block">Insert the item picture here</p>
	        </div>
	      </div>
	      <!-- /.box-body -->
	
	      <div class="box-footer">
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
	    </form>
	    </div>
	   </div>
	  </div>
	 </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("includes/footer.php"); ?>