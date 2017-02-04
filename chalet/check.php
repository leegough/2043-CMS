<?php

$checkdate = $_GET["thedate"];

include("connections/conn.php");

$query = "SELECT * FROM ilecture08 WHERE booked = '$checkdate' ";

$result = mysqli_query($conn, $query) or die (mysqli_error());

mysqli_close($conn);

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "<p>$checkdate</p>";
        
         if(mysqli_num_rows($result) > 0){
             
             echo "<p>Sorry, this date has been booked!</p>
             
             <p>Please return to <a href='index.php'>main page</a> and select an alternate date</p>";
             
         }else{
             
             echo"<p>Yes this date is free! Go to the <a href='index.php#contact'>contact</a> to request booking</p>";
             
         }       
                
        ?>
    </body>
</html>
 