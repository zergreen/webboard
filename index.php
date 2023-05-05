<!-- 
<center>
<h1>LOGIN</h1>
<form action="authen.php" method="post">
    <input type="text" name="username" value="admin" placeholder="รหัสพนักงาน"> <br>
    <input type="password" name="pwd" value="123456" placeholder="รหัสผ่าน">
    <br>
    <input type="submit" value="login"> 
</form>
</center> -->

<?php 
$url="session.php";

header("Location: $url");
?>