<?php
session_start();
if ($_SESSION['level']!=='administrator') {
    header("Location: ../");
    exit;
}
$username = $_SESSION['username'];
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
    <title>Dashboard Admnistrator</title>
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
            <div class="col mt-3">
                <h2><i class="fas fa-laptop-code"></i> Administrator Page </h2>
                <hr style="border-top: 2px solid black">
            </div>
        </div>
        <div class="jumbotron text-justify">
            <h1 class="display-4">Selamat datang, <?=$username?> <i class="fas fa-smile"></i></h1>
            <p class="lead">Hai <?=$username?>, kamu dapat memanagement quiz yang ada di website ini.<br> Kamu juga bisa
                memanagement score dan user.</p>
            <p></p>
            <hr class="my-4">
            <p>Untuk selengkapnya, silahkan baca panduannya dengan mengklik tombol dibawah ini.</p>
            <div class="cara">
                <a class="btn btn-outline-dark" data-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    <strong>
                        <i class="fas fa-map-signs"></i>
                        Panduan - Management Website Quiz
                        <i class="fas fa-map-signs"></i>
                    </strong>
                </a>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <ol id="cara">
                            <li>Membuat Quiz Baru</li>
                            <ul>
                                <li>Klik Manage Quiz pada navbar, lalu klik tombol "Buat Quiz Baru".</li>
                                <li>Isi Judul Quiz, Total Soal dan Angka Dikalikan Total Soal.
                                </li>
                                <li>Ketik soal dan pilihannya, lalu pilih jawaban yang benarnya.</li>
                            </ul>
                            <li>Membuka Sesi Quiz
                            </li>
                            <ul>
                                <li>Klik Manage Quiz pada navbar, lalu lihat pada tabel kolom Status, pastikan icon kuncinya terbuka. Jika tertutup, silahkan klik icon kuncinya.
                                </li>
                            </ul>
                            <li>
                                Menutup Sesi Quiz
                            </li>
                            <ul>
                                <li>Klik Manage Quiz pada navbar, lalu lihat pada tabel kolom Status, pastikan icon kuncinya tertutup. Jika terbuka, silahkan klik icon kuncinya.
                                </li>
                            </ul>
                            <li>Mengedit Quiz</li>
                            <ul>
                                <li>Klik Manage Quiz pada navbar, lalu klik icon edit pada quiz yang ingin diedit.</li>
                                <li>Lalu ubah nama quiz yang diinginkan, jika sudah, klik "Ubah".</li>
                            </ul>
                            <li>Menghapus Quiz</li>
                            <ul>
                                <li>Klik Manage Quiz pada navbar, lalu klik icon sampah pada quiz yang ingin dihapus.</li>
                            </ul>
                            <li>Export Hasil Nilai kedalam Excel atau PDF</li>
                            <ul>
                                <li>Klik Manage Score pada navbar, lalu klik "Lihat Nilai" pada quiz yang ingin di print.</li>
                                <li>Lalu klik "Excel" atau "PDF" untuk mengexport nilai.</li>
                            </ul>
                            <li>Mengedit User</li>
                            <ul>
                                <li>Klik Manage User pada navbar, lalu klik icon edit pada user yang ingin di edit.</li>
                                <li>Silahkan edit sesuai keinginan, jika sudah, klik "Update".</li>
                            </ul>
                            <li>Mengganti Password User</li>
                            <ul>
                                <li>Klik Manage User pada navbar, lalu klik icon kunci pada user yang ingin di ganti passwordnya.</li>
                                <li>Silahkan masukkan password baru dan konfirmasi password, jika sudah, klik "Ganti Password".</li>
                            </ul>
                            <li>Menghapus User</li>
                            <ul>
                                <li>Klik Manage User pada navbar, lalu klik icon sampah pada user yang ingin dihapus.</li>
                            </ul>
                        </ol>
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