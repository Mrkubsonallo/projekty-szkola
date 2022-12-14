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
            function pokaz( )
            {
                echo "Imię: ".$this->imie."<br>Nazwisko: ".$this->nazwisko."<br>";
            }
        }
?>