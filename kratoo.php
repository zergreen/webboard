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
</style>

<body>
    <div class="container" id="main">
        <!-- As a link -->
        <nav class="navbar" >
            <div class="container-fluid">
                <a class="navbar-brand" href="buycherry.php">Navbar</a>
                <?php 
                session_start();
                if(isset($_SESSION['username']) != null){
                    echo "MyProfile";
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
                            <h2 style="color: yellow">How to xss</h2>
                        </th>
                    </tr>
                    <tr>
                        <td><span class="border border-primary">xss</span> &nbsp; <span class="border border-primary">attack</span> &nbsp; <span class="border border-primary">pentest</span></td>


                    </tr>

                    <tr>
                        <td>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe ullam, et voluptas officiis eius iste, dolorem quisquam repudiandae sequi mollitia molestias! Sunt quidem rerum odit, vel eum consequuntur itaque voluptate?
                                Dolore, praesentium aspernatur. Voluptates dolorem, iure eius veniam voluptate esse eligendi minima similique at consequatur vel dignissimos corrupti impedit sit odio illo alias debitis quisquam fuga cum! Optio, autem animi.
                                Nesciunt magni rem similique sed harum fugit! Excepturi blanditiis vitae sapiente expedita accusantium perferendis architecto molestiae, possimus laborum eos impedit accusamus, modi, laboriosam optio eius praesentium dignissimos doloribus commodi deleniti?</p>
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


        <hr>
        Total comment 52
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

        <!-- <hr>
        Comment
        <hr>

        <div class="box" id="comment">
            <center>
                If you not login you can't comment! <br>
                <a href="login.html"><input type="button" value="login"></a>
            </center>
        </div>

        <hr>
        Can Comment
        <hr>

        <div class="box" id="comment">
            <form action="comment.php" method=post>
                <input type="text" placeholder="comment" style="width:85%">
                <input type="submit" value="send">
            </form>
        </div> -->

        <hr>
        comment
        <hr>

        <?php 
        if(isset($_SESSION['username']) != null){
            echo "
            <div class='box' id='comment'>
            <form action='comment.php' method=post>
                <input name='comment' type='text' placeholder='comment' style='width:85%'>
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


    </div>
</body>

</html>