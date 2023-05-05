<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Kratoo</title>
</head>

<style>
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
                <a class="navbar-brand" href="buycherry.php">Home</a>
                <?php
                session_start();
                if (isset($_SESSION['username']) != null) {
                    echo $_SESSION['username'];
                } else {
                    echo "Login";
                } ?>
            </div>
        </nav>

        <br>

        <div class="box-small d-flex justify-content-between" id="primary-topic" style="color: white">
            <h6>สมาชิกหมายเลข 1</h6>
            <h6>Edit</h6>
        </div>
        
        <div class="box-small" id="primary-topic" style="color: white">
            <div class="container py-2">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center" id="profile-box">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3">John Smith</h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>
                                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
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
                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
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

                <div class="box" id="other-box" style="color: white">
                    <table>
                        <tbody>
                            <tr>
                                <th>
                                    <h6 style="color: #7B746F">ความคิดเห็นที่ 1</h6>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>wow</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="user-box">
                                    <h3 style="color:#91A8D1">Zergreen - Mon</h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br>
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
                        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->
            </section>
</body>

</html>