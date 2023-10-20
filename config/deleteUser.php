<?php
session_start();
if ($_SESSION['level']!=='administrator') {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
$username = $_GET['username'];
if (deleteUser($username) >= 0){
    header("Location: ../dashboard/manageUser.php");
    exit;
}
?>