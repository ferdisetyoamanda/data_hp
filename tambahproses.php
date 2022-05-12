<?php
    include 'Connection.php';

    $merek_hp = $_POST['merek_hp'];
    $tipe = $_POST['tipe'];
    $tahun = $_POST['tahun'];

    $query_tambah = "INSERT INTO data_hp (merek_hp,tipe_hp,tahun_produksi) VALUES ('$merek_hp','$tipe','$tahun')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambahdata.php");
    }

?>