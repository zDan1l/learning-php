<?php 
$mahasiswas = [['Ziyaa Danil Mubarok','032487324408','Teknik Informatika','ziyadanil2108@gmail,com'],['Muhamad al-farizal','0324324500408','Teknik Komputer','muhammadfahrizal8@gmail,com'],['Dony al muhammmad','032485464508','Sistem Informasi','Dony987@gmail,com']]
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 50px;
    }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa Institut Teknologi Sepuluh Nopember</h1>
    <?php foreach ($mahasiswas as $mhs) : ?>
    <ul>
        <li><?= $mhs[0] ?></li>
        <li><?= $mhs[1] ?></li>
        <li><?= $mhs[2] ?></li>
        <li><?= $mhs[3] ?></li>
    </ul>
    <?php endforeach?>
</body>

</html>