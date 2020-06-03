<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/orderpage.css">
<link rel="stylesheet" href="css/cars-display.css">

    <title>Document</title>
</head>
<?php

include "header.php";


if(!isset($_SESSION["USER_EMAIL"])){
    header("Location:index.php");
    
  }
  if(!isset($_POST['order'])){
    header("Location:orderpage.php");
    
  }

echo'
<form action="" method="post">

<input type="text" value="'.$_POST['fullname'].'" name="fullname">
<input type="email" value="'.$_POST['email'].'" name="email">
<input type="text" value="'.$_POST['tel'].'" name="tel">
<input type="text" value="'.$_POST['id'].'" name="id">
<input type="text" value="'.$_POST['passport'].'" name"passpport">
<input type="text" value="'.$_POST['pickuptime'].'" name="pickuptime">
<input type="text" value="'.$_POST['cartype'].'" name="cartype">
<input type="text" value="'.$_POST['pickupdate'].'" name="pickupdate">
<input type="text" value="'.$_POST['pickup'].'" name="pickup">
<input type="text" value="'.$_POST['dropofftime'].'" name="dropofftime">
<input type="text" value="'.$_POST['dropoffdate'].'" name="dropoffdate">
<input type="text" value="'.$_POST['dropoff'].'" name="dropoff">
<input type="text" value="'.$_POST['organization'].'" name="organization">
<input type="email" value="'.$_POST['referralemail'].'" name="referralemail">
<input type="text"value="'.$_POST['driveroption'].'" name="driveroption">



</form>';
?>
<div style='padding:50px;' class="row">
<?php

  include_once '../Admin/config.php';
$count=0;
    $query='SELECT * FROM cars  WHERE status=1 AND cartype="'.$_POST['cartype'].'" ORDER BY id DESC';
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
        $dprice=$row["dprice"];
        $dpricedo=$row["dpricedo"];
        $pricedo=$row["pricedo"];
        $transmission=$row["transmission"];
        $fuel=$row["fuel"];
        $year=$row["byear"];
      
      $count++;

       
    echo ' 
    
    <div class="col s12 m3">
    <div class="card">
                <div class="card-image">
                  <img class="card-img" src="../images/carImages/'.$carImage.'">
             
                </div>
                <div class="card-content">
                <div class="row">
                <div class="col s12 m6">
                  <div>Car type: '.$cartype.'</div>
                  </div>
                  <div class="col s12 m6">
                  <div> '.$description.'</div>
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
                  <div>Plate: '.$licencePlate.'</div>
                  </div>
                  ';
                  if($cartype=="Sedan"){
               
echo '

<div class="col s12 m12">
<div>Price w/o driver: '.$price.'ETB / $'.$pricedo.' </div>
</div>';
                  }
                  else{
                echo'    <div class="col s12 m12">
<div class="center">Cannot be rented without driver</div>
</div>';
                  }

                  echo '
          
                                      <div class="col s12 m12">
                                      <div>Price with: '.$dprice.'ETB /  $'.$dpricedo.' </div>
                                      </div>
                                     
                </div>
                <form method="post" action="updateCar.php?id='.$id.'&plate='.$licencePlate.'">
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
?>
</div>

</div>






    
</body>

<?php

include "footer.php";

?>
</html>