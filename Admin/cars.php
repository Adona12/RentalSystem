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

    $query="SELECT * FROM cars";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
        $licencePlate = $row['licencePlate'];
        $cartype = $row['cartype'];
        $engine = $row['engine'];
        $carImage=$row["carImage"];
        $dprice=$row["dprice"];
        $price=$row["price"];
        $transmission=$row["transmission"];
        $fuel=$row["fuel"];
        $year=$row["byear"];
      
      

       
    echo ' 
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="../images/carImages/'.$carImage.'">
             
                </div>
                <div class="card-content">
                  <div>Car type: '.$cartype.'</div>
                  <div>Engine: '.$engine.'</div>
                  <div>Fuel: '.$fuel.'</div>

                  <div>Transmission: '.$transmission.'</div>
                  <div>Transmission: '.$year.'</div>
                  <div>Plate number: '.$licencePlate.'</div>
                  <div>Price: '.$price.'ETB</div>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
            </div>
         
          <div class="fixed-action-btn">
            <a href="AddCar.php" class="btn-floating btn-large blue">
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