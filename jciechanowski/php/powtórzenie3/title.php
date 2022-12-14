<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tytuły książek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tytuły książek dostępnych w księgarnii</h1>
    <ul style="list-style-type: circle;">
    <?php
        if($db = mysqli_connect('localhost', 'root', '', 'księgarnia'))
        {
            $sql = "SELECT Tytuł FROM ksiazki ORDER BY Tytuł;";
            $query = mysqli_query($db, $sql);
            while($row = mysqli_fetch_row($query))
            {
                echo "<li>$row[0]</li>";
            }
        }
    ?>
    </ul>
    <form action="index.php" method="post">
        <br><br><button name="index">Strona główna</button><br>
    </form>
    <?php
        if(isset($_POST['index']))
            header('Location: index.php');
    ?>
</body>
</html>