<?php

    include('Connection.php');
        $id = $_POST['id'];
        $merek_hp= $_POST['merek_hp'];
        $tipe = $_POST['tipe'];
        $tahun = $_POST['tahun']; 

        $query_edit = "UPDATE data_hp SET merek_hp='$merek_hp', tipe_hp='$tipe', tahun_produksi='$tahun' WHERE id = '$id' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$id");
        }
?>