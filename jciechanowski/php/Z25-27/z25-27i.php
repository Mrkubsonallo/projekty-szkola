<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z25-27i</title>
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
        $str = substr("abcdef", 1);
        echo "substr(\"abcdef\", 1) = $str<br>";

        $str = substr("abcdef", 2, 4);
        echo "substr(\"abcdef\", 2, 4) = $str<br>";

        $str = substr("abcdef", -2);
        echo "substr(\"abcdef\", -2) = $str<br>";

        $str = substr("abcdef", 2, -2);
        echo "substr(\"abcdef\", 2, -2) = $str<br>";

        $str = substr("abcdef", -5, -3);
        echo "substr(\"abcdef\", -5, -3) = $str<br>";
    ?>
</body>
</html>