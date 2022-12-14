<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <button name="title">Tytułu książek</button><br>
        <button name="data_cus">Dodaj ogłoszenie</button><br>
        <button name="sell_sum">Suma wartości zamówień</button><br>
        <button name="count_order">Ilość zamówień</button><br>
    </form>
    <?php
        if(isset($_POST['title']))
            header('Location: title.php');
        if(isset($_POST['data_cus'])) 
            header('Location: customers_data.php');
        if(isset($_POST['sell_sum'])) 
            header('Location: sell_sum.php');
        if(isset($_POST['count_order'])) 
            header('Location: count_order.php');
    ?>
</body>
</html>