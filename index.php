<?php
if(isset($_SESSION['loggedin']) && &_SESSION['loggedin'] == true) {
    header('welcome');
    exit;
} else {
    header('login');
    exit;
}
?>