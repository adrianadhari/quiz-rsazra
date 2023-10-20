<?php
session_start();
if ($_SESSION['level']!=='administrator') {
    header("Location: ../");
}
require '../config/functions.php';
$q = query("SELECT * FROM tbl_quiz");
// $idquiz = $row['idquiz'];
// $judul = $row['judul'];
// $total = $row['total'];
// $qpeserta = mysqli_query($conn, "SELECT * FROM tbl_histori WHERE idquiz = '$idquiz'");
// $peserta = mysqli_num_rows($qpeserta); 
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
    <title>Manage Score</title>
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
        <div class="row">
            <div class="col-sm">
                <table class="table table-responsive-sm table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Quiz</th>
                            <th scope="col">Total Soal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach($q as $query) : ?>          
                    <tbody>
                        <tr>
                            <td width="75px" scope="row"><?=$i++?></td>
                            <td class="text-left"><?=$query['judul']?></td>
                            <td width="100px"><?=$query['total']?></td>
                            <td width="250px">
                                <form action="detailNilai.php?idquiz=<?= $query['idquiz']?>" method="POST">
                                    <div class="form-group d-inline-block" style="width: 150px;">
                                        <select class="form-control" name="tanggal" id="exampleFormControlSelect1">
                                            <option>Pilih tanggal</option>
                                        <?php 
                                            $idquiz = $query['idquiz'];
                                            $tgl = query("SELECT DISTINCT DATE(tanggal) as tanggal FROM tbl_histori WHERE idquiz = '$idquiz'");
                                        ?>
                                        <?php foreach($tgl as $tanggal) : ?>
                                            <option value="<?=$tanggal['tanggal']?>"><?= $tanggal['tanggal'];?></option>
                                        <?php endforeach; ?>  
                                        </select>
                                    </div>  
                                    <button type="submit" class="btn btn-primary m-1"><i class="fas fa-search"></i></button>
                                </form>        
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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