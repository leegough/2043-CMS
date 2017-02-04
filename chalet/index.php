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
            $homedata = $row["brcintro"];
            $homeimgdata = $row["homeimg"];
            $titledata2 = $row["brctitle2"];
            $homedata2 = $row["brcintro2"];
            $homedata25 = $row["brctitle25"];
        }
    }
        
    mysqli_close($conn);
    
    ?>

<?php
    
  if(isset($_GET['thedate']))
        { 
      
      $new = $_GET['thedate'];
      $checkdate = $_GET["thedate"];

include("connections/conn.php");

$loquery = "SELECT * FROM ilecture08 WHERE booked = '$checkdate' ";

$loresult = mysqli_query($conn, $loquery) or die (mysqli_error());

mysqli_close($conn);

            
            } else { 
                
                
     }
?>

<?php
    
    include "connections/conn.php";
    
    $navquery = "SELECT * FROM navbar";
    
    $navresult = mysqli_query($conn, $navquery) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($navresult) > 0){
        
        while($row = mysqli_fetch_assoc($navresult)){
            $logo = $row["logo"];
            $item1 = $row["menu1"];
            $item2 = $row["menu2"];
            $item3 = $row["menu3"];
            $item4 = $row["menu4"];
            $item5 = $row["menu5"];

        }
    }
        
    
    
    mysqli_close($conn);  
    
?>

<?php

include ("connections/conn.php");

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

include ("connections/conn.php");

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
    include "connections/conn.php";
    
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
    include "connections/conn.php";
    
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
    include "connections/conn.php";
    
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
      
    <a class="navbar-brand" href="#myPage"><?php echo $logo ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about"><?php echo $item1 ?></a></li>
        <li><a href="#gallery"><?php echo $item2 ?></a></li>
        <li><a href="#pricing"><?php echo $item3 ?></a></li>
        <li><a href="#bookings"><?php echo $item4 ?></a></li>
        <li><a href="#contact"><?php echo $item5 ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Colette's Apartment</h1>
  <p>Samoens, Haute Savoie, Rhone-Alpes, France</p>

</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <?php
      echo "<h2>".$titledata."</h2>";
      echo nl2br("<h4>$homedata</h4>");
      echo nl2br("<p>$homedata25</p>");
      ?>
      
        <br><a href="#contact"><button type="button" class="btn btn-primary">Get in contact!</button></a>
    </div>
      <br>
    <div class="col-sm-4">
        <span>
            <?php 

            echo "<img src='uploaded/$image1' class='img-responsive img-rounded' width='400px'/>";

            ?>
        </span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
        <span>
            <?php 

            echo "<img src='uploaded/$image2' class='img-responsive img-rounded' width='400px'/>";

            ?>
        </span>
    </div>
    <div class="col-sm-8">
      <?php
          echo "<h2>$titledata2</h2>";
      ?>
      <?php
      echo nl2br("<h4>$homedata2</h4>");
      ?>
    </div>
  </div>
</div>

<div id="gallery" class="container-fluid">
  <div class="text-center">
    <h2>Gallery</h2>
    <h4>Get a closer look</h4>
  </div>
    
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <?php
      echo "<img src='cms/gallery/$gallery1' width='150px'/>";
       ?>
    </div>

    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery2'>";
       ?>
    </div>

    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery3'>";
       ?>
    </div>

    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery4'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery5'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery6'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery7'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery8'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery9'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery10'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery11'>";
       ?>
    </div>
      
    <div class="item">
      <?php
      echo "<img src='cms/gallery/$gallery12'>";
       ?>
    </div>
  </div>
  

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span style="color:black" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span style="color:black" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>
</div>
<br>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid bg-grey">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <?php echo "<h1>$price1title</h1>"; ?>
        </div>
        <div class="panel-body">
           <?php echo nl2br("<p><strong>$price1text </strong></p>");
          ?>
        </div>
        <div class="panel-footer">
          <?php echo "<h3>£$price1</h3>"; ?>
          <a href="#contact"><button type="button" class="btn btn-lg">Enquire</button></a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <?php echo "<h1>$price2title</h1>"; ?>
        </div>
        <div class="panel-body">
           <?php echo nl2br("<p><strong>$price2text </strong></p>");
          ?>
        </div>
        <div class="panel-footer">
          <?php echo "<h3>£$price2</h3>"; ?>
          <a href="#contact"><button type="button" class="btn btn-lg">Enquire</button></a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <?php echo "<h1>$price3title</h1>"; ?>
        </div>
        <div class="panel-body">
           <?php echo nl2br("<p><strong>$price3text </strong></p>");
          ?>
        </div>
        <div class="panel-footer">
          <?php echo "<h3>£$price3</h3>"; ?>
          <a href="#contact"><button type="button" class="btn btn-lg">Enquire</button></a>
        </div>
      </div>      
    </div>    
  </div>

<!-- Container (Bookings Section) -->
<div id="bookings" class="container-fluid">
  <div class="text-center">
    <h2>Bookings</h2>
    <h4>Choose a date that best suits you</h4>
  </div>
  

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
   
    echo "<table class='pure-table '>";
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
        echo " <td><a href ='check.php?thedate=$year-$month-$day_num'>$day_num</a></td> ";
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

   
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
      
    <div class="col-sm-5"> 

      <p><span class="glyphicon glyphicon-map-marker"></span><?php echo "$contactlocation" ?> </p>
      <p><span class="glyphicon glyphicon-phone"></span> <?php echo "$contactno" ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?php echo "$contactemail" ?></p>
    </div>
      
      <form class="col-sm-7 slideanim" action="contactform.php" method="POST">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <td><input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input type="submit" name="Submit" value="Submit"> 
          <input type="reset" name="Submit2" value="Reset">
        </div>
      </div>
    </div>
      </form>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var latitude = "<?php echo $latitude; ?>";
var longitude = "<?php echo $longitude; ?>";

var myCenter = new google.maps.LatLng(latitude, longitude);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Home</p>
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
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>


</body>
</html>


