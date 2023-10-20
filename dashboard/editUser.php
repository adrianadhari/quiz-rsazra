<?php
session_start();
if ($_SESSION['level']!=='administrator') {
    header("Location: ../");
    exit;
}
require '../config/functions.php';
$id = $_GET['id'];
$result = query("SELECT * FROM tbl_akun WHERE id = '$id'")[0];
$unitkerja = query("SELECT * FROM tbl_unitkerja ORDER BY unitkerja ASC");
if (isset($_POST['submit'])) {
    editUser($_POST);
    header("Location: manageUser.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/dindex.css">
    <link rel="icon" href="../assets/img/logo.ico">
    <title>Edit User</title>
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
                <a href="../config/logout.php" class="ml-2 btn btn-outline-dark"><i class="fas fa-sign-out-alt"></i></a>
        </div>       
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm mt-3">
                <h2><i class="fas fa-laptop-code"></i> Administrator Page </h2>
                <hr style="border-top: 2px solid black">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <a href="manageUser.php" class="btn btn-dark mb-3"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?=$result['id']?>">
                    <div class="form-group">
                        <strong><label for="nama">Nama</label></strong>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$result['nama']?>" required>
                    </div>
                    <div class="form-group">
                        <strong><label for="username">Username</label></strong>
                        <input type="text" name="username" id="username" class="form-control"
                            value="<?=$result['username']?>" required>
                    </div>
                    <div class="form-group">
                        <strong><label for="level">Hak Akses</label></strong>
                        <select name="level" id="level" class="form-control" required>
                            <option value="administrator">Administrator</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong><label for="jeniskelamin">Jenis Kelamin</label></strong>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin1"
                                value="Laki - Laki" required>
                            <label class="form-check-label" for="jeniskelamin1">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin2"
                                value="Perempuan" required>
                            <label class="form-check-label" for="jeniskelamin2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <strong><label for="Unit Kerja">Unit Kerja</label></strong>
                        <select name="unitkerja" id="unitkerja" class="form-control" required>
                            <?php foreach($unitkerja as $uk) : ?>
                            <option value="<?=$uk['unitkerja']?>"><?=$uk['unitkerja']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
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