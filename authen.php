<?php

include "conn.php";

$username = $_POST['username'];
$pwd = $_POST['pwd'];



// echo $_SESSION['username'];
// echo $_SESSION['pwd'];

$sql = "select * from users where (username='$username' and password='$pwd')";
echo $sql."<br>";

$resultLogin = $conn->query($sql);
$rowLogin = mysqli_fetch_array($resultLogin);


if ($resultLogin->num_rows > 0) {

    session_start();

    $_SESSION['username'] = $username;
    $_SESSION['pwd'] = $pwd;
    $_SESSION['id'] = $rowLogin['id'];
    header("Location: home.php");
} else {
    header("Location: error-authen.php");
}

echo "|username: $username <br> |password: $pwd <br>";

if($username == "admin" && $pwd == "123456"){
    // header("Location: home.php");
} else {
    // header("Location: error-authen.php");
}

?>