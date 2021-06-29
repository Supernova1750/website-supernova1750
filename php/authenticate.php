<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: ../welcome");
  exit;
}

require_once 'config.php';

$usr = $pwd = '';
$usr_err = $pwd_err = $login_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty(trim($_POST['username']))) {
        $usr_err = 'Please enter username';
    } else {
        $usr = trim($_POST['username']);
    }

    if(empty(trim($_POST['password']))) {
        $pwd_err = 'Please enter password';
    } else {
        $pwd = trim($_POST['password']);
    }

    if(empty($usr_err) && empty($pwd_err)) {
        $sql = 'SELECT id, username, password FROM users WHERE username = ?';
        $stmt = mysqli_prepare($link, $sql);
        if($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $param_usr);

            $param_usr = $usr;
            if(mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($pwd, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            header('location: ../welcome');
                        } else {
                            $login_err = 'Invalid username or password!';
                        }
                    }
                } else {
                    $login_err = 'Invalid username or password!';
                }
            }

            mysqli_stmt_close($stmt);
        }
    } else {
       echo $login_err;
    }
    mysqli_close($link);
}
?>
