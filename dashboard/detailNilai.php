<?php
session_start();
if ($_SESSION['level']!=='administrator') {
    header("Location: ../");
}
require '../config/functions.php';
$idquiz = $_GET['idquiz'];
$tanggal = $_POST['tanggal'];
$result = query("SELECT b.nama, b.unitkerja, a.jawabanbenar, a.jawabansalah, a.score, a.tanggal FROM tbl_histori as a left join tbl_akun as b on a.username = b.username where idquiz = '$idquiz' AND tanggal LIKE '%$tanggal%' ORDER BY nama ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/dindex.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/css/buttons.bootstrap4.min.css">
    <link rel="icon" href="../assets/img/logo.ico">
    <title>Nilai Peserta Quiz</title>
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
        <a href="manageScore.php" class="btn btn-dark mb-3"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
        <div class="row">
            <div class="col-sm">
                <table id="detail" class="table table-responsive-sm table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th width="60px" scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th width="250px" scope="col">Unit Kerja</th>
                            <th width="60px" scope="col">Benar</th>
                            <th width="60px" scope="col">Salah</th>
                            <th width="60px" scope="col">Nilai</th>
                            <th width="250px" scope="col">Waktu Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    <?php foreach($result as $quiz) : ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td class="text-left"><?=$quiz['nama']?></td>
                            <td><?=$quiz['unitkerja']?></td>
                            <td><?=$quiz['jawabanbenar']?></td>
                            <td><?=$quiz['jawabansalah']?></td>
                            <td><?=$quiz['score']?></td>
                            <td><?=$quiz['tanggal']?></td>
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
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/dataTables.buttons.min.js"></script>
    <script src="../assets/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/js/jszip.min.js"></script>
    <script src="../assets/js/pdfmake.min.js"></script>
    <script src="../assets/js/vfs_fonts.js"></script>
    <script src="../assets/js/buttons.html5.min.js"></script>
    <script src="../assets/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#detail').DataTable({
                lengthChange: false,
                buttons: ['excel', 'pdf']
            });
            table.buttons().container()
                .appendTo('#detail_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>