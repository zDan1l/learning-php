<?php 
// date
echo date('l, d-M-Y');
// time
echo date('l',time()+60*60*24*199);
// mktime
echo date('l',mktime(0,0,0,8,21,2003));
// strtime
echo date('l',strtotime('21 aug 2003'));
function ucapa($waktu = 'Datang',$nama = 'Ziyaa'){
    return "Selamat $waktu,$nama ";
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<br><br><br>
<h1><?= ucapa('halo', 'sata') ?></h1>

<body>

</body>

</html>