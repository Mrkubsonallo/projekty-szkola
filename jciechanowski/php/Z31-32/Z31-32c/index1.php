<?php
    session_start();
    $_SESSION['zmienna_sesji'] = "abcd";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z31-32c</title>
</head>
<body>
    Witamy na stronie. Została rozpoczęta sesja. <br>
    identyfikatorem sesji jest: <?php echo session_id() ?> <br>
    Została ustawiona zmienna o nazwie: zmienna_sesji <br>
    wartością zmiennej zmienna_sesji jest:
    <?php echo $_SESSION['zmienna_sesji'] ?> <br>
    <a href="index2.php">Następna strona</a>
</body>
</html>