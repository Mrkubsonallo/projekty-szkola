<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z25-27f</title>
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
        $str1 = "Sri Dźajawardanapura Kotte";
        $str1 = mb_strtolower($str1);
        $str2 = "kot";
        $pos = strpos($str1, $str2);

        if(strpos($str1, $str2))
            echo "Znaleziono ciąg: \"$str2\" <br>Pierwszy znak jest na pozycji: ".$pos;
        else    
            echo "Nie znaleziono ciągu: \"$str2\" <br>Pierwszy znak jest na pozycji: ".$pos;
    ?>
</body>
</html>