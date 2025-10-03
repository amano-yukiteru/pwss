<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device[width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <form action="" method="get">
        <input type="search" name="cari" id="">
        <input type="submit" value="cari">
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>KELAS</th>
            <th>ALAMAT</th>
        </tr>

        <?php
        include "php_sql.php";
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT*FROM siswa WHERE id_siswa='$cari' OR nis='$cari' OR nama='$cari' OR jenis_kelamin='$cari' OR kelas='$cari' OR alamat='$cari'";
        }else{
            $sql = "SELECT*FROM siswa";
        }

        $query = mysqli_query($koneksi, $sql);
        $no = 1;

        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $data['id_siswa'] ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['kelas'] ?></td>
            <td><?= $data['alamat'] ?></td>
        </tr>
        <?php
        }

        ?>
    </table>
</body>
</html>
<!--  == '1' ? 'Laki-Laki': 'Perempuan' -->