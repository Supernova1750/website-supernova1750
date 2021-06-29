<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'website-user');
define('DB_PASSWORD', '');
define('DB_NAME', 'website');

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$usr1 = 'supernova';

$sql = 'SELECT id FROM users WHERE username = ?';
$stmt = mysqli_prepare($link, $sql);
echo 'test1' . '<br>';
if($stmt = mysqli_prepare($link, $sql)) {
     print('test\n');
    mysqli_stmt_bind_param($stmt, 's', $usr1);

    mysqli_stmt_bind_result($stmt, $id);

    mysqli_stmt_fetch($stmt);

    printf('Id for user %s: %s', $usr1, $id);
}
?>