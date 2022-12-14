<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z10-11a+</title>
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
    <form action="z10-11aplus.php" method="POST">
        <input type="number" name="a">
        <input type="number" name="b">
        <input type="number" name="c">    
        <input type="submit" name="go" value="Wyślij">
    </form>

    <?php
        if(isset($_POST['go']))
        {
            $a = (int)$_POST['a'];
            $b = (int)$_POST['b'];
            $c = (int)$_POST['c'];

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
        }
    ?>
</body>
</html>