<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../connections/conn.php");

$item1 = mysqli_real_escape_string($conn, $_POST["menuonechange"]);

 if ($item1) {
     
     $queryupdate = "UPDATE navbar SET menu1='$item1'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $item1 . " <p>Update successful!<br><br>Please click <a href='index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a title!<br><br>Please click <a href='index.php'>here</a> to return to CMS";
 }