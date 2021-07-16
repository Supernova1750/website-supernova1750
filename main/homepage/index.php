<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) {
    header("Location: ../login");
    die();
}
include "../php/config.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Welcome</title>
    <link rel="icon" href="../../assets/logo.png">

    <!-- react -->
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/themes/darkly/bootstrap.min.css">
    <script src="../../bootstrap/js/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <script src="index.js"></script>
</head>
<body>
<h1 class="header">Hello <?php echo $_SESSION["username"]?></h1>
<span>please be nice to everyone</span>
<a href="https://nsfw.supernova1750.dev">no-no zone</a>
</body>
</html>

