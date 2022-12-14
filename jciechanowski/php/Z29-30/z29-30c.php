<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z29-30c</title>
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
        if(!$f = fopen('test.txt', 'rb'))
            echo "Nie można otworzyć pliku";
        else
        {
            while(!feof($f))
            {
                echo fread($f, 4096);
            }
            fclose($f);
        }
    ?>
</body>
</html>