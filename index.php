<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('/welcome');
    echo 'testloggedin';
    exit;
} else {
    header('/login');
    echo 'testnotloggedin';
    exit;
}
?>