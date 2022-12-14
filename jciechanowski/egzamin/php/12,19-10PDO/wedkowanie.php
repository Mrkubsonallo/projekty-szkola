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
            $db = new PDO("mysql:host=localhost;dbname=wedkowanie;user=root;pass=");
            if(!$db)
            {
                echo "Błąd połączenia z bazą";
            }
            else
            {
                $sql = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1;";
                $query = $db->prepare($sql);
                foreach ($query->fetchAll(PDO::FETCH_ROW) as $row) 
                {
                    echo $row[0].". ".$row[1]." występuje w: ".$row[2]."<br>";
                }
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