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
    <h1>Czy zdanie zaczyna się podaną literą literą</h1>
    <form method="post" action="index5.php">
        Wpisz zdanie
        <input type="text" name="zdanie"><br>
        Wpisz znak
        <input type="text" name="znaki">
        <input type="submit" name="btn" value="Sprawdź">
    </form>
    <?php
        if(isset($_POST['btn']))
        {
            $zdanie = $_POST['zdanie'];
            $regex = "/\$_POST['znaki']/";
            if($zdanie == NULL)
                echo "Wprowadź dane";
            else
            {
                if(preg_match($regex, $zdanie))
                    echo "W zdanie: ".$zdanie." zaczyna się literą ".$_POST['znak'];
                else
                    echo "W zdanie: ".$zdanie." nie zaczyna się literą ".$_POST['znak'];
            }
        }
    ?>
</body>
</html>