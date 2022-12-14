<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>przekierowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Zadanie 1</h1>
    <form action="index.php" method="post">
        <button name="user">Dodaj użytkownika</button>
        <button name="ann">Dodaj ogłoszenie</button>
    </form>
    <?php
        if(isset($_POST['user']))
            header('Location: uzytkownik.php');
        if(isset($_POST['ann'])) 
            header('Location: ogloszenie.php');
    ?>

    <h1>Zadanie 2</h1>
    <form action="index.php" method="post">
        <button name="szkola">Dodaj ucznia</button>
    </form>
    <?php
        if(isset($_POST['szkola']))
            header('Location: szkola.php');
    ?>
</body>
</html>