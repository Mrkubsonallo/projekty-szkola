<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z14-15b+</title>
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

        echo "Zawartość tablicy:";
        for($i = 1; $i <=3; $i++)
            echo "<br> kolory['kolor".$i."'] = ".$kolory["kolor".$i.""];
    ?>
</body>
</html>