<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z14-15c</title>
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
            $kolory["kolor1"] = "Czerwony";
            $kolory["kolor2"] = "Zielony";
            $kolory["kolor3"] = "Niebieski";

        echo "Zawartość tablicy:<br> kolory['kolor1'] = ".$kolory["kolor1"];
        echo "<br>kolory['kolor2'] = ".$kolory["kolor2"];
        echo "<br>kolory['kolor3'] = ".$kolory["kolor3"];
        
    ?>
</body>
</html>