<?php
    include 'header.php';
?>
    <div class="wrapper">
    <?php
   

?>

<div class="card request">
<div class="card-content">
        <div class="row">
            <form class="col s12"  method="post" action="carRegister.php" enctype="multipart/form-data">
            <div class="row">
                <div class="title col s6 center">
                  <h4>Car Registration Form</h4>
                </div>
              </div>
             
                <div class="input-field col s6 ">
                  <input  id="carPlate" name="carPlate" type="text" class="validate">
                  <label for="carPlate">Plate Number</label>
                </div>
                <div class="input-field col s6 ">
                  <input  id="engine" name="engine" type="text" class="validate">
                  <label for="engine">Engine</label>
                </div>
        

              </div>
              


              <div class="row">
              <div class="input-field col s6">
                  <input  id="price" name="price" type="text" class="validate">
                  <label for="price"> Price per day without Driver</label>
                </div>
      <div class="input-field col s6 ">
                  <input  id="dprice" name="dprice" type="text" class="validate">
                  <label for="dprice"> Price per day with Driver</label>
                </div>
                
             </div>    




              <div class="row">
              <div class="describe">Car type</div>
              <div class="input-field col s12">
              <div class="row">
              <div  class="col s12 m4 l4">
              <label>
              
        <input name="cartype" type="radio" value="Sedan" checked/>
        <span>Sedan</span>
      </label>
   </div>
      <div class="col s12 m4 l4">
      <label>
        <input name="cartype" type="radio"  value="SUV"/>
        <span>SUV</span>
      </label>
      </div>
      <div class="col s12 m4 l4">
      <label>
        <input name="cartype" type="radio" value="Luxourious car" />
        <span>Luxourious car</span>
      </label>
      </div>
                </div>
              </div>
              </div>





           
      





             <div  class="describe">Transmission</div>
      <div class="row">
              <div class="input-field col s12">
              <div class="row">
              <div  class="col s12 m6 l6">
              <label>
              
        <input name="transmission" type="radio" value="Automatic" checked/>
        <span>Automatic</span>
      </label>
   </div>
      <div class="col s12 m6 l6">
      <label>
        <input name="transmission" type="radio"  value="Manual"/>
        <span>Manual</span>
      </label>
      </div>
   
                </div>
              </div>
              </div>




         

<div  class="describe">Fuel</div>

              <div class="row">
              <div class="input-field col s12">
              <div class="row">
              <div  class="col s12 m6 l6">
              <label>
              
        <input name="fuel" type="radio" value="Benzene" checked/>
        <span>Benzene</span>
      </label>
   </div>
      <div class="col s12 m6 l6">
      <label>
        <input name="fuel" type="radio"  value="Naphtha"/>
        <span>Naphtha</span>
      </label>
      </div>
   
                </div>
              </div>
              </div>




















              <div class="row">
              <div class="input-field col s12">
                  <input  id="year" name="year" type="text" class="validate">
                  <label for="year"> Build Year</label>
                </div>
</div>

             
              <div class="row">
              <div class="file-field input-field">
            <div class="btn">
              <span>Upload Image</span>
        <input type="file" name="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
   
              </div>
              <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="Registercar">Submit
    <i class="material-icons right">send</i>
  </button>
            </form>
          </div>
  </div>
  </div>

    </div>
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>