<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z18-19d</title>
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
            function wypiszOs()
            {
                echo "Imię: $this->imie<br>Nazwisko: $this->nazwisko<br>";
            }
        }
        class Czytelnik extends Osoba
        {
            public $pesel;
            function wypiszCz()
            {
                echo "Pesel: $this->pesel";
            }
        }
        $czytelnik1 = new Czytelnik;
        $czytelnik1->imie = "Jan";
        $czytelnik1->nazwisko = "Kowalski";
        $czytelnik1->pesel = "00000000000";
        $czytelnik1->wypiszOs();
        $czytelnik1->wypiszCz();
    ?>
</body>
</html>