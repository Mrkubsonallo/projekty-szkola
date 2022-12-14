<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z22-24a</title>
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
        if(!isset($_GET['text']))
            echo "Nie wpisano tekstu";
        else
            echo "Wpisany tekst to: ".$_GET['text']; 
    ?>
</body>
</html>