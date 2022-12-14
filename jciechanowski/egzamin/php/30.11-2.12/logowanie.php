<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="banner">
        <h1>Forum wielbicieli psów</h1>
    </div>
    <div id="left">
        <img src="obraz1.png" alt="foksterier">
    </div>
    <div id="right1" class="rights">
        <h2>Zapisz się</h2>
        <form action="logowanie.php" method="post">
            login: <input type="text" name="login"><br>
            haslo: <input type="password" name="haslo"><br>
            powtórz haslo: <input type="password" name="phaslo"><br>
            <input type="submit" value="Zapisz" name="send"><br>
        </form>
        <?php
            if(isset($_POST["send"]))
            {
                if($db = mysqli_connect("localhost", "root", "", "psy"))
                {
                    if(!empty($_POST['login']) && !empty($_POST['haslo']) && !empty($_POST['phaslo']))
                    {
                        $login = $_POST['login'];
                        $haslo = $_POST['haslo'];
                        $phaslo = $_POST['phaslo'];
                        $sql = "SELECT login FROM uzytkownicy where login='$login';";
                        $query = mysqli_query($db, $sql);
                        if($haslo == $phaslo)
                        {
                            if(mysqli_num_rows($query) < 1)
                            {
                                $hasloh = sha1($haslo);
                                $sqli = "INSERT INTO uzytkownicy(login, haslo) VALUES('$login', '$hasloh')";
                                mysqli_query($db, $sqli);
                                echo "<p>konto zostało dodane</p>";
                            }
                            else
                                echo "<p>istnieje już taki login</p>";
                        }
                        else
                            echo "<p>hasła nie są identyczne</p>";
                    }
                    else
                        echo "<p>Wypełnij wszystkie pola</p>";
                }
            }
        ?>
    </div>
    <div id="right2" class="rights">
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>właścicieli psów</li>
            <li>weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych, co lubią psy</li>
        </ol>
        <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </div>
    <div id="footer">
        Stronę wykonał: 00000000000
    </div>
</body>
</html>