<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z10-11c</title>
    <style>
        body
            {
                background-color: #222;
                color: #dbdbdb;
                font-size: 50px;
                user-select: none;
            }
    </style>
</head>
<body>
    <?php
        $liczba = 1;
        switch($liczba)
        {
            case 1:
                echo "Liczba zmienna jest równa 1";
            break;
            case 2:
                echo "Liczba zmienna jest równa 2";
            break;
            default:
                echo "Liczba zmienna nie jest równa 1 ani 2";
            break;
        }
    ?>
</body>
</html>