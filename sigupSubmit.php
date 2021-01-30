<?php
ini_set('display_errors', 0);
include('databaseConnnection.php'); // get database connection
if($_POST['formType'] == 'signup' && $_POST['name'] != '' && $_POST['email'] != '' && $_POST['mobileNumber'] != ''){

		$data = mysqli_query($con,"SELECT * FROM user WHERE email ='".$_POST['email']."'");

		if($row = mysqli_fetch_array($data)){

			$statusMsg = 'User with email id already exists.';

		}else{
			
			$query ='INSERT INTO user (name, email, mobileNumber, password) VALUES ("' . $_POST['name'] . '", "' .  $_POST['email'] . '", "' .  $_POST['mobileNumber'] . '", "' .  $_POST['password'] . '")';//save file to database

			if (!mysqli_query($con,$query)) //check if query failed
			{
				$statusMsg = 'Some thing went wrong please try again. Thank you.';
			}else{

				require_once('mailFunction.php'); // this is mail file in which we have wrote basic function to send mail
				$mailObj = new CommonMail(); //Object of commonMail class
				$mailObj->registrationMail( $_POST['email'],$_POST['name'], $_POST['password']); // funtion to be called to send mail
				$data = mysqli_query($con,"SELECT * FROM user WHERE email ='".$_POST['email']."'");

				if($row = mysqli_fetch_array($data)){
					$_SESSION['user'] = $row;
				}
				$statusMsg = 'Registration Successfull';
			}

		}
		
}else{
	$signupfalied = 'Please fill all the fields.';

}
?>
<script type="text/javascript">
	alert('<?php echo $statusMsg; ?>');
	<?php if($statusMsg =='Registration Successfull'){ ?>
		window.location='userDashboard.php';
	<?php } ?>
</script>