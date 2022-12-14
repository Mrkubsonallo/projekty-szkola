<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z10-11a</title>
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
        $a = 1;
        $b = 1;
        $c = -2;

        echo "Parametry równania: <br>";
        echo "a = $a, b = $b, c = $c<br>";

        if($a == 0)
            echo "To nie jest równanie kwadratowe: a = 0!";
        else
        {
            $delta = $b ** 2 - 4 * $a * $c;

            if($delta == 0)
            {
                $wynik = -$b / (2 * $a);
                echo "Rozwiązanie: x = $wynik";
            }
            else
            {
                $wynik = (-$b + sqrt($delta)) / (2 * $a);
                echo "Rozwiązanie: x<sub>1</sub> = $wynik";
                $wynik = (-$b - sqrt($delta)) / (2 * $a);
                echo ", x<sub>2</sub> = $wynik";
            }
        }
    ?>
</body>
</html>