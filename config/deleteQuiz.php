<?php
session_start();
if ($_SESSION["level"]!=="administrator") {
	header("Location: ../");
	exit;
}
require 'functions.php';
$idquiz = $_GET['idquiz'];
if (deleteQuiz($idquiz) >= 0) {
header("Location: ../dashboard/manageQuiz.php");
}
?>  