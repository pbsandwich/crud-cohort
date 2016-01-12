<?php
    //$title="CRUD";
    $title=$_GET["title"];
    if ($title=="") {
        $title="This is my CRUD page";
        }
    $heading=$_GET["heading"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $heading; ?></h1>
</body>
</html>