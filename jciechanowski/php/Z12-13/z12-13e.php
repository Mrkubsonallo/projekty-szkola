<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z12-13e</title>
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
        function dodajJeden(&$liczba)
        {
            $liczba += 1;
        }

        $liczba = 1;
        echo "Przed wykonaniem funkcji liczba = $liczba <br>";
        dodajJeden($liczba);
        echo "Po wykonaniu funkcji liczba = $liczba <br>";
    ?>
</body>
</html>