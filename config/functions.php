<?php
 
$host     = "mariadb";
$username = "adrianadhari";
$password = "pekacu663";
$database = "db_quizazra";
$conn = mysqli_connect($host, $username, $password, $database);

function register($data) {
    global $conn;
    $nama = stripslashes($data["nama"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $level = $data["level"];
    $jeniskelamin = $data["jeniskelamin"];
    $unitkerja = $data["unitkerja"];
    $result = mysqli_query($conn, "SELECT * FROM tbl_akun WHERE username='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo '<div class="alert alert-warning" role="alert">
        <strong>Username yang anda daftarkan telah terdaftar, silahkan masukkan username yang lain.<strong>
      </div>';
        return false;   
    }
    if ( $password !== $password2) {
        echo '<div class="alert alert-warning" role="alert">
        <strong>Password yang anda masukan tidak sesuai</strong>
      </div>';
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO tbl_akun VALUES (NULL, '$nama', '$username', '$password', '$level', '$jeniskelamin', '$unitkerja')");
    return mysqli_affected_rows($conn);
}

function deleteUser($username) {
    global $conn;
         $d1 = mysqli_query($conn, "DELETE FROM tbl_akun WHERE username = '$username'");
         $d2 = mysqli_query($conn, "DELETE FROM tbl_histori WHERE username = '$username'");
    return mysqli_affected_rows($conn);
}

function deleteQuiz($idquiz) {
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM tbl_pertanyaan WHERE idquiz='$idquiz'");
    while($row = mysqli_fetch_array($result)) {
        $idpertanyaan = $row['idpertanyaan'];
        $r1 = mysqli_query($conn, "DELETE FROM tbl_pilihan WHERE idpertanyaan='$idpertanyaan'");
        $r2 = mysqli_query($conn, "DELETE FROM tbl_jawaban WHERE idpertanyaan='$idpertanyaan'");
    }
        $r3 = mysqli_query($conn, "DELETE FROM tbl_pertanyaan WHERE idquiz='$idquiz'");
        $r4 = mysqli_query($conn, "DELETE FROM tbl_quiz WHERE idquiz='$idquiz'");
        $r4 = mysqli_query($conn, "DELETE FROM tbl_histori WHERE idquiz='$idquiz'");
    return mysqli_affected_rows($conn);
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($fetch = mysqli_fetch_assoc($result)) {
    $rows[] = $fetch;
    }
    return $rows;
}

function buatQuiz($data) {
    global $conn;
    $judul = $data['judul'];
    $total = $data['total'];
    $nilaikalitotal = $data['nilaikalitotal'];
    $idquiz = uniqid();
    $status = 'close';
    $query = mysqli_query($conn, "INSERT INTO tbl_quiz VALUES ('$idquiz', '$judul', '$nilaikalitotal', '$total', NOW(), '$status')");
    header("Location: ../dashboard/buatSoal.php?idquiz=$idquiz&n=$total");
}

function buatSoal($data) {
    global $conn;
    $total=@$_GET['n'];
    $idquiz=@$_GET['idquiz'];
    $ch=@$_GET['ch'];
    for($i=1;$i<=$total;$i++) {
        $idpertanyaan=uniqid();
        $pertanyaan=$data['pertanyaan'.$i];
        $q3=mysqli_query($conn, "INSERT INTO tbl_pertanyaan VALUES ('$idquiz','$idpertanyaan','$pertanyaan' , '$ch' , '$i')");
        $pilihanA=uniqid();
        $pilihanB=uniqid();
        $pilihanC=uniqid();
        $pilihanD=uniqid();
        $a=$data[$i.'1'];
        $b=$data[$i.'2'];
        $c=$data[$i.'3'];
        $d=$data[$i.'4'];
        $qa=mysqli_query($conn,"INSERT INTO tbl_pilihan VALUES ('$idpertanyaan','$a','$pilihanA')");
        $qb=mysqli_query($conn,"INSERT INTO tbl_pilihan VALUES ('$idpertanyaan','$b','$pilihanB')");
        $qc=mysqli_query($conn,"INSERT INTO tbl_pilihan VALUES ('$idpertanyaan','$c','$pilihanC')");
        $qd=mysqli_query($conn,"INSERT INTO tbl_pilihan VALUES ('$idpertanyaan','$d','$pilihanD')");
        $e=$data['jawaban'.$i];
        switch($e) {
          case 'a': $idjawaban=$pilihanA; break;
          case 'b': $idjawaban=$pilihanB; break;
          case 'c': $idjawaban=$pilihanC; break;
          case 'd': $idjawaban=$pilihanD; break;
          default: $idjawaban=$pilihanA;
        }
        $qans=mysqli_query($conn, "INSERT INTO tbl_jawaban VALUES  ('$idpertanyaan','$idjawaban')");
      }
      header("Location: ../dashboard/manageQuiz.php");
}

function editQuiz($data) {
    global $conn;
    $idquiz = $data['idquiz'];
    $judul = $data['judul'];
    mysqli_query($conn, "UPDATE tbl_quiz SET judul = '$judul' WHERE idquiz = '$idquiz'");
    return mysqli_affected_rows($conn);
}

function editUser($data) {
    global $conn;
    $id = $data['id'];
    $nama = stripslashes($data['nama']);
    $username = strtolower(stripslashes($data['username']));
    $level = $data['level'];
    $jeniskelamin = $data['jeniskelamin'];
    $unitkerja = $data['unitkerja'];
    mysqli_query($conn, "UPDATE tbl_akun SET nama = '$nama', username = '$username', level = '$level', jeniskelamin = '$jeniskelamin', unitkerja = '$unitkerja' WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

function editPassword($data) {
    global $conn;
    $id = $data['id'];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    if ( $password !== $password2) {
        echo '<div class="alert alert-warning" role="alert">
        <strong>Password yang anda masukan tidak sesuai</strong>
      </div>';
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "UPDATE tbl_akun SET password = '$password' WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}
?>