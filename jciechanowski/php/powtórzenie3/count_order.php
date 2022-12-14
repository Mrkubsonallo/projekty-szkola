<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tytuły książek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tytuły książek dostępnych w księgarnii</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Tytuł</th>
            <th>Ilość</th>
        </tr>
        <?php
            if($db = mysqli_connect('localhost', 'root', '', 'księgarnia'))
            {
                $sql = "SELECT ksiazkizamowienia.ZamówienieId, ksiazki.Tytuł, ksiazkizamowienia.Ilość FROM ksiazkizamowienia JOIN ksiazki ON ksiazkizamowienia.KsiążkaId = ksiazki.Id JOIN zamowienia ON ksiazkizamowienia.ZamówienieId = zamowienia.Id WHERE zamowienia.Status = 0 ORDER BY ksiazkizamowienia.ZamówienieId;";
                $query = mysqli_query($db, $sql);
                while($row = mysqli_fetch_row($query))
                {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                }
            }
        ?>
    </table>
    <form action="index.php" method="post">
        <br><br><button name="index">Strona główna</button><br>
    </form>
    <?php
        if(isset($_POST['index']))
            header('Location: index.php');
    ?>
</body>
</html>