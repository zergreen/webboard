<?php
include "conn.php";

$IDPost = $_GET['IDPost'];
$sqlTopic = "SELECT * from post WHERE (ID=$IDPost)";
$resultTopic = $conn->query($sqlTopic);
$rowTopic = mysqli_fetch_array($resultTopic);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">

    <?php //header("Content-Security-Policy: style-src 'unsafe-inline' 'self'; default-src 'self'; ") ?> 
    <title>Kratoo</title>
</head>

<style>
    a {
        color: inherit;
    }
    #other-box {
        background-color: #222244;
    }

    #main {
        background-color: #3B3963;
        color: white;
    }

    #primary-topic {
        background-color: #193367;
    }

    #comment {
        background-color: #093A43;
    }

    .tag {
        background-color: red;

    }

    .user-box {
        color: blue;

    }

    .box {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        padding: 20px;
    }

    .box h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .box p {
        font-size: 16px;
        line-height: 1.5;
    }
    
    .navbar {
        background-color: #2C2A49;
        color: white;
    }
    .white {
        color:white;
    }
</style>

<body>
    <div class="container" id="main">
        <!-- As a link -->
        <nav class="navbar" >
            <div class="container-fluid">
                <a class="navbar-brand" href="webboard.php">Navbar</a>
                <?php 
                session_start();
                if(isset($_SESSION['username']) != null){
                    echo "<a href=profile.php>$_SESSION[username]</a>";
                }else{
                    echo "Login";
                }?>
            </div>
        </nav>

        <br>

        <div class="box" id="primary-topic" style="color: white">
            <table>
                <tbody>
                    <tr>
                        <th>
                            <h2 style="color: yellow"><?php echo $rowTopic['Title'] ?></h2>
                        </th>
                    </tr>
                    <tr>
                        <td><span class="border border-primary white">xss</span> &nbsp; <span class="border border-primary white">attack</span> &nbsp; <span class="border border-primary white">pentest</span></td>


                    </tr>

                    <tr>
                        <td>
                            <p style="color: white">
                               <?php echo $rowTopic['About'] ?>
                            </p>
                        </td>
                    </tr>


                    <tr>
                        <td class="user-box">
                            <h3 style="color:#91A8D1"><?php echo $rowTopic['IDUser'] ?> - Mon</h3>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>


        <hr>
        Total comment 52
        <hr>

        <?php
        
        $qComment = "SELECT * FROM comment WHERE IDPost = $IDPost";
        $resultComment = $conn->query($qComment);

        while($rowComment = mysqli_fetch_array($resultComment)){
            echo"
            <div class=box id=other-box style='color: white'>
            <table>
            <tbody>
            <tr><th><h6 style='color: #7B746F'>ความคิดเห็นที่ $rowComment[ID]</h6></th></tr>
            <tr><td><p style='color: white'>$rowComment[comment]</p></td></tr>
            <tr><th><h3 style='color: #91A8D1'>$rowComment[IDUser]</h3></th></tr>
            </tbody>
            </table>
            </div>
            <br>
            ";
        }
        ?>


        <hr>
        comment
        <hr>

        <?php 
        if(isset($_SESSION['username']) != null){
            echo "
            <div class='box' id='comment'>
            <form action='insertComment.php' method=post>
                <input name='comment' type='text' placeholder='comment' style='width:85%'>
                <input type='hidden' name='IDUser' value='$_SESSION[id]'>
                <input type='hidden' name='IDPost' value='$IDPost'>
                <input type='submit' value='send'>
            </form>
            </div>
            ";
            
        }else{
            echo "
            <div class='box' id='comment'>
            <center>
                If you not login you can't comment! <br>
                <a href='login.html'><input type='button' value='login'></a>
            </center>
            </div>";
        }
        ?>

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
                                    Sign up!
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
