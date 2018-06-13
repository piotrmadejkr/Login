
<?php

if($_SESSION['zalogowany'] == 'TAK') {
    ?>
<div class="produkty">
        <div class="row">
            <h2>Nasze Produkty:</h2>
            <div class="produkt1 col col-sm-4">
                <form method="post" action='./'>
                    <input type="submit" name="produkt" value="Trawa">
                </form>
                <img class="img-responsive" src="https://images.pexels.com/photos/403530/pexels-photo-403530.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
            </div>
            <div class="product2 col col-sm-4">
                <form method="post" action='./'>
                    <input type="submit" name="produkt" value="Auto">
                </form>
                <img class="img-responsive" src="https://images.pexels.com/photos/125514/pexels-photo-125514.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
            </div>
            <div class="product3 col col-sm-4">
                <form method="post" action='./'>
                    <input type="submit" name="produkt" value="Dron">
                </form>
                <img class="img-responsive" src="https://images.pexels.com/photos/997130/pexels-photo-997130.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
            </div>
            
         </div>
         
    </div>
    <?php
}
    ?>