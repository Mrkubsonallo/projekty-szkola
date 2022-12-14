<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z25-27h</title>
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
        //$str = "Sri Dźajawardanapura Kotte";
        $str = "jeden dwa trzy cztery pięć";
        $tok = strtok($str, " ");
        while($tok != "")
        {
            echo $tok."<br>";
            $tok = strtok(" ");
        }
    ?>
</body>
</html>