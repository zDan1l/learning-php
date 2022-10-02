<?php 
// menampilkan array pada user dengan melakukan pengulangan
// for() atau foreach
// Memebuat array
$nomor = ['1','13','24','12,','4','12','332','1'];
?><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 100px;
    }

    div {
        width: 60px;
        height: 60px;
        color: #fff;
        text-align: center;
        line-height: 60px;
        background-color: royalblue;
        margin: 5px;
        float: left;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>


    <!-- pengulangan dengan for -->
    <?php for ($i=0; $i < count($nomor) ; $i++) :?>
    <div><?= $nomor[$i] ?></div>
    <?php endfor?><section class="clear"></section>

    <!-- pengulangan dengan foreach -->
    <?php foreach ($nomor as $no) :?>
    <div><?= $no ?></div>
    <?php endforeach ?>
</body>

</html>