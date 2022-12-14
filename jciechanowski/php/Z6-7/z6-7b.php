<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z6-7b</title>
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
        $zmienna1 = 100;
        echo "Wartość zmiennej = $zmienna1"."<br>"."Typ zmiennej: ".gettype($zmienna1)."<br><br>";

        $zmienna1 = 1.5;
        echo "Wartość zmiennej = $zmienna1"."<br>"."Typ zmiennej: ".gettype($zmienna1)."<br><br>";

        $zmienna1 = "Przykładowy tekst";
        echo "Wartość zmiennej = $zmienna1"."<br>"."Typ zmiennej: ".gettype($zmienna1);

    ?>
</body>
</html>