<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>zaszyfruj lub odszyfruj zdanie</h2>
    <form action="index5.php" method="post">
        Podaj zdanie: 
        <input type="text" name="text"><br>
        zaszyfruj: <input type="radio" name="w" value="opcja1"><br>
        odszyfruj: <input type="radio" name="w" value="opcja2"><br>    
        <input type="submit" value="Sprawdź" name="click"><br>
    </form>
    <?php
        if(isset($_POST['click']) && !empty($_POST['text']))
        {
            if(isset($_POST['w']) && isset($_POST['w']) == "opcja1")
                echo "zaszyfrowane";
            else
                echo "odszyfrowane";
        }
    ?>
</body>
</html>