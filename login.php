<?php 
    session_start();
    include('connection.php');
    include('links.php');
    if(isset($_GET['uid'])){
        echo $_GET['uid'];
        $uid  = $_GET['uid'];
        $query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$uid'");
        $user = mysqli_fetch_array($query);
        if($query){
            

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
                        <h1>Login</h1>
                    </div>
                    <form action="login.php" action = "GET">
                        <label for="uname">Username</label>
                        <input id = "uname" type="text" name = "username" class = "form-control" required>
                        <label class = "mt-2" for="pass">Password</label>
                        <input id = "pass" type="password" name = "password" class = "form-control" required>
                        <button type = "submit" class = "btn btn-primary">Login</button>
                    </form>
                </div>
                
            </div>
        </div>
    </body>
</html>