<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
//using session
session_start();

//if not set kick them out
if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}

?>

<?php

include ("../connections/conn.php");

$imgquery = "SELECT * FROM brchome";

$imgresult = mysqli_query($conn, $imgquery) or die(mysqli_error($conn));

if (mysqli_num_rows($imgresult) > 0){
    
           while ($row = mysqli_fetch_assoc($imgresult)) {
                          
           $image1 = $row["homeimg"];
           $image2 = $row["homeimg2"];
           
           }
}

mysqli_close($conn);

?>

<?php

include ("../connections/conn.php");

$galleryquery = "SELECT * FROM gallery";

$galleryresult = mysqli_query($conn, $galleryquery) or die(mysqli_error($conn));

if (mysqli_num_rows($galleryresult) > 0){
    
           while ($row = mysqli_fetch_assoc($galleryresult)) {
                          
           $gallery1 = $row["gallery1"];
           $gallery2 = $row["gallery2"];
           $gallery3 = $row["gallery3"];
           $gallery4 = $row["gallery4"];
           $gallery5 = $row["gallery5"];
           $gallery6 = $row["gallery6"];
           $gallery7 = $row["gallery7"];
           $gallery8 = $row["gallery8"];
           $gallery9 = $row["gallery9"];
           $gallery10 = $row["gallery10"];
           $gallery11 = $row["gallery11"];
           $gallery12 = $row["gallery12"];
           
           }
}

mysqli_close($conn);

?>

<?php
    include "../connections/conn.php";
    
    $query = "SELECT * FROM brchome";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            $titledata = $row["brctitle"];
            $homedata = $row["brcintro"];
            $homeimgdata = $row["homeimg"];
            $titledata2 = $row["brctitle2"];
            $homedata2 = $row["brcintro2"];
            $homedata25 = $row["brctitle25"];
        }
    }
 ?>

<?php
    
    include "../connections/conn.php";
    
    $navquery = "SELECT * FROM navbar";
    
    $navresult = mysqli_query($conn, $navquery) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($navresult) > 0){
        
        while($row = mysqli_fetch_assoc($navresult)){
            $logo  = $row["logo"];
            $item1 = $row["menu1"];
            $item2 = $row["menu2"];
            $item3 = $row["menu3"];
            $item4 = $row["menu4"];
            $item5 = $row["menu5"];

        }
    }
    ?>

<?php
    include "../connections/conn.php";
    
    $pricingquery = "SELECT * FROM pricing";
    
    $pricingresult = mysqli_query($conn, $pricingquery) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($pricingresult) > 0){
        
        while($row = mysqli_fetch_assoc($pricingresult)){
            $price1title = $row["price1title"];
            $price1text = $row["price1text"];
            $price1 = $row["price1"];
            $price2title = $row["price2title"];
            $price2text = $row["price2text"];
            $price2 = $row["price2"];
            $price3title = $row["price3title"];
            $price3text = $row["price3text"];
            $price3 = $row["price3"];
        }
    }
 ?>

<?php
    include "../connections/conn.php";
    
    $contactquery = "SELECT * FROM contact";
    
    $contactresult = mysqli_query($conn, $contactquery) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($contactresult) > 0){
        
        while($row = mysqli_fetch_assoc($contactresult)){
            $contactlocation = $row["location"];
            $contactno = $row["phoneno"];
            $contactemail = $row["email"];

        }
    }
 ?>

<?php
    include "../connections/conn.php";
    
    $mapquery = "SELECT * FROM coordinates";
    
    $mapresult = mysqli_query($conn, $mapquery) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($mapresult) > 0){
        
        while($row = mysqli_fetch_assoc($mapresult)){
            $latitude = $row["latitude"];
            $longitude = $row["longtitude"];

        }
    }
 ?>


<html>
    <head>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        
       
  <title>Colette's Apartment in Samoens, Haute Savoie, Rhone-Alpes, France</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../styles/uitwo.css"/>
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
      
    <a class="navbar-brand" href="#myPage">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" >Menu/About-edit</a></li>
        <li><a href="#gallery">Gallery-edit</a></li>
        <li><a href="#pricing">Pricing-edit</a></li>
        <li><a href="#booking">Bookings-edit</a></li>
        <li><a href="#contact">Contact/Location-edit</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Colette's Apartment</h1>
  <p>Content Management System</p>
  <a href="logout.php"><button type="button" class="btn btn-primary">Log out</button></a>
  
