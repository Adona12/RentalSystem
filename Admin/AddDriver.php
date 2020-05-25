<?php
    include 'header.php';
?>
    <div class="wrapper">
    <?php
    if(isset($_GET['status'])){
echo '<div class="alert">
<span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>'.$_GET['status'].'</div>';
    }
?>
        <div class="row">
            <form class="col s12"  method="post" action="DriverRegister.php" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="First Name" id="first_name" name="fname" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" name="lname" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input id="phone" type="text" class="validate">
                  <label for="phone">Phone number</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" name="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
              <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
   
              </div>
              <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="Register">Submit
    <i class="material-icons right">send</i>
  </button>
            </form>
          </div>

        
    </div>
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>