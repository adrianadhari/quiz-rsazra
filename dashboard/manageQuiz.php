<?php
session_start();
if ($_SESSION["level"]!=="administrator") {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
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
    <title>Manage Quiz</title>
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
        <div class="row mb-3 text-right">
            <div class="col-sm">
                <a href="buatQuiz.php" class="btn btn-dark"><i class="fas fa-plus-circle"></i> Buat Quiz Baru</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <table class="table table-responsive-sm table-bordered table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Quiz</th>
                        <th scope="col">Total Soal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach($result as $quiz) : ?>
                <tbody>
                    <tr>
                        <td width="75px" scope="row"><?= $i++?></td>
                        <td class="text-left"><?= $quiz["judul"]?></td>
                        <td width="100px"><?= $quiz["total"]?></td>
                        <td width="75px">
                            <?php if ($quiz["status"]=="open") {
                            echo '<a href="../config/statusQuiz.php?idquiz='.$quiz["idquiz"].'&status='.$quiz["status"].'" class="btn btn-success mt-1"><i class="fas fa-lock-open"></i></a>';
                            } else {
                            echo '<a href="../config/statusQuiz.php?idquiz='.$quiz["idquiz"].'&status='.$quiz["status"].'" class="btn btn-info mt-1"><i class="fas fa-lock"></i></a>';
                            }
                            ?>
                        </td>
                        <td width="130px">
                            <a href="editQuiz.php?idquiz=<?= $quiz['idquiz']?>" class="btn btn-warning m-1"><i class="fas fa-edit"></i></a><a href="../config/deleteQuiz.php?idquiz=<?= $quiz['idquiz']?>" class="btn btn-danger m-1"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
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