<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .berwarna {
        background-color: #ccc;
        animation: animasi;
    }

    .berwarna2:hover {
        background-color: #000;
        color: #fff;
        transform: scale(3);
        animation: animasi;
    }

    .berwarna4:hover {
        background-color: #000;
        color: #fff;
        transform: scale(3);
        animation: animasi;
    }

    .berwarna2 {
        background-color: #cfc;
        animation: animasi;
    }

    @keyframes animasi {
        10% {
            color: red;
        }

        20% {
            color: green;
        }

        30% {
            color: blue;
        }

        40% {
            color: yellow;
        }

        50% {
            color: orange;
        }

        60% {
            color: salmon;
        }

        70% {
            color: orchid;
        }

        80% {
            color: burlywood;
        }

        90% {
            color: yellowgreen;
        }

        100% {
            color: gray;
        }
    }
    </style>
</head>

<body>
    <table border="1" cellspacing="10px" cellpadding="30px">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
        <?php if ($i % 2 == 1) :?>
        <tr class="berwarna">
            <?php else :?>
        <tr class="berwarna3">
            <?php endif ?>
            <?php for ($j=1; $j <= 10 ; $j++) : ?>
            <?php if ($j %2 ==0 ) :?>
            <td class="berwarna2">
                <?php else :?>
            <td class="berwarna4">
                <?php endif;?>
                <?php echo " $i ,$j";?>
            </td>
            <?php  endfor?>
        </tr>
        <?php }?>
    </table>

</body>

</html>