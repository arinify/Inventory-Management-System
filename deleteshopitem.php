<?php
session_start();
include("includes/dbcon.php");
$sql = "DELETE FROM shop_inventory WHERE id='".$_GET['id']."'";
mysqli_query($con, $sql);
header("Location: shop.php");
?>