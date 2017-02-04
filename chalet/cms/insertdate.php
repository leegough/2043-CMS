<?php
    session_start();
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

 echo "<br>Update successful! Please click <a href='index.php'>here</a> to return to CMS</p>";