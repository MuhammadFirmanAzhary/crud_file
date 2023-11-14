<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
       if ($_POST['aksi'] == "add") { 
              $nisn = $_POST['nisn'];
              $nama = $_POST['nama_siswa'];
              $foto = $_FILES['foto_siswa']['name'];   
              $jeniskelamin = $_POST['jenis_kelamin'];
              $alamat = $_POST['alamat'];
   
              $dir ='img/';
              $tmpfile=$_FILES['foto_siswa']['tmp_name'];

              move_uploaded_file($tmpfile, $dir.$foto);
             

              $query = "INSERT INTO tb_siswa VALUES(null,'$nisn','$nama','$foto','$jeniskelamin','$alamat')";
              $sql = mysqli_query($conn, $query);
              if ($sql) {
                     header('location:index.php');
              } else {
                     echo $query;
              }
       } else if ($_POST['aksi'] == "edit") {
              echo "tombol edit";
       }
}
if (isset($_GET['hapus'])) {
       $id_siswa = $_GET['hapus'];
       $query    = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
       $sql = mysqli_query($conn, $query);
       if ($sql) {
              header('location:index.php');
       } else {
              echo $query;
       }
       
}
