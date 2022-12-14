<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z25-27d</title>
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
        $str = "przykładowy CIĄG zNaKóW";
        echo "Ciąg oryginalny: ".$str;

        echo "<br>Po użyciu funkcji strtolower: ".mb_strtolower($str);

        echo "<br>Po użyciu funkcji strtoupper: ".mb_strtoupper($str);

        echo "<br>Po użyciu funkcji ucfirst: ".ucfirst($str);

        echo "<br>Po użyciu funkcji ucwords: ".ucwords($str);
    ?>
</body>
</html>