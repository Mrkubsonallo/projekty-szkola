<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z29-30a</title>
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
    <b>Wyraź opinię</b><br>
    <form method="post" action="dodaj.php">
        <textarea name="opinia" cols="20" rows="5"></textarea><br>
        <input type="submit" value="Dodaj">
    </form>
    <p>Dotychczasowe opinie:</p>
    <?php
        if(file_exists('opinie.txt'))
        {
            $str = file_get_contents('opinie.txt');
            $str = strip_tags($str);
            $str = nl2br($str);
            echo $str;
        }
    ?>
</body>
</html>