<?php
session_start();
$servername = "php";
$server_user = "root_151";
$server_pass = "abc_1234";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>