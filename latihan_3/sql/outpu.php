<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device[width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <form action="" method="get">
        <input type="search" name="cari" id=""><input type="submit" value="cari">
    </form>
    <table border="1">

        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>TAHUN MASUK</th>
        </tr>

        <?php

        include "php_sql.php";
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT*FROM siswa1 WHERE nisn='$cari' OR nama_siswa='$cari'";
        }else{
            $sql = "SELECT*FROM siswa1";
        }

        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nama_siswa'] ?></td>
            <td><?= $data['tgl_lahir'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['tahun_masuk'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
<!--  == '1' ? 'Laki-Laki': 'Perempuan' -->