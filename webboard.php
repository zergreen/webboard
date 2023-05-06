<?php 
    include('conn.php');
    session_start();
    $IDUser = $_SESSION['id'];
    // echo $IDUser;
    $qPost = "SELECT * FROM post";
    $resultPost = $conn->query($qPost);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Webboard</title>
</head>
<style>
   a {
    color: inherit;
   }
</style>
<body>
    <div class="container">
        <!-- As a link -->
        <nav class="navbar" >
            <div class="container-fluid">
                <a class="navbar-brand" href="webboard.php">Navbar</a>
                <?php 
                if(isset($_SESSION['username']) != null){
                    echo "<a href=profile.php>$_SESSION[username]</a>";
                }else{
                    echo "Login";
                }?>
            </div>
        </nav>


        <a href="create.php"><input type="button" value="create"></a>
       
        <table class="table align-middle mb-0 bg-white table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name User</th>
                <th>Title</th>
                <th>About</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while ($rowPost = mysqli_fetch_array($resultPost)) {
                        $qUserA = "SELECT id,username FROM users WHERE id = {$rowPost['IDUser']}";
                        $resultUserA = $conn->query($qUserA);
                        $rowUserA = mysqli_fetch_array($resultUserA);
                        echo "<tr>";
                        echo '<form method="get" action="kratoo.php">';
                        echo '<td>' . $rowPost['ID'] . '</td>';
                        echo '<td>' . $rowUserA['username'] . '</td>';
                        echo '<td>' . $rowPost['Title'] . '</td>';
                        echo '<td>' . $rowPost['About'] . '</td>';
                        echo '<input type="hidden" name="ID" value="' . $rowPost['ID'] . '">';
                        echo '<td><input class="btnForm" type="submit" value="Comment"></td>';
                        echo '</form>';
                        echo "</tr>";
                    }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>