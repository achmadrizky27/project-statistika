<!-- ===================================================                 
|                     DOKUMEN PHP                      | 
==================================================== -->
<?php
  session_start();
  ob_start();
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

    /* [==========>         PROFILE         <==========] DONE */
    .profile {
      background-color: rgb(104, 70, 124);
      padding-top: 7.5rem;
    }
    .profile div .kolomKanan h5 {
      padding-top: 7rem;
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
            <li class="nav-item">
              <a class="nav-link" href="#form-register"><i class="bi bi-card-text"></i> FORM REGISTER</a>
            </li>
            <li>
                <a href="indexphp-registration-registrasi.php #data-mahasiswa" class="btn btn-sm rounded-4 pe-3 ps-3 btn-success mt-1 fw-semibold">DATA MAHASISWA</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-sm rounded-4 pe-3 ps-3 btn-success mt-1 fw-semibold" href="index.php"><i class="bi bi-house-fill"></i> HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- [==========>         PROFILE         <==========] DONE -->
    <section class="profile" id="profile">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-6">
            <img src="img/general/logogundar.png" alt="logogundar" width="410" />
          </div>
          <div class="col-md-6 kolomKanan text-start text-white" data-aos="zoom-in">
            <h5>
                <h2 class="fst-italic">FORM REGISTER</h2>
                Selamat datang, sobat Informatika ! <br /> Silahkan calon mahasiswa/mahasiswi baru untuk mengklik nomor antrian pendaftaran terlebih dahulu.
            </h5>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="rgb(154, 128, 169)"
          fill-opacity="1"
          d="M0,64L30,53.3C60,43,120,21,180,42.7C240,64,300,128,360,144C420,160,480,128,540,128C600,128,660,160,720,181.3C780,203,840,213,900,197.3C960,181,1020,139,1080,138.7C1140,139,1200,181,1260,170.7C1320,160,1380,96,1410,64L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    
    <!-- [==========>      FORM REGISTER      <==========] DONE -->
    <section class="form-register" id="form-register">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h3><i class="bi bi-card-text"></i> FORM REGISTER</h3>
              </div>
              <div class="col-md-6 mt-1">
                <div class="row justify-content-end align-content-end">
                  <div class="col-md-2 text-center pt-1 bg-light rounded-4 fw-semibold" id="no-antrian">#####</div>
                  <div class="col-md-5 text-start">
                    <button type="submit" onclick="noantrian();" class="btn btn-sm btn-success pe-3 ps-3 fw-semibold rounded-4"><i class="bi bi-ticket-detailed"></i> NOMOR PENDAFTARAN</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- List garis -->
            <div class="row border-top border-2 mt-4 mb-4"></div>

            <!-- Form registrasi -->
            <form action="" method="POST">
              <div class="row fw-semibold">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Nomor Pendaftaran</label>
                    <input type="text" name="npm" placeholder="..." class="form-control rounded-5 ps-3" autocomplete="off">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="..." class="form-control rounded-5 ps-3" autocomplete="off">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" name="telp" placeholder="..." class="form-control rounded-5 ps-3" autocomplete="off">
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" placeholder="..." class="form-control rounded-5 ps-3" autocomplete="off">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" placeholder="..." class="form-control rounded-5 ps-3" autocomplete="off">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Ujian Seleksi</label>
                    <select name="ujian_seleksi" class="form-control rounded-5 ps-3" autocomplete="off">
                      <option value="None">...</option>
                      <option value="Nilai Rapot">Nilai Rapot</option>
                      <option value="Ujian Tes">Ujian Tes</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" name="save" class="btn btn-sm btn-success fw-semibold rounded-4 pe-3 ps-3"><i class="bi bi-send-check"></i> Submit</button>&nbsp;
              <a class="btn btn-sm btn-danger fw-semibold rounded-4 pe-3 ps-3" href="indexphp-registration-registrasi.php"><i class="bi bi-box-arrow-in-left"></i> Cancel</a>
            </form>
            <?php
            include 'connect.php';
            if(isset($_POST['save'])){
            $insert = mysqli_query($connect, "INSERT INTO tb_registrasi VALUES 
                                    ('".$_POST['npm']."',
                                    '".$_POST['nama']."',
                                    '".$_POST['telp']."',
                                    '".$_POST['email']."',
                                    '".$_POST['jurusan']."',
                                    '".$_POST['ujian_seleksi']."')");
                if($insert){
                  $_SESSION['pesanEksekusi'] = "Suksess, data berhasil ditambahkan!";
                  header('location:indexphp-registration-registrasi.php #data-mahasiswa');
                  ob_end_flush();
                }else{
                  echo 'gagal disimpan'.mysqli_error($connect);
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
    
    <!-- [==========>  BOOTSTRAP JS LIBRARIES <==========] DONE -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- [==========>        NO-ANTRIAN       <==========] DONE -->
    <script src="js/indexphp-registration-noantrian.js"></script>
  </body>
</html>
