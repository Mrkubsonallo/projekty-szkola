<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z16-17a</title>
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
        $tab1 = array(5, 7, 3, 1, 8, 2, 0, 4, 9, 6);

        echo "Zawartość tablicy przed sortowaniem: <br>";
        foreach($tab1 as $val)
            echo "$val ";
        echo "<br>";

        sort($tab1);

        echo "<br>Zawartość tablicy po sortowaniu: <br>";
        foreach($tab1 as $val)
            echo "$val ";
        echo "<br>";
    ?>
</body>
</html>