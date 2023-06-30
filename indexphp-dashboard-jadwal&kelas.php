<?php
  include 'connect.php';
  ob_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tinfor Media</title>
    <link rel="icon" href="img/general/logogundar.png" type="image/x-icon" />
    
    <!-- [==========> FRAMEWORK BOOTSTRAP 5.3 <==========] -->
    <!-- + Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- + Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  </head>

  <style>
    body {
      padding-bottom: 15rem;
    }
    .navbar {
      background-color: rgb(154, 128, 169);
    }
    .kelas-mahasiswa {
      padding-top: 8rem;
    }

    .jadwal-kuliah {
      padding-top: 8rem;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg shadow-lg fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand fw-semibold"><img src="img/general/logogundar.png" alt="logogundar" width="25" />&nbsp; Tinfor Media</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto fw-bold gap-2">
            <li class="nav-item">
              <a class="btn btn-sm mt-1 fw-semibold btn-success pe-3 ps-3 rounded-4" href="index.php #dashboard"><i class="bi bi-house-fill"></i> HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="kelas-mahasiswa" id="kelas-mahasiswa">
      <div class="container">
        <div class="row">
          <h3 class="text-start">KELAS MAHASISWA</h3>
          <div class="border border-2 border-black mt-3 mb-4"></div>
          <div class="row text-end mb-3">
            <form method="POST" action="#kelas-mahasiswa">
              <input type="text" name="keyword-kelas" autocomplete="off" placeholder="Kelas/NPM/Nama..." size="23" class="border-2 border-success rounded-4 ps-3">
              <button class="btn btn-sm btn-success fw-semibold mb-1 rounded-4 ps-3 pe-3 p-1 ms-1" type="submit" name="btn-kelas">Cari Kelas</button>
            </form>
          </div>
          <table border="" cellspacing="0" width="60%" class="shadow-lg align-content-center justify-content-center">
            <tr style="background-color: rgb(104, 70, 124)" class="text-white fw-semibold">
              <th>&nbsp;NPM</th>
              <th>Nama</th>
              <th>Kelas</th>
            </tr>
            <?php
              if(isset($_POST['btn-kelas'])) {
                $search = $_POST['keyword-kelas'];
                $query  = "SELECT * FROM tb_kelasmahasiswa where NPM LIKE '%".$search."%' OR nama LIKE '%".$search."%' OR kelas LIKE '%".$search."%'";
              } else {
                $query  = "SELECT * FROM tb_kelasmahasiswa";
              } 
              $select = mysqli_query($connect, $query);
              while ($data = mysqli_fetch_array($select)) {
            ?>
            <tr>
              <td>&nbsp;<?php echo $data['npm']; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['kelas']; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </section>

    <section class="jadwal-kuliah" id="jadwal-kuliah">
      <div class="container">
        <div class="row">
          <h3 class="text-start">JADWAL KULIAH</h3>
          <div class="border border-2 border-black mt-3 mb-4"></div>
          <div class="row text-end mb-3">
            <form method="POST" action="#jadwal-kuliah">
              <input type="text" name="keyword-jadwalkuliah" autocomplete="off" placeholder="Kelas/Dosen..." size="23" class="border-2 border-success rounded-4 ps-3">
              <button class="btn btn-sm btn-success fw-semibold mb-1 rounded-4 ps-3 pe-3 p-1 ms-1" type="submit" name="btn-jadwalkuliah">Cari Jadwal</button>
            </form>
          </div>
          <table border="" cellspacing="0" width="50%" class="shadow-lg align-content-center justify-content-center">
            <tr style="background-color: rgb(104, 70, 124)" class="text-white fw-semibold">
              <th>&nbsp;Kode</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Dosen</th>
              <th>Hari</th>
              <th>Pukul</th>
            </tr>
            <?php
              $connect  = mysqli_connect('localhost', 'root', '');
              mysqli_select_db($connect, 'db_project_pbo');

              if( isset($_POST['btn-jadwalkuliah'])){
                $search = $_POST['keyword-jadwalkuliah'];
                $query  = "SELECT * FROM tb_jadwalkuliah where kelas LIKE '%".$search."%' OR namadosen LIKE '%".$search."%'  OR matakuliah LIKE '%".$search."%'";
              } else {
                $query = "SELECT * FROM tb_jadwalkuliah";
              } 
              
              $select = mysqli_query($connect, $query);
              while ($data = mysqli_fetch_array($select)){
            ?>
            <tr>
              <td>&nbsp;<?php echo $data['kd_mk']; ?></td>
              <td><?php echo $data['kelas']; ?></td>
              <td><?php echo $data['matakuliah']; ?></td>
              <td><?php echo $data['namadosen']; ?></td>
              <td><?php echo $data['hari']; ?></td>
              <td><?php echo $data['pukul']; ?></td>
            </tr>
            <?php 
              } 
            ?>
          </table>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>