<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z10-11g</title>
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
        for($i = 1; $i <= 20; $i++)
        {
            if($i % 2 != 0) continue;
            echo "$i ";
        }
    ?>
</body>
</html>