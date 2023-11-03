<?php 
    session_start();
    include('connection.php');
    include('links.php');
    if(isset($_GET['username']) && isset($_GET['password'])){
        $username  = $_GET['username'];
        $password  = password_hash($_GET['password'], PASSWORD_DEFAULT);
        $query = mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
        // return $query;
        if($query){
        ?>
        <script>
            $(location).attr('href','index.php');
        </script>
        <?php
        }
    }
    
?>

<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <div class = "container">
            <div class = "card">
                <div class = "card-body">
                    <div>
                        <h1>Register</h1>
                    </div>
                    <form action="register.php" action = "GET">
                        <label for="uname">Username</label>
                        <input id = "uname" type="text" name = "username" class = "form-control" required>
                        <label class = "mt-2" for="pass">Password</label>
                        <input id = "pass" type="password" name = "password" class = "form-control" required>
                        <button type = "submit" class = "btn btn-primary">Register</button>

                    </form>
                </div>
                
            </div>
        </div>
    </body>
</html>