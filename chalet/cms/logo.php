<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../connections/conn.php");

$logo = mysqli_real_escape_string($conn, $_POST["logo"]);

 if ($logo) {
     
     $queryupdate = "UPDATE navbar SET logo='$logo'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $logo . " <p>Update successful!<br><br>Please click <a href='index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a logo!<br><br>Please click <a href='index.php'>here</a> to return to CMS";
 }