<?php
session_start();
include("includes/dbcon.php");
if (isset($_POST['submit']))
{
    $sql="UPDATE shop_inventory SET itemcord = '".$_POST['sno']."', type = '".$_POST['type']."', quantity = '".$_POST['qty']."', quantity = quantity + '".$_POST['addqty']."' WHERE id = '".$_GET['id']."'";
    //$a=1;
    mysqli_query($con, $sql);
header('Location: shop.php');
}
?>