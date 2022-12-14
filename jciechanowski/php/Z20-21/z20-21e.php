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
            throw new Exception();
        } 
        catch(Exception $e)
        {
            echo "Został wygenerowany wyjątek!";
        }
    ?>
</body>
</html>