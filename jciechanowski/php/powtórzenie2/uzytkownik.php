<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dodaj użytkownika</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Dodaj użytkownika</h2>
    <form action="uzytkownik.php" method="post">
        Imię: <input type="text" name="imie"><br>
        Nazwisko: <input type="text" name="nazwisko"><br>
        Telefon: <input type="tel" name="tel"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" value="Dodaj" name="add">
    </form>
    <?php
        if(isset($_POST['add']))
        {
            if(empty($_POST['imie']) && empty($_POST['nazwisko']) && empty($_POST['tel']) && empty($_POST['email']))
                echo "Wypełnij wszystkie pola";
            else
            {
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                if($db = mysqli_connect("localhost", "root", "", "ogłoszenia"))
                {
                    $sql = "INSERT INTO uzytkownik(imie, nazwisko, telefon, email) VALUES ('$imie', '$nazwisko', '$tel', '$email');";
                    if(mysqli_query($db, $sql))
                        echo "Dodano użytkownika";
                    else
                        echo "Błąd dodawania użytkownika";
                }
            }
        }
    ?>
</body>
</html>