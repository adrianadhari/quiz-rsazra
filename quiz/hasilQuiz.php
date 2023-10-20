<?php
session_start();
if ($_SESSION["level"]!=="user") {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
$username = $_SESSION['username'];
$score = $_COOKIE['score'];
$jawabanbenar = $_COOKIE['jawabanbenar'];
$jawabansalah = $_COOKIE['jawabansalah'];
$jawabandijawab = $_GET['sn'];
$idquiz = $_GET['idquiz'];
$result = query("SELECT * FROM tbl_quiz WHERE idquiz = '$idquiz'")[0];
if (isset($_POST['insert'])) {
    $q = mysqli_query($conn, "INSERT INTO tbl_histori VALUES('$username','$idquiz' ,'$score','$jawabandijawab','$jawabanbenar','jawabansalah',NOW() )");
    setcookie('score', '');
    setcookie('jawabanbenar', '');
    setcookie('jawabansalah', '');
    header("Location: myActivities.php");
    exit;
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
        <div class="row text-center">
            <div class="col-sm">
                <h1>Hasil Quiz</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Benar</td>
                        <td width="80px" class="text-center"><?= $jawabanbenar; ?></td>
                    </tr>
                    <tr>
                        <td>Salah</td>
                        <td width="80px" class="text-center"><?= $jawabansalah; ?></td>
                    </tr>
                    <tr>
                        <td>Nilai</td>
                        <td width="80px" class="text-center"><?= $score; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5">
            <div class="col-sm-8">
                    <?php if($score >= 51) { ?>
                    <h1><i class="fas fa-trophy"></i><i class="fas fa-trophy"></i><i class="fas fa-trophy"></i><i class="fas fa-trophy"></i><i class="fas fa-trophy"></i></h1>
                    <?php } elseif($score <= 50) { ?>
                    <h1><i class="fas fa-sad-tear"></i><i class="fas fa-sad-tear"></i><i class="fas fa-sad-tear"></i><i class="fas fa-sad-tear"></i><i class="fas fa-sad-tear"></i></h1>
                    <?php } ?>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-5">
            <div class="col-sm-4">
                <form action="quiz.php?idquiz=<?=$idquiz?>&n=1&t=<?=$result['total']?>" method="POST">
                    <button type="submit" name="ulang" class="btn btn-success mr-3 d-inline-block" style="width: 100px;">Ulangi</button>
                </form>
                <button type="button" class="btn btn-primary ml-3 d-inline-block" data-toggle="modal" data-target="#exampleModal" style="width: 100px;">Selesai</button>
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
                                Klik Ya untuk menyelesaikan quiz.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:80px">Kembali</button>
                                <form action="" method="POST">
                                <button type="submit" name="insert" class="btn btn-primary" style="width:80px">Ya</button>
                                </form>
                            </div>
                         </div>
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