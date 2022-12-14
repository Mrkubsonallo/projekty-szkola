<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z31-32c</title>
</head>
<body>
    Witamy na drugiej stronie sesji. <br>
    trwa sesja o identywikatorze: <?php echo session_id() ?> <br>
    wartością zmiennej zmienna_sesji jest:
    <?php echo $_SESSION['zmienna_sesji'] ?> <br>
    <a href="index3.php">Następna strona</a>
</body>
</html>