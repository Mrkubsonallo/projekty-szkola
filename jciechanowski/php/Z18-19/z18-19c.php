<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z18-19c</title>
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
                echo "<br>Dane osoby: <br> Imię: ".$this->imie."<br>Nazwisko: ".$this->nazwisko."<br>";
            }
        }

        $osoba1 = new Osoba();
        $osoba1->imie = "Jan";
        $osoba1->nazwisko = "Kowalski";
        echo "Wywołanie funkcji pokaz(): ";
        $osoba1->pokaz();
    ?>
</body>
</html>