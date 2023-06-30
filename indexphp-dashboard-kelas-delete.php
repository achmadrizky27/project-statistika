<?php
include 'connect.php';
session_start();
if(isset($_GET['npm'])){
    $delete = mysqli_query($connect, "DELETE FROM tb_kelasmahasiswa WHERE npm = '".$_GET['npm']."' ");
    $_SESSION['pesanKelasmahasiswa'] = "Suksess, data berhasil dihapus !";
    header('location:ruangadmin.php #kelas-mahasiswa');
}
?>
