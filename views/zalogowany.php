<?php

if($_SESSION['zalogowany'] == 'TAK') {
    ?>
    <div class="zalogowano">
        <div class="row">
            <h2>Zmień tło:</h2>
            <div class="produkt1 col col-sm-4">
                <a href="?bg=https://images.pexels.com/photos/58726/pexels-photo-58726.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                <img class="img-responsive" src="https://images.pexels.com/photos/58726/pexels-photo-58726.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
                </a>
            </div>
            <div class="produkt1 col col-sm-4">
                <form method="post" action='./'>
                    <input type="hidden" name="bg" value="https://images.pexels.com/photos/572938/pexels-photo-572938.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    <input type="submit" name="zapisz" value="tło 2">
                </form>
                <img class="img-responsive" src="https://images.pexels.com/photos/572938/pexels-photo-572938.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
            </div>
            <div class="produkt1 col col-sm-4">
                <form method="post" action='./'>
                    <input type="hidden" name="bg" value="https://images.pexels.com/photos/119730/pexels-photo-119730.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                    <input type="submit" name="zapisz" value="tło 3">
                </form>
                <img class="img-responsive" src="https://images.pexels.com/photos/119730/pexels-photo-119730.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
            </div>
            
         </div>
         <div class="btn">
             <form method="post">
                <input type="submit" value="wyloguj" name="wyloguj">
            </form>
        </div>
    </div> 
    <?php
  }

 

if($_SESSION['zalogowany'] != 'TAK') {
    ?>
    <div class="wylogowano">
    <div class="form1">
        <form class="form-group" method="post">
        <fieldset> 
                <h4>Podaj login</h4>
                <input type"text" textarea="Login" name="user">
                <h4>Podaj hasło</h4>
                <input type="password" textarea="hasło" name="password">
                <input type="submit" name="doDziela" id="wyslij" value="do dzieła!">
        </fieldset>
        </div>
    </div>
    <div class="info"><h1>Podaj login i hasło</h1></div>
    <?php
}


?>