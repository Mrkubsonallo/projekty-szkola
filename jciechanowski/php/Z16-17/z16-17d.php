<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z16-17d</title>
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
        $tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        echo "Pierwotna wartość tablicy: ";
        foreach($tab as $val)
            echo "$val ";

        $val = array_pop($tab);
        echo "<br>Wynik pierwszej operacji pop: $val <br>";
        $val = array_pop($tab);
        echo "Wynik drugiej operacji pop: $val <br>";

        echo "Aktualna wartość tablicy: ";
        foreach($tab as $val)
            echo "$val ";
            
        $val = array_shift($tab);
        echo "<br>Wynik pierwszej operacji shift: $val <br>";
        $val = array_shift($tab);
        echo "Wynik drugiej operacji shift: $val <br>";

        echo "Aktualna wartość tablicy: ";
        foreach($tab as $val)
            echo "$val ";
            
        $val = array_push($tab, 1, 2);
        echo "<br>Wynik operacji push: ";
        foreach($tab as $val)
            echo "$val ";
        
        $val = array_unshift($tab, 9, 10);
        echo "<br>Wynik operacji unshift: ";
        foreach($tab as $val)
            echo "$val ";
    ?>
</body>
</html>