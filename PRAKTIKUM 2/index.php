<?php
include "Orang.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div>
        <?php
        // proses instansiasi
        $mahasiswa = new Orang();
        
        $mahasiswa->nama = "Riski Saputra";
        $mahasiswa->tgllahir = "2004-09-01";
        $mahasiswa->alamat = "Sungai Itik";
        

        //memanggil method
        $mahasiswa->ucapkanSalam();

        echo "Br>";

        $mahasiswa2 = new Orang();
        $mahasiswa2->nama = "Emely Walker";
        $mahasiswa2->tgllahir = "1999-06-04";
        $mahasiswa2->alamat = "Tanggerang";

        $mahasiswa2->ucapkanSalam();
        ?>
    </div>
</body>
</html>