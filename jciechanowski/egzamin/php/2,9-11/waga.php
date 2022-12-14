<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </div>
    <div id="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </div>
    <div id="left">
        <img src="rys1.png" alt="zrzuć kalorie!">
    </div>
    <div id="right">
        <h1>Podaj dane</h1>
        <form action="waga.php" method="post">
            Waga: <input type="number" name="waga"><br>
            Wzrost[cm]: <input type="number" name="wzrost"><br>
            <input type="submit" value="Licz BMI i zapisz wynik">
        </form>
        <?php
            if(!$db = mysqli_connect("localhost", "root", "", "BMI"))
                echo "Błąd połączenia z bazą";
            else
            {
                if(!empty($_POST['waga']) || !empty($_POST['wzrost']))
                {
                    $waga = $_POST['waga'];
                    $wzrost = $_POST['wzrost'];
                    $bmi_id = 0;

                    $bmi = $waga / ($wzrost * $wzrost);
                    $bmi = $bmi * 10000;
                    echo $bmi."<br>";
                    $data = date("Y-m-d");
                    $dzien = $data["mday"];
                    $miesiac = $data["mon"];
                    $rok = $data["year"];
                    if($bmi >= 0 && $bmi < 19)
                        $bmi_id = 1;
                    elseif($bmi >= 19 && $bmi < 26)
                        $bmi_id = 2;
                    elseif($bmi >= 26 && $bmi < 31)
                        $bmi_id = 3;
                    elseif($bmi >= 31)
                        $bmi_id = 4;
                    $bmi = intval($bmi);
                    $sql = "INSERT INTO wynik(bmi_id, data_pomiaru, wynik) VALUES($bmi_id, $data, $bmi);";
                    mysqli_query($db, $sql);
                }
            }
        ?>
    </div>
    <div id="main">
        <table>
            <tr>
                <th>lp.</th>
                <th>Interpretacja</th>
                <th>zaczyna się od…</th>
            </tr>
            <?php
                if(!$db = mysqli_connect("localhost", "root", "", "BMI"))
                echo "Błąd połączenia z bazą";
                else
                {
                    $sql = "SELECT id, informacja, wart_min FROM bmi;";
                    $query = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_row($query))
                    {
                        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    }
                }
            ?>
        </table>
        
    </div>
    <div id="footer">
        Autor: 00000000000
    </div>
</body>
</html>