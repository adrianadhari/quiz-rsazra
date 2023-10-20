<?php
session_start();
if ($_SESSION["level"]!=="user") {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
$user = $_SESSION['username'];
$result = query("SELECT * FROM tbl_quiz");
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
                <hr style="border-top: 3px solid black;">
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h3>Selamat datang, <?=$user?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <table class="table table-responsive-sm table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th width="60px" scope="col">No</th>
                            <th scope="col">Judul Quiz</th>
                            <th width="150px" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($result as $quiz) : ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td class="text-left"><?=$quiz['judul']?></td>
                            <td><a href="detailQuiz.php?idquiz=<?=$quiz['idquiz']?>" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ikuti Quiz</a></td>
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