<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/orderpage.css">
            
    <title>Document</title>
</head>
<?php


include "header.php";



?>




  <div style='height:100%;' class="valign-wrapper row login-box">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
      <form>
        <div class="card-content">
          <span class="card-title">Enter credentials</span>
          <div class="row">

            <div class="input-field col s12">
                <label for="fullname">Full Name</label>
                <input type="text"  name="fullname" id="fullname" />
              </div>
            <div class="input-field col s12">
              <label for="email">Email address</label>
              <input type="email"  name="email" id="email" />
            </div>

            <div class="input-field col s12">
                <label for="tel">Phone No.</label>
                <input type="tel"  name="tel" id="tel" />
              </div>

              <div class="input-field col s12">
                <label for="id">ID No.</label>
                <input type="number"  name="id" id="id" />
              </div>

              <div class="input-field col s12">
                <label for="passport">Passport No.</label>
                <input type="text"  name="passport" id="passport" />
              </div>
              
              
              <div class="input-field col s12">
              <div class="row">
                <div class="input-field col s6">
                    <label for="pickuptime">Pick Up Time</label>
                  <input type="text" name='pickuptime' class="timepicker">
                </div>
                <div class="input-field col s6">
                  <label for="pickupdate">Pick Up Date</label>
                  <input type="text" name='pickupdate' class="datepicker">
                </div>

              </div>
            </div>

       
   
              <div class="input-field col s12">
                <label for="pickup">Pick Up Location</label>
                <input type="text"  name="pickup" id="pickup" />
              </div>



              <div class="input-field col s12">
                <div class="row">
                  <div class="input-field col s6">
                      <label for="dropofftime">Drop Off Time</label>
                    <input type="text" name='dropofftime' class="timepicker">
                  </div>
                  <div class="input-field col s6">
                    <label for="dropoffdate">Drop Off Date</label>
                    <input type="text" name='dropoffdate' class="datepicker">
                  </div>
  
                </div>
              </div>





              <div class="input-field col s12">
                <label for="dropoff">Drop Off Location</label>
                <input type="text"  name="dropoff" id="dropoff" />
              </div>



              <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Embassy</option>
                  <option value="2">NGO</option>
                  <option value="3">International Organization</option>
                  <option value="4">Client Referrals</option>
                </select>
                <label>Referrals</label>
              </div>


              <div class="input-field col s12">
                <label for="referralemail">Referral's Email</label>
                <input type="email"  name="referralemail" id="referralemail" />
              </div>
                <div class='little-margin'>
                    <p> Select Vehicle:</p>
                    <label>
                        <input name="cartype" type="radio" checked />
                        <span>Sedan</span>
                      </label>
                      <label>
                        <input name="cartype" type="radio" />
                        <span>SUV</span>
                      </label>
                      <label>
                        <input name="cartype" type="radio" />
                        <span>Luxurious</span>
                      </label>
                </div>

                <div class='little-margin'>
                    <p> Choose Driver Option:</p>
                    <label>
                        <input name="driveroption" type="radio" checked />
                        <span>With Driver</span>
                      </label>
                      <label>
                        <input name="driveroption" type="radio" />
                        <span>Without Driver</span>
                      </label>
                </div>
      



        
          </div>
        </div>
        <div class="card-action right-align">
          <input type="reset" id="reset" class="btn-flat grey-text waves-effect">
          <input type="submit" class="btn green waves-effect waves-light" value="Login">
        </div>
      </form>
    </div>
  </div>








<?php
include "footer.php";

?>
    
</body>
</html>