<?php
include('header.php');
if(!isset($_SESSION['user'])){
  header('Location:index.php');
  exit();  
}
include('databaseConnnection.php');
 // establish database connection


$data = mysqli_query($con,"SELECT * FROM carBooking where userId = '".$_SESSION['user']['userId']."' ");
    
?>
<section id="footer-form">
  <div class="container">
    <div class="row bg-footer">
      <div class="col-md-12 ">
			<div class="row bg-footer loginBox">
                    <h3 class="text-blue pb-2" >Your car booking history.</h3>

          
              <table class="table table-bordered table-responsive">
                <tr>
                  <th>Booking Id</th>
                  <th>Pickup Location</th>
                  <th>Drop Location</th>
                  <th>Pickup Date Time</th>
                  <th>Drop Date Time</th>
                  <th>Price</th>
                  <th>Payment Status</th>
                  <th>Booking Status</th>
                </tr>
                <?php 
                	$srno = 1;
					while ($row = mysqli_fetch_array($data)) {
					$row['srno'] = $srno++;
					
				?>
                <tr>
               	  <td><?php echo $row['bookingId'];?></td>
                  <td><?php echo $row['pickupLocation'];?></td>
                  <td><?php echo $row['dropLocation'];?></td>
                  <td><?php echo $row['startDate'];?></td>
                  <td><?php echo $row['endDate'];?></td>
                  <td><?php echo $row['price'];?> AUD</td>
                  <td><?php echo $row['paymentStatus'];?></td>
                  <td><?php echo $row['bookingStatus'];?></td>

                </tr>
            <?php } ?>
                
              </table>
             
             <b>Note: </b> For unpaid bookings please check your mail and make payment to given account number and send your payment receipt to same email as reply with you booking id. Our team will confirm your booking.
        
        </div>

</div> 
    
  </div>
</div>
</section>

<?php
include('footer.php');
?>
