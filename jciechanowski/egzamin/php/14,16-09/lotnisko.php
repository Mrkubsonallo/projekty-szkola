<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Port lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div id="banner1">
        <img src="zad5.png" alt="logo lotnisko">
    </div>
    <div id="banner2">
        <h1>Przyloty</h1>
    </div>
    <div id="banner3">
        <h3>Przydatne linki</h3>
        <a href="kwerendy.txt">Pobierz...</a>
    </div>
    <div id="main">
        <table border="1">
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>

            <?php
                if(!$db = mysqli_connect("localhost", "root", "", "egzamin"))
                    echo "Błąd połączenia z bazą danych";
                else
                {
                    $sql = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas;";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_row($result))
                    {
                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
                    }
                    mysqli_close($db);
                }
            ?>
        </table>
    </div>
    <div id="footer1">
        <?php
            $cookie_name = "cookie";
            setcookie($cookie_name, "cookies", time() + (7200), "/");

            if(!isset($_COOKIE[$cookie_name]))
                echo "<p>Dzień dobry! Strona lotniska używa ciasteczek</p>";
            else
                echo "<p>Witaj ponownie na stronie lotniska</p>";
        ?>
    </div>
    <div id="footer2">
        Autor: 00000000000
    </div>

    
</body>
</html>