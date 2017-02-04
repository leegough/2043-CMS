<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$price1text = mysqli_real_escape_string($conn, $_POST["price1text"]);

 if ($price1text) {
     
     $queryupdate = "UPDATE pricing SET price1text='$price1text'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $price1text . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter text!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";

 }