<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z8-9c</title>
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
        $x = 179 & 38;
        echo $x."<br>";
        $y = $x | 65;
        echo $y."<br>";
        $y = $x ^ 118;
        echo $y."<br>";
        $y = $y << 1;
        echo $y."<br>";
    ?>
</body>
</html>