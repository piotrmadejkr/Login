<?php
session_start();
error_reporting(0);


$login='admin';
$haslo='1234';
$bg= 'bg';

if(isset($_POST['wyloguj'])){
    $_SESSION['zalogowany'] = 'NIE';
    unset($_SESSION['koszyk']);

  }


if(isset($_POST['doDziela'])){
    if(($login == $_POST['user'])&&($haslo == $_POST['password'])) {
        $_SESSION['zalogowany'] = 'TAK';
    }
    else {
        $_SESSION['zalogowany'] = 'NIE';
        
    }
}

?>
