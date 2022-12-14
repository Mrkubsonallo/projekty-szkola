<?php
    session_start();
    unset($_SESSION['zmienna_sesji']);
    if(isset($_COOKIE[session_name()]))
        setcookie(session_name(), "", time() - 3600);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z31-32c</title>
</head>
<body>
    Witamy na trzeciej stronie sesji. <br>
    identyfikatorem sesji jest: <?php echo session_id() ?> <br>
    została usunięta zmienna zmienna_sesji <br>
    wartością zmiennej zmienna_sesji jest:
    <?php 
        echo $_SESSION['zmienna_sesji']."<br>";
        if(session_destroy())
            echo "sesja została zakończona.";
        else  
            echo "Próba zakończenia sesji nie powiodła się.";
    ?>
</body>
</html>