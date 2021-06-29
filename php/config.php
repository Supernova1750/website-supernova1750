<?php
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
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$usr = 'supernova';
$sql = 'SELECT id, username, password FROM users WHERE username = ?';
$stmt = mysqli_prepare($link, $sql);
echo 'test1' . '<br>';
if($stmt = mysqli_prepare($link, $sql) {
    echo 'test';
    mysqli_stmt_bind_param($stmt, 's', $usr);
}
?>