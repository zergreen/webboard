<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Webboard</title>
    </head>

    <body>
        <?php 
            include('conn.php');
            $IDUser = $_POST['IDUser'];
            $Title = $_POST['Title'];
            $About = $_POST['About'];
            $insertPost = "INSERT INTO post (IDUser, Title, About) VALUES ('$IDUser', '$Title', ' $About')";
            $conn->query($insertPost);
            echo $insertPost;
            header("Location: webboard.php");
            $conn->close();
        ?>  
    </body>
</html>