<?php
ini_set('display_errors', 0);
include('databaseConnnection.php'); // get database connection
if($_POST['pickupLocation'] != '' && $_POST['dropLocation'] != ''  && $_POST['startDate'] != '' && $_POST['endDate'] != '' ){
	if($_POST['endDate'] > $_POST['startDate']){
		$_SESSION['carBookingData'] = $_POST;
		if(isset($_SESSION['user'])){
    		include('userDashboard.php');
			exit();
		}else{
			
    		$carBooking = 'yes';
    		include('login.php');
    		exit();
			
		}
		
	}else
	{
			$statusMsg = 'Start date should be greater than end date.';
	}
		
}else{
	$statusMsg = 'Please fill all the fields.';

}
?>
<script type="text/javascript">
	alert('<?php echo $statusMsg; ?>');
	window.location='carBooking.php';
</script>