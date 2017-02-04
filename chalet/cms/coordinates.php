<?php
    session_start();
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include('../connections/conn.php');

$latitude = mysqli_real_escape_string($conn, $_POST["latitude"]);
$longitude = mysqli_real_escape_string($conn, $_POST["longitude"]);
$uploadok = 1;

function isValidLatitude($latitude){
    if (preg_match("/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}$/", $latitude)) {
        return true;
    } else {
        return false;
    }
  }
 
 # Call function
 
  if (isValidLatitude($latitude)) {
       echo " Valid Latitude <br>";
  }else{
      $uploadok = 0;
      echo " Invalid latitude <br>";
  }

  function isValidLongitude($longitude){
    if(preg_match("/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/",
      $longitude)) {
       return true;
    } else {
       return false;
    }
  }

 # Call function
 
  if (isValidLongitude($longitude)) {
       echo " Valid Longitude<br>";
  }else{
      $uploadok = 0;
      echo " Invalid longitude <br>";
  }
  
 
  
// throw bad coords out the window
  if ($uploadok == 0) {
    echo "<br>Sorry, invalid coordinates. Please enter correctly formatted values.<br><br>Please click <a href='index.php'>here</a> to return to CMS";
// if everything is ok, try to upload coordinates
} else {
    
    $checkmap = "UPDATE coordinates
SET latitude='$latitude', longtitude='$longitude'
WHERE id=4;";

$result = mysqli_query($conn, $checkmap);
echo "<br>Coordinates successfully added<br><br>Please click <a href='index.php'>here</a> to return to CMS";

}

?>


