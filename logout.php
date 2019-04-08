<?php 
unset($_COOKIE['file']);
session_destroy();
header("location: login.php");
exit;