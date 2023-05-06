<?php 
include "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

echo $sql;

$conn->query($sql);
?>