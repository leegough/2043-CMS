<?php
    session_start();
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../connections/conn.php");

$titledata2 = mysqli_real_escape_string($conn, $_POST["subtitlechange"]);

 if ($titledata2) {
     
     $queryupdate = "UPDATE brchome SET brctitle2='$titledata2'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
      echo $titledata2 . " <p>Update successful!<br><br>Please click <a href='index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter text!<br><br>Please click <a href='index.php'>here</a> to return to CMS";
     
 }