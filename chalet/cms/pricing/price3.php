<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$price3 = mysqli_real_escape_string($conn, $_POST["price3"]);

 if ($price3) {
     
     $queryupdate = "UPDATE pricing SET price3='$price3'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $price3 . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a price!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
 }
