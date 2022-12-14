<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dodaj ogłoszenie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Dodaj ogłoszenie</h2>
    <form action="ogloszenie.php" method="post">
        <select name="user">
            <?php
                if($db = mysqli_connect("localhost", "root", "", "ogłoszenia"))
                {
                    $sql = "SELECT id, imie, nazwisko FROM uzytkownik;";
                    $query = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_row($query))
                    {
                        echo "<option value=$row[0]>$row[1] $row[2]</option>";
                    }
                }
            ?>
        </select><br>
        Kategoria: <input type="number" name="kat"><br>
        Podkategoria: <input type="number" name="pkat"><br>
        Tytuł: <input type="text" name="title"><br>
        Treść: <textarea name="text" cols="100" rows="15"></textarea><br>
        <input type="submit" value="Dodaj" name="add">
        <input type="reset" value="Wyczyść">
    </form>
    <?php
        if(isset($_POST['add']))
        {
            if(empty($_POST['user']) && empty($_POST['kat']) && empty($_POST['pkat']) && empty($_POST['title']) && empty($_POST['text']))
                echo "Wypełnij wszystkie pola";
            else
            {
                $user = $_POST['user'];
                $kat = $_POST['kat'];
                $pkat = $_POST['pkat'];
                $title = $_POST['title'];
                $text = $_POST['text'];
                if($db = mysqli_connect("localhost", "root", "", "ogłoszenia"))
                {
                    $sql = "INSERT INTO ogloszenie(uzytkownik_id, kategoria, podkategoria, tytul, tresc) VALUES ('$user', '$kat', '$pkat', '$title', '$text');";
                    if(mysqli_query($db, $sql))
                        echo "Dodano ogłoszenie";
                    else
                        echo "Błąd dodawania ogłoszenia";
                }
            }
        }
    ?>
</body>
</html>