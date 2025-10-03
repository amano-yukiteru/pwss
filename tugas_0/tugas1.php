<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            line-height: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center;
            width: auto;
            background-color: rgb(0, 255, 255);
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
    <div class="container">
    <form action="" method="post">
        nama <br><input type="text"  name="nama"><br>
        jumlah peserta upacara <br><input type="number" name="jpu"><br>
        jumlah baris <br><input type="number" name="jb"><br>
        jumlah kolom <br><input type="number" name="jk"><br>
        <button type="submit">kirim</button>
    </form>
    </div>

    <?php
        if(isset($_POST["nama"])){
            $nama = $_POST["nama"];
            $jumlah_siswa = (int)readline("Masukkan jumlah siswa: ");
            $jumlah_baris = (int)readline("Masukkan jumlah baris: ");
            $jumlah_kolom = (int)readline("Masukkan jumlah kolom: ");

            $count = 0;
            for ($i = 0; $i < $jumlah_baris; $i++) {
                for ($j = 0; $j < $jumlah_kolom; $j++) {
                    if ($count < $jumlah_siswa) {
                        echo "x";
                        $count++;
                    } else {
                        echo " ";
                    }
                }
                echo "\n";
            }
        }
    ?>
    
</body>
</html>