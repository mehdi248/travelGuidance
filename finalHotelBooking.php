<?php
ini_set('display_errors', 0);
include('databaseConnnection.php'); // get database connection
if($_POST['price'] > 0 && isset($_SESSION['hotelBookingData'])){


			$query ='INSERT INTO hotelBooking (property, rooms, adults, children, startDate, endDate, entryDate, price, userId) VALUES ("' . $_SESSION['hotelBookingData']['property'] . '", "' .  $_SESSION['hotelBookingData']['rooms'] . '", "' .  $_SESSION['hotelBookingData']['adults'] . '", "' .  $_SESSION['hotelBookingData']['children'] . '" , "' .  $_SESSION['hotelBookingData']['startDate'] . '" , "' .  $_SESSION['hotelBookingData']['endDate'] . '", "' .  date('Y-m-d H:i:s') . '", "' . $_POST['price'] . '", "' .  $_SESSION['user']['userId'] . '")';//save file to database
			$_SESSION['hotelBookingData']['price'] = $_POST['price'];

			if (!mysqli_query($con,$query)) //check if query failed
			{
				$statusMsg = 'Some thing went wrong please try again. Thank you.';
			}else{
				$bookingId = mysqli_insert_id($con);
				require_once('mailFunction.php'); // this is mail file in which we have wrote basic function to send mail
				$mailObj = new CommonMail(); //Object of commonMail class
				$mailObj->hotelBookingMail( $_SESSION['user']['email'],$bookingId); // funtion to be called to send mail
				unset($_SESSION['hotelBookingData']);//Unset booking session
				
				$statusMsg = 'Booking has been submitted successfully. Please check your mail and make payment to account number no given in mail and send payment receipt to the mail so that booking can be confirmed.';
			}


		}else
		{
			$statusMsg = 'Some thing went wrong please try again. Thank you';
		}
		

		?>
		<script type="text/javascript">
			alert('<?php echo $statusMsg; ?>');
			window.location='hotelBookingHistory.php';
		</script>