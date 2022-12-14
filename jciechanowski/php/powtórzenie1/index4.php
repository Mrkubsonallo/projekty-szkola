<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Palindrom</h2>
    <form action="index4.php" method="post">
        Podaj zdanie: 
        <input type="text" name="text"><br>
        <input type="submit" value="Sprawdź" name="click"><br>
    </form>
    <?php
        if(isset($_POST['click']) && !empty($_POST['text']))
        {
            $zdanie  = $_POST['text'];
            $zdanie = trim($zdanie);
            $zdanie_len = strlen($zdanie);
            $zdanie_polowa = floor($zdanie_len/2);
            $licznik = 0;

            for($i=0; $i<$zdanie_polowa; $i++)
            {
                if($zdanie[$i] == $zdanie[$zdanie_len-$i-1])
                    $licznik++;
            }
            if($licznik == $zdanie_polowa)
                echo "Podane zdanie jest palindromem";
            else
                echo "Podane zdanie nie jest palindromem";
        }
    ?>
</body>
</html>