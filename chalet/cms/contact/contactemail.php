<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$contactemail = mysqli_real_escape_string($conn, $_POST["contactemail"]);

 if ($contactemail) {
     
     $queryupdate = "UPDATE contact SET email='$contactemail'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $contactemail . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter an Email!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
 }