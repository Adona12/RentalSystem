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
            <form class="col s12"  method="post" action="DriverRegister.php">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Placeholder" id="first_name" name="fname" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" name="lname" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                  <label for="disabled">Disabled</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" name="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  This is an inline input field:
                  <div class="input-field inline">
                    <input id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
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