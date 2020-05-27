<?php
    include 'header.php';
?>
    <div class="wrapper">
    <?php
   

?>

<div class="card request">
<div class="card-content">
        <div class="row">
            <form class="col s12"  method="post" action="adRegister.php" enctype="multipart/form-data">
            <div class="row">
                <div class="title col s6 center">
                  <h4>Car Registration Form</h4>
                </div>
              </div>
             
               
              <div class="row">
              <div class="input-field col s12">
                  <input  id="title" name="title" type="text" class="validate">
                  <label for="title"> Title</label>
                </div>
</div>
                
              


              <div class="row">
        <div class="input-field col s12">
          <textarea id="describe" name="describe" class="materialize-textarea"></textarea>
          <label for="describe">Description</label>
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
              <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="Registerad">Submit
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