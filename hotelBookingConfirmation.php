<?php 
$noOfDays = floor((strtotime($_SESSION['hotelBookingData']['endDate'])-strtotime($_SESSION['hotelBookingData']['startDate']))/(60 * 60 * 24));
$pricePerRoom  = 100; // 100 AUD
$totalPrice =  $pricePerRoom * $noOfDays*$_SESSION['hotelBookingData']['rooms'];
    
?>
<div class="row bg-footer loginBox">
          <div class="col-md-3 ">
          </div>
          <div class="col-md-6 ">
          <h3 class="text-blue pb-2" >Review your booking and confirm it.</h3>

          
              <table class="table table-bordered table-responsive">
                <tr>
                  <th>Property Name</th>
                  <th>No of Rooms</th>
                  <th>No of Adults</th>
                  <th>No of Child</th>
                  <th>Checkin Date</th>
                  <th>Checkout Date</th>
                </tr>
                <tr>
                  <td><?php echo $_SESSION['hotelBookingData']['property'];?></td>
                  <td><?php echo $_SESSION['hotelBookingData']['rooms'];?></td>
                  <td><?php echo $_SESSION['hotelBookingData']['adults'];?></td>
                  <td><?php echo $_SESSION['hotelBookingData']['children'];?></td>
                  <td><?php echo $_SESSION['hotelBookingData']['startDate'];?></td>
                  <td><?php echo $_SESSION['hotelBookingData']['endDate'];?></td>

                </tr>
                
              </table>
              <div class="row">
              <div class="col-md-12" style="float: right;"><b>Price : <?php echo $totalPrice;?> AUD</b></div>
              </div>
              <div class="row">
              
              <div class="col-md-6 send-button">
                <form action="finalHotelBooking.php" method="post" role="form" >
                <input type="hidden" name="price" value="<?php echo $totalPrice;?>">
                <button type="submit" class="btn btn-block btn-lg btn-danger text">Confirm Now</button>
              </form>
              </div>
              <div class="col-md-6 send-button">
                <a  href="hotelBooking.php" class="bg-off-white btn btn-block btn-lg">Reset</a>
              </div>
              </div>
              
          </div>
          <div class="col-md-3 ">
          </div>
        </div>