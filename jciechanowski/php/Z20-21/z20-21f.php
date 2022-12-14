<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z18-19e</title>
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
        try
        {
            throw new Exception("Testowy obiekt wyjątku", 123);
        } 
        catch(Exception $e)
        {
            echo "Został wygenerowany wyjątek!<br>";
            echo "Treść komunikatu: ".$e->getMessage()."<br>";
            echo "Kod błędu: ".$e->getCode()."<br>";
            echo "Nazwa pliku: ".$e->getFile()."<br>";
            echo "Numer linii: ".$e->getLine()."<br>";
        }
    ?>
</body>
</html>