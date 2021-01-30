<?php
ini_set('display_errors', 0);
$page = 'User Login';
include('header.php');
$loginfalied = $signupfalied = '';
if(!empty($_POST)){
	if($_POST['formType'] == 'login'){
  		include('loginCheck.php');
  	}
  	elseif($_POST['formType'] == 'signup'){
  		include('sigupSubmit.php');
  	}
}else{
  if(isset($_SESSION['user'])){
    header('Location:userDashboard.php');
 exit();  }
}
?>

<!-- end snippet -->

<section id="footer-form">
  <div class="container">
    <div class="row bg-footer loginBox">
      <div class="col-md-3 ">
      </div>
      <div class="col-md-6 ">
        <?php if( $hotelBooking != ''){ ?>
            <div class="bg breadcrumb clearfix text-center" ><b>Step 2: </b> Login to your account to confirm your booking.
              <br> OR
              <br> 
              <a href="hotelBooking.php">Go Back</a>
            </div>
          <?php } else if( $carBooking != ''){ ?>
            <div class="bg breadcrumb clearfix text-center" ><b>Step 2: </b> Login to your account to confirm your booking.
              <br> OR
              <br> 
              <a href="carBooking.php">Go Back</a>
            </div>
          <?php }else{ ?>
        <h2 class="text-blue pb-2" >Login Here</h2>
        <?php } ?>
        <div class="row"> 
          <?php if($loginfalied != ''){ ?>
            <div class="bg-danger clearfix  text-center" ><?php echo $loginfalied; ?></div>
          <?php } ?>
          
          <!--Text-->
          <form action="login.php" method="post" role="form" class="loginForm">
          	<input type="hidden" name="formType" value="login">
          <fieldset class="float-label col-md-12">
            <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" required />
            <label for="username">Your Email</label>
          </fieldset>
          <fieldset class="float-label  col-md-12">
            <input type="password" class="form-control br-radius-zero" name="password" id="password" placeholder="" data-rule="minlen:5" data-msg="Please enter your password" required="required" />
            <label for="username">Your Password</label>
          </fieldset>
          <!--Password--> 
          <div class="col-md-12 send-button">
            <button type="submit" class="btn btn-block btn-lg btn-home text">Login</button>
          </div>
          </form>
        </div>

      </div> 
      
       <div class="col-md-3 ">
      </div>
     </div>

     

    <div class="row bg-footer registerBox" style="display: none;">
      <div class="col-md-3 ">
      </div>
    <div class="col-md-6 ">
        <h2 class="text-blue pb-2" >Sign Up Now </h2>
        <div class="row"> 
          <?php if($signupfalied != ''){ ?>
            <div class="bg-danger clearfix  text-center" ><?php echo $signupfalied; ?></div>
          <?php } ?>
          <!--Text-->
          <form action="login.php" method="post" role="form" class="signupForm">
          	<input type="hidden" name="formType" value="signup">
          	<fieldset class="float-label col-md-12">
            <input type="text" class="form-control br-radius-zero" name="name" id="name" placeholder="" data-rule="name" data-msg="Please enter your name" required />
            <label for="username">Your Name</label>
          </fieldset>
          <fieldset class="float-label col-md-12">
            <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="" data-rule="email" data-msg="Please enter a valid email" required />
            <label for="username">Your Email</label>
          </fieldset>
          <fieldset class="float-label col-md-12">
            <input type="text" class="form-control br-radius-zero" name="mobileNumber" id="mobileNumber" placeholder="" data-rule="mobileNumber" data-msg="Please enter a valid mobile number" required />
            <label for="mobileNumber">Your Contant Number</label>
          </fieldset>
          <fieldset class="float-label  col-md-12">
            <input type="password" class="form-control br-radius-zero" name="password" id="password" placeholder="" data-rule="minlen:5" data-msg="Please enter your password" required="required" />
            <label for="username">Your Password</label>
          </fieldset>
          <!--Password--> 
          <div class="col-md-12 send-button">
            <button type="submit" class="btn btn-block btn-lg btn-home text">Sign Up Now</button>
          </div>
          </form>
        </div>

      </div> 
      <div class="col-md-3 ">
      </div>
      </div>

      <div class="row" style="padding-bottom: 50px;">
      	<div class="col-md-3 ">
      	</div>
        <div class="col-md-6 ">
        
	        <div class="regisertRow">Don't have account? <span class="text-orange" onclick="$('.registerBox, .loginRow').show(); $('.loginBox, .regisertRow').hide();"> Register Now </span></div>
	        <div class="loginRow hide">Already have an account? <span class="text-orange"  onclick="$('.registerBox, .loginRow').hide(); $('.loginBox, .regisertRow').show();"> Login Now </span></div>

      	</div> 
	    <div class="col-md-3 ">
	    </div>
      </div>

    </div>
    
    </div>
  </div>
</section>

<?php
include('footer.php');
?>
