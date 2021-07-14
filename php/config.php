<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
const DB_SERVER = 'localhost';
const DB_USERNAME = 'webserver';
const DB_PASSWORD = '';
const DB_NAME = 'website';

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/* Attempt to connect to MySQL database */
define("link", mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME));

// Check connection
if(link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>