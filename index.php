<?php
include "global/config.php";
session_start();
if (isset($_SESSION['LOGIN'])) {
    header("Location:index2.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Automotrices Chapu</title>
</head>

<body>
    <?php include 'templates/header.php'; ?>
   
    <?php include 'templates/content.php'; ?>

    <?php include 'templates/footer.php'; ?>
    <button class="btn btn-primary" type="button">Text</button>
</body>

</html>