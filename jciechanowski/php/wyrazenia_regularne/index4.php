<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyrażenia regularne</title>
    <style>
        body
        {
            background-color: #222;
            color: #dbdbdb;
            user-select: none;
        }
    </style>
</head>
<body>
    <h1>Czy zdanie kończy się znakiem zapytania</h1>
    <form method="post" action="index4.php">
        Wpisz zdanie
        <input type="text" name="zdanie">
        <input type="submit" name="btn" value="Sprawdź">
    </form>
    <?php
        if(isset($_POST['btn']))
        {
            $zdanie = $_POST['zdanie'];
            $regex = "/\?$/";
            if($zdanie == NULL)
                echo "Wprowadź dane";
            else
            {
                if(preg_match($regex, $zdanie))
                    echo "W zdanie: ".$zdanie." kończy się znakiem zapytania";
                else
                    echo "W zdanie: ".$zdanie." nie kończy się znakiem zapytania";
            }
        }
    ?>
</body>
</html>