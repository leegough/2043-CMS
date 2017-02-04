<?php
session_start();

include('connections/conn.php');

$user = mysqli_real_escape_string($conn, $_POST["myuser"]);
$pass = mysqli_real_escape_string($conn, $_POST["mypassword"]);

$checkuser = "SELECT * FROM brcusers WHERE username='$user' AND password='$pass'";

$result = mysqli_query($conn, $checkuser);

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
        // put your code here
        if(mysqli_num_rows($result) > 0){
            echo "<p> Logged in</p>";
            $_SESSION["brc_40156316"] = "true";
            echo "<p>Proceeding to admin page...</p>";
            header( "refresh:2;url=cms/index.php" );
        }else{
            echo "You have entered an incorrect username/password";
        }

        ?>
        

    </body>
    
    
</html>

