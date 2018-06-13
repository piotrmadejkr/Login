<?php 
$koszyk = $_SESSION['koszyk']; // tutaj aktualizujemy poprzednio zapisana sessie (jesli klikniemy od nowa nowy produkt)

if(isset($_POST['produkt'])) 
{
    $koszyk[] = $_POST['produkt'];
    $_SESSION['koszyk'] = $koszyk;
}


if(isset($_POST['reset'])) 
{ 
    unset($_SESSION['koszyk']);
}

?>



<?php if($_SESSION['zalogowany'] == 'TAK') 
{
    ?>

    <div class="koszyk">
    <h1>Ilość produktów w koszyku:<?php echo count($_SESSION['koszyk']); ?></h1>
    <form method="post" action='./'>
    <input type="submit" name="reset" value="WYCZYŚĆ KOSZYK">
    </form>
    </div>
    <?php
}
/*




function (liczba($koszyk=0; $koszyk>0; $koszyk++)) {
    if($koszyk=='trawa') {
        echo count(x);
    }
    if($koszyk=='auto') {
        echo count(x);
    }
    if($koszyk=='dron') {
        echo count(x);
    }
}
liczba();


/*
zadanie:
1. zrob formularz ktory przesyla postem jakis produkt ktory chcemy dolozyc do koszyka (moze byc produkt=trabant)

if (isset['product']) {
    $koszyk[]= produkt1;
    $_SESSION['koszyk'] = $koszyk;
}

2. wyszyścic zawartośc koszyka po kliknięciu

*/
?>





