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
            <?php
                while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <pre>
                        <?php
                            print_r($data);
                        ?>
                    </pre>
                <?php
                }
            ?>
        </div>
    </div>
</body>
</html>