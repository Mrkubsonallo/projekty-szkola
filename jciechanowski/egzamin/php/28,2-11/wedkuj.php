<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="right">
        <img src="ryba1.jpg" alt="Sum">
        <p><a href="kwerendy.txt">Pobierz kwerendy</a></p>
    </div>
    <div id="left1" class="left">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
                if(!$db = mysqli_connect("localhost", "root", "", "wedkowanie"))
                    echo "Błąd połączenia";
                else
                {
                    $sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_row($result))
                    {
                        echo "<li>$row[0] pływa w rzece $row[1], $row[2]</li>";
                    }
                }
            ?>
        </ol>
    </div>
    <div id="left2" class="left">
        <h3>Ryby drapieżne naszych wód</h3>
        <table border="1">
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
                if(!$db = mysqli_connect("localhost", "root", "", "wedkowanie"))
                    echo "Błąd połączenia";
                else
                {
                    $sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_row($result))
                    {
                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    }
                }
            ?>
        </table>
    </div>
    <div id="footer">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>