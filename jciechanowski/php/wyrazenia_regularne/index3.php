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
    <h1>Czy w zdaniu jest kod pocztowy</h1>
    <form method="post" action="index3.php">
        Wpisz zdanie
        <input type="text" name="zdanie">
        <input type="submit" name="btn" value="Sprawdź">
    </form>
    <?php
        if(isset($_POST['btn']))
        {
            $zdanie = $_POST['zdanie'];
            $regex = "/\d\d-\d\d\d/";
            if($zdanie == NULL)
                echo "Wprowadź dane";
            else
            {
                if(preg_match($regex, $zdanie))
                    echo "W zdaniu: ".$zdanie." jest kod pocztowy";
                else
                    echo "W zdaniu: ".$zdanie." nie ma kodu pocztowego";
            }
        }
    ?>
</body>
</html>