<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('location: welcome');
    exit;
} else {
    header('location: login');
    exit;
}
?>