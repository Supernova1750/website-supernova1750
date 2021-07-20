<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) {
    header("Location: ../login");
    die();
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Supernova1750</title>
    </head>
    <link rel="stylesheet" href="index.css">
    <body class="bg">
        <div class="tiddies">
            <option>
                <span><h1>( . )( . )</h1></span>
            </option>
        </div>
    </body>
</html>