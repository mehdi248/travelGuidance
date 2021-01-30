<?php
ini_set('display_errors', 0);
include('databaseConnnection.php'); // get database connection
if($_POST['property'] != '' && $_POST['rooms'] != '' && $_POST['adults'] != '' && $_POST['children'] != '' && $_POST['startDate'] != '' && $_POST['endDate'] != '' ){
	if($_POST['endDate'] > $_POST['startDate']){
		$_SESSION['hotelBookingData'] = $_POST;
		if(isset($_SESSION['user'])){
    		include('userDashboard.php');
			exit();
		}else{
			
    		$hotelBooking = 'yes';
    		include('login.php');
    		exit();
			
		}
		
	}else
	{
			$statusMsg = 'Checkout date should be greater than checkin date.';
	}
		
}else{
	$statusMsg = 'Please fill all the fields.';

}
?>
<script type="text/javascript">
	alert('<?php echo $statusMsg; ?>');
	window.location='hotelBooking.php';
</script>