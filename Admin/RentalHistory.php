<?php
    include 'header.php';

?>
    
    
   
    <div class="wrapper">


<?php
include_once 'config.php';
$query="SELECT * FROM acceptedrequest ORDER BY id DESC";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $count=0;
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
$price=$row['price'];
        $referal= $row['referal'];
        $driver= $row['driver'];
        $count++;
      $pick = strtotime($pickdate);
      $drop = strtotime($dropdate);
      $newpickformat = date('Y-m-d',$pick);
      $newdropformat = date('Y-m-d',$drop);
    //  $temp= round(abs(strtotime($newdropformat) - strtotime( $newpickformat))/86400);
      $first_date = new DateTime($newpickformat);
      $second_date = new DateTime( $newdropformat );


      $interval =  $second_date ->diff($first_date);
      if ($interval->y==0 && $interval->m!=0 ){
        $duration=" ". $interval->m." months, ".$interval->d." days "; 
      }else if($interval->m==0){
        $duration=" ".$interval->d." days "; 
              }else{
             
                $duration=" " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
              }

      $passport= $row['passport'];
      
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



echo'

<div class="card request">
<div class="card-content invoice-print-area">
  <!-- header section -->
  
  <!-- logo and title -->
  <div class="row mt-3 invoice-logo-title">
    <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6">
      <img src="../images/download.png" alt="logo" height="46" width="164">
    </div>
    <div class="col m6 s12 pull-m6">
      <h6 class="indigo-text invoice-number mr-1">Order# '.$id.'</h6>

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
      <div class="invoice-address">
        <span>duration:'.$duration.'</span>
      </div>
      <div class="invoice-address">
        <span>pay out:'.$price.'ETB</span>
      </div>
    </div>
  <!-- invoice subtotal -->
  </div>
</div>
</div>
';
}
}
if($count==0){
  echo '<div  style="margin-top:300px" class="center">No records </div>';
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