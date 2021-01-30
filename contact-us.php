<?php
include('header.php');
?>
<section id="vin-contactus">
  <div class="container">
    <div class="row">
      <div class="alltitle-time">
        <div class="col-8 offset-md-2 col-sm-12 ">
          <div class="homebnr-img">
            <div class="cross-inner">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end snippet -->

<section id="footer-form">
  <div class="container">
    <div class="row bg-footer">
      <div class="col-md-12 ">
        <h2 class="text-blue pb-2" >Get in Touch</h2>
        <div class="row"> 
           <div class="col-md-6 ">
       
  
    <div class="row">
      <br><br><br>
      <div class="col-md-12 col-sm-12">
        <div class="vin-partnership-bnr"> 
          <form action="submitQuery.php" method="post" role="form" class="contactForm" enctype="multipart/form-data" >
<br>      <input type="text" name="subject" style="width: -webkit-fill-available;" placeholder="Subject"><br> <br>   
          <input type="text" name="email1" style="width: -webkit-fill-available;" placeholder="Your email id" autocomplete="off"><br>  <br>  
          <textarea rows="13" style="width: -webkit-fill-available;" placeholder="Write your message here." name="query"></textarea>
          <button class="btn btn-home">Send your message</button>
          </form>
        </div>
      </div>
      
    </div>
  

		   </div>
		     <div class="col-md-6 ">
          <p><strong>Address:</strong> Mississippi 39503, AU</p>
          <p><strong>Phone No:</strong> +61-415-923-229</p>
        <p><strong>Email:</strong> info@travelguidancesystem.com </p>
		   <div>
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14613.384174278139!2d133.87137518433877!3d-23.69933355566397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b321944be8f1331%3A0x50217a82a254fd0!2sAlice%20Springs%20NT%200870%2C%20Australia!5e0!3m2!1sen!2sin!4v1608270643256!5m2!1sen!2sin" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		   
		   </div>
		   </div>
        </div>
      </div> 
    </div>
  </div>
</section>
<script type="text/javascript">
  let elements = document.querySelectorAll('[autocomplete="off"]');
elements.forEach(element => {
    element.setAttribute("readonly", "readonly");
    element.style.backgroundColor = "inherit";
    setTimeout(() => {
        element.removeAttribute("readonly");
    }, 500);
})

</script>
<?php
include('footer.php');
?>
