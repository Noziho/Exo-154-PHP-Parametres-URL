<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo1</title>
</head>
<body>
<?php
    $page = $_GET['iteration'];
    $page = intval($page);
    for ($i = 0; $i < $page;$i++) {
        echo "Hello world"."<br>";
    }
?>
</body>
</html>