<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z22-24b</title>
    <style>
        body
            {
                background-color: #222;
                color: #dbdbdb;
                font-size: 30px;
            }
    </style>
</head>
<body>
    <?php
        $uploaddir = "./pliki/";

        if($_FILES['plik1']['error'] == UPLOAD_ERR_OK)
        {
            $new_name = $uploaddir.$_FILES['plik1']['name'];
            $temp_name = $_FILES['plik1']['tmp_name'];
            if(move_uploaded_file($temp_name, $new_name))
                echo "Plik został załadowany<br>";
            else
                echo "Nieprawidłowy plik<br>";
        }
        else
            echo "Błąd załadowania pliku";
    ?>
</body>
</html>