
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>

<body class="diff">

    <nav >




    </nav>
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li class="user">
           
                
              
         
        </li>
       
        <li><a href="cars.php">Cars</a></li>
        
        <li class="divid"><a href="order.php">Orders</a></li>
        
        <li><a  href="duedate.html">DueDate</a></li>
       
        <li><a href="RentalHistory.php">Rental History</a></li>
        
        <li><a href="drivers.php">Drivers</a></li>
       
        <li><a href="check.html">Profile</a></li>

        
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
    
   
    <div class="wrapper">


<?php
include_once 'config.php';
$query="SELECT * FROM acceptedrequest";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $userf= $row['fname'];
        $userl= $row['lname'];
        $email= $row['email'];
        $company = $row['organization'];
        $organizationEmail= $row['organizationemail'];
        $pickdate= $row['pickdate'];
        $picklocation= $row['picklocation'];
        $dropdate= $row['dropdate'];
        $droplocation= $row['droplocation'];
        $dob= $row['dob'];
        $cartype= $row['cartype'];
        $phone= $row['phone'];
        $referal= $row['referal'];
        $driver= $row['driver'];
        $Fname ="";
        $Lname="";
        $query="SELECT * FROM drivers where id=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query)){
            echo "The statement failed";
        }else{
          mysqli_stmt_bind_param($stmt,"i",$driver);
        mysqli_stmt_execute($stmt);
        $result1=mysqli_stmt_get_result($stmt);
        while($row=mysqli_fetch_assoc($result1)){
            $Fname = $row['fname'];
            $Lname = $row['lname'];

        }
      }     


        
        $passport= $row['passport'];
        
echo'

<div class="card request">
<div class="card-content invoice-print-area">
  <!-- header section -->
  <div class="row invoice-date-number">
    <div class="col xl4 s12">
      <span class="invoice-number mr-1">Order#</span>
      <span>'.$id.'</span>
    </div>
    <div class="col xl8 s12">
      <div class="invoice-date display-flex align-items-center flex-wrap">
        <div class="mr-3">
          <small >Date Issue:</small>
          <span style="margin-right:3px;">'.$pickdate.'</span>
        </div>
        <div  class="mr-3">
          <small>Date Due:</small>
          <span>'.$dropdate.'</span>
        </div>
      </div>
    </div>
  </div>
  <!-- logo and title -->
  <div class="row mt-3 invoice-logo-title">
    <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6">
      <img src="../images/download.png" alt="logo" height="46" width="164">
    </div>
    <div class="col m6 s12 pull-m6">
      <h4 class="indigo-text">Request Info</h4>

    </div>
  </div>
  <div class="divider mb-3 mt-3"></div>
  <!-- invoice address and contact -->
  <div class="row invoice-info">
    <div class="col m4 l4 s6">
      <h6 class="invoice-from">Client Info</h6>
      <div class="invoice-address">
        <span>'.$userf.' '.$userl.'</span>
      </div>
      <div class="invoice-address">
        <span>'.$email.'</span>
      </div>
      <div class="invoice-address">
        <span>'.$phone.'</span>
      </div>
      <div class="invoice-address">
        <span>DOB:'.$dob.'</span>
      </div>
    </div>
    <div class="col m4 l4 s6">
      <div class="divider show-on-small hide-on-med-and-up mb-3"></div>
      <h6 class="invoice-to">Organization Info</h6>
      <div class="invoice-address">
        <span>'.$company.'</span>
      </div>
      <div class="invoice-address">
        <span>'.$organizationEmail.'</span>
      </div>
      <div class="invoice-address">
        <span>referals:'.$referal.'</span>
      </div>
      <div class="invoice-address">
        <span>'.$passport.'</span>
      </div>
    </div>


  <div class="col m4 l4 s6">
      <h6 class="invoice-from">Request Type</h6>
      <div class="invoice-address">
        <span>'.$cartype.'</span>
      </div>
      <div class="invoice-address">
        <span>Driver: '.$Fname.' '.$Lname.'</span>
      </div>
      <div class="invoice-address">
        <span>pickup-location:'.$picklocation.'</span>
      </div>
      <div class="invoice-address">
        <span>dropoff-location:'.$droplocation.'</span>
      </div>
    </div>
  <!-- invoice subtotal -->
  </div>
</div>
</div>
';
}
}
?>


    <div class="col xl9 m8 s12">
    
    </div>
    </div>
    
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>