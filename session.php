<?php
session_start([]);

echo $_SESSION['username'];

if($_SESSION['username'] == "admin" && $_SESSION['pwd'] == "123456"){
    header('Location: home.php');
} else {

    header('Location: login.html');
}

?>