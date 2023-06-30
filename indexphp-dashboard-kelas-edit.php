<?php
    include 'connect.php';

    session_start();
    
    $data_edit = mysqli_query($connect, "SELECT * FROM tb_kelasmahasiswa WHERE npm = '" .$_GET['npm']."'");
    $result = mysqli_fetch_array($data_edit);
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
    .navbar {
        background-color: rgb(154, 128, 169);
    }
    .kelas-mahasiswa {
        padding-top: 8rem;
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
        </div>
    </nav>
  <section class="kelas-mahasiswa" id="kelas-mahasiswa">
        <div class="container">
            <div class="row-6">
                <h3><i class="bi bi-card-text"></i> EDIT DATA</h3>
            </div>

            <!-- List garis -->
            <div class="row border-top border-2 mt-4 mb-4 border-black"></div>

            <!-- Form edit register -->
                <form action="" method="POST">
                    <div class="row fw-semibold">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">NPM</label>
                                <input type="text" name="npm" placeholder="..." class="form-control rounded-4 ps-3 border-black" autocomplete="off" value="<?php echo $result['npm'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="..." class="form-control rounded-4 ps-3 border-black" autocomplete="off" value="<?php echo $result['nama'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" name="kelas" placeholder="..." class="form-control rounded-4 ps-3 border-black" autocomplete="off" value="<?php echo $result['kelas'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="edit" class="btn btn-sm btn-success fw-semibold rounded-4 pe-3 ps-3" id="saveEdit"><i class="bi bi-send-check"></i> Submit</button>&nbsp;
                    <a class="btn btn-sm btn-danger fw-semibold rounded-4 pe-3 ps-3" href="ruangadmin.php #kelas-mahasiswa"><i class="bi bi-box-arrow-in-left"></i> Cancel</a>               
                </form>
                <?php
                if(isset($_POST['edit'])){
                    $update = mysqli_query($connect, "UPDATE tb_kelasmahasiswa SET nama = '".$_POST['nama']."',
                        kelas = '".$_POST['kelas']."' WHERE npm = '" .$_GET['npm']."'");
                    if($update){
                      $_SESSION['pesanKelasmahasiswa'] = "Suksess, data berhasil diperbarui !";
                      header('location:ruangadmin.php #kelas-mahasiswa');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>