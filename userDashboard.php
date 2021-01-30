<?php
include('header.php');
if(!isset($_SESSION['user'])){
  header('Location:index.php');
  exit();  
}
?>


<section id="footer-form">
  <div class="container">
    <div class="row bg-footer">
      <div class="col-md-12 ">
        <?php if(isset($_SESSION['hotelBookingData'])){ 
           include('hotelBookingConfirmation.php');
           } else if(isset($_SESSION['carBookingData'])){ 
           include('carBookingConfirmation.php');
           } else { ?>
          <h3 class="text-blue pb-2" >Welcome to User Dashboard of Travel Guidance System</h3>

          <p>Your booking history to be shown here</p>
        <?php } ?>


      </div> 
    
  </div>
</div>
</section>

<?php
include('footer.php');
?>
