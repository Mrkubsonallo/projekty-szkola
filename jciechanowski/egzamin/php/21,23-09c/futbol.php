<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="banner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </div>
    <div id="mecz">
        <?php
            /*if(!$db = mysqli_connect("localhost", "root", "", "egzamin1"))
            echo "Błąd połączenia z bazą danych";
            else
            {
                $sql = "SELECT zespol1, zespol2, wynik, data_rozgrywki from rozgrywka WHERE zespol1 = 'EVG';";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_row($result))
                {
                    echo "<div id=mecze><h3>$row[0] - $row[1]</h3><h4>$row[2]</h4><p>$row[3]</p></div>";
                }
                mysqli_close($db);
            }*/
            $db = new PDO("mysql:host=localhost;dbname=egzamin1;user=root;pass=");

            //if(!$db)
                //echo "Błąd połączenia z bazą";
            try
            {
                $sql = "SELECT zespol1, zespol2, wynik, data_rozgrywki from rozgrywka WHERE zespol1 = 'EVG';";
                foreach($db->query($sql) as $row)
                {
                    echo "<div id=mecze><h3>$row[0] - $row[1]</h3><h4>$row[2]</h4><p>$row[3]</p></div>";
                }
                $db->close();
            }
            catch(PDOException $e)
            {
                print "Błąd: ".$e->getMessage();
            }
        ?>
    </div>
    <div id="main">
        <h2>Reprezentacja Polski</h2>
    </div>
    <div id="left">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="post">
            <input type="number" name="number">
            <input type="submit" value="Sprawdź" name="check">
        </form>
        <ul>
            <?php
            if(!$db = mysqli_connect("localhost", "root", "", "egzamin1"))
            echo "Błąd połączenia z bazą danych";
            else
            {
                if(isset($_POST['check']) && !empty($_POST['number']))
                {
                    $poz = $_POST['number'];
                    $sql = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = $poz;";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_row($result))
                    {
                        echo "<li>".$row[0]." ".$row[1]."</li>";
                    }
                }
                mysqli_close($db);
            }
                
            ?>
        </ul>
    </div>
    <div id="right">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: 00000000000</p>
    </div>
</body>
</html>