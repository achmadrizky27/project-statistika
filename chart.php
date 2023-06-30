<?php 
    include_once "connect.php";

    $sql=$connect->prepare('SELECT * FROM tb_cobacoba ORDER BY jumlah DESC');
    $sql->execute();

    while($data=$sql->fetch(PDO::FETCH_ASSOC)) {
        extract($data);

        $json[]=[ (string)$produk, (int)$jumlah ];
    }

    echo json_encode($json);
    ?>