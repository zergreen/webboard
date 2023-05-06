<?php 
include("conn.php");
session_start();

$fullname = $_POST['fullname'];
$img = $_POST['img'];

echo $img;

$sql = "UPDATE user_profiles SET fullname=$fullname , img=$img WHERE (id=$_SESSION[id])";

$stmt = $conn->prepare("UPDATE user_profiles SET fullname=? , img=? WHERE (id=?)");
$stmt->bind_param("sss",$fullname,$img,$_SESSION['id']);
$stmt->execute();

// mysqli_query($conn,$sql);

?>