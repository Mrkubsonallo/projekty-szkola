<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z12-13a</title>
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
        function dodaj($x, $y)
        {
            $wynik = $x + $y;
            echo "$x + $y = $wynik";
        }
        dodaj(5, 10)
    ?>
</body>
</html>