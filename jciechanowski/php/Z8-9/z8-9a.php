<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z8-9a</title>
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
        $a = 10;
        $b = 20;
        echo "a = $a, b = $b<br>";
        $c = $a + $b;
        echo "a + b = $c<br>";
        $c = $b - $a;
        echo "a - b = $c<br>";
        $c = $a * $b;
        echo "a * b = $c<br>";
        $c = $a / 2;
        echo "a / 2 = $c<br>";
        $c = $a ** 3;
        echo "a ^ 3 = $c<br>";
        $c = $a ** 3;
        echo "a <sup>3</sup> = $c";
    ?>
</body>
</html>