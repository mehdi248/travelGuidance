<?php
include('header.php');

?>
<section id="vin-homebnr">
  <div class="container">
    <div class="row">
      <div class="index-time">
        <div class="col-md-12 offset-md-2 col-sm-12 md-second text-center">
          <div class="homebnr-img">
            <div class="who-we-inner">
              <h1 class="ml11"> <span class="text-wrapper"> <span class="line line1"></span> <span class="letters">Unifying your travel.</span> </span> </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="vin-whoweare">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 col-sm-7 md-second">
        <div class="vin-who-content">
          <div class="inner">
            <h2 class="text-blue" >Who We Are</h2>
            <h5>Provide a complete travel guidance to whome , who loves travelling arround the world. <br>
              We are available thourgh out the world with the widest range of travel agents who will help you to make your travel easier.
            </h5>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-5 pr-0">
        <div class=" text-right"> <span class="vin-partnership-bnr hover02 column">
          <figure><img src="images/travelBanner2.png " class="img-fluid " alt="who we are"></figure>
          </span></div>
      </div>
    </div>
  </div>
</section>
<section id="vin-edge">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-5">
        <div class="vin-partnership-bnr"> <span class="vin-partnership-bnr"><img src="images/banner3.png" class="img-absolute" alt="partnership-wirth"></span></div>
      </div>
      <div class="col-md-2"></div>  
      <div class="col-md-5 col-sm-pull-5 col-sm-5 ">
        <div class="vin-edge-content">
          <div class="who-edge-inner  text-white">
           <h2 class="text-white pb-3">Where We are</h2>
            <p class="pb-4">We are available through out the world. Our agent will help you everywhere where you want to travell.</p>
<div class="row pb-3">
              <div class="col-md-4 ">
                <div class="media  text-white"> 
                  <div class="fegure-section" style=" position:relative;">
                    <h3>50+</h3>
                    <h6 class="media-body lh-125 ">Countries </h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="media  text-white"> 
                  <div class="fegure-section" style=" position:relative;">
                    <h3>100000+</h3>
                    <h6 class="media-body lh-125 ">Clients </h6>
                  </div>
                </div>
              </div>
            </div><div class="row pb-3">
              <div class="col-md-5 ">
                <div class="media  text-white"> 
                  <div class="fegure-section" style=" position:relative;">
                    <h3>500+</h3>
                    <h6 class="media-body lh-125 ">Hotels </h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="media  text-white"> 
                  <div class="fegure-section" style=" position:relative;">
                    <h3>1500+</h3>
                    <h6 class="media-body lh-125 ">Agents </h6>
                  </div>
                </div>
              </div>
            </div>
            <p></p>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

         
<!--
<section id="blogbg">
  <div class="albumblog pb-5 pt-5  ">
    <div class="container">
      <div class="row">  
        <div class="col-md-12  pb-3 text-center text-white"> 
          <h2 class="pt-4 ">Our Speakers & Supporters</h2>
        </div>
		
		<div class="  col-md-10 offset-md-1 col-sm-12 pb-5">
          <div class="row">
            <div class="col-md-4">
              <div class="card  mb-4 box-shadow border-0 rounded-0"> <img class="" src="images/blog1.jpg">
                <div class="card-body">
                  <h4>Lorem ipsum dolor sit, consectetur .</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content  is a little </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> <a href="#" class="text-blue">Read More</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card  mb-4 box-shadow border-0 rounded-0"> <img class="" src="images/blog1.jpg">
                <div class="card-body">
                  <h4>Lorem ipsum dolor sit, consectetur .</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content  is a little </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> <a href="#" class="text-blue">Read More</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card  mb-4 box-shadow border-0 rounded-0"> <img class="" src="images/blog1.jpg">
                <div class="card-body">
                  <h4>Lorem ipsum dolor sit, consectetur .</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content  is a little </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> <a href="#" class="text-blue">Read More</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
		
		
        div class="  col-md-10 offset-md-1 col-sm-12 pb-5">
          <div class="row">
            <?php foreach ($newsdata as $key => $data) { ?>
            <div class="col-md-4">
              <div class="card  mb-4 box-shadow border-0 rounded-0">
                <div class="card-body">
                  <h3><?php echo $data['newsheading'];?> </h3>
                  <p class="card-text"><?php echo substr($data['newsmessage'], 0,150);?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> <a href="news.html" class="text-blue">Read More</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }   ?> 
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<?php
include('footer.php');
?>

