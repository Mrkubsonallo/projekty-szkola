<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z29-30e</title>
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
        $str = "Linia jedenasta";
        if(!$f = fopen('test.txt', 'wb'))
            echo "Nie można otworzyć pliku";
        else
        {
            if(fputs($f,$str) === false)
                echo "Wystąpił błąd. Zapis nie został dodany.";
            else
                echo "Ciąg został dodany.";
            fclose($f);
        }
    ?>
</body>
</html>