<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dodaj ucznia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Dodaj ucznia</h2>
    <form action="szkola.php" method="post">
        <select name="class">
            <?php
                if($db = mysqli_connect("localhost", "root", "", "szkola"))
                {
                    $sql = "SELECT id, nazwa FROM klasa;";
                    $query = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_row($query))
                    {
                        echo "<option value=$row[0]>$row[1]</option>";
                    }
                }
            ?>
        </select><br>
        Nazwisko: <input type="text" name="nazwisko"><br>
        Imię: <input type="text" name="imie"><br>
        Miejsce urodzenia: <input type="text" name="miasto"><br>
        <input type="submit" value="Dodaj" name="add">
        <input type="reset" value="Wyczyść">
    </form>
    <?php
        if(isset($_POST['add']))
        {
            if(empty($_POST['nazwisko']) && empty($_POST['imie']) && empty($_POST['miasto']))
                echo "Wypełnij wszystkie pola";
            else
            {
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $miasto = $_POST['miasto'];
                $klasa = $_POST['class'];
                if($db = mysqli_connect("localhost", "root", "", "szkola"))
                {
                    $sql = "INSERT INTO uczen(nazwisko, imie, miejsce_urodzenia, id_klasy) VALUES ('$nazwisko', '$imie', '$miasto', '$klasa');";
                    $sql1 = "UPDATE klasa SET il_uczniow = il_uczniow+ 1 WHERE `id` = $klasa;";
                    if(mysqli_query($db, $sql) && mysqli_query($db, $sql1))
                        echo "Dodano ucznia";
                    else
                        echo "Błąd dodawania ucznia ".mysqli_error($db  );
                }
            }
        }
    ?>
</body>
</html>