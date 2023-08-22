<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(strlen($username)<5 || strlen($username)>32 || strlen($password)<5 || strlen($password)>32){
            echo "username & password must be between 5 to 32 characters";
        }
        else {
            $connection = mysqli_connect('localhost','root','','login_app');
            if($connection){
                $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
                $result = mysqli_query($connection, $query);
                if(!$result){
                    die('query failed');
                }
            }
            else{
                die('database connection failed');
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>
</html>