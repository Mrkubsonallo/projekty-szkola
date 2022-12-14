<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z14-15a</title>
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
        $kolory = array("Czerwony", "Zielony", "Niebieski");
        for($i = 0; $i <= 2; $i++)
            echo "Kolor[$i] = ".$kolory[$i]."<br>";
    ?>
</body>
</html>