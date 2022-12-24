<?php
ob_start();
session_start();
require('./modules/Database.php');
require('./modules/Frame.php');
require('./modules/getAlert.php');
require('./modules/getParams.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/11pdln/public/css/bootstrap.min.css">
</head>
<body style="background-color:#f2f2f2;">
    <?php 
    require('./com/Navbar.php');
    require('./pages/_main.php');
    ?>
    <script src="/11pdln/public/js/bootstrap.bundle.min.js"></script>
</body>
</html>