<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z18-19b</title>
    <style>
        body
            {
                background-color: #222;
                color: #dbdbdb;
                font-size: 50px;
                user-select: none;
            }
    </style>
</head>
<body>
    <?php
        require "osoba.php";

        $osoba1 = new Osoba("Jan", "Kowalski");
        $osoba2 = new Osoba("Anna", "Malinowska");
        $osoba1->pokaz();
        $osoba2->pokaz();
    ?>
</body>
</html>