</div>
    
    <div id="about" class="container-fluid text-center">
  <h2>Menu/About Panel</h2>
  <br>
  <div class="row slideanim">
      
      <div class="container">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>NAVIGATION MENU</h4>
      
  <div class="row">
    <div class="col-sm-4">
      <h4>Edit logo: </h4>
      <form action='logo.php' method='POST'>
      <?php
      
      echo "<input type='text' name='logo' Placeholder='Enter logo...' col='10' maxlength='20'>";
      
      ?>
	<input type="submit" value="save"/>
      </form>
    </div>
    <div class="col-sm-4">
      <h4>Edit Menu 1: </h4>
      <form action='menu1.php' method='POST'>
      <?php
      
      echo "<input type='text' name='menuonechange' Placeholder='Enter Menu1...' col='10' maxlength='10'>";
      
      ?>
	<input type="submit" value="save"/>
      </form>
    </div>
    <div class="col-sm-4">
      <h4>Edit Menu 2: </h4>
      <form action='menu2.php' method='POST'>
      <?php
      
      echo "<input type='text' name='menutwochange' Placeholder='Enter Menu2...' col='10' maxlength='10'>";
      
      ?>
	<input type="submit" value="save"/>
      </form>
    </div>
      <div class="col-sm-4">
      <h4>Edit Menu 3: </h4>
      <form action='menu3.php' method='POST'>
      <?php
      
      echo "<input type='text' name='menuthreechange' Placeholder='Enter Menu3...' col='10' maxlength='10'>";
      
      ?>
	<input type="submit" value="save"/>
      </form>
    </div>
      <div class="col-sm-4">
      <h4>Edit Menu 4: </h4>
      <form action='menu4.php' method='POST'>
      <?php
      
      echo "<input type='text' name='menufourchange' Placeholder='Enter Menu4...' col='10' maxlength='10'>";
      
      ?>
	<input type="submit" value="save"/>
        </form>
    </div>
      <div class="col-sm-4">
      <h4>Edit Menu 5: </h4>
      <form action='menu5.php' method='POST'>
      <?php
      
      echo "<input type='text' name='menufivechange' Placeholder='Enter Menu5...' col='10' maxlength='10'>";
      
      ?>
	<input type="submit" value="save"/>
      </form>
    </div>
  </div>
