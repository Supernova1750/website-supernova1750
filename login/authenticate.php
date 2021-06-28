<?php
session_start();
if(!isset($_POST['username'],$_POST['password'])) {
  exit('Please fill in your username and password');
}
$usr = 'supernova';
$pwd = '3838bd5806d32cd91144865aa822b9551417dd2796c163d390baa7074d3067a7';

if($_POST['username'] == $usr && hash('sha256', $_POST['password']) == $pwd) {
  echo 'correct';
} else {
  echo 'no, try again';
}
 ?>
