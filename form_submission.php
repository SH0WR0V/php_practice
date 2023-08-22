<?php
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        echo "welcome " . $username;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In form</title>
</head>
<body>
        <form action="form_submission.php" method="post">
            <input type="text" name="username" placeholder="Enter your username">
            <br>
            <input type="password" name="password" placeholder="Enter your password">
            <br><br>
            <input type="submit" name="submit">
        </form>
</body>
</html>