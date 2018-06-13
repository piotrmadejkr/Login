<?php 
if($_SESSION['bg'] == ''){
    $_SESSION['bg'] = 'img/bgSlider.jpg';
}

if(isset($_POST['bg'])) 
{ 
    $_SESSION['bg'] = $_POST['bg'];
} 

if(isset($_GET['bg'])) 
{ 
    $_SESSION['bg'] = $_GET['bg'];
} 






?>


<style type='text/css'>
        body{
            background-image:url('<?php echo $_SESSION['bg']; ?>');
        }
</style>




