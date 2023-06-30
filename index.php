<!-- ===================================================                 
|                     DOKUMEN PHP                      | 
==================================================== -->
<?php
    // =======================================
    // |            PENGKONEKSIAN            |
    // =======================================
    // + Connect.php
    include 'connect.php';

    // =======================================
    // |     TAMPILAN STATISTIK DASHBOARD    |
    // =======================================
    // Jumlah query pada tabel : tb_registrasi 
    $query_tb = $connect -> query("SELECT * FROM tb_registrasi");
    // + Register
    $register = mysqli_num_rows($query_tb); 
    // + Seleksi
    $seleksi = mysqli_num_rows($query_tb);

    // =======================================
    // |               FUNCTION              |
    // =======================================
    // + Ob_start
    ob_start();
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
        <!-- + Bootstrap Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
        <!-- + Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
        
        <!-- [==========>           CSS           <==========] -->
        <!-- + Index.css -->
        <link rel="stylesheet" href="index.css" />
        
        <!-- [==========>     FITUR TAMBAHAN      <==========] -->
        <!-- + Animated On Scroll -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- + JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <!-- + Highchart -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
    </head>
  
    <body id="tinformedia">
        <!-- [==========>       NAVIGASI BAR      <==========] DONE -->
        <nav class="navbar navbar-expand-lg shadow-lg fixed-top">
            <div class="container">
                <a class="navbar-brand fw-semibold"><img src="img/general/logogundar.png" alt="logogundar" width="25" />&nbsp; Tinfor Media</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Kumpulan button navigasi bar -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto fw-bold gap-2">
                        <!-- + Home -->
                        <li class="nav-item">
                            <a class="nav-link active border-2 border-top border-start rounded-2" href="#tinformedia"><i class="bi bi-house-fill"></i> HOME</a>
                        </li>
                        <!-- + Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="#dashboard"><i class="bi bi-bag-dash-fill"></i> DASHBOARD</a>
                        </li>
                        <!-- + Registration -->
                        <li class="nav-item">
                            <a class="nav-link" href="#registration"><i class="bi bi-database-fill-add"></i> REGISTRATION</a>
                        </li>
                        <!-- + News -->
                        <li class="nav-item">
                            <a class="nav-link border-2 border-bottom border-end rounded-2" href="#news"><i class="bi bi-newspaper"></i> NEWS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- [==========>         PROFILE         <==========] DONE -->
        <section class="profile" id="profile">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-5"></div>
                    <div class="col-md-7 text-start text-dark mt-4">
                        <h3>TINFOR MEDIA</h3>
                        <p class="fw-semibold"><span class="fw-bold">TINFOR MEDIA</span>
                        wadah pelayanan cepat tanggap & informasi <br> seputar kegiatan belajar mengajar mahasiswa atau mahasiswi <br> jurusan Teknik Informatika.</p>
                        <div class="row fs-4 d-flex pt-3">
                            <div class="col-md-6 text-end">
                                <div class="clock fw-semibold" id="clockDisplay"></div>
                            </div>
                            <div class="col-md-6 text-start">
                                <a href="indexphp-profile-tinforlapor.html"><button class="btn-tinforlapor btn btn-sm btn-success fw-semibold rounded-4 pe-3 ps-3 mb-1" href="indexphp-profile-tinforlapor.html"><i class="bi bi-chat-dots-fill"></i> Tinfor Lapor</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- [==========>        LIST TEXT        <==========] DONE -->
        <section class="list-text">
            <div class="container">
                <div class="row pt-3">
                    <marquee behavior="100" direction=""><p class="fs-5 text-center">Pelayanan <span class="fw-bold ">TINFOR LAPOR</span>, layanan pengaduan hanya berlaku di jam kerja <span class="fw-bold">SENIN s.d SABTU ( 07.00 - 15.00 WIB )</span></p></marquee>
                </div>
            </div>
        </section>

        <!-- [==========>        DASHBOARD        <==========] DONE -->
        <section class="dashboard" id="dashboard">
            <div class="container">
                <!-- Judul section dashboard -->
                <div class="row text-white mb-3" data-aos="fade-right" data-aos-delay="250">
                    <div class="col-md">
                        <h3><i class="bi bi-house-fill"></i> DASHBOARD</h3>
                    </div>
                </div>

                <!-- List garis -->
                <div class="row border-top border-2"></div>

                <!-- Kumpulan Statistik Dashboard -->
                <div class="row text-start pt-4 fw-bold">
                    <div class="col-md-3">
                        <div class="card" style="width: 15rem" data-aos="flip-left" data-aos-delay="250">
                            <div class="card-header text-white" style="background-color: rgb(104, 70, 124)">
                                <h5 class="card-title text-start">PENDAFTAR</h5>
                            </div>
                            <div class="card-body bg-transparent d-flex gap-4 mt-2">
                                <div class="col-md-5">
                                    <p class="card-title fs-5"><i class="bi bi-archive-fill"></i> <?php echo number_format($register,0,",",".");?></p>
                                </div>
                                <div class="col-md-7">
                                    <a href="indexphp-registration-registrasi.php #data-mahasiswa" class="btn btn-dark btn-sm rounded-4 pe-3 ps-3">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 15rem" data-aos="flip-left" data-aos-delay="250">
                            <div class="card-header text-white" style="background-color: rgb(104, 70, 124)">
                                <h5 class="card-title text-start">SELEKSI</h5>
                            </div>
                            <div class="card-body bg-transparent d-flex gap-4 mt-2">
                                <div class="col-md-5">
                                    <p class="card-title fs-5"><i class="bi bi-archive-fill"></i> <?php echo number_format($seleksi,0,",",".");?></p>
                                </div>
                                <div class="col-md-7">
                                    <a href="indexphp-registration-registrasi.php #data-mahasiswa" class="btn btn-dark btn-sm rounded-4 pe-3 ps-3">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- List Garis -->
                <div class="row border-bottom border-2 pt-4"></div>
                <br>

                <!-- Kumpulan Tinfor Button -->
                <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                    <div class="col-md-6 border-3 rounded-4 justify-content-center pt-3 pb-3 border-end border-bottom ps-4 shadow-lg fst-italic" style="background-color: rgb(104, 70, 124)">
                        <p class="fw-semibold text-white">Peserta dapat mencari kelas dan jadwal kuliah setelah mendapatkan konfirmasi kelas dari koordinator panitia !</p>
                        <div class="row-4 border-bottom border-2 mt-2 mb-2 w-75"></div>
                        <a href="indexphp-dashboard-jadwal&kelas.php" class="btn btn-sm btn-light pe-3 ps-3 rounded-2 mt-3 fw-semibold"> Cari kelas & jadwal kuliah</a>                  
                    </div>
                    <div class="col-md-6">
                        <!-- Event & Market -->
                        <div class="row">
                            <div class="col-md-6">
                                <a href="indexphp-dashboard-tinforevent.php" class="btn-dashboard btn btn-lg btn-success w-100 rounded-5 border-2 border-bottom fw-semibold"><i class="bi bi-calendar-event"></i> TINFOR EVENT</a>
                            </div>
                            <div class="col-md-6">
                                <a href="indexphp-dashboard-tinformarket.php" class="btn-dashboard btn btn-lg btn-success w-100 rounded-5 border-2 border-bottom fw-semibold"><i class="bi bi-shop"></i> TINFOR MARKET</a>
                            </div>
                        </div>

                        <!-- Perpus & Praktikum -->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <a href="indexphp-dashboard-tinforperpus.php" class="btn-dashboard btn btn-lg btn-success w-100 rounded-5 border-2 border-bottom fw-semibold"><i class="bi bi-collection"></i> TINFOR PERPUS</a>
                            </div>
                            <div class="col-md-6">
                                <a href="indexphp-dashboard-tinforpraktikum.html" class="btn-dashboard btn btn-lg btn-success w-100 rounded-5 border-2 border-bottom fw-semibold"><i class="bi bi-pc-display"></i> TINFOR PRAKTIKUM</a>
                            </div>
                        </div>

                        <!-- Tinfor Site -->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <a href="indexphp-dashboard-tinforsite.html" class="btn-dashboard btn btn-lg btn-success w-100 rounded-5 border-2 border-bottom fw-semibold"><i class="bi bi-browser-chrome"></i> TINFOR SITE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grafik visualisasi data -->
                <div class="row">
                    <div id="visualisasi-data"></div>    
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                fill="#ffffff"
                fill-opacity="1"
                d="M0,160L40,154.7C80,149,160,139,240,154.7C320,171,400,213,480,234.7C560,256,640,256,720,229.3C800,203,880,149,960,144C1040,139,1120,181,1200,186.7C1280,192,1360,160,1400,144L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </section>

        <!-- [==========>       REGISTRATION      <==========] DONE -->
        <section class="registration" id="registration">
            <div class="container">
                <!-- Judul section registration -->
                <div class="row text-end mb-3" data-aos="fade-left" data-aos-delay="250">
                    <div class="col-md">
                        <h3><i class="bi bi-database-fill-add"></i> REGISTRATION</h3>
                    </div>
                </div>

                <!-- List garis -->
                <div class="row border-top border-2 border-black "></div>

                <div class="row mt-4 align-content-center justify-content-center mt-4 text-center gap-5 p-4 shadow-lg rounded-4" style="background-image: url('img/indexphp/registration/profile-background.jpg');background-size:cover;background-position:center">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 p-5 shadow-lg rounded-4" data-aos="fade-right" data-aos-delay="250">
                        <p class="fst-italic fw-bold p-3 pt-2 rounded-4 shadow-lg text-start text-white" style="background-color: rgba(93, 43, 116, 0.459)">Selamat datang, Sobat Informatika ! <br> silahkan klik REGISTRATION untuk mendaftar sebagai calon mahasiswa atau mahasiswi baru jurusan Teknik Informatika.</p>
                        <a href="indexphp-registration-registrasi.php" class="btn-registrasi btn btn-success btn-lg rounded-5 mt-3 fw-semibold"><i class="bi bi-arrow-down-square"></i> REGISTRATION</a> 
                        <br>
                        <br>
                        <div class="row">
                            <div class="accordion shadow-lg" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="bi bi-telephone-fill text-success"></i> &nbsp; Hubungi kami !</button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
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
                    </div>       
                
                    <!-- Kolom Kanan-->
                    <div class="col-md-4 text-center" data-aos="flip-left" data-aos-delay="250">
                        <img src="img/indexphp/registration/profile-register1.png" alt="profile-register1" width="375" class="justify-content-center align-content-center text-center mt-4">
                        <div class="row border-3 border-bottom border-top rounded-4"><p class="fst-italic fw-semibold pt-3 text-center">" Railah mimpimu, demi masa depanmu "</p></div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path 
                    fill="rgb(104, 70, 124)" 
                    fill-opacity="1" 
                    d="M0,128L34.3,122.7C68.6,117,137,107,206,117.3C274.3,128,343,160,411,160C480,160,549,128,617,112C685.7,96,754,96,823,96C891.4,96,960,96,1029,122.7C1097.1,149,1166,203,1234,202.7C1302.9,203,1371,149,1406,122.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </section>

        <!-- [==========>           NEWS          <==========] DONE -->
        <section class="news" id="news">
            <div class="container">
                <!-- Judul section -->
                <div class="row text-start text-white mb-3">
                    <div class="col" data-aos="fade-right" data-aos-delay="250">
                        <h3><i class="bi bi-newspaper"></i> NEWS</h3>
                    </div>
                </div>
                
                <!-- List garis -->
                <div class="row border-top border-2"></div>

                <!-- Kumpulan tinfor site -->
                <div class="row pt-4 justify-content-center align-content-center" data-aos="fade-left" data-aos-delay="250">
                    <!-- + Kampus merdeka -->
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/indexphp/news/kampusmerdeka.png" class="card-img-top" alt="kampusmerdeka">
                            <div class="card-body">
                                <h5 class="card-title">KAMPUS MERDEKA</h5>
                                <p class="card-text">Sobat Informatika ! <br>Raih peluang masa depanmu bersama Kemendikbudristek</p>
                                <a target="_blank" href="https://kampusmerdeka.kemdikbud.go.id/" class="btn btn-dark btn-sm rounded-4 ps-3 pe-3">Read more !</a>
                            </div>
                        </div>
                    </div>

                    <!-- + Bangkit -->
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/indexphp/news/bangkit.png" class="card-img-top" alt="bangkit">
                            <div class="card-body">
                                <h5 class="card-title">BANGKIT</h5>
                                <p class="card-text">Sobat Informatika !  <br>Keterampilan dan sertifikasi teknologi bersama Bangkit</p>
                                <a target="_blank" href="https://grow.google/intl/id_id/bangkit/?tab=machine-learning" class="btn btn-dark btn-sm rounded-4 ps-3 pe-3">Read more !</a>
                            </div>
                        </div>
                    </div>

                    <!-- + Dicoding -->
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/indexphp/news/dicoding.jpeg" class="card-img-top" alt="dicoding">
                            <div class="card-body">
                                <h5 class="card-title">DICODING</h5>
                                <p class="card-text">Sobat Informatika ! <br>Bangun karirmu sebagai developer profesional bersama Dicoding</p>
                                <a target="_blank" href="https://www.dicoding.com/" class="btn btn-dark btn-sm rounded-4 ps-3 pe-3">Read more !</a>
                            </div>
                        </div>
                    </div>

                    <!-- + GDSC -->
                    <div class="col-md-4 pt-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/indexphp/news/gdsc.png" class="card-img-top" alt="gdsc">
                            <div class="card-body">
                                <h5 class="card-title">GDSC</h5>
                                <p class="card-text">Sobat Informatika ! <br>Bangun komunitas teknologi bersama GDSC (University) </p>
                                <a target="_blank" href="https://gdsc.community.dev/" class="btn btn-dark btn-sm rounded-4 ps-3 pe-3">Read more !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                fill="#ffffff"
                fill-opacity="1"
                d="M0,160L40,154.7C80,149,160,139,240,154.7C320,171,400,213,480,234.7C560,256,640,256,720,229.3C800,203,880,149,960,144C1040,139,1120,181,1200,186.7C1280,192,1360,160,1400,144L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </section>

        <!-- [==========>          FOOTER          <==========] DONE -->
        <section class="footer rounded-bottom rounded-4" id="footer">
            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <br><br>

                <div class="row text-center rounded-5 rounded-bottom pt-3" style="background-color: rgb(154, 128, 169)">
                    <h4>Tinfor Media</h4>
                    <p class="fw-semibold"><span class="fw-bold">TINFOR MEDIA</span>
                        wadah pelayanan cepat tanggap & informasi <br> seputar kegiatan belajar mengajar mahasiswa atau mahasiswi <br> jurusan Teknik Informatika.</p>
                </div>

                <div class="row mt-5 p-5 justify-content-center align-content-center gap-5" style="background-color: rgb(154, 128, 169)">
                    <div class="col-md-5">
                        <h5>ALAMAT / SITUS</h5>
                        <div class="row border-2 rounded-2 border border-black mt-2 mb-4 ms-0"></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.113465946603!2d106.96813767346809!3d-6.248776261181227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c5204032a97%3A0x7dd864ce65061cd8!2sUniversitas%20Gunadarma%20Kampus%20J1!5e0!3m2!1sid!2sid!4v1687771341800!5m2!1sid!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4 shadow-lg"></iframe>
                        <p class="mt-2 fw-semibold">Universitas Gunadarma; Jl. KH. Noer Ali, Jakasampurna, Kota Bekasi, Jawa Barat. <br>
                            E-mail : gunadarmaJ1Kalmal@gmail.com
                        </p>
                        <div class="row rounded-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb gap-3">
                                    <li><a href="ruangadmin.php">RUANG ADMIN</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- Alert Notifikasi Contact Us -->
                        <h5>CONTACT US</h5>
                        <div class="row border-2 rounded-2 border border-black mt-2 mb-3 ms-0"></div>
                        <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                            <strong>Terima kasih!</strong> Pesan telah berhasil dikirim <i class="bi bi-check-circle text-success"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <!-- Form Tinfor Lapor -->
                        <form name="contact-form" class="fw-bold">
                            <div class="mb-4">
                                <label for="name" class="form-label"><i class="bi bi-file-person-fill"></i> Nama Lengkap</label>
                                <input type="text" class="form-control border-4 rounded-2 ps-3" placeholder="..." id="name" aria-describedby="name" name="nama" autocomplete="off" />
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label"><i class="bi bi-envelope-at"></i> Email</label>
                                <input type="email" class="form-control border-4 rounded-2 ps-3" placeholder="..." id="email" aria-describedby="email" name="email" autocomplete="off" />
                            </div>
                            <div class="mb-4">
                                <label for="pesan" class="form-label"><i class="bi bi-chat-left-dots"></i> Pesan</label>
                                <textarea class="form-control border-4 rounded-2 ps-3" placeholder="..." id="pesan" rows="3" name="pesan" autocomplete="off"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-submit btn-Kirim btn-sm pe-3 ps-3 rounded-4 fw-semibold" onclick="tinforlapor();"><i class="bi bi-send-check"></i> Submit</button>
                            <button class="btn btn-success btn-sm pe-3 ps-3 rounded-4 d-none btn-Loading" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                        </form>
                    </div>
                </div>

                <div class="row text-center rounded-5 rounded-top pt-3 mt-5" style="background-color: rgb(154, 128, 169)">
                    <h4>Team 4</h4>
                    <p class="justify-content-center align-content-center fw-bold">
                        Created by 
                        <a target="_blank" class="text-dark" href="https://www.instagram.com/rizkyach_/">Achmad Rizky</a>&nbsp; 
                        <a target="_blank" class="text-dark" href="https://www.instagram.com/fadilanoa/">Fadilano Abraham</a>&nbsp;
                        <a target="_blank" class="text-dark" href="https://www.instagram.com/maulanabintg_/">Maulana Bintang Pamungkas</a>&nbsp;
                        <a target="_blank" class="text-dark" href="https://www.instagram.com/rayhanpasya_/"> M. Rayhan Pasyaputra</a>&nbsp;
                        <a target="_blank" class="text-dark" href="https://www.instagram.com/rndirg.25/">Rendi Irgi Ardinansyah</a>
                    </p>
                </div>
            </div>
        </section>
        
        <!-- ===================================================                 
        |                   DOKUMEN JAVASCRIPT                 | 
        ==================================================== -->
        <!-- [==========>    ANIMATED ON SCROLL   <==========] DONE -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>AOS.init();</script>

        <!-- [==========>      BOOTSTRAP 5.3      <==========] DONE -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <!-- [==========>          CLOCK          <==========] DONE -->
        <script src="js/indexphp-profile-clock.js"></script>

        <!-- [==========>      TINFOR LAPOR       <==========] DONE -->
        <script src="js/indexphp-profile-tinforlapor.js"></script>

        <!-- [==========>    VISUALISASI DATA     <==========] DONE -->
        <script>
            $(document).ready(function(){
                var options = {
                    chart:{
                        renderTo: 'visualisasi-data',
                        type: 'column'
                    },
                    title: {
                        text: 'Merchandise Tinfor Market'
                    },
                    subtitle:{
                        text: 'Produk Tinfor Media'
                    },
                    series:[{}]
                };
                $.getJSON{'chart.php', function(data){
                    options.series[0].data=data;
                    var chart = new Highcharts.Chart(options);
                }};
            });
        </script>
    </body>
</html>