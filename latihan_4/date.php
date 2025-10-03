<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = '17-01-2025';
        $bulan = [
            "January" => "januari",
        ];
        // echo date('Y-m-d', strtotime("+4 days", strtotime($jam)));
        // echo '<br>';
        // echo date('l', strtotime($jam));

        // echo date('Y-m-d');

        // d-F-Y 
        // $tgl = date('d F Y', strtotime($tanggal));
        // $arr_tgl = explode(" ", $tgl);
        // echo $arr_tgl[0]." ".$bulan[$arr_tgl[1]]." ".$arr_tgl[2];
    ?>
</body>
</html>



