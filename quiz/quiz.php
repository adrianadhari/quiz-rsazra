<?php
session_start();
if ($_SESSION["level"]!=="user") {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
$user = $_SESSION['username'];
$idquiz = $_GET['idquiz'];
$sn = $_GET['n'];
$total = $_GET['t'];
if (isset($_POST['ulang'])) {
    setcookie('score', '');
    setcookie('jawabanbenar', '');
    setcookie('jawabansalah', '');
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
                <?php $qpertanyaan = mysqli_query($conn, "SELECT * FROM tbl_pertanyaan WHERE idquiz = '$idquiz' AND sn = '$sn'"); ?>
                <?php while($row = mysqli_fetch_assoc($qpertanyaan)) { ?>
                <?php $pertanyaan = $row['pertanyaan']; ?>
                <?php $idpertanyaan = $row['idpertanyaan']; ?>
                <h6><?=$sn?>.&nbsp;<?=$pertanyaan?></h6>
                <?php } ?>
                <?php $qpilihan = mysqli_query($conn, "SELECT * FROM tbl_pilihan WHERE idpertanyaan = '$idpertanyaan'"); ?>
                <form action="updateQuiz.php?idquiz=<?=$idquiz?>&n=<?=$sn?>&t=<?=$total?>&idpertanyaan=<?=$idpertanyaan?>" method="POST">
                    <?php while($row = mysqli_fetch_assoc($qpilihan)) { ?>
                    <?php $pilihan = $row['pilihan']; ?>
                    <?php $idpilihan = $row['idpilihan']; ?>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jawaban" id="jawaban" value="<?=$idpilihan?>" required>
                        <label for="jawaban" class="form-check-label"><?=$pilihan?></label>
                    </div>
                    <?php } ?>
                    <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">Next</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Jawaban yang telah dipilih tidak dapat diganti lagi.<br>
                                        Apakah anda yakin?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" name="kembali" class="btn btn-secondary" data-dismiss="modal" style="width:80px">Kembali</button>
                                        <button type="submit" name="submit" class="btn btn-primary" style="width:80px">Ya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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