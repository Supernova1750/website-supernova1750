<?php
include '../php/config.php';

$reg_err = '';

if(empty($link)) {
    $link = '';
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usr = trim($_POST['username']);
    $pwd = trim($_POST['password']);
    if(empty(trim($usr))) {
    } else if(strlen($usr) < 3 || strlen($usr) > 15) {
        $reg_err = 'Username has to be between 3 and 15 letters';
    } else if(!preg_match('/^(\w){3,15}$/', $usr)) {
        $reg_err = 'Username cannot contain special characters';
    } else if($pwd != trim($_POST['password-repeat'])) {
        $reg_err = 'Passwords do not match.';
    } else if(empty($pwd) ||  strlen($pwd) < 7) {
        $reg_err = 'Password has to be at least 8 characters long';
    } else if($stmt = mysqli_prepare($link,'SELECT id FROM users WHERE username = ?')) {
        mysqli_stmt_bind_param($stmt, 's', $param_usr);
        $param_usr = $usr;
        $reg_err = 'test1';
        if(mysqli_stmt_execute($stmt)) {
            $reg_err = 'test2';
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) >= 1) {
                $reg_err = 'Username is already taken';
            } else {
                $reg_err = 'test3';
                if($stmt = mysqli_prepare($link, 'INSERT INTO users (username, password) VALUES (?,?)')) {
                    $reg_err = 'test4';
                    mysqli_stmt_bind_param($stmt, 'ss', $param_usr, $param_pwd);
                    $param_usr = $usr;
                    $param_pwd  = password_hash($pwd, PASSWORD_DEFAULT);
                    if(mysqli_stmt_execute($stmt)) {
                        header("location: ../login");
                    }
                    mysqli_stmt_close($stmt);
                }
            }
        }

        mysqli_stmt_close($stmt);
    }
}

?>