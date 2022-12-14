<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index1.php" method="post">
        Podaj ilość elementów zbioru: 
        <input type="number" name="zbior"><br>
        Podaj ilość elementów wariacji: 
        <input type="number" name="wariacja"><br>
        <input type="submit" value="Oblicz" name="click"><br>
    </form>
    <?php
        if(isset($_POST['click']) && !empty($_POST['zbior']) && !empty($_POST['zbior']))
        {
            $zbior = $_POST['zbior'];
            $wariacja = $_POST['wariacja'];

            $silniaz = 1;
            $silniaw = 1;
            $wbp = 0;
            $wzp = 0;

            for($i = 1; $i <= $zbior; $i++)
                $silniaz *= $i;
            
            for($i = 1; $i <= $zbior - $wariacja; $i++)
                $silniaw *= $i;

            $wbp = $silniaz / $silniaw;
            $wzp = $zbior ** $wariacja;

            echo "Wariacja z powtórzeniami wynosi: ".$wzp;
            echo "<br> Wariacja bez powtórzen wynosi: ".$wbp;
        }
    ?>
</body>
</html>