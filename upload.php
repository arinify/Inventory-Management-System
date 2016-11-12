<?php
session_start();
include("includes/dbcon.php");
$current_date = date("Y-m-d"); $current_time = date("H:i:s");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$extension = end(explode(".", $_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/".$current_date.$current_time.".".$extension)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
    $new = "uploads/".$current_date.$current_time.".".$extension;
 $sql = "INSERT INTO orders (name,address,phone,alt_phone,email,items,del_date,image,status,order_date,order_time) VALUES ('".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['alt_phone']."','".$_POST['email']."','".$_POST['items']."','".$_POST['del_date']."','".$new."',0,'".$current_date."','".$current_time."')";
//echo $sql; 
mysqli_query($con, $sql);
header('location: pending.php');
}
?>