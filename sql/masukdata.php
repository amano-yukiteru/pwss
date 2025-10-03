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
            
            

            $nis = mysqli_real_escape_string($koneksi, $_POST['nis']) ?? '';
            $nama =  mysqli_real_escape_string($koneksi,$_POST['nama']) ?? '';
            $jenis_kelamin =  mysqli_real_escape_string($koneksi,$_POST['jenis_kelamin']) ?? '';
            $kelas =  mysqli_real_escape_string($koneksi,$_POST['kelas']) ?? '';
            $alamat =  mysqli_real_escape_string($koneksi,$_POST['alamat']) ?? '';
            $foto = $_FILES['foto'];

            if($foto['size'] < 3000000){

                $file_name = $foto['name'];
                $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = uniqid() .'.'.time() .$file_extension;
                if(move_uploaded_file($foto['tmp_name'], 'foto/' .$new_file_name)){
                    $sql = "INSERT INTO DataSiswa (nis, nama, jenis_kelamin, kelas, alamat, foto)
                    VALUES ('$nis','$nama','$jenis_kelamin','$kelas','$alamat','$new_file_name')";
                }else{
                    $sql = "INSERT INTO DataSiswa (nis, nama, jenis_kelamin, kelas, alamat, foto)
                    VALUES ('$nis','$nama','$jenis_kelamin','$kelas','$alamat','-')";
                }

                $query = mysqli_query($koneksi, $sql);
                if ($query == true) {
                    $info = "berhasil";
                }else{
                    $info = "gagal";
                }
            }else{
                echo"ukuran foto teralu besar";
            }

            
            
        }
    ?>

    <div class="container">
        <div class="input4">
            <form action="" method="post" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label for="nis">NOMER INDUK SISWA</label><br>
                        <input type="number" name="nis" id="" required><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">NAMA</label><br>
                        <input type="text" name="nama" id="" required><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" id="laki" required>
                        <label for="laki">Laki-Laki</label><br>
                        <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required>
                        <label for="perempuan">Perempuan</label><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kelas">KELAS</label><br>
                        <input type="number" name="kelas" id="kelas" required><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">ALAMAT</label><br>
                        <textarea type="text" name="alamat" id="alamat" required></textarea><br><br>
                        <!-- <input type="text" name="alamat" id="alamat" required><br><br> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="profile">PROFILE</label><br>
                        <input type="file" name="foto" accept="image/*"><br><br><br><br>
                    </td>
                </tr>
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
