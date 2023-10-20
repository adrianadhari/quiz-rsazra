<?php
session_start();
if ($_SESSION["level"]!=="user") {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
$user = $_SESSION['username'];
$idquiz = $_GET['idquiz'];
$result = query("SELECT * FROM tbl_quiz WHERE idquiz = '$idquiz'")[0];
$peserta = mysqli_query($conn, "SELECT * FROM tbl_histori WHERE idquiz = '$idquiz'");
$jumlahpeserta = mysqli_num_rows($peserta);
$cek = mysqli_query($conn, "SELECT score FROM tbl_histori WHERE idquiz = '$idquiz' AND username = '$user'");
$ceklagi = mysqli_num_rows($cek);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/dindex.css">
    <link rel="icon" href="../assets/img/logo.ico">
    <title>Quiz Training Center</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm navbar-light shadow bg-light">
            <a class="navbar-brand">
                <img src="../assets/img/logoaz.png" width="150" height="50" alt="rsazra">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto font-weight-bold">
                    <li class="nav-item active"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item active"><a class="nav-link" href="myActivities.php">MY ACTIVITIES</a></li>
                    <li class="nav-item active"><a class="nav-link" href="aboutMe.php">ABOUT</a></li>
                </ul>
                <a href="../config/logout.php" class="ml-2 btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
            </div>       
    </nav>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-sm">
                <h2><i class="fas fa-chalkboard-teacher"></i> Quiz Training Center</h2>
                <hr style="border-top: 3px solid black">
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <a href="index.php" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Detail Quiz</h5>
                        <p class="card-text">Judul Quiz : <?= $result['judul']; ?><br>Total Soal : <?= $result['total']; ?><br>Peserta yang telah mengikuti : <?=$jumlahpeserta;?></p>
                        <?php if($ceklagi == 0) { ?>
                    <?php if($result['status']=='open') { ?>
                        <a href="quiz.php?idquiz=<?=$idquiz?>&n=1&t=<?=$result['total']?>" class="btn btn-success">Mulai Quiz</a>
                    <?php } else { ?>
                        <button type="button" class="btn btn-secondary" disabled>Sedang Di Tutup</button>
                    <?php } ?>
                    <?php } else { ?>
                        <button type="button" class="btn btn-primary" disabled>Telah Selesai</button>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        Copyright &copy; 2020, <a href="https://arcwap.site/">ArcWAP.</a> All Right Reserved.
    </footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>