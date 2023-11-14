<?php
  include 'koneksi.php';
  //3- menjalankan query 
  $query="SELECT * FROM `tb_siswa`";
  $sql = mysqli_query($conn,$query);
  
  $no=0;
 
  //var_dump($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD Beginner
          </a>
        </div>
      </nav>
      <div class="container">
        <figure>
            <blockquote class="blockquote">
              <h1 class="mt-3">DATA SISWA</h1>
              <p>Menampilkan Data yang di simpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              CREATE READ UPDATE DELETE <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
          <a href="kelola.php" type="button" class="btn btn-primary mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            Add
        </a>
        <div class="table-responsive mt-3">
            <table class="table align-middle table-hover table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Foto Siswa</th>
                  <th>Jenis-Kelamin</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                    while( $result=mysqli_fetch_assoc($sql)){ 
                  ?>
                <tr>
                  <td><?php echo ++$no ?></td>
                  <td><?php echo $result ['nisn'] ?></td>
                  <td><?php echo $result ['nama_siswa'] ?></td>
                  <td><img src="img/<?php echo $result ['foto_siswa']  ?>" width="100px"></td>
                  <td><?php echo $result ['jenis_kelamin'] ?></td>
                  <td><?php echo $result ['alamat'] ?></td>
                  <td>
                    <a href="kelola.php?edit=<?php echo $result ['id_siswa'] ?>" type="button" class="btn btn-success btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>           
                    </a>
                    <a href="proses.php?hapus=<?php echo $result ['id_siswa'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                          </svg>
                    </a>
                  </td>
                <?php 
                 }
                ?>
                </tr>
            </tbody>
        </table>
      </div>
      </div>

    <!-- script boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>