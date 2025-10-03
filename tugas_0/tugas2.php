<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Ganjil dan Genap</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .ganjil { color: green; }
        .genap { color: blue; }
    </style>
</head>
<body>
    <h2>Bilangan Ganjil dan Genap (1-100)</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<p class='genap'>$i = bilangan genap</p>";
        } else {
            echo "<p class='ganjil'>$i = bilangan ganjil</p>";
        }
    }
    ?>
</body>
</html>