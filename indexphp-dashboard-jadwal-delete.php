<!-- ===================================================                 
|                     DOKUMEN PHP                      | 
==================================================== -->
<?php
    // Menghubungkan dan memanggil file 'connect.php'
    include 'connect.php';

    // Variabel global $_SESSION
    session_start();

    // Program menghapus array jadwal kuliah yang dipilih dengan kunci 'hari'
    if(isset($_GET['hari'])){
        $delete = mysqli_query($connect, "DELETE FROM tb_jadwalkuliah WHERE hari = '".$_GET['hari']."'");
        $_SESSION['pesanJadwalkuliah'] = "Suksess, data berhasil dihapus !";
        header('location:ruangadmin.php #jadwal-kuliah');
    }
?>
