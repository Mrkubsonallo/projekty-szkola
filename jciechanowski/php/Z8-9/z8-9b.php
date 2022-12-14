<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z8-9b</title>
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
    <h2>Inkrementacja</h2>
    <?php
        $x = 1;
        echo $x++;
        echo ++$x;
        echo $x;
        $y = $x++;
        echo $y;
        $y = ++$x;
        echo $y;
        echo ++$y;
    ?>
    <h2>Dekrementacja</h2>
    <?php
        $x = 10;
        echo $x--;
        echo --$x;
        echo $x;
        $y = $x--;
        echo $y;
        $y = --$x;
        echo $y;
        echo --$y;
    ?>
</body>
</html>