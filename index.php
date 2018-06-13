<?php include('views/setings.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>

    <?php // include('views/background_old.php'); ?>
    <?php  include('views/background_new.php'); ?>
<body>

    <?php include('views/header.php'); ?>
  <secttion class="koszyk">  
    <?php include('views/koszyk.php'); ?>
  </section>
  <Main>
        
        <?php include('views/zalogowany.php'); ?>
        <?php include('views/produkty.php'); ?>


  
  </Main>    
</body>
</html>