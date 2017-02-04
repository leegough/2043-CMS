<?php
    session_start();
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../connections/conn.php");

$item4 = mysqli_real_escape_string($conn, $_POST["menufourchange"]);

if ($item4) {
     
     $queryupdate = "UPDATE navbar SET menu4='$item4'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $item4 . " <p>Update successful!<br><br>Please click <a href='index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a title!<br><br>Please click <a href='index.php'>here</a> to return to CMS";
 }