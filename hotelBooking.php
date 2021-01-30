<?php
include('header.php');
unset($_SESSION['hotelBookingData']);
unset($_SESSION['carBookingData']);
?>
<section id="vin-hotelbnr">
  <div class="container">
    <div class="row">
      <div class="index-time text-capitalize" style="width: 100%;background-color: #33333394;padding-top: 50px;margin-top: 12px;">
        <div class="col-md-12 col-sm-12 md-second text-center" >
         
            
              <h1 class="ml11"> <span class="text-wrapper"> <span class="line line1"></span> <span class="letters">Book A Room Now</span> </span> </h1>
              <h4>Feel like home away from home</h4>

            </div>
            <div class="row bg-footer loginBox">
              <div class="col-md-3 ">
              </div>
              <div class="col-md-6 ">
                
                  <form action="submitHotelBooking.php" method="post" role="form" >
                    
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset class="float-label col-md-12">
                        <select class="form-control" style="height: 46px;" required name="property">
                          <option value="">Select Property</option>
                          <option value="Q1 Resort & Spa - Official">Q1 Resort & Spa - Official</option>
                          <option value="Four Seasons Hotel Sydney">Four Seasons Hotel Sydney</option>
                          <option value="Sofitel Sydney Darling Harbour">Sofitel Sydney Darling Harbour</option>
                          <option value="Hilton Surfers Paradise Hotel & Residences">Hilton Surfers Paradise Hotel & Residences</option>
                          <option>Select Property</option>
                        </select>
                        
                        
                      </fieldset>
                    </div>
                      <div class="col-md-6 ">
                      <fieldset class="float-label col-md-12">
                        <select name="rooms" class="form-control" style="height: 46px;" required>
                          <option value="1" selected="selected">1 room</option>
                          <option value="2">2 rooms</option>
                          <option value="3">3 rooms</option>
                          <option value="4">4 rooms</option>
                          <option value="5">5 rooms</option>
                          <option value="6">6 rooms</option>
                          <option value="7">7 rooms</option>
                          <option value="8">8 rooms</option>
                          <option value="9">9 rooms</option>
                          <option value="10">10 rooms</option>
                          <option value="11">11 rooms</option>
                          <option value="12">12 rooms</option>
                          <option value="13">13 rooms</option>
                          <option value="14">14 rooms</option>
                          <option value="15">15 rooms</option>
                          <option value="16">16 rooms</option>
                          <option value="17">17 rooms</option>
                          <option value="18">18 rooms</option>
                          <option value="19">19 rooms</option>
                          <option value="20">20 rooms</option>
                          <option value="21">21 rooms</option>
                          <option value="22">22 rooms</option>
                          <option value="23">23 rooms</option>
                          <option value="24">24 rooms</option>
                          <option value="25">25 rooms</option>
                          <option value="26">26 rooms</option>
                          <option value="27">27 rooms</option>
                          <option value="28">28 rooms</option>
                          <option value="29">29 rooms</option>
                          <option value="30">30 rooms</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset class="float-label col-md-12">
                        <select name="adults" class="form-control" style="height: 46px;" required>
                          <option value="1">1 adult</option>
                          <option value="2">2 adults</option>
                          <option value="3">3 adults</option>
                          <option value="4">4 adults</option>
                          <option value="5">5 adults</option>
                          <option value="6">6 adults</option>
                          <option value="7">7 adults</option>
                          <option value="8">8 adults</option>
                          <option value="9">9 adults</option>
                          <option value="10">10 adults</option>
                          <option value="11">11 adults</option>
                          <option value="12">12 adults</option>
                          <option value="13">13 adults</option>
                          <option value="14">14 adults</option>
                          <option value="15">15 adults</option>
                          <option value="16">16 adults</option>
                          <option value="17">17 adults</option>
                          <option value="18">18 adults</option>
                          <option value="19">19 adults</option>
                          <option value="20">20 adults</option>
                          <option value="21">21 adults</option>
                          <option value="22">22 adults</option>
                          <option value="23">23 adults</option>
                          <option value="24">24 adults</option>
                          <option value="25">25 adults</option>
                          <option value="26">26 adults</option>
                          <option value="27">27 adults</option>
                          <option value="28">28 adults</option>
                          <option value="29">29 adults</option>
                          <option value="30">30 adults</option>
                        </select>
                      </fieldset>
                    </div>
                      <div class="col-md-6 ">
                      <fieldset class="float-label col-md-12">
                        <select name="children" class="form-control" style="height: 46px;" required="">
                          <option value="0" selected="selected">No children</option>
                          <option value="1">1 child</option>
                          <option value="2">2 children</option>
                          <option value="3">3 children</option>
                          <option value="4">4 children</option>
                          <option value="5">5 children</option>
                          <option value="6">6 children</option>
                          <option value="7">7 children</option>
                          <option value="8">8 children</option>
                          <option value="9">9 children</option>
                          <option value="10">10 children</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <fieldset class="float-label col-md-12">
                        <input type="date" class="form-control br-radius-zero" name="startDate" id="startDate" placeholder="" required="required" min="<?php echo date("Y-m-d");?>" max="<?php echo date('Y-m-d', strtotime("+60 days"));?>"/>
                        
                      </fieldset>
                    </div>
                      <div class="col-md-6 ">
                      <fieldset class="float-label col-md-12">
                        <input type="date" class="form-control br-radius-zero" name="endDate" id="endDate" required="required" min="<?php echo date("Y-m-d");?>" max="<?php echo date('Y-m-d', strtotime("+60 days"));?>" />
                        
                      </fieldset>
                    </div>
                  </div>

                  
                  <div class="col-md-12 send-button">
                    <button type="submit" class="btn btn-block btn-lg btn-danger text">Book Now</button>
                  </div>
                  </form>
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

