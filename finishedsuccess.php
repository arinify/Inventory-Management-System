<?php
session_start();
include("includes/dbcon.php");
$search = mysqli_query($con, "SELECT * FROM orders WHERE id = '".$_GET['id']."'");
$results = mysqli_fetch_array($search);
$item = explode(",",$results['items']);
foreach ($item as $value) {
	$break = explode('-', $value);
	$sql = "UPDATE shop_inventory SET quantity = quantity - '".$break[1]."' WHERE itemunique = '".$break[0]."' ";
	//echo $sql;
	mysqli_query($con, $sql);
	//echo $newsql;
}
mysqli_query($con, "UPDATE orders SET status = 1 WHERE id = ".$_GET['id']."");
header("Location: finished.php");
?>