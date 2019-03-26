<?php
/*
session_destroy();
header('../login.php');
*/
/***Destroying Seesions and Redirecting to login page***/
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
echo'<script> window.location.replace("index.php");</script>';
die;
 ?>
