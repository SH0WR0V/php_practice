<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myvar = array (
            "key_name" => array("tom", "an", "bob"), 
            "key_age" => array("1", "10", "12")
            );
        echo $myvar["key_name"][1];
    ?>
</body>
</html>