</div>
      <br>
      <br>
      
      <div id="show" class="container-fluid">
  <span class="glyphicon glyphicon-comment"></span>
      <h4>ABOUT</h4>
  <div class="row">
      <div class="col-sm-6 col-xs-12">
      
  
      <form action="titlechange.php" method="POST">
          <div class="text-center">
            <h4>Edit Title: </h4>
          </div>
            		
      <?php
      
      echo "<input type='text' name='titlechange' Placeholder='Enter title...' col='10' maxlength='30'>";
      
      ?>
	<input type="submit" value="save"/>
        </form>
            
          <br>
      
          
          <br>
          
          
          <form action="maintextchange.php" method="POST">
            <div align="center">
            <h4>Edit Main Text: </h4>
            </div>
            		
      <?php
      
      echo "<textarea name='maintextchange' rows='7' cols='40' col='10' >$homedata</textarea>";
      
      ?>
              
         <br>      
              
	<input type="submit" value="save"/>
        
          </form>
          
          <div>
          <form action="mainsubchange.php" method="POST">
            <div align="center">
            <h4>Edit Main Sub Text: </h4>
            </div>
            		
      <?php
      
      echo "<textarea name='mainsubchange' rows='7' cols='40' col='10' >$homedata25</textarea>";
      
      ?>
              
         <br>      
              
	<input type="submit" value="save"/>
        
          </form>
   
	</div>
          <form action="subtitlechange.php" method="POST">
          <div class="text-center">
            <h4>Edit Title: </h4>
          </div>
            		
      <?php
      
      echo "<input type='text' name='subtitlechange' Placeholder='Enter title...' col='10' maxlength='30'>";
      
      ?>
	<input type="submit" value="save"/>
        </form>
          
          <br>
          <br>
          
          
          <form action="subtextchange.php" method="POST">
            <div align="center">
            <h4>Edit Main Text: </h4>
            </div>
            		
      <?php
      
      echo "<textarea name='subtextchange' rows='7' cols='40' col='10' >$homedata2</textarea>";
      
      ?>
              
         <br>      
              
	<input type="submit" value="save"/>
        
          </form>
          
          <div>
        
          
      </div>
      </div>
      
 
    <div class="col-sm-6 col-xs-12">
              <h4>Edit image 1: </h4>
              <form action="insert_image.php" method="POST" enctype="multipart/form-data">
                  
                  <?php                           
                          echo "<div class='right'>
                                <img src='../uploaded/$image1' width='240px' />
                                <p><input type='file' name='fileToUpload' id='fileToUpload'/></p>
                                </div>";
                  ?>
                  
              <input type="submit" value="Upload Image" name="submit" />
              
    </form>
              <br>
              <br>
          <h4>Edit image 2: </h4>
              <form action="insert_image2.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='../uploaded/$image2' width='240px' />
                                <p><input type='file' name='fileToUpload2' id='fileToUpload2'</p>
                                </div>";                        
                  ?>
                  
              <input type="submit" value="Upload Image" name="submit2" />
              
          </form>
    </div>
  </div>
  </div>
  </div>
  </div>
  
  <div id='gallery' class="container-fluid bg-grey">
  <div class="text-center">
    <h2>Gallery panel</h2>
    <h4>Please select thumbnail to edit</h4>
  </div>

<div id='show' class="container " >
    <div id="main_area">
        <!-- Slider -->
        <div class="row ">
            <div class="col-sm-12">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert1.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery1' width='150px' />
                                <p><input type='file' name='fileToUpload3' id='fileToUpload3'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit3" />
              
                        </form>  
                    </li>

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert2.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery2' width='150px' />
                                <p><input type='file' name='fileToUpload4' id='fileToUpload4'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit4" />
              
                        </form> 
                    </li>

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert3.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery3' width='150px' />
                                <p><input type='file' name='fileToUpload5' id='fileToUpload5'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit5" />
              
                        </form> 
                    </li>

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert4.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery4' width='150px' />
                                <p><input type='file' name='fileToUpload6' id='fileToUpload6'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit6" />
              
                        </form> 
                    </li>

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert5.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery5' width='150px' />
                                <p><input type='file' name='fileToUpload7' id='fileToUpload7'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit7" />
              
                        </form> 
                    </li>
                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert6.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery6' width='150px' />
                                <p><input type='file' name='fileToUpload8' id='fileToUpload8'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit8" />
              
                        </form> 
                    </li>

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert7.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery7' width='150px' />
                                <p><input type='file' name='fileToUpload9' id='fileToUpload9'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit9" />
              
                        </form> 
                    </li>

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert8.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery8' width='150px' />
                                <p><input type='file' name='fileToUpload10' id='fileToUpload10'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit10" />
              
                        </form> 
                    </li>

                    <li class="col-sm-3">
                       <form action="galleryinsert/galleryinsert9.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery9' width='150px' />
                                <p><input type='file' name='fileToUpload11' id='fileToUpload11'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit11" />
              
                        </form> 
                    </li>
                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert10.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery10' width='150px' />
                                <p><input type='file' name='fileToUpload12' id='fileToUpload12'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit12" />
              
                        </form> 
                    </li>

                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert11.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery11' width='150px' />
                                <p><input type='file' name='fileToUpload13' id='fileToUpload13'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit13" />
              
                        </form> 
                    </li>
                    
                    <li class="col-sm-3">
                        <form action="galleryinsert/galleryinsert12.php" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                                echo "<div class='right'>
                                <img src='gallery/$gallery12' width='150px' />
                                <p><input type='file' name='fileToUpload14' id='fileToUpload14'</p>
                                </div>";                        
                  ?>
                  
                                <input type="submit" value="Upload Image" name="submit14" />
              
                        </form> 
                    </li>
                    
               

                </ul>
            </div>
            
        </div>

    </div>
