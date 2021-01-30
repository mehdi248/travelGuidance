<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Travel Guidance System</title>
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,800" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/style.css?v=<?php echo time();?>" rel="stylesheet">



<!-- animation script/stylesheet --> 
 
</head>

<body>
<?php
if (session_status() == PHP_SESSION_NONE) {
      session_start();
  } 
?>
<nav class="navbar navbar-expand-md navbar-dark py-3">
  <div class="container">
    <div class="row"> <a class="navbar-brand" href="./" style="color: red!important; font-weight:bold; font-size: 27px;">Travel Guidance System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class= "fa fa-bars"></i></span> </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item "> <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a> </li>
          <li class="nav-item"><a class="nav-link" href="places.php">Places</a></li>
         <?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])){ ?>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bookings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="carBooking.php"><i class="fa fa-cab"></i> Car Booking</a>
                <a class="dropdown-item" href="hotelBooking.php"><i class="fa fa-hotel"></i> Hotel Booking</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Booking History
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                <a class="dropdown-item" href="carBookingHistory.php"><i class="fa fa-cab"></i> Car Booking History</a>
                <a class="dropdown-item" href="hotelBookingHistory.php"><i class="fa fa-hotel"></i> Hotel Booking History</a>
                
              </div>
            </li>
            
            
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
          <?php }else{ ?>
            <li class="nav-item "> <a class="nav-link" href="About-us.php">About Us<span class="sr-only">(current)</span></a> </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bookings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="carBooking.php"><i class="fa fa-cab"></i> Car Booking</a>
                <a class="dropdown-item" href="hotelBooking.php"><i class="fa fa-hotel"></i> Hotel Booking</a>
                
              </div>
            </li>
            
          <li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact Us </a> </li>
          <li class="bg-white btn btn-home nav-item nav-link nav-tabs"> <a class="nav-link" href="login.php">Login </a> </li>
            <!--<li class="nav-item"> <a class="nav-link" href="admin-login.php">Admin    Login </a> </li>-->
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</nav>