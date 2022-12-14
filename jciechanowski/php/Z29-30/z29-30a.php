<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z29-30a</title>
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
        if(!$f = fopen('test.txt', 'r'))
            echo "Nie można otworzyć pliku";
        else
        {
            while(!feof($f))
            {
                $str = fgets($f);
                echo nl2br($str);
            }
            fclose($f);
        }
    ?>
</body>
</html>