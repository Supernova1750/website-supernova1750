<?php
include 'php/config.php';

$reg_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['password'] == $_POST['password-repeat']) {

    } else {
        $reg_err = 'Passwords do not match.';
    }
}

?>