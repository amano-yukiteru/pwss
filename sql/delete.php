<?php
    if(isset($_GET['nis'])){
        include "php_sql.php";
        $nis = $_GET['nis'];
        $sql = "DELETE FROM  DataSiswa WHERE nis = $nis";
        $query = mysqli_query($koneksi, $sql);
        if($query){
            header("location: cari.php");
        }else{
            echo "gagal di hapus";
        }
    }else{
        echo "not found";
    }