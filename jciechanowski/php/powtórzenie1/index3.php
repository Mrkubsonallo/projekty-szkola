<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>ile wyrazów ma podne zdanie</h2>
    <form action="index3.php" method="post">
        Podaj zdanie: 
        <input type="text" name="text"><br>
        <input type="submit" value="Sprawdź" name="click"><br>
    </form>
    <?php
        if(isset($_POST['click']) && !empty($_POST['text']))
        {
            $zdanie  = $_POST['text'];
            $zdanie = trim($zdanie);
            $len = strlen($zdanie);
            $wyrazy = 1;

            for($i = 0; $i < $len; $i++)
            {
                if($zdanie[$i] == " ")
                    $wyrazy++;
            }
            
            echo $wyrazy;
        }
    ?>
</body>
</html>