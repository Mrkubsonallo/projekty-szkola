<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z25-27c</title>
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
    <pre>
        <?php
            $str = " ..._Przykładowy ciąg_... ";
            echo "Pierwotna zawartość ciągu str:<br>";
            echo "-$str-";

            $str = ltrim($str);
            echo "<br><br>Po wywołaniu ltrim(\$str):<br>";
            echo "-$str-";

            $str = rtrim($str);
            echo "<br><br>Po wywołaniu rtrim(\$str):<br>";
            echo "-$str-";

            $str = trim($str, "_. ");
            echo "<br><br>Po wywołaniu trim(\$str):<br>";
            echo "-$str-";
        ?>
    </pre>
</body>
</html>