<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z10-11b</title>
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
        $liczba1 = 10;
        $liczba2 = $liczba1 < 0 ? -1 : 1;
        echo $liczba2;
    ?>
</body>
</html>