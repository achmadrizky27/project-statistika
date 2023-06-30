<?php
require 'vendor/autoload.php';
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_project_pbo";

$connect = mysqli_connect($host,$user,$pass,$db);
if (isset($_POST['submit'])) {
    $err        ="";
    $ekstensi   ="";
    $success    ="";

    $file_name = $_FILES['filexls']['name'];//untuk mendapatkan nama file yang di upload
    $file_data = $_FILES['filexls']['tmp_name'];// untuk mendapatkan

    if(empty($file_name)){
        $err .="<li>Silahkan masukan file yang kamu inginkan.</li>";

    }else{
        $ekstensi = pathinfo($file_name)['extension'];
    }
    $ekstensi_allowed = array("xls","xlsx");
    if(!in_array($ekstensi,$ekstensi_allowed)){
        $err .="<li>Silahkan masukan file tipe xls, atau xlsx. File yang kamu masukan <b>$file_name</b> punya tipe <b>$ekstensi</b></li>";
    }

    if(empty($err)){
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile("$file_data");
        $spreadsheet = $reader->load($file_data);
        $sheetData  =$spreadsheet->getActiveSheet()->toArray();
        
        $jumlahData = 0;
        for ($i=1; $i <count($sheetData) ; $i++) { 
            $npm = $sheetData[$i]['1'];
            $nama = $sheetData[$i]['2'];
            $telepon = $sheetData[$i]['3'];
            $email = $sheetData[$i]['4'];
            $jurusan = $sheetData[$i]['5'];
            $ujian_seleksi = $sheetData[$i]['6'];
            // echo "$npm - $nama - $telepon - $email - $jurusan <br/>";
            $sql1 = "INSERT INTO tb_registrasi (npm,nama,telepon,email,jurusan,ujian_seleksi) values ('$npm','$nama','$telepon','$email','$jurusan','$ujian_seleksi')";
            mysqli_query($connect,$sql1);

            $jumlahData++;

        }
        if($jumlahData > 0){
            $success = "$jumlahData Data berhasil masuk ke MySQL";
        }
    }

    if($err){
        ?>
        <div class="alert alert-danger">
            <ul><?php echo $err ?></ul>
        </div>
         <?php
    }
    if($success){
        ?>
        <div class="alert alert-primary">
            <ul><?php echo $success ?></ul>
        </div>
         <?php
    }
}
