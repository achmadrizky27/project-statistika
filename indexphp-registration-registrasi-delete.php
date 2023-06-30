<?php
include 'connect.php';
session_start();
if(isset($_GET['npm'])){
    $delete = mysqli_query($connect, "DELETE FROM tb_registrasi WHERE npm = '".$_GET['npm']."' ");
    $_SESSION['pesanEksekusi'] = "Suksess, data berhasil dihapus !";
    header('location:indexphp-registration-registrasi.php #data-mahasiswa');
}
?>
