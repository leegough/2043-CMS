<?php
//include password
$password="";
//declare MySQL username
$user = "";
//declare webserver
$webserver = "";
$db = "";

//mysqli api library in PHP to connect to the DB
$conn = mysqli_connect($webserver, $user, $password, $db);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error() );
}