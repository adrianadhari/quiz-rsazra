<?php
session_start();
if ($_SESSION["level"]!=="administrator") {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
if (isset($_POST['submit'])) {
    buatSoal($_POST);
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
    <title>Buat Soal</title>
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
        <div class="row justify-content-center mb-3">
            <div class="col-sm-6">
                <form action="?n=<?=@$_GET['n']?>&idquiz=<?=@$_GET['idquiz']?>&ch=4" method="POST">
                    <h3 align="center">Buat Soal</h3>
                    <?php for($i=1; $i<=@$_GET['n'];$i++) : ?>
                    <b>Soal nomor&nbsp;<?= $i?></b>
                    <div class="form-group">
                        <label for="pertanyaan<?=$i?>"></label>
                        <textarea name="pertanyaan<?=$i?>" class="form-control" placeholder="Ketik soal nomor <?=$i?>"
                            required></textarea>
                        <input type="text" name="<?=$i?>1" placeholder="Ketik jawaban pertama" class="form-control"
                            id="<?=$i?>1" required>
                        <input type="text" name="<?=$i?>2" placeholder="Ketik jawaban kedua" class="form-control"
                            id="<?=$i?>2" required>
                        <input type="text" name="<?=$i?>3" placeholder="Ketik jawaban ketiga" class="form-control"
                            id="<?=$i?>3">
                        <input type="text" name="<?=$i?>4" placeholder="Ketik jawaban keempat" class="form-control"
                            id="<?=$i?>4">
                        <select name="jawaban<?=$i?>" id="jawabanbenar" class="form-control">
                            <option value="a">Pilih jawaban yang benar untuk soal nomor <?=$i?></option>
                            <option value="a">Jawaban pertama</option>
                            <option value="a">Jawaban kedua</option>
                            <option value="a">Jawaban ketiga</option>
                            <option value="a">Jawaban keempat</option>
                        </select>
                    </div>
                    <?php endfor; ?>
                    <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Buat</button>
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