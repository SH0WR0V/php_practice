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

            if(isset($_POST['delete'])){
                $id = $_POST['id'];
                $second_query = "DELETE FROM users WHERE id = $id";
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
    <title>log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Delete</h2>
        <div class="col-sm-6">
            <form action="login_delete.php" method="post">
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
                <input type="submit" name="delete" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
</body>
</html>