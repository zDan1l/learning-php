<?php 
$mahasiswa = [[
    "nama" => 'Ziyaa Danil Mubarok',
    "nomor" => '08730247324',
    'email' => "ziyadanil2108@gmail.com",
    'jurusan' => 'Teknik Informatika',
    'gambar' =>"gambar1.jpg"
    ],
    ["nama" => 'Alecandre algraba',
    "nomor" => '087657454',
    'email' => "zidfsdl2108@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar2.jpg"
    ],  
    ["nama" => 'Dnoy Mamnggui',
    "nomor" => '0843573063524',
    'email' => "zidsfg108@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar3.jpg"
    ],
    ["nama" => 'Sigit Dwi',
    "nomor" => '0873034624324',
    'email' => "zsdfjkhil2108@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar4.jpg"
    ],
    ["nama" => 'Laksono Doni',
    "nomor" => '08735675624',
    'email' => "zfdghtsd8@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar5.jpg"
    ],
    ["nama" => 'Indrawan Doni',
    "nomor" => '087356435524',
    'email' => "zfdfdsd8@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar6.jpg"
    ],
    ["nama" => 'Ahmad Bagus',
    "nomor" => '0873534563424',
    'email' => "zfdsdfgdfs8@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar7.jpg"
    ],
    ["nama" => 'Bagus Putra',
    "nomor" => '08735654624',
    'email' => "zfdgdfsgsdf8@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar8.jpg"
    ],
    ["nama" => 'Putra Teguh',
    "nomor" => '087345344354',
    'email' => "zfddfgdfsgd8@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar9.jpg"
    ],
    ["nama" => 'Wahyu Adi Putra',
    "nomor" => '087543775624',
    'email' => "fdghdfghsd8@gmail.com",
    'jurusan' => 'Teknik Informatika ',
    'gambar' =>"gambar10.jpg"
    ]
]
?><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <style>
    img {
        width: 140px;
        margin-bottom: 10px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
    }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <div class="container">
        <?php foreach ($mahasiswa as $mhs):?>
        <ul>
            <img src="img/<?= $mhs["gambar"] ?>" alt="">
            <li>Nama = <?= $mhs["nama"]?></li>
            <li>Nomor = <?= $mhs["nomor"]?></li>
            <li>Email = <?= $mhs["email"]?></li>
            <li>Jurusan = <?= $mhs["jurusan"]?></li>
        </ul>
        <?php endforeach?>
    </div>
</body>

</html>