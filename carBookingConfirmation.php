<?php 
$noOfHours = floor((strtotime($_SESSION['carBookingData']['endDate'])-strtotime($_SESSION['carBookingData']['startDate']))/(60 * 60));
$pricePerHour  = 20; // 100 AUD
$totalPrice =  $noOfHours * $pricePerHour;
    
?>
<div class="row bg-footer loginBox">
          <div class="col-md-3 ">
          </div>
          <div class="col-md-6 ">
          <h3 class="text-blue pb-2" >Review your booking and confirm it.</h3>

          
              <table class="table table-bordered table-responsive">
                <tr>
                  <th>Pickup Location</th>
                  <th>Drop Location</th>
                  <th>Pick Up Time</th>
                  <th>Drop Time</th>
    
                </tr>
                <tr>
                  <td><?php echo $_SESSION['carBookingData']['pickupLocation'];?></td>
                  <td><?php echo $_SESSION['carBookingData']['dropLocation'];?></td>
                  <td><?php echo $_SESSION['carBookingData']['startDate'];?></td>
                  <td><?php echo $_SESSION['carBookingData']['endDate'];?></td>

                </tr>
                
              </table>
              <div class="row">
              <div class="col-md-12" style="float: right;"><b>Price : <?php echo $totalPrice;?> AUD</b></div>
              </div>
              <div class="row">
              
              <div class="col-md-6 send-button">
                <form action="finalCarBooking.php" method="post" role="form" >
                <input type="hidden" name="price" value="<?php echo $totalPrice;?>">
                <button type="submit" class="btn btn-block btn-lg btn-danger text">Confirm Now</button>
              </form>
              </div>
              <div class="col-md-6 send-button">
                <a  href="carBooking.php" class="bg-off-white btn btn-block btn-lg">Reset</a>
              </div>
              </div>
              
          </div>
          <div class="col-md-3 ">
          </div>
        </div>