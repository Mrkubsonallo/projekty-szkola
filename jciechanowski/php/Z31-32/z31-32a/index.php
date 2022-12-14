<?php
    if(!isset($_COOKIE['nazwa']) && !isset($_GET['nazwa']))
        include('form.html');
    else if(isset($_GET['nazwa']))
    {
        setcookie('nazwa', $_GET['nazwa'], time() + 60 * 60 * 24 * 365);
        include('thanks.html');
    }
    else
    include('main.php');
?>