<?php
session_start();
    include 'header.php';
  
if(!isset($_SESSION["USER_EMAIL"])){
//  header("Location:../index.php");
}
?>
    

    
  
    <div class="wrapper">
    <div class="row">
    <?php
    include_once 'config.php';

    $query="SELECT * FROM drivers";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
        $Fname = $row['fname'];
        $Lname = $row['lname'];
        $Email=$row["email"];
      

       
    echo ' 
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="../images/avengers.jpg">
                  <span class="card-title">'.$Fname.'</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
            </div>
         
          <div class="fixed-action-btn">
            <a href="AddDriver.php" class="btn-floating btn-large blue">
              <i class="large material-icons">add</i>
            </a>
           
         </div>
        ';
        
    }
  }
?>
</div>
    </div>
    
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>