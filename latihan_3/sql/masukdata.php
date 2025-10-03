<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
</head>
<body>
    <?php
        $info =  null;
        if(isset($_POST['submit2'])){
            include "php_sql.php";

        $nis = $_POST['nis'] ?? '';
        $nama = $_POST['nama'] ?? '';
        $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
        $kelas = $_POST['kelas'] ?? '';
        $alamat = $_POST['alamat'] ?? '';

            $sql = "INSERT INTO siswa (nis, nama, jenis_kelamin, kelas, alamat) 
                    VALUES ('$nis','$nama','$jenis_kelamin','$kelas','$alamat')";
            $query = mysqli_query($koneksi, $sql);
            if ($query == true) {
                $info = "berhasil";
            }else{
                $info = "gagal";
            }
        }
    ?>

    <div class="container">
        <div class="input4">
            <form action="" method="post">

                <label for="nis">NOMER INDUK SISWA</label><br>
                <input type="number" name="nis" id="" required><br><br>
                
                <label for="nama">NAMA</label><br>
                <input type="text" name="nama" id="" required><br><br>

                <input type="radio" name="jenis_kelamin" value="L" id="laki" required>
                <label for="laki">Laki-Laki</label><br>
                <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required>
                <label for="perempuan">Perempuan</label><br><br>


                <label for="kelas">KELAS</label><br>
                <input type="text" name="kelas" id="kelas" required><br><br>

                <label for="alamat">ALAMAT</label><br>
                <input type="text" name="alamat" id="alamat" required><br><br>

                <input type="submit" value="kirim" name="submit2">
            </form>
        </div>
    </div>
    <br>
    <input type="text" value="<?= $info ?>" readonly>

</body>
</html>
