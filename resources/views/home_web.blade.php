<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<?php 
?>
<body>
    <a href="http://localhost:8000/api">HOME API</a>
    <a href="http://localhost:8000/home/web">HOME WEB</a>
    <h2><?php echo $response["title"]; ?></h2>
    <?php
        foreach ($response["user"] as $value) {
            echo $value["id"] . " - " . $value["name"] . " ";
        }
    ?>
</body>
</html>