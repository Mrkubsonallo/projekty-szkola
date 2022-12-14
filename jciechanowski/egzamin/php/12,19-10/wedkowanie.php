<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h2>Wędkuj z nami!</h2>
    </div>
    <div id="left">
        <img src="ryba2.png" alt="Szczupak">
    </div>
    <div id="right">
        <h3>Ryby spokojnego żeru (białe)</h3>

        <?php
            if(!$db = mysqli_connect("localhost", "root", "", "wedkowanie"))
                echo "Błąd połączenia z bazą";
            else
            {
                $sql = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 2;";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_row($result))
                {
                    echo $row[0].". ".$row[1]." występuje w: ".$row[2]."<br>";
                }
                mysqli_close($db);
            }
        ?>

        <ol>
            <li><a href="https://wedkuje.pl/">Odwiedź także</a></li>
            <li><a href="http://www.pzw.org.pl/">Polski Związek Wędkarski</a></li>
        </ol>
    </div>
    <div id="footer">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>