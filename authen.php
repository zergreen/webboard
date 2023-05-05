<?php

$username = $_POST['username'];
$pwd = $_POST['pwd'];

session_start();

$_SESSION['username'] = $username;
$_SESSION['pwd'] = $pwd;

// echo $_SESSION['username'];
// echo $_SESSION['pwd'];


echo "|username: $username <br> |password: $pwd <br>";

if($username == "admin" && $pwd == "123456"){
    header("Location: home.php");
} else {
    header("Location: error-authen.php");
}

?>