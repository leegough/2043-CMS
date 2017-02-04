<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    
    include "connections/conn.php";
    
    $query = "SELECT * FROM brchome";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            $titledata = $row["brctitle"];
            $homedata= $row["brcintro"];
            $homeimgdata = $row["homeimg"];
            $titledata2 = $row["brctitle2"];
            $homedata2 = $row["brcintro2"];
            $homedata25 = $row["brctitle25"];

        }
    }
        
    
    
    mysqli_close($conn);
    
    
?>

<?php
    
    include "connections/conn.php";
    
    $navquery = "SELECT * FROM navbar";
    
    $navresult = mysqli_query($conn, $navquery) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($navresult) > 0){
        
        while($row = mysqli_fetch_assoc($navresult)){
            $item1 = $row["menu1"];
            $item2 = $row["menu2"];
            $item3 = $row["menu3"];
            $item4 = $row["menu4"];
            $item5 = $row["menu5"];

        }
    }
        
    
    
    mysqli_close($conn);
    
    
?>

<html>
    <head>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script> 
        
        </script>
       
  <title>Colette's Apartment in Samoens, Haute Savoie, Rhone-Alpes, France</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/uitwo.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
        <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $item1 ?></a></li>
        <li><a href="#"><?php echo $item2 ?></a></li>
        <li><a href="#"><?php echo $item3 ?></a></li>
        <li><a href="#"><?php echo $item4 ?></a></li>
        <li><a href="#"><?php echo $item5 ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Colette's Apartment</h1>
  <p>Content Management System</p>
  
</div>
    

    <div align="center">
  <h2>Administrator Panel</h2>
  <h4>Please enter your username and password to log-in</h4>
    
    <div class="wrapper">
    <form class="form-signin" action="sign.php" method="POST">       
      
        <div>
      <input type="text" class="form-control" name="myuser" placeholder="Username" required />
        </div>
        <div>
      <input type="password" class="form-control" name="mypassword" placeholder="Password" required/>      
        </div>
        
        <div class="text-center">
        <br>
      <input type="submit" value="login" class="btn btn-primary">   
        </div>
    </form>
  </div>



<footer class="container-fluid text-center">
    <a href="index.php" title="To Top">
    <span class="glyphicon glyphicon-home"></span>
  </a>
  <p>Return to main page</p>
</footer>


    
    


</body>
</html>