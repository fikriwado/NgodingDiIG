<?php 
    if ( isset($_POST['submit']) ) {
        $teks = $_POST['teks'];
        $jumlah_huruf = strlen(trim($teks));
        $jumlah_kata = str_word_count(trim($teks));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Huruf dan Kata</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h3>Hitung Jumlah Huruf dan Kata</h3>
    <form action="hitung_huruf_dan_kata.php" method="POST">
        <input type="text" name="teks" autocomplete="off">
        <input type="submit" name="submit" value="Hitung">
    </form>
    
    <?php if ( !empty($teks) && !empty($jumlah_huruf) && !empty($jumlah_kata)) : ?>
        <h4>Kamu Memasukan Teks : <?= $teks; ?></h4>
        <p>Jumlah huruf ada : <?= $jumlah_huruf; ?></p>
        <p>Jumlah kata ada : <?= $jumlah_kata; ?></p>
    <?php endif; ?>
</body>
</html>