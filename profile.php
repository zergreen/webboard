<?php
    session_start();
    if (isset($_SESSION['username']) != null) {

        
        include "conn.php";

        $whoID = $_GET['qID'];

        $sql = "SELECT * FROM user_profiles where (id=$whoID)";
        // echo $sql;
        $result = $conn->query($sql);

        $one = mysqli_fetch_array($result);
        $_SESSION['fullname'] = $one['fullname'];
        // echo $_SESSION['fullname'];
        $_SESSION['img'] = $one['img'];
        // echo $_SESSION['img'];

        $quote = $one['quote'];
        $_SESSION['email'] = $one['email'];
        $phone = $one['phone'];
        $mobile = $one['mobile'];
        $address = $one['address'];

        $job = "fullstack DEV";

        $sql = "SELECT * FROM post where (IDUser=$whoID)";
        // echo $sql;
        $resultPost = $conn->query($sql);

    } else {
        // echo "Dont have username";
    } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <title>Kratoo</title>

    <?php // header("Content-Security-Policy: default-src 'self' *.jsdelivr.net; img-src *;") ?> 
</head>

</script>

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

    .box-small {
        background-color: #fff;
        border: 1px solid #ccc;
        /* border-radius: 5px; */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        padding: 10px;
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

    #profile-box {
        background-color: #464472;
        color: white;
    }

    .text-mute {
        color: white;
    }

    
</style>

<body>
    <div class="container" id="main">
        <!-- As a link -->
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="webboard.php">Home</a>
                <?php
                if (isset($_SESSION['username']) != null) {
                   echo $_SESSION['username'];
                   echo "&nbsp;";
                   echo "<a href=logout.php>Logout</a>";
                } else {
                    echo "<a href=login.html>Login</a>";
                } ?>
            </div>
        </nav>

        <br>

        <div class="box-small d-flex justify-content-between" id="primary-topic" style="color: white">
            <h6>สมาชิกหมายเลข <?php echo $_SESSION['id'] ?></h6>
            <h6><a href="edit-profile.php">Edit</a></h6>
        </div>
        
        <div class="box-small" id="primary-topic" style="color: white">
            <div class="container py-2">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center" id="profile-box">
                                <img src=<?php echo $_SESSION['img'] ?> alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3"><?php echo $_SESSION['fullname'] ?></h5>
                                <p class="text-muted mb-1"><?php echo $job ?></p>
                                <p class="text-muted mb-4"><?php echo $address ?></p>
                                <div class="d-flex justify-content-center mb-2">
                                    <!-- <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button> -->
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-lg-8" >
                        <div class="card mb-4">
                            <div class="card-body" id="profile-box">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $_SESSION['fullname'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $_SESSION['email'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $phone ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $mobile ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?php echo $address ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                





            </div>
            
            
</div>
<hr>
                Total Kratoo 52
                <hr>
                <?php
                while($rowPost = mysqli_fetch_array($resultPost)){
                    echo"
                    <div class=box id=other-box style='color: white'>
                    <table>
                    <tbody>
                    <tr><th><h6 style='color: #7B746F'>กระทู้ $rowPost[ID]</h6></th></tr>
                    <tr><th><h3 style='color: yellow'>$rowPost[Title]</h3></th></tr>
                    <tr><td><p style='color: white'>$rowPost[About]</p></td></tr>
                    </tbody>
                    </table>
                    </div>
                    <br>
                    ";
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
</body>

</html>