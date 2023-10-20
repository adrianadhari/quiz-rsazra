<?php
session_start();
require '../config/functions.php';
$username = $_SESSION['username'];
$idquiz = $_GET['idquiz'];
$sn = $_GET['n'];
$total = $_GET['t'];
$jawaban = $_POST['jawaban'];
$idpertanyaan = $_GET['idpertanyaan'];


$q1 = mysqli_query($conn, "SELECT * FROM tbl_jawaban WHERE idpertanyaan='$idpertanyaan'");
  while ($row=mysqli_fetch_array($q1)) {
      $idjawaban = $row['idjawaban']; 
}
$q2 = mysqli_query($conn, "SELECT * FROM tbl_quiz WHERE idquiz='$idquiz'"); 
  while ($row = mysqli_fetch_array($q2)) {
    $nilaikalitotal = $row['nilaikalitotal'];
}

if (!$_COOKIE['score'] && !$_COOKIE['jawabanbenar'] && !$_COOKIE['jawabansalah']) {
  $score = 0;
  $jawabanbenar = 0;
  $jawabansalah = 0;
}
if ($jawaban==$idjawaban) {
  if(isset($_COOKIE['score'])) {
    $score = $_COOKIE['score'];
  }
      $score = $score + $nilaikalitotal;
      $cscore = setcookie('score', $score);
  if(isset($_COOKIE['jawabanbenar'])) {
      $jawabanbenar = $_COOKIE['jawabanbenar'];
  }
      $jawabanbenar++; 
      $cjawabanbenar = setcookie('jawabanbenar', $jawabanbenar);
  if(isset($_COOKIE['jawabansalah'])) {
      $jawabansalah = $_COOKIE['jawabansalah'];
  }
      $cjawabansalah = setcookie('jawabansalah', $jawabansalah);    
} else {
  if(isset($_COOKIE['jawabansalah'])) {
    $jawabansalah = $_COOKIE['jawabansalah'];
  }
  $jawabansalah++;
  $cjawabansalah = setcookie('jawabansalah', $jawabansalah);
}

if ($sn != $total) { 
  $sn++; 
  header("Location:quiz.php?idquiz=$idquiz&n=$sn&t=$total");
  } else {
  header("Location: hasilQuiz.php?idquiz=$idquiz&sn=$sn");
  }

?>