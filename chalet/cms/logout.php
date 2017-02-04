<?php

session_start();
session_destroy();

$URL = '../admin.php';
    header("Location:$URL"); 

?>

<?php
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>
