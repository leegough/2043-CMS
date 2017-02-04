<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$contactno = mysqli_real_escape_string($conn, $_POST["contactno"]);

 if ($contactno) {
     
     $queryupdate = "UPDATE contact SET phoneno='$contactno'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $contactno . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a number!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
 }
