<?php
session_start();
include('connection.php');
include('links.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Chat App</title>
    
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>

<body >
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <h2 style >
                        Please Select your account
                    </h2>
                </div>
                <div class = "container">
                    <?php
                    $users = mysqli_query($conn, 'SELECT * FROM users');
                    while($user = mysqli_fetch_assoc($users)){
                        echo '<li style = "font-size: 25px">
                        <a href = "login.php?uid='. $user["id"] . '">' . $user["username"] .'</a>
                        </li>';
                    }
                    ?>
                </div>
                <div class = "mt-2">
                    <button class = "btn btn-lg btn-primary" type="button"><a style = "color:white;" href="register.php">New User? Register here</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>