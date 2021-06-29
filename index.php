<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('location: /welcome');
    echo 'testloggedin';
    exit;
} else {
    header('location: /login');
    echo 'testnotloggedin';
    exit;
}
?>