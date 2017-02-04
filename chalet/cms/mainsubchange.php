<?php
    session_start();
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../connections/conn.php");


$homedata25 = mysqli_real_escape_string($conn, $_POST["mainsubchange"]);


 if ($homedata25) {
     
     $queryupdate = "UPDATE brchome SET brctitle25='$homedata25'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
      echo $homedata25 . " <p>Update successful!<br><br>Please click <a href='index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter text!<br><br>Please click <a href='index.php'>here</a> to return to CMS";
     
 }