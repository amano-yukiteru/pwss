<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web 1</title>
    <!-- <link rel="stylesheet" href="/LATIHAN_1/style.css"> -->
</head>
<body>
    <p> $tajae = 800000;<br>
        $tabae = 600000;<br>
        $tajab = 400000;<br>
        $tabab = 200000;<br>
        $tajar = 100000;<br>
        $tabar = 80000;</p><br>

        <form action="" method="post">
            <table>
                <tr>
                    <td>pilih class </td>
                    <td>
                        <select name="class" id="">
                            <option value="Eksekutif">Eksekutif</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Ekonomi">Ekonomi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>tujuan</td>
                    <td>
                        <input type="radio" name="tujuan" id="" value="1">TASIKMALAYA-JAKARTA
                        <br>
                        <input type="radio" name="tujuan" id="" value="2">TASIKMALAYA-BANDUNG
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="LIHAT" name="submit"></td>
                </tr>
            </table>
        </form>


        <?php
    //     $text = "asalamualaikum warohmatullohi wabarokatuh, selamat datang di smk ypc tasikmalaya. dengan penuh rasa syukur, kami hadir sebagai lembaga pendidikan yang berkomitment untuk mencetak generasi  muda yang kompetent, karakter";
    //     $h = "hendi";
    //     $e = 17;
    //     $n = "dari tawang banteng";
    //         echo "nama  : $h";
    //         echo "<br> umur : $e";
    //         echo "<br> alamat : $n";
    //     echo "<br><br>";

    //     echo str_replace("smk ypc tasikmalaya", "SMK YPC TASIKMALAYA", $text);
    //     echo "<br><br>";

    //     echo str_replace("$text", "SELAMAT DATANG DI SMK YPC TASIKMALAYA", $text);
    //     echo "<br><br>";

    //     echo str_word_count("$text");

    //         echo "hello world";
    // $x = 181;

    //     echo"
    //     <br><br>
    //     ";
    //     if($x >= 185){
    //         echo "kamu lolos";
    //     }else{
    //         echo "tidak lolos";
    //     }
    //     echo "<br><br>"; 

        $tajae = 800000;
        $tabae = 600000;
        $tajab = 400000;
        $tabab = 200000;
        $tajar = 100000;
        $tabar = 80000;
        $tb = 0;
        $tbs = 0;
        

        if(isset($_POST['submit'])){
            $class = $_POST['class'];
            $tujuan = $_POST['tujuan'];
        
            if($class == "Eksekutif"){
                if($tujuan == '1'){
                    $tb = $tajae * 20/100;
                    $tbs = $tajae - $tb;
                    echo $tbs;

                }else if($tujuan == '2'){
                    $tb = $tabae * 20/100;
                    $tbs = $tabae - $tb;
                    echo $tbs;
                }else{
                    echo "tolong pilih";
                }

            }else if($class == "Bisnis"){

                if($tujuan == '1'){
                    echo $tajab;
                }else if($tujuan == '2'){
                    echo $tabab;
                }else{
                    echo "tolong pilih";
                }

            }else if($class == "Ekonomi"){
                
                if($tujuan == '1'){
                    echo $tajar;
                }else if($tujuan == '2'){
                    echo $tabar;
                }else{
                    echo "tolong pilih";
                }
            }
        }

        ?>
</body>
</html>