<?php
include('header.php');
unset($_SESSION['hotelBookingData']);
unset($_SESSION['carBookingData']);
?>
<section id="vin-carbnr">
  <div class="container">
    <div class="row">
      <div class="index-time text-capitalize" style="width: 100%">
        <div class="col-md-12 col-sm-12 md-second text-center" >
         
            
              <h1 class="ml11"> <span class="text-wrapper"> <span class="line line1"></span> <span class="letters">Rent a car</span> </span> </h1>
              <h4>Get a great quote to hit the open road</h4>
              <p>For now our service is availanle in Brisbane only.</p>

            </div>
            <div class="row bg-footer loginBox">
              <div class="col-md-3 ">
              </div>
              <div class="col-md-6 ">
                
                  <form action="submitCarBooking.php" method="post" role="form" >
                  
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset class="float-label col-md-12">
                        <select class="form-control right-addon" name="pickupLocation" style="height: 46px;" >
                          <option value="0">Pickup Location</option>
                          <optgroup label="Airport location">
                            <option value="2218;5196">Brisbane Airport (BNE)</option>
                          </optgroup>
                          <optgroup label="City Location">
                            <option value="Brisbane Downtown5">Brisbane Downtown</option>
                            <option value="Brisbane Hotel within city limits">Brisbane Hotel within city limits</option>
                            <option value="Brisbane North City Office">Brisbane North City Office</option>
                            <option value="Brisbane South City Office">Brisbane South City Office</option></optgroup>
                            <optgroup label="Related locations">
                              <option value="Ascot / Brisbane Downtown">Ascot / Brisbane Downtown</option>
                              <option value="Boondall City Office">Boondall City Office</option>
                              <option value="Brendale Downtown">Brendale Downtown</option>
                              <option value="Rocklea City Office">Rocklea City Office</option>
                              <option value="Tingalpa City Office">Tingalpa City Office</option>
                            </optgroup>
                          </select>
                      </fieldset>
                    </div>
                      <div class="col-md-6 ">
                      <fieldset class="float-label col-md-12">
                        <select class="form-control right-addon" name="dropLocation" style="height: 46px;" >
                          <option value="0">Drop Loaction</option>
                          <optgroup label="Airport location">
                            <option value="2218;5196">Brisbane Airport (BNE)</option>
                          </optgroup>
                          <optgroup label="City Location">
                            <option value="Brisbane Downtown5">Brisbane Downtown</option>
                            <option value="Brisbane Hotel within city limits">Brisbane Hotel within city limits</option>
                            <option value="Brisbane North City Office">Brisbane North City Office</option>
                            <option value="Brisbane South City Office">Brisbane South City Office</option></optgroup>
                            <optgroup label="Related locations">
                              <option value="Ascot / Brisbane Downtown">Ascot / Brisbane Downtown</option>
                              <option value="Boondall City Office">Boondall City Office</option>
                              <option value="Brendale Downtown">Brendale Downtown</option>
                              <option value="Rocklea City Office">Rocklea City Office</option>
                              <option value="Tingalpa City Office">Tingalpa City Office</option>
                            </optgroup>
                          </select>
                      </fieldset>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset class="float-label col-md-12">
                        <input type="datetime-local" class="form-control br-radius-zero" name="startDate" id="startDate" placeholder="" required min="<?php echo date("Y-m-d H:i:s");?>" max="<?php echo date('Y-m-d H:i:s', strtotime("+7 days"));?>" />
                        <label for="Pickup"></label>
                      </fieldset>
                    </div>
                      <div class="col-md-6 ">
                      <fieldset class="float-label col-md-12">
                        <input type="datetime-local" class="form-control br-radius-zero" name="endDate" id="endDate" required  min="<?php echo date("Y-m-d H:i:s");?>" max="<?php echo date('Y-m-d H:i:s', strtotime("+7 days"));?>"/>
                        <label for="</"></label>
                      </fieldset>
                    </div>
                  </div>

                  
                  <div class="col-md-12 send-button">
                    <button type="submit" class="btn btn-block btn-lg btn-danger text">Book Now</button>
                  </div>
                  </form>
                  <br>
                  <br>
                  <p style="color: white; background-color: "><b>Note:</b>
                    <ul style="color: white;">
                      <li>Price per hour is 20 AUD.</li>

                    </ul>
                  </p>
                </div>

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

