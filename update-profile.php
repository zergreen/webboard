<?php 
include("conn.php");
session_start();

$fullname = $_POST['fullname'];
$img = $_POST['img'];

echo $img;

$sql = "UPDATE user_profiles SET fullname=$fullname , img=$img WHERE (id=$_SESSION[id])";

mysqli_query($conn,$sql);
?>

<a href="location.back()">Back</a>