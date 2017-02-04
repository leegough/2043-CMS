<?php
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include '../../connections/conn.php';

$target_dir = "../../gallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload10"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit10"])) {
    $check = getimagesize($_FILES["fileToUpload10"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $imageFileType . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload10"]["size"] > 800000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload10"]["tmp_name"], $target_file)) {
        
        $insertquery = "UPDATE gallery SET gallery8='$target_file' ";
        $insertresult = mysqli_query($conn, $insertquery) or die(mysqli_error($conn));

        echo "The file ". basename( $_FILES["fileToUpload10"]["name"]). " has been uploaded.<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
    } else {
        echo "Sorry, there was an error uploading your file.<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
    }
}
