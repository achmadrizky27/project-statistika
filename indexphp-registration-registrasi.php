<!-- ===================================================                 
|                     DOKUMEN PHP                      | 
==================================================== -->
<?php
  // Pengkoneksian file PHP 
  include 'connect.php';
  session_start();
  session_destroy();
?>

<!-- ===================================================                 
|                     DOKUMEN HTML                     | 
==================================================== -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tinfor Media</title>
    <link rel="icon" href="img/general/logogundar.png" type="image/x-icon" />

    <!-- [==========> FRAMEWORK BOOTSTRAP 5.3 <==========] -->
    <!-- + Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
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
    /* [==========>           BODY          <==========] DONE */
    body {
      min-height: 1000pt;
    }

    /* [==========>       NAVIGASI BAR      <==========] DONE */
    .navbar {
      background-color: rgb(154, 128, 169);
    }

    /* [==========>         PROFILE         <==========] DONE */
    .profile {
      background-image: url("img/indexphp/registration/background.jpg");
      background-size: cover;
      background-position: center;
      padding-top: 7.5rem;
      padding-bottom: 8rem;
    }
    .profile div .kolomKanan {
      padding-top: 4rem;
    }

    /* [==========>        LIST TEXT        <==========] DONE */
    .list-text {
      background-color: rgb(154, 128, 169);
    }

    /* [==========>      DATA MAHASISWA     <==========] DONE */
    .data-mahasiswa {
      padding-top: 8rem;
      padding-bottom: 8rem
    }
  </style>

  <body>
    <!-- [==========>       NAVIGASI BAR      <==========] DONE -->
    <nav class="navbar navbar-expand-lg shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand fw-semibold"><img src="img/general/logogundar.png" alt="logogundar" width="25" />&nbsp; Tinfor Media</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto fw-bold gap-2">
            <li class="nav-item">
              <a class="nav-link" href="#data-mahasiswa"><i class="bi bi-person-circle"></i> DATA MAHASISWA</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success btn-sm mt-1 rounded-4 pe-3 ps-3 fw-semibold" href="indexphp-registration-registrasi-input.php"> FORM REGISTER</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success btn-sm mt-1 rounded-4 pe-3 ps-3 fw-semibold" href="index.php"><i class="bi bi-house-fill"></i> HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>   

    <!-- [==========>         PROFILE         <==========] DONE -->
    <section class="profile" id="profile">
      <div class="container">
        <div class="row justify-content-center align-content-center gap-5">
          <!-- Profile image -->
          <div class="col-md-5 text-center shadow-lg border border-1 p-2 rounded-4" data-aos="flip-left" data-aos-delay="250" style="background-color: rgba(193, 174, 243, 0.614)">
            <img src="img/general/logogundar.png" alt="logo-gundar" width="250" class="p-3 border-3 justify-content-center align-content-center text-center">
            <p class="fst-italic fw-semibold pt-3 text-center">" Railah mimpimu, demi masa depanmu "</p>
          </div>

          <!-- Accordian pemberitahuan -->
          <div class="col-md-5 kolomKanan">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    PENDAFTARAN
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body fw-semibold">Selamat datang, calon mahasiswa/mahasiswi baru tahun ajaran 2021/2022. <br><br>Calon peserta dapat mulai melakukan registrasi pada: <p class="fw-semibold">Hari/Tgl : 17 Agustus s.d 17 September 2021 <br>Pukul &nbsp;&nbsp;&nbsp;&nbsp;: 10.00 - 15.00 WIB <br>Tempat &nbsp;: Offline (J1 Kalimalang) // Online (<a href="indexphp-registration-registrasi-input.php">FORM REGISTER</a>) <br><br>Hormat Kami, <br><br><br>Rendi Irgi.S.kom.SPP.SDOGER</p></div>
                  </div>
                </div>
              <div class="accordion-item mt-2">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    UJIAN SELEKSI
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body fw-semibold">Ujian Seleksi khusus untuk UJIAN TES akan dilaksanakan pada: <br><br> Hari/tgl : 20 s.d 25 September 2021 <br>Pukul &nbsp;&nbsp;&nbsp;&nbsp;: 07.00 - 09.00 WIB <br> Tempat &nbsp;: Online (<a target="_blank" href="https://ujian.gunadarma.ac.id/">UJIAN SELEKSI</a>) <br><br> Ujian Seleksi akan dilakukan 2 tahap sebagai berikut: <br>1. Ujian Tes (1000 Essay & 15.000 PG) <br>2. Nilai Rapot <br><br> Untuk tata cara pelaksanaan akan diinformasikan lebih lanjut oleh koordinator panitia ! <br><br>Hormat Kami, <br><br><br>Rendi Irgi.S.kom.SPP.SDOGER</div>
                  </div>
                </div>
              <div class="accordion-item mt-2">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    KELULUSAN
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body fw-semibold">Kelulusan calon mahasiswa/mahasiswi baru akan diinformasikan pada Senin, 30 September 2021 atau para peserta dapat melihatnya pada link berikut: <br><a href="#">CEK KELULUSAN</a><br><br>Hormat Kami, <br><br><br>Rendi Irgi.S.kom.SPP.SDOGER</div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- [==========>        LIST TEXT        <==========] DONE -->
    <section class="list-text" id="list-text">
      <div class="container justify-content-center text-center pt-3">
        <marquee behavior="100" direction=""><p class="fs-5 fw-semibold">Selamat datang, calon mahasiswa/mahasiswi baru Gunadarma University jurusan Teknik Informatika.</p></marquee>
      </div>
    </section>

    <!-- [==========>     DATA MAHASISWA      <==========] DONE -->
    <section class="data-mahasiswa" id="data-mahasiswa">
      <div class="container">
        <!-- Profile -->
        <div class="row-3 text-start">
          <h3><i class="bi bi-person-circle"></i> DATA MAHASISWA</h3> 
          <!-- List garis -->
          <div class="row border-top border-2 border-black mb-4 mt-4"></div>
          <p>Dipersilahkan kepada calon mahasiswa/mahasiswi baru, untuk memeriksa kembali data sobat Informatika. <br>Data masih dapat dilakukan perubahan sebelum pada tanggal <span class="fw-semibold">17 September 4050</span></p>
        </div>

        <!-- Form pencarian -->
        <div class="row text-end mb-3">
          <form method="POST" action="#data-mahasiswa">
            <input type="text" name="keyword" autocomplete="off" placeholder="Ketikkan Nama/NoPend..." size="23" class="border-2 border-success rounded-4 ps-3">
            <button class="btn btn-sm btn-success fw-semibold mb-1 rounded-4 ps-3 pe-3 p-1 ms-1" type="submit" name="btn-keyword">Cari Peserta</button>
          </form>
        </div>

        <!-- Alert pemberitahuan "Data berhasil (DITAMBAH, DIHAPUS, DIUBAH)" -->
        <?php 
          if(isset($_SESSION['pesanEksekusi'])):
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php 
          echo $_SESSION['pesanEksekusi'];?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
          endif;
        ?>

        <!-- Tabel data mahasiswa -->
        <div class="row mt-2">
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
            } else {
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

        <!-- List garis -->
        <div class="border border-2 border-black mt-5"></div>
        
        <!-- Pemberitahuan informasi -->
        <div class="row pt-3">
          <div class="col-md-6">
            <p class="text-danger fw-bold">Perhatian !</p>
            <p class="text-start fst-italic fw-semibold">Jika terjadi kendala ataupun ingin mengetahui informasi lebih detail silahkan hubungi pihak terkait dibawah ini.</p>
            <div class="accordion shadow-lg" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="bi bi-telephone-fill text-success"></i> &nbsp; Hubungi kami !</button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body rounded-4">
                    <table class="table text-start">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Person/Instansi</th>
                          <th scope="col">Nomor</th>
                          <th scope="col">Jabatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Rendi Irgi Ardinansyah</td>
                          <td>0895 8899 0233</td>
                          <td>Ketua BEM FTI</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Fadilano Abraham</td>
                          <td>0877 2266 6633</td>
                          <td>Ketua HIMTI</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Call Center Gunadarma</td>
                          <td>0813 8900 9016</td>
                          <td>Staff Gunadarma</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>                    
      </div>
    </section>

    <!-- ===================================================                 
    |                    DOKUMEN JAVASCRIPT                | 
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
