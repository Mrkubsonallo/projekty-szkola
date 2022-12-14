<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z16-17b</title>
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
        $tab = array(
            'index1' => 5,
            'index9' => 1,
            'index3' => 8,
            'index5' => 2
        );

        echo "Zawartość tablicy przed sortowaniem: <br>";
        foreach($tab as $key => $val)
            echo "tab[$key] = $val <br>";
        echo "<br>";

        asort($tab);

        echo "<br>Zawartość tablicy po sortowaniu: <br>";
        foreach($tab as $key => $val)
            echo "tab[$key] = $val <br>";
        echo "<br>";
    ?>
</body>
</html>