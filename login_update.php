<?php
            $connection = mysqli_connect('localhost','root','','login_app');
            if($connection){
                $query = "SELECT * FROM users";
                $result = mysqli_query($connection, $query);
                if(!$result){
                    die('query failed');
                }
            }
            else{
                die('database connection failed');
            }

            if(isset($_POST['update'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $id = $_POST['id'];
                $second_query = "UPDATE users SET username = '$username', password = '$password' where id = $id";
                $second_result = mysqli_query($connection, $second_query);
                if(!$second_result){
                    die('query failed');
                }
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="col-sm-6">
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="id">
                        <?php
                            while($data = mysqli_fetch_assoc($result)){
                                $id = $data['id'];
                                echo "<option value='$id'>$id</option>";
                            }
                        ?>
                    </select>
                </div>
                <input type="submit" name="update" value="Update" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>
</html>