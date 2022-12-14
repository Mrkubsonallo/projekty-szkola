<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z28a</title>
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
        echo "date(\"Y-m-d\") = ".date("Y-m-d")."<br>";
        echo "date(\"d-m-Y\") = ".date("d-m-Y")."<br>";
        echo "date(\"j, M Y\") = ".date("j, M Y")."<br>";
        echo "date(\"jS, M Y\") = ".date("jS, M Y")."<br>";
        echo "date(\"G:i:s\") = ".date("G:i:s")."<br>";
        echo "date(\"h:i:sa\") = ".date("h:i:sa")."<br>";
        echo "date(\"Y-m-d G:i:s\") = ".date("Y-m-d G:i:s")."<br>";
    ?>
</body>
</html>