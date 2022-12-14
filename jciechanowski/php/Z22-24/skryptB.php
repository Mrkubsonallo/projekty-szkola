<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z22-24b</title>
    <style>
        body
            {
                background-color: #222;
                color: #dbdbdb;
                font-size: 30px;
                user-select: none;
            }
    </style>
</head>
<body>
    <?php
        if(!isset($_GET['radio1']))
            echo "Nie zaznaczono żadnej opcji";
        else
            echo "Zaznaczona opcja to: ".$_GET['radio1']; 
    ?>
</body>
</html>