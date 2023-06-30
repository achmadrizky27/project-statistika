<?php 
  session_start();
  session_destroy();
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
    <!-- + Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- + Bootstrap 5.3 Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  </head>

  <style>
    body {
      padding-bottom: 8rem;
    }

    /* [==========>       NAVIGASI BAR      <==========] DONE */
    .navbar {
      background-color: rgb(154, 128, 169);
    }

    .data-pendaftar {
      padding-top: 8rem;
    }

    .kelas-mahasiswa {
      padding-top: 8rem;
    }

    .jadwal-kuliah {
      padding-top: 8rem;
    }
  </style>
  
  <body>
    <!-- [==========>       NAVIGASI BAR      <==========] DONE -->
    <nav class="navbar navbar-expand-lg shadow-lg fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand fw-semibold"><img src="img/general/logogundar.png" alt="logogundar" width="25" />&nbsp; Tinfor Media</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto fw-bold gap-2">
            <li class="nav-item">
              <a class="btn btn-sm mt-1 fw-semibold btn-success pe-3 ps-3 rounded-4" href="index.php"><i class="bi bi-house-fill"></i> HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- [==========>      DATA PENDAFTAR     <==========] DONE -->
    <section class="data-pendaftar" id="data-pendaftar">
      <div class="container">
        <div class="row mt-2">
          <h3>DATA PENDAFTAR</h3>
          <div class="border border-2 border-black mt-3 mb-4"></div>
          <div class="row text-end mb-3">
            <div class="row">
              <div class="col-md-6">
              <?php include('function/importdata-registrasi.php')?>
                  <form action="" method="post" enctype="multipart/form-data" class="row g-2">
                      <div class="col-auto">
                          <input class="form-control" id="fromFile" type="file" name="filexls">
                      </div>
                      <div class="col-auto">
                          <input type="submit" name="submit" class="btn btn-primary"value="Upload File">
                      </div>
                  </form>
              </div>
              <div class="col-md-6">
              <form method="POST" action="#data-mahasiswa">
                <input type="text" name="keyword" autocomplete="off" placeholder="Ketikkan Nama/NoPend..." size="23" class="border-2 border-success rounded-4 ps-3">
                <button class="btn btn-sm btn-success fw-semibold mb-1 rounded-4 ps-3 pe-3 p-1 ms-1" type="submit" name="btn-keyword">Cari Peserta</button>&nbsp;
                <a class="btn btn-sm btn-primary rounded-4 pe-3 ps-3 fw-semibold p-1 mb-1" href="indexphp-registration-registrasi-input.php">Input Data</a>
              </form>
              </div>
            </div>
          </div>
          <table border="" cellspacing="0" width="60%" class="shadow-lg"> 
            <tr style="background-color: rgb(104, 70, 124)" class="text-white fw-semibold"><br><br>
              <td class="ps-2">&nbsp;NoPend</td>
              <td>&nbsp;Nama</td>
              <td>&nbsp;Telepon</td>
              <td>&nbsp;Email</td>
              <td>&nbsp;Jurusan</td>
              <td>&nbsp;Ujian Seleksi</td>
              <td>&nbsp;Option</td>
          </tr>
          <?php
            include 'connect.php';
            if( isset($_POST['btn-keyword'])){
              $search = $_POST['keyword'];
              $query  = "SELECT * FROM tb_registrasi where NPM LIKE '%".$search."%' OR nama LIKE '%".$search."%'";
            }else {
              $query = "SELECT * FROM tb_registrasi";
            }

            $select = mysqli_query($connect, $query);
            while($data = mysqli_fetch_array($select)){
          ?>
          <tr class="text-start ps-3">
            <td class="ps-2">&nbsp;<?php echo $data['npm'] ?></td>
            <td>&nbsp;<?php echo $data['nama'] ?></td>
            <td>&nbsp;<?php echo $data['telepon'] ?></td>
            <td>&nbsp;<?php echo $data['email'] ?></td>
            <td>&nbsp;<?php echo $data['jurusan'] ?></td>
            <td>&nbsp;<?php echo $data['ujian_seleksi'] ?></td>
            <td>
              <a class="btn btn-sm btn-dark rounded-4 pe-2 ps-2 fw-semibold mt-2 mb-2" href="indexphp-registration-registrasi-edit.php?npm=<?php echo $data['npm'] ?>">Change</a>
              <a class="btn btn-sm btn-danger rounded-4 pe-2 ps-2 fw-semibold mt-2 mb-2" href="indexphp-registration-registrasi-delete.php?npm=<?php echo $data['npm'] ?>">Delete</a>
            </td>
          </tr>
          <?php }?>
          </table>
        </div>
      </div>
    </section>

    <!-- [==========>     KELAS MAHASISWA     <==========] DONE -->
    <section class="kelas-mahasiswa" id="kelas-mahasiswa">
      <div class="container">
        <div class="row">
          <h3 class="text-start">KELAS MAHASISWA</h3>
          <div class="border border-2 border-black mt-3 mb-4"></div>

          <!-- Form searching -->
          <div class="row text-end mb-3">
            <form method="POST" action="#kelas-mahasiswa">
              <input type="text" name="keyword-kelas" autocomplete="off" placeholder="Kelas/NPM/Nama..." size="23" class="border-2 border-success rounded-4 ps-3">
              <button class="btn btn-sm btn-success fw-semibold mb-1 rounded-4 ps-3 pe-3 p-1 ms-1" type="submit" name="btn-kelas">Cari Kelas</button>&nbsp;
              <a class="btn btn-sm btn-primary rounded-4 pe-3 ps-3 fw-semibold p-1 mb-1" href="indexphp-dashboard-kelas-input.php">Input Data</a>
            </form>
          </div>

          <!-- Alert pemberitahuan "Data berhasil (DITAMBAH, DIHAPUS, DIUBAH)" -->
          <?php 
            if(isset($_SESSION['pesanKelasmahasiswa'])):
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php 
            echo $_SESSION['pesanKelasmahasiswa'];?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
            endif;
          ?>

          <!-- Tabel kelas mahasiswa -->
          <table border="" cellspacing="0" width="60%" class="shadow-lg align-content-center justify-content-center">
            <tr style="background-color: rgb(104, 70, 124)" class="text-white fw-semibold">
              <th>&nbsp;NPM</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Option</th>
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
              <td>
                <a class="btn btn-sm btn-dark rounded-4 pe-2 ps-2 fw-semibold mt-2 mb-2" href="indexphp-dashboard-kelas-edit.php?npm=<?php echo $data['npm'] ?>">Change</a>
                <a class="btn btn-sm btn-danger rounded-4 pe-2 ps-2 fw-semibold mt-2 mb-2" href="indexphp-dashboard-kelas-delete.php?npm=<?php echo $data['npm'] ?>">Delete</a>
            </td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </section>
    
    <!-- [==========>      JADWAL KULIAH     <==========] DONE -->
    <section class="jadwal-kuliah" id="jadwal-kuliah">
      <div class="container">
        <div class="row">
          <h3 class="text-start">JADWAL KULIAH</h3>
          <div class="border border-2 border-black mt-3 mb-4"></div>

          <!-- Form seacrhing -->
          <div class="row text-end mb-3">
            <form method="POST" action="#jadwal-kuliah">
              <input type="text" name="keyword-jadwalkuliah" autocomplete="off" placeholder="Kelas/Dosen..." size="23" class="border-2 border-success rounded-4 ps-3">
              <button class="btn btn-sm btn-success fw-semibold mb-1 rounded-4 ps-3 pe-3 p-1 ms-1" type="submit" name="btn-jadwalkuliah">Cari Jadwal</button>&nbsp;
              <a class="btn btn-sm btn-primary rounded-4 pe-3 ps-3 fw-semibold p-1 mb-1" href="indexphp-dashboard-jadwal-input.php">Input Data</a>
            </form>
          </div>

          <!-- Alert pemberitahuan "Data berhasil (DITAMBAH, DIHAPUS, DIUBAH)" -->
          <?php 
            if(isset($_SESSION['pesanJadwalkuliah'])):
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php 
            echo $_SESSION['pesanJadwalkuliah'];?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
            endif;
          ?>

          <!-- Tabel jadwal kuliah -->
          <table border="" cellspacing="0" width="50%" class="shadow-lg align-content-center justify-content-center">
            <tr style="background-color: rgb(104, 70, 124)" class="text-white fw-semibold">
              <th>&nbsp;Kode</th>
              <th>Kelas</th>
              <th>Mata Kuliah</th>
              <th>Dosen</th>
              <th>Hari</th>
              <th>Pukul</th>
              <th>Option</th>
            </tr>
            <?php
              $connect  = mysqli_connect('localhost', 'root', '');
              mysqli_select_db($connect, 'db_project_pbo');

              if( isset($_POST['btn-jadwalkuliah'])){
                $search = $_POST['keyword-jadwalkuliah'];
                $query  = "SELECT * FROM tb_jadwalkuliah WHERE kelas LIKE '%".$search."%' OR namadosen LIKE '%".$search."%'  OR matakuliah LIKE '%".$search."%'";
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
              <td>
                <a class="btn btn-sm btn-dark rounded-4 pe-2 ps-2 fw-semibold mt-2 mb-2" href="indexphp-dashboard-jadwal-edit.php?hari=<?php echo $data['hari'] ?>">Change</a>
                <a class="btn btn-sm btn-danger rounded-4 pe-2 ps-2 fw-semibold mt-2 mb-2" href="indexphp-dashboard-jadwal-delete.php?hari=<?php echo $data['hari'] ?>">Delete</a>
            </td>
            </tr>
            <?php 
              } 
            ?>
          </table>
        </div>
      </div>
    </section>

    <!-- ===================================================                 
    |                   DOKUMEN JAVASCRIPT                 | 
    ==================================================== -->
    <!-- [==========>    ANIMATED ON SCROLL   <==========] DONE -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- [==========>      BOOTSTRAP 5.3      <==========] DONE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>