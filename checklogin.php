<?php
session_start();

ob_start();
include("includes/dbcon.php");
$user_id=$_POST['user_id']; 
$pass=$_POST['pass']; 

$sql="SELECT * FROM user WHERE username='$user_id' AND password='$pass'";
$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

// If result matched $email and $pass, table row must be 1 row
if($count==1){
    $_SESSION['user_id']=$user_id;
    $_SESSION['name']=$username;
    header("Location: dashboard.php");
}
else {
 //$msg = "Wrong Username or Password";
 header("Location: index.php?msg=error");
}
ob_end_flush();
?>