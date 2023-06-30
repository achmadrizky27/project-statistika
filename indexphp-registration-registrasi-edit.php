<!-- ===================================================                 
|                     DOKUMEN PHP                      | 
==================================================== -->
<?php
    include 'connect.php';
    session_start();
    ob_start();
    $data_edit = mysqli_query($connect, "SELECT * FROM tb_registrasi WHERE npm = '" .$_GET['npm']."'");
    $result = mysqli_fetch_array($data_edit);
?>

<!-- ===================================================                 
|                     DOKUMEN HTML                     | 
==================================================== -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tinfor Media</title>
    <link rel="icon" href="img/general/logogundar.png" type="image/x-icon" />
    
    <!-- [==========> FRAMEWORK BOOTSTRAP 5.3 <==========] -->
    <!-- + Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- + Bootstrap 5.3 Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- [==========>     FITUR TAMBAHAN      <==========] -->
    <!-- + Animated On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <!-- ===================================================                 
  |                      DOKUMEN CSS                     | 
  ==================================================== -->
  <style>
    /* [==========>       NAVIGASI BAR      <==========] DONE */
    .navbar {
      background-color: rgb(154, 128, 169);
    }

    /* [==========>      FORM REGISTER      <==========] DONE */
    .form-register {
      background-color: rgb(154, 128, 169);
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
            <li>
                <a href="indexphp-registration-registrasi.php #data-mahasiswa" class="btn fw-semibold rounded-4 pe-3 ps-3 btn-sm btn-success mt-1">DATA MAHASISWA</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-sm btn-success rounded-4 fw-semibold pe-3 ps-3 mt-1" href="index.php"><i class="bi bi-house-fill"></i> HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- [==========>       FORM REGISTER     <==========] DONE -->
    <section class="form-register" id="form-register">
        <div class="container">
            <div class="row-6">
                <h3><i class="bi bi-card-text"></i> EDIT DATA</h3>
            </div>

            <!-- List garis -->
            <div class="row border-top border-2 mt-4 mb-4"></div>

            <!-- Form edit register -->
                <form action="" method="POST">
                    <div class="row fw-semibold">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nomor Pendaftaran</label>
                                <input type="text" name="npm" placeholder="..." class="form-control rounded-4 ps-3" autocomplete="off" value="<?php echo $result['npm'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="..." class="form-control rounded-4 ps-3" autocomplete="off" value="<?php echo $result['nama'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telepon</label>
                                <input type="text" name="telp" placeholder="..." class="form-control rounded-4 ps-3" autocomplete="off" value="<?php echo $result['telepon'] ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" placeholder="..." class="form-control rounded-4 ps-3" autocomplete="off" value="<?php echo $result['email'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" placeholder="..." class="form-control rounded-4 ps-3" autocomplete="off" value="<?php echo $result['jurusan'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ujian Seleksi</label>
                                <select name="ujian_seleksi" class="form-control rounded-4 ps-3" autocomplete="off">
                                    <option value="<?php echo $result['ujian_seleksi'] ?>">...</option>
                                    <option value="Nilai Rapot">Nilai Rapot</option>
                                    <option value="Ujian Tes">Ujian Tes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="edit" class="btn btn-sm btn-success fw-semibold rounded-4 pe-3 ps-3" id="saveEdit"><i class="bi bi-send-check"></i> Submit</button>&nbsp;
                    <a class="btn btn-sm btn-danger fw-semibold rounded-4 pe-3 ps-3" href="indexphp-registration-registrasi.php #data-mahasiswa"><i class="bi bi-box-arrow-in-left"></i> Cancel</a>               
                </form>
                <?php
                if(isset($_POST['edit'])){
                    $update = mysqli_query($connect, "UPDATE tb_registrasi SET nama = '".$_POST['nama']."',
                        telepon = '".$_POST['telp']."', email = '".$_POST['email']."', ujian_seleksi = '".$_POST['ujian_seleksi']."', jurusan = '".$_POST['jurusan']."'
                        WHERE npm = '" .$_GET['npm']."'");
                    if($update){
                      $_SESSION['pesanEksekusi'] = "Suksess, data berhasil diperbarui !";
                      header('location:indexphp-registration-registrasi.php #data-mahasiswa');
                      ob_end_flush();
                    }else{
                        echo 'gagal edit';
                    }
                }
                ?>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path 
          fill="rgb(104, 70, 124)" 
          fill-opacity="1" 
          d="M0,128L34.3,122.7C68.6,117,137,107,206,117.3C274.3,128,343,160,411,160C480,160,549,128,617,112C685.7,96,754,96,823,96C891.4,96,960,96,1029,122.7C1097.1,149,1166,203,1234,202.7C1302.9,203,1371,149,1406,122.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
      </svg>
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


