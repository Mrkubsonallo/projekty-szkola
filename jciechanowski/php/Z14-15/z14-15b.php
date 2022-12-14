<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z14-15b</title>
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
        $kolory = array(
            "kolor1" => "Czerwony", 
            "kolor2" => "Zielony", 
            "kolor3" => "Niebieski"
        );

        echo "Zawartość tablicy:<br> kolory['kolor1'] = ".$kolory["kolor1"];
        echo "<br>kolory['kolor2'] = ".$kolory["kolor2"];
        echo "<br>kolory['kolor3'] = ".$kolory["kolor3"];
        
    ?>
</body>
</html>