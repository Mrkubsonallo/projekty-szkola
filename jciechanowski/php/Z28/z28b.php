<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z28b</title>
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
        $data = getdate();
        $dzien = $data["mday"];
        $miesiac = $data["mon"];
        $rok = $data["year"];
        $czas = time();
        if($dzien < 10)
            $dzien = "0".$dzien;
        if($miesiac < 10)
            $miesiac = "0".$miesiac;

        echo $dzien.".".$miesiac.".".$rok;
        echo "<br>".$czas;
    ?>
</body>
</html>