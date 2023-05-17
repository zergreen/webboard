<?php 
include "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

$sql2 = "INSERT INTO user_profiles (fullname,email,phone,mobile,address,quote,img)
        VALUES ('null','null@null','(089)','(123)','bangkok','fuck','0')";

echo $sql2;

$conn->query($sql);
$conn->query($sql2);

header("Location: login.html");
?>