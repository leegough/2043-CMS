<?php
    session_start();
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>
    
<?php
    $checkdate = $_GET["thedate"];
    include('../connections/conn.php');
    if(isset($_POST['deletesubmit']))
    {
        $SQL2 = "DELETE FROM ilecture08 WHERE booked = '$checkdate'";

        $resultdate2 = mysqli_query($conn, $SQL2);
        
        $URL2 = 'insertdate.php';
        header("Location:$URL2");
    }
   
?>

<?php
    $checkdate = $_GET["thedate"];
    include('../connections/conn.php');
    if(isset($_POST['datesubmit']))
    {
        $SQL = "INSERT INTO ilecture08 (booked) VALUES ('$checkdate')";

        $resultdate = mysqli_query($conn, $SQL);
        
        $URL = 'insertdate.php';
        header("Location:$URL");
    }
   
?>

<?php

$checkdate = $_GET["thedate"];

include("../connections/conn.php");

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
             
             echo "<p>This date has been booked</p>"            
             . "<form method='post'><input type='submit' name='deletesubmit' value='Remove date'></form>";
         }else{
             
             echo"<p>This date is free to book</p>"
             . "<p>Please click book date to make this date unavailable to book</p>"
             . "<form method='post'><input type='submit' name='datesubmit' value='Book date'></form>";
         }       
                
        ?>
    </body>
</html>
 
