<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z16-17c</title>
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
        $tab1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $tab2 = array_reverse($tab1);

        echo "Zawartość tablicy tab1: <br>";
        foreach($tab1 as $val)
            echo "$val ";
        echo "<br>";

        echo "<br>Zawartość tablicy tab2: <br>";
        foreach($tab2 as $val)
            echo "$val ";
        echo "<br>";
    ?>
</body>
</html>