<?php 

$trawa = 'produkt1';
$auto = 'produkt2';
$dron = 'produkt3';


$koszyk = $_SESSION['koszyk']; // tutaj aktualizujemy poprzednio zapisana sessie (jesli klikniemy od nowa nowy produkt)

$koszyk[] = 'produkt1'; // tutaj dodajemy produkt do zmiennej $koszyk
$_SESSION['koszyk'] = $koszyk; // tutaj zapisujemy dodanie produktu do zmiennej $koszyk = aktualizujemy zawartos koszyka 

if (isset($_POST['produkt'])) 
{
    $koszyk[]= 'trawa';
    $_SESSION['koszyk'] = $koszyk;
}
elseif (isset($_POST['reset'])) 
{ 
    reset();
}

if (isset($_POST['produkt'])) 
{
    $koszyk[]= 'auto';
    $_SESSION['koszyk'] = $koszyk;
}
if (isset($_POST['produkt'])) 
{
    $koszyk[]= 'dron';
    $_SESSION['koszyk'] = $koszyk;
}
print_r($koszyk);
?>
<?php if($_SESSION['zalogowany'] == 'TAK') 
{
    ?>

    <div class="koszyk">
    <h1>Ilość produktów w koszyku:<?php echo count($koszyk); ?></h1>
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





