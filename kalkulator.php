<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <?php
        if(isset($_POST['hitung'])) {
            $a = intval($_POST['bil1']);
            $b = intval($_POST['bil2']);
            $opera = $_POST['operator'];

            switch ($opera) {
                case 'tambah' :
                    $hasil = $a + $b;
                    break;
                case 'kurang' :
                    $hasil = $a - $b;
                    break;
                case 'kali' :
                    $hasil = $a * $b;
                    break;
                case 'bagi' :
                    $hasil = $a / $b;
                    break;
            }
        }

        if(isset($_POST['hapus'])) {
            $_POST['bil1'] = '';
            $_POST['bil2'] = '';
            $_POST['hasil'] = '';
        }
    ?>

        <div class = "kalkulator">
            <a href = "menu.html"><img src =  "exit.png" class = "exit"></img></a>
            <h2 class = "title">Kalkulator Sederhana</h2>
            <hr class = "horizontal">
            <form method = "POST" action = "kalkulator.php">
                <input type = "text" name  = "bil1" class = "bil" autocomplete = "off" placeholder = "Masukkan Bilangan Pertama">
                <input type = "text" name = "bil2" class = "bil" autocomplete = "off" placeholder = "Masukkan Bilangan Kedua">
                <select name = "operator" class = "operator">
                    <option value = "tambah">Tambah</option>
                    <option value = "kurang">Kurang</option>
                    <option value = "kali">Kali</option>
                    <option value = "bagi">Bagi</option>
                </select>
                <button name = "hitung" class = "tombol" value = "Hitung">Hitung</button>
                <button name = "hapus" class = "tombol" value = "Hapus">Hapus</button>
                <?php if(isset($_POST['hitung'])) { ?> 
                <input type = "text" name = "hasil" class = "bil1" value = "<?php  echo number_format($hasil) ?>" readonly> 
                <?php } else { ?> 
                <input type = "text" name = "hasil" class = "bil1" value = "0" readonly> 
                <?php } ?>
                <hr class = "horizontal">
                    <h5 class = "copyright">©Copyright Rustan For UKK 2024</h5>
            </form>
        </div>
</body>
</html>