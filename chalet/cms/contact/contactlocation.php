<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$contactlocation = mysqli_real_escape_string($conn, $_POST["contactlocation"]);

 if ($contactlocation) {
     
     $queryupdate = "UPDATE contact SET location='$contactlocation'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $contactlocation . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a location!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
 }




