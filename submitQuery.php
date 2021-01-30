<?php
ini_set('display_errors', 0);
include('databaseConnnection.php'); // get database connection
if($_POST['subject'] != '' && $_POST['email1'] != '' && $_POST['query'] != ''){
	
		$query ='INSERT INTO query (subject, email, query, entryDate) VALUES ("' . $_POST['subject'] . '", "' .  $_POST['email1'] . '", "' .  $_POST['query'] . '", "' .  date('Y-m-d H:i:s') . '")';//save file to database

		if (!mysqli_query($con,$query)) //check if query failed
		{
			$statusMsg = 'Some thing went wrong please try again. Thank you.';
		}else{

			require_once('mailFunction.php'); // this is mail file in which we have wrote basic function to send mail
			$mailObj = new CommonMail(); //Object of commonMail class
			$mailObj->sendQueryMail( $_POST['email1'], $_POST['subject'], $_POST['query']); // funtion to be called to send mail
			$statusMsg = 'Query Send Successfully';
		}


}else{
	$statusMsg = 'Please fill all the fields.';

}
?>
<script type="text/javascript">
	alert('<?php echo $statusMsg; ?>');
	window.location='contact-us.php';
</script>