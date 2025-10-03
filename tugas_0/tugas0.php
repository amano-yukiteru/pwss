<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tugas0.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            Nama: <input type="text" name="nama" >
            Kelas: <input type="text" name="kelas">
            Nilai tugas: <input type="text" name="nt">
            Nilai absen: <input type="text" name="na">
            Nilai uts: <input type="text" name="nut">
            Nilai uas: <input type="text" name="nua">
            <button type="reset">riset</button>
            <button type="submit" name="">submit</button>
        </form>
    </div>

    <?php
        $nama = $kelas = $total = $grade = "";

        if(isset($_POST["nama"])){
            $nama = $_POST["nama"];
            $kelas = $_POST["kelas"];
            $nt = (float)$_POST["nt"];
            $na = (float)$_POST["na"];
            $nut = (float)$_POST["nut"];
            $nua = (float)$_POST["nua"];

            $total = ($nt + $na + $nut + $nua) / 4;

            if($total >= 90){
                $grade = "A";
            }else if($total >= 80){
                 $grade = "B";
            } else if($total >= 70){
                $grade = "C";
            }else if($total >= 60){
                $grade = "D";
            }else{
                $grade = "E";
            }
        }
    ?>

    <div class="hasil">
        Nama<input type="text" value="<?php echo $nama;?>" readonly>
        Kelas<input type="text" value="<?php echo $kelas;?>" readonly>
        Total nilai<input type="text" value="<?php echo $total;?>" readonly>
        Grade<input type="text" value="<?php echo $grade;?>" readonly>
    </div>

</body>
    
</html>