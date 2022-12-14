<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        Podaj liczbę do sprawdzenia: 
        <input type="number" name="liczba"><br>
        <input type="submit" value="Sprawdź" name="click"><br>
    </form>
    <?php
        if(isset($_POST['click']) && !empty($_POST['liczba']))
        {
            $liczba = $_POST['liczba'];
            $suma = 0;
            
            for($i=0; $i<strlen($liczba); $i++)
                $suma += $liczba[$i];

            if($liczba % $suma == 0)
                echo "Liczba ".$liczba." jest podzielna";
            else
                echo "Liczba ".$liczba." nie jest podzielna";
        }
    ?>
</body>
</html>