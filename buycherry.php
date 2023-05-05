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
    a { color: inherit; } 
</style>

<body>
    <div class="container">
        <!-- As a link -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home</a>
                <?php 
                session_start();
                if(isset($_SESSION['username']) != null){
                    echo "<a href='profile.php'>Profile</a>";
                }else{
                    echo "Login";
                }?>
            </div>
        </nav>

        <div><a href="craete.php"><input type="button" value="create"/></a></div>
       
        <table class="table align-middle mb-0 bg-white table-hover">
            <thead>
            <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td>Mon</td>
                <td><a href="kratoo.php">How to</a></td>
                <td>Zergreen</td>
                </tr>
                <tr>
                <td>Sun</td>
                <td><a href="test.php">XSS</a></td>
                <td>George</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>