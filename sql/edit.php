<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
</head>
<body>
    <?php
        if(!isset($_GET['nis'])){
            header("location:cari.php");
        }

        include "php_sql.php";
        
        if(isset($_POST['submit2'])){

            $nis = mysqli_real_escape_string($koneksi, $_POST['nis']) ?? '';
            $nama =  mysqli_real_escape_string($koneksi,$_POST['nama']) ?? '';
            $jenis_kelamin =  mysqli_real_escape_string($koneksi,$_POST['jenis_kelamin']) ?? '';
            $kelas =  mysqli_real_escape_string($koneksi,$_POST['kelas']) ?? '';
            $alamat =  mysqli_real_escape_string($koneksi,$_POST['alamat']) ?? '';
            
            $sql = "UPDATE DataSiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas', alamat='$alamat', foto='foto1' WHERE nis='$nis'";
            $query = mysqli_query($koneksi, $sql);

        }
        
        $nis = $_GET['nis'];
        $sql = "SELECT*FROM DataSiswa WHERE nis='$nis'";
        $query = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_array($query);

        $info = '';
        if(isset($_POST['submit2'])){
            if($query){
                $info = "berhasil update data";
            }else{
                $info = "gagal update data";
            }
        }
    ?>

    <div class="container">
        <div class="input4">
            <form action="" method="post">

                <label for="nis">NOMER INDUK SISWA</label><br>
                <input type="number" name="nis" value="<?= $data['nis'] ?>" readonly><br><br>

                <label for="nama">NAMA</label><br>
                <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>

                <input type="radio" name="jenis_kelamin" value="L" id="laki" <?= $data['jenis_kelamin']=="L"?"checked":"" ?> required>
                <label for="laki">Laki-Laki</label><br>

                <input type="radio" name="jenis_kelamin" value="P" id="perempuan" <?= $data['jenis_kelamin']=="P"?"checked":"" ?> required>
                <label for="perempuan">Perempuan</label><br><br>

                <label for="kelas">KELAS</label><br>
                <input type="number" name="kelas" id="kelas" value="<?= $data['kelas'] ?>" required><br><br>

                <label for="alamat">ALAMAT</label><br>
                <textarea name="alamat" id="alamat" required><?= $data['alamat'] ?></textarea><br><br>

                <input type="file" name="foto2"><br>


                <?php
                    if(file_exists ('foto/'.$data['foto'])){
                        $foto1 = $data['foto'];
                ?>
                    <img src="<?='foto/' .$foto1 ?>" alt="" style="width:50px; height: 50px;"><br><br>

                <?php
                    }else{
                        echo'not file';
                    }
                ?>
                <input type="submit" value="kirim" name="submit2">
            </form>
        </div>
    </div>
    <br>
    <input type="text" value="<?= $info ?>" readonly>
    <br>
    <a href="cari.php">lihat data</a>

</body>
</html>
