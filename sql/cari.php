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
    <!-- <p><a href="../"></a>link</p>y -->
    <table border="1">
        <br>
        <a href="cari.php"><button>riset</button></a><br><br>
        <a href="masukdata.php"><button>add</button></a><br>
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>KELAS</th>
            <th>ALAMAT</th>
            <th>FOTO</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>

        <?php
        include "php_sql.php";
        if(isset($_GET['cari'])){
            // $cari = $_GET['cari'];
            $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
            $sql = "SELECT*FROM DataSiswa WHERE nis='$cari' OR nama='$cari' OR jenis_kelamin='$cari' OR kelas='$cari' OR alamat='$cari'";
        }else{
            $sql = "SELECT*FROM DataSiswa";
        }

        $query = mysqli_query($koneksi, $sql);
        $no = 1;

        while($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nis'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['jenis_kelamin'] ?></td>
                    <td><?= $data['kelas'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td>
                        <?php
                            if(file_exists ('foto/'.$data['foto'])){
                        ?>

                            <img src="<?='foto/' .$data['foto']?>" alt="" style="width:50px; height: 50px;">

                        <?php
                            }else{
                                echo'not file';
                            }
                        ?>
                    </td>
                    <td>
                        <a href="delete.php?nis=<?= $data['nis'] ?>">
                            <button>delete</button>
                        </a>
                    </td>
                    <td>
                        <a href="edit.php?nis=<?= $data['nis'] ?>">
                            <button>edit</button>
                        </a>
                    </td>
                </tr>
                <br>
            <?php
        }
        ?>
    </table>
    <br>
    <br>
    <br>
    
</body>
</html>
<!--  == '1' ? 'Laki-Laki': 'Perempuan' -->