</div>
</div>
    
  <!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Edit pricing</h4>
  
  
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <form action="pricing/price1change.php" method="POST">
	<div class='infobox'>
		
      <?php
      
      echo "<input type='text' name='price1title' Placeholder='Enter title...' col='10' size='16' maxlength='30'>";
      
      ?>
	<input type="submit" value="save"/>	

	</div>
    </form>
        </div>
        <div class="panel-body">
          <form action="pricing/price1text.php" method="POST">
          <div class="text-center">
          <?php
      
      echo "<textarea name='price1text' rows='7' cols='15' col='10' maxlength='100' >$price1text</textarea>";
      
      ?>
              <br>
              <input type="submit" value="save"/>
            </div>   
          </form>
        </div>
        <div class="panel-footer">
          
          <div class="text-center">
          <form action="pricing/price1.php" method="POST">
          <?php
      
      echo "<textarea name='price1' rows='2' cols='4' col='10' maxlength='10' >$price1</textarea>";
      
      ?>
              <br>
              <input type="submit" value="save"/>
          </form>
            </div>   
          </form>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
            <form action="pricing/price2change.php" method="POST">
	<div class='infobox'>
 		
      <?php
      
      echo "<input type='text' name='price2title' Placeholder='Enter title...' col='10' size='16' maxlength='30'>";
      
      ?>
	<input type="submit" value="save"/>	

	</div>
    </form>
        </div>
        <div class="panel-body">
            <form action="pricing/price2text.php" method="POST">
          <div class="text-center">
          <?php
      
      echo "<textarea name='price2text' rows='7' cols='15' col='10' maxlength='100' >$price2text</textarea>";
      
      ?>
              <br>
              <input type="submit" value="save"/>
            </div>   
          </form>
        </div>
        <div class="panel-footer">
          <div class="text-center">
          <form action="pricing/price2.php" method="POST">
          <?php
      
      echo "<textarea name='price2' rows='2' cols='4' col='10' maxlength='10'>$price2</textarea>";
      
      ?>
              <br>
            <input type="submit" value="save"/>
            </form>
            </div>

        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
            <form action="pricing/price3change.php" method="POST">
	<div class='infobox'>
		
      <?php
      
      echo "<input type='text' name='price3title' Placeholder='Enter title...' col='10' size='16' maxlength='30'>";
      
      ?>
	<input type="submit" value="save"/>	

	</div>
    </form>
        </div>
        <div class="panel-body">
          <form action="pricing/price3text.php" method="POST">
          <div class="text-center">
          <?php
      
      echo "<textarea name='price3text' rows='7' cols='15' col='10' maxlength='100'>$price3text</textarea>";
      
      ?>
              <br>
              <input type="submit" value="save"/>
            </div>   
          </form>
        </div>

        <div class="panel-footer">
          <div class="text-center">
          <form action="pricing/price3.php" method="POST">
          <?php
      
      echo "<textarea name='price3' rows='2' cols='4' col='10' maxlength='10'>$price3</textarea>";
      
      ?>
              <br>
            <input type="submit" value="save"/>
            </form>
            </div>
        </div>
      </div>      
    </div>    
  </div>
</div>

<div id="booking" class="container-fluid text-center bg-grey">
  <h2>Booking Panel</h2>
  <h4>Please select a date you wish to edit</h4>
 
      <div id ="show" align="center" >
    
<?php

 
//static is bad programming

$date = time(); 

$day = date('d', $date); 
$month = date('m', $date); 
$year = date('Y', $date); 

echo $day.' - '.$month.' - '.$year;
        
 showmonth($month,$year);
 
  // ------------------------------------ 
 

  function showmonth($month, $year) {
   
    $first_day = mktime(0,0,0,$month, 1, $year);  // Here we generate the first day of the month
	
    $title = date('F', $first_day);               // This gets us the month name 
	
    $day_of_week = date('D', $first_day);         // day of week for 1st day of month
   
    switch($day_of_week) {                        // blank days before months first day
        case "Sun": $blankdays = 0; break; 
        case "Mon": $blankdays = 1; break; 
        case "Tue": $blankdays = 2; break; 
        case "Wed": $blankdays = 3; break; 
        case "Thu": $blankdays = 4; break; 
        case "Fri": $blankdays = 5; break; 
        case "Sat": $blankdays = 6; break; 
    }
   
    $days_in_month = cal_days_in_month(0, $month, $year); // days in the month
   
    echo "<table class='pure-table'>";
    echo "<thead><tr><th colspan=7> $title $year </th></tr>";
    
    echo "<tr>                                     <!-- table header row  -->
            <td>S</td>
            <td>M</td>
            <td>T</td>
            <td>W</td>
            <td>T</td>
            <td>F</td>
            <td>S</td>
          </tr></thead>";
   
    $day_count = 1;
 
    $blank_cnt =  $blankdays;  
	
    echo "<tr>";
 
    while ( $blank_cnt > 0 )                     // blank day table cells
    { 
        echo "<td></td>"; 
        $blank_cnt--; 
        $day_count++;
    }
   
    $day_num = 1;                                // day number
    $cnt = $blankdays;                           // skip blank days in first week

    while ( $day_num <= $days_in_month ) {       // count days until done
     
        if ($cnt==7) {$cnt = 0;};
      while ($cnt < 7) {
        echo " <td><a href ='check2.php?thedate=$year-$month-$day_num'>$day_num</a></td> ";
        $day_num++; 
        $day_count++;
        $cnt++;
        if ($day_num > $days_in_month) {break;}
        if ($cnt == 7) { echo "</tr>"; }
      }
    }
 
    while ( $cnt > 1 && $cnt <=6 ) {            // continue with $cnt for end of month blank days
        echo "<td></td>";
        $cnt++;
    }
   
    echo "</tr></table>";
   
  } // end of function 
  
  ?>
    
</div>
</div>
<br>
  
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <div class="text-center">
    <h2>Contact Panel</h2>
    <h4>Edit contact details</h4>
  </div>
  <div class="row">
      
    
  
       
      <div class="col-sm-12 text-center">
      
      <form action="contact/contactlocation.php" method="POST">
      <p><span class="glyphicon glyphicon-map-marker"></span>
      <?php
      
      echo "<input type='text' name='contactlocation' Placeholder='Enter location...' col='10' maxlength='50'>";
      
      ?>
	<input type="submit" value="save"/>
        <br>
        <br>
      </form>
    </div>
      <div class="col-sm-12 text-center">
      <form action="contact/contactno.php" method="POST">
      <span class="glyphicon glyphicon-phone"></span>
      <?php
      
      echo "<input type='text' name='contactno' Placeholder='Enter number...' col='10' maxlength='20'>";
      
      ?>
	<input type="submit" value="save"/>
        <br>
        <br>
      </form>
          
    </div>
      
      
      <div class="col-sm-12 text-center">
      <form action="contact/contactemail.php" method="POST">
      <span class="glyphicon glyphicon-envelope"></span>
      <?php
      
      echo "<input type='text' name='contactemail' Placeholder='Enter email...' col='10' maxlength='40'>";
      
      ?>
	<input type="submit" value="save"/>
        <br>
        
      </form>
    </div>
      
    </div>
  </div>
</div>

<div class="text-center">
    
    <h2>Change Location Coordinates</h2>
  <h4>Please enter a valid latitude and longitude</h4>
    
    <div class="wrapper">
    <form class="form-signin" action="coordinates.php" method="POST">       
      
        <div>
      <input type="text" id="numbersonly" class="form-control" name="latitude" value='<?php echo"$latitude" ?>'  required />
        </div>
        <div>
      <input type="text" id="numbersonly"  class="form-control" name="longitude" value='<?php echo"$longitude" ?>' required/>      
        </div>
        
        <div class="text-center">
        <br>
      <input type="submit" value="Update" class="btn btn-primary">   
        </div>
    </form>
  </div>
    
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Admin Home</p>
</footer>

<script>
    
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

// Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });
    
//Stops carousel messing up page in mobile view
    $('.carousel').carousel({
    pause: true,
    interval: false
});
</script>  

<script> 

        </script>


</body>
</html>