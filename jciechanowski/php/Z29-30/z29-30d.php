<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z29-30d</title>
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
    <h2>Funkcja fpassthru</h2>
    <?php
        if(!$f = fopen('test.txt', 'r'))
            exit("Nie można otworzyć pliku");
        fpassthru($f);
        fclose($f);
    ?>

    <h2>Funkcja readfile</h2>
    <?php
        readfile("test.txt");
    ?>

    <h2>Funkcja file_get_contents</h2>
    <?php
        echo file_get_contents("test.txt");
    ?>
</body>
</html>