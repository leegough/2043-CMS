<?php
    session_start();
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../connections/conn.php");

$item3 = mysqli_real_escape_string($conn, $_POST["menuthreechange"]);

if ($item3) {
     
     $queryupdate = "UPDATE navbar SET menu3='$item3'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $item3 . " <p>Update successful!<br><br>Please click <a href='index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a title!<br><br>Please click <a href='index.php'>here</a> to return to CMS";
 }
