<?php
session_start();
include ("includes/dbcon.php");
$sql="INSERT INTO godown_inventory (itemcord, type, itemunique, qunatity) VALUES ( '".$_POST['sno']."', '".$_POST['type']."', '".$_POST['sno'].$_POST['type']."', '".$_POST['qty']."' )";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

?>