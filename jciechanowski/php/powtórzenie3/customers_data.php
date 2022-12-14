<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dane klientów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dane klientów księgarnii</h1>
    <ol>
        <?php
            if($db = mysqli_connect('localhost', 'root', '', 'księgarnia'))
            {
                $sql = "SELECT `Nazwisko`, `Imię`,`Ulica`, `Nr domu`, `Kod`, `Miasto` FROM `klienci` ORDER BY `klienci`.`Nazwisko`;";
                $query = mysqli_query($db, $sql);
                while($row = mysqli_fetch_row($query))
                {   
                    echo "<li>$row[0] $row[1]</li>";
                    echo '<ul style="list-style-type: square;">';
                    echo "<li>$row[2] $row[3]</li>";
                    echo "<li>$row[4] $row[5]</li>";
                    echo "</ul>";
                }       
            }
        ?>
    </ol>
    <form action="index.php" method="post">
        <br><br><button name="index">Strona główna</button><br>
    </form>
    <?php
        if(isset($_POST['index']))
            header('Location: index.php');
    ?>
</body>
</html>