<?php
session_start();
    include 'header.php';
  

?>
    

    
  
    <div class="wrapper">
    <div class="row">
    <?php
    include_once 'config.php';
$count=0;
    $query="SELECT * FROM cars";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
        $licencePlate = $row['licencePlate'];
        $cartype = $row['cartype'];
        $engine = $row['engine'];
        $carImage=$row["carImage"];
        $dprice=$row["dprice"];
        $price=$row["price"];
        $transmission=$row["transmission"];
        $fuel=$row["fuel"];
        $year=$row["byear"];
      
      $count++;

       
    echo ' 
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="../images/carImages/'.$carImage.'">
             
                </div>
                <div class="card-content">
                <div class="row">
                <div class="col s12 m6">
                  <div>Car type: '.$cartype.'</div>
                  </div>
                  <div class="col s12 m6">
                  <div>Engine: '.$engine.'</div>
                  </div>
                  <div class="col s12 m6">
                  <div>Fuel: '.$fuel.'</div>
                  </div>
                  <div class="col s12 m6">
                  <div>'.$transmission.'</div>
                  </div>
                  
                  <div class="col s12 m6">
                  <div>Plate number: '.$licencePlate.'</div>
                  </div>
                  <div class="col s12 m6">
                  <div>Price: '.$price.'ETB</div>
                  </div>
                </div>
                <form method="post" action="deletecar.php?id='.$id.'">
                <button id="car-button" class=" btn  waves-light" type="submit" name="deleteCar">Remove 
                <i class="material-icons right">delete</i>
              </button>
                   <form/>
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
  if($count==0){
    echo '<div style="margin-top:300px" class="center">No cars in database </div>';
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