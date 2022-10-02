<?php 
$film = [[
    "judul" => '12 Cerita Glen Anggara',
    "sutradara" => 'Fajar Bustomi',
    'genre' => "Drama, Remaja",
    'tayang' => '!8 Agustus 2022',
    'pemain' => 'Prilly, Junior Roberts',
    'gambar' =>"gambar1.jpeg"
    ],
    ["judul" => 'Kamu Tidak Sendiri',
    "sutradara" => 'Arwin T.Wardhana',
    'genre' => "Drama",
    'tayang' => '25 Agustus 2022',
    'pemain' => 'Andinia Wirasati, Rio Dewantoro',
    'gambar' =>"gambar2.jpeg"
    ],  
    ["judul" => 'The Secred Riana 2:Blody Marry',
    "sutradara" => 'Billy Christian',
    'genre' => "Horor",
    'tayang' => '28 Juli 2022',
    'pemain' => 'The Secred Riana',
    'gambar' =>"gambar3.jpeg"
    ],
    ["judul" => 'Mencuri Raden Saleh',
    "sutradara" => 'Angga Dwimas Sasongko',
    'genre' => "Drama, Action",
    'tayang' => '25 Agustus 2022',
    'pemain' => 'Iqbal Ramadhan, Angga Yunanda, Rachel Amanda ',
    'gambar' =>"gambar4.jpeg"
    ],
    ["judul" => 'Pengabdi Setan 2:Communion',
    "sutradara" => 'Joko Anwar',
    'genre' => "Horor",
    'tayang' => '4 Agustus 2022',
    'pemain' => 'Tara Basro, Endy Arfian',
    'gambar' =>"gambar5.jpeg"
    ],
    ["judul" => 'Ghost Writer 2',
    "sutradara" => 'Muhandkly Acho',
    'genre' => "Horor, Komedi",
    'tayang' => '21 Juli 2022',
    'pemain' => 'Tatjana Saphira, Deva Mahendra',
    'gambar' =>"gambar6.jpeg"
    ],
    ["judul" => 'Bukan Cinderella',
    "sutradara" => 'Adi Garin',
    'genre' => "Drama, Romantis",
    'tayang' => '28 Juli 2022',
    'pemain' => 'Fujianti Utami, Rafael Adwel',
    'gambar' =>"gambar7.jpeg"
    ],
    ["judul" => 'Ivanna',
    "sutradara" => 'Kimo Stamboel',
    'genre' => "Horor",
    'tayang' => '14 Juli 2022',
    'pemain' => 'Caitlin Halderman',
    'gambar' =>"gambar8.jpeg"
    ],
    ["judul" => 'Keluarga Cemara 2',
    "sutradara" => 'Ismail Basbeth',
    'genre' => "Drama",
    'tayang' => '23 Juni 2022',
    'pemain' => 'Ringgo Agus Rahman, Nirina Zubir ',
    'gambar' =>"gambar9.jpeg"
    ],
    ["judul" => 'Ngeri-Ngeri Sedap',
    "sutradara" => 'Bene Dion Rajagukguk',
    'genre' => "Drama,Komedi",
    'tayang' => '2 Juni 2022',
    'pemain' => 'Boris Bokir, Tika Panggabean',
    'gambar' =>"gambar10.jpeg"
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
        display: grid;
        font-family: "poppins";
        font-size: 14px;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }
    </style>
</head>

<body>
    <h1>Daftar Film Indonesia 2022</h1>
    <div class="container">
        <?php foreach ($film as $fil):?>
        <ul>
            <img src="film/<?= $fil["gambar"] ?>" alt="gambar">
            <li>judul = <?= $fil["judul"]?></li>
            <li>sutradara = <?= $fil["sutradara"]?></li>
            <li>genre = <?= $fil["genre"]?></li>
            <li>tayang = <?= $fil["tayang"]?></li>
        </ul>
        <?php endforeach?>
    </div>
</body>

</html>