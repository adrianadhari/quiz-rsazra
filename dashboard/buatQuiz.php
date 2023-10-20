<?php
session_start();
if ($_SESSION["level"]!=="administrator") {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
if (isset($_POST['submit'])) {
    buatQuiz($_POST);
}
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
    <title>Buat Quiz</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="manageQuiz.php">MANAGE QUIZ</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="manageScore.php">MANAGE SCORE</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="manageUser.php">MANAGE USER</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="aboutMe.php">ABOUT</a>
                    </li>
                </ul>
                <a href="../config/logout.php" class="ml-2 btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
            </div>       
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm mt-3">
                <h2><i class="fas fa-laptop-code"></i> Administrator Page </h2>
                <hr style="border-top: 2px solid black">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-sm-6">
                <a href="manageQuiz.php" class="btn btn-dark mb-3"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                <form action="" method="POST">
                    <div class="form-group">
                        <strong><label for="judul">Judul Quiz</label></strong>
                        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Quiz"
                            id="judul" required>
                    </div>
                    <div class="form-group">
                        <strong><label for="total">Total Soal</label></strong>
                        <input type="number" name="total" class="form-control" placeholder="Masukkan Total Soal"
                            id="total" required>
                    </div>
                    <div class="form-group">
                        <strong><label for="nilaikalitotal">Angka Dikalikan Total Soal</label></strong>
                        <input type="text" name="nilaikalitotal" class="form-control"
                            placeholder="Target Nilai = Angka Yang Akan Dikalikan Total Soal" id="nilaikalitotal"
                            required>
                        <small id="nilaikalitotal" class="form-text text-muted">Jika total soal = 10 dan target nilai =
                            100 maka angka yang akan dikalikan total soal adalah 10</small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Next <i class=" fas fa-arrow-circle-right"></i></button>
                </form>
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