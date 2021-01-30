<?php
//ini_set('display_errors', 1);
// Create connection
if (session_status() == PHP_SESSION_NONE) {
      session_start();
  } 
$con=mysqli_connect("localhost","12345","12345","travelGuidanceSystem");
// Check connection
if (mysqli_connect_errno($con))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>