<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z29-30f</title>
</head>
<body>
    <?php
        if(!isset($_POST['opinia']) || $_POST['opinia'] == "")
            exit("opinia nie została przezłana. Wypełnik pola");

        $str = substr($_POST['opinia'], 0, 255);
        $str = strip_tags($str);

        if(file_put_contents("opinie.txt", "$str\n", FILE_APPEND) === false)
            echo "Błąd serwera. Opinia nie została dodana.";
        else
            echo "Dziękujemy za przesłanie opinii";

        header('Refresh: 3; z29-30f.php');
    ?>
</body>
</html>