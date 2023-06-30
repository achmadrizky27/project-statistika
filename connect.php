<!-- ===================================================                 
|                     DOKUMEN PHP                      | 
==================================================== -->
<?php
  // Database : db_project 
  // Tabel    : 1. tb_registrasi
  //            2. tb_jadwalkuliah
  //            3. tb_kelasmahasiswa
  //            4. tb_cobacoba
  
  // Membuat variabel '$connect' sebagai jalur koneksi ke database
  $connect  = mysqli_connect('localhost', 'root', '');

  // Memanggil database 'db_project_pbo'
  mysqli_select_db($connect, 'db_project_pbo');
?>

