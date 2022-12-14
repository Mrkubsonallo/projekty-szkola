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
            function __construct($imie, $nazwisko)
            {
                $this->imie = $imie;
                $this->nazwisko = $nazwisko;
            }
            function wypisz()
            {
                echo "Imię: $this->imie<br>Nazwisko: $this->nazwisko<br><br>";
            }
        }
        class Ksiazka
        {
            public $tytul;
            public $autor;
            public $rokWyd;
            function __construct($tytul, $autor, $rokWyd)
            {
                $this->tytul = $tytul;
                $this->autor =$autor;
                $this->rokWyd =$rokWyd;
            }
            function wypisz()
            {
                echo "Tytuł: $this->tytul<br>autor: $this->autor<br>Rok wydania: $this->rokWyd<br><br>";
            }
        }
        $osoba1 = new Osoba("Jan", "Kowalski");
        $osoba1->wypisz();
        $ksiazka1 = new Ksiazka("Potop", "H. Sienkiewicz", 2005);
        $ksiazka1->wypisz();
    ?>
</body>
</html>