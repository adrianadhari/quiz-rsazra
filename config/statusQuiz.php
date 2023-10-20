<?php
session_start();
if ($_SESSION["level"]!=="administrator") {
	header("Location: ../");
	exit;
}
require 'functions.php';
$idquiz = $_GET['idquiz'];
$status = $_GET['status'];
if ($status == 'open') {
    $result = mysqli_query($conn, "UPDATE tbl_quiz SET status = 'close' WHERE idquiz = '$idquiz'");

} else {
    $result = mysqli_query($conn, "UPDATE tbl_quiz SET status = 'open' WHERE idquiz = '$idquiz'");
}
header("Location: ../dashboard/manageQuiz.php");
?>