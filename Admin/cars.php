<?php
session_start();
    include 'header.php';
  

?>
    
   

    
  
    <div class="wrapper">
    <div class="row">
    <div class="col s12">
    <ul  class="tabs tabs-fixed-width tab-demo z-depth-1">
        <li class="tab col s6 m6 l6"><a class="active" href="#swipe-1">Available Cars</a></li>
        <li class="tab col s6  m6 l6"><a  href="#swipe-2">Unavailable Cars</a></li>
  
      </ul>
</div>

<div  id="swipe-2" class="row">
<?php
    include_once 'config.php';
$count=0;
    $query="SELECT * FROM cars  WHERE status=0 ORDER BY id DESC";
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
        $description=$row["cdescription"];
        $price=$row["price"];
        $dpricedo=$row["dpricedo"];
        $pricedo=$row["pricedo"];
        $transmission=$row["transmission"];
        $fuel=$row["fuel"];
        $year=$row["byear"];
      
      $count++;

       
    echo ' 
            <div class="col s12 m3 l3">
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
                  <div>Engine: '.$description.'</div>
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
                  <div class="col s12 m6">
                  <div>Price: $'.$pricedo.'</div>
                  </div>
                </div>
                <form method="post" action="updateCar.php?id='.$id.'&plate='.$licencePlate.'">
                <button id="car-button" class=" btn  waves-light" type="submit" name="deleteCar">Remove From Unavailable
                <i class="material-icons right">delete</i>
               
              </button>
                   <form/>
                </div>
               
              </div>
            </div>
    
        ';
        
    }
  }
  if($count==0){
    echo '<div style="margin-top:300px" class="center">There are no Unavailable cars</div>';
  }
  echo '   <div class="fixed-action-btn">
  <a href="AddCar.php" class="btn-floating btn-large blue">
    <i class="large material-icons">add</i>
  </a>
 
</div>
';
?>
</div>
   





























    <div id="swipe-1" class="row">
    <?php
    include_once 'config.php';
$count=0;
    $query="SELECT * FROM cars  WHERE status=1 ORDER BY id DESC";
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
        $description=$row["cdescription"];
        $price=$row["price"];
        $dpricedo=$row["dpricedo"];
        $pricedo=$row["pricedo"];
        $transmission=$row["transmission"];
        $fuel=$row["fuel"];
        $year=$row["byear"];
      
      $count++;

       
    echo ' 
            <div class="col s12 m3 l3">
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
                  <div>Engine: '.$description.'</div>
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
                  <div class="col s12 m6">
                  <div>Price: $'.$pricedo.'</div>
                  </div>
                </div>
                <form method="post" action="deletecar.php?id='.$id.'&plate='.$licencePlate.'">
                <button id="car-button" class=" btn  waves-light" type="submit" name="deleteCar">Remove 
                <i class="material-icons right">delete</i>
               
              </button>
                   <form/>
                </div>
               
              </div>
            </div>
    
        ';
        
    }
  }
  if($count==0){
    echo '<div style="margin-top:300px" class="center">There are no available cars</div>';
  }
  echo '   <div class="fixed-action-btn">
  <a href="AddCar.php" class="btn-floating btn-large blue">
    <i class="large material-icons">add</i>
  </a>
 
</div>
';
?>
</div>
</div>

</div>
    </div>
    


<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>