<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$price2 = mysqli_real_escape_string($conn, $_POST["price2"]);

 if ($price2) {
     
     $queryupdate = "UPDATE pricing SET price2='$price2'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $price2 . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a price!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";

 }