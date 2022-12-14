<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z18-19a</title>
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
        class Osoba
        {
            public $imie;
            public $nazwisko;
            function pokaz()
            {
                echo "Test metody pokaz()";
            }
        }

        $osoba1 = new Osoba();
        $osoba1 -> imie = "Jan";
        $osoba1 -> nazwisko = "Kowalski";
        echo "Wartość pola imie = $osoba1->imie<br>";
        echo "Wartość pola nazwisko = $osoba1->nazwisko<br>";
        echo "Wywołanie funkcji pokaz(): ";
        $osoba1->pokaz();
    ?>
</body>
</html>