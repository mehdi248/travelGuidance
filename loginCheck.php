<?php
ini_set('display_errors', 0);
include('databaseConnnection.php');
$data = mysqli_query($con,"SELECT * FROM user WHERE email ='".$_POST['email']."' AND password ='".$_POST['password']."'");

if($row = mysqli_fetch_array($data)){
	$_SESSION['user'] = $row;
?>
<script type="text/javascript">location.href = 'userDashboard.php';</script>
<?php
}else{
	$loginfalied = 'Invalid email id or password';
}
?>