<?php 
    include('conn.php');
    session_start();
    
    if(isset($_SESSION['id'])){
        $IDUser = $_SESSION['id'];
    }
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
                    echo "<a href=profile.php?qID=$_SESSION[id]>$_SESSION[username]</a>";
                }else{
                    echo "<a href=login.html>Login</a>";
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
                        echo '<td>' . "<a href=profile.php?qID=$rowUserA[id]>$rowUserA[username]</a>" . '</td>';
                        echo '<td>' . $rowPost['Title'] . '</td>';
                        echo '<td>' . $rowPost['About'] . '</td>';
                        echo '<input type="hidden" name="IDPost" value="' . $rowPost['ID'] . '">';
                        echo '<input type="hidden" name="Title" value="' . $rowPost['Title'] . '">';
                        echo '<input type="hidden" name="About" value="' . $rowPost['About'] . '">';
                        echo '<td><input class="btnForm" type="submit" value="Comment"></td>';
                        echo '</form>';
                        echo "</tr>";
                    }
                $conn->close();
                ?>
            </tbody>
        </table>

        <section class="">
                <!-- Footer -->
                <footer class="text-center text-white" style="background-color: #464472;">
                    <!-- Grid container -->
                    <div class="container p-4 pb-0">
                        <!-- Section: CTA -->
                        <section class="">
                            <p class="d-flex justify-content-center align-items-center">
                                <span class="me-3">Register for free</span>
                                <button type="button" class="btn btn-outline-light btn-rounded">
                                    <a href="register.php" target="_blank" rel="noopener noreferrer">Sign Up!</a>
                                </button>
                            </p>
                        </section>
                        <!-- Section: CTA -->
                    </div>
                    <!-- Grid container -->

                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: #2C2A49;">
                        © 2020 Copyright:
                        <a class="text-white" href="https://mdbootstrap.com/"> powerpuffboy.uk</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </section>
    </div>
</body>

</html>