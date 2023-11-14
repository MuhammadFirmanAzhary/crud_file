<?php
//-1 koneksi web browser ke mysql
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_siswa';
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn) {
    //echo"koneksi berhasil";
}

//-2 memilih database
mysqli_select_db($conn, $db);
