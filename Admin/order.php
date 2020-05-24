<?php
session_start();
    include 'header.php';
    if(!isset($_SESSION["USER_EMAIL"])){
      header("Location:../index.php");
    }
?>
   
    <div class="wrapper">
    <div class="row">
    <?php
    include_once 'config.php';

    $query="SELECT * FROM request";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $user= $row['fname'];
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
        $passport= $row['passport'];
        
      if($row['status']==true){

       
    echo ' 
    <div class="col s12 m6">
    <div class="card ">
        <div class="card-content grey-text">
            <span class="card-title indigo-text ">Rental Request from '.$company.'</span>
            <div class="divider "></div>
           <div clas="container">
           <div class="row">
           <div style="margin-top:10px"  class="col s12 m6 attribute">
            <p>Email: '.$email.'
           </div>
           <div style="margin-top:10px" class="col s12 m6 attriute">
           <p>Date of Birth: '.$dob.'
          </div>
           <div style="margin-top:10px" class="col s12 m6 attriute">
          <p>Phone number: '.$phone.'
           </div>
           
           <div style="margin-top:10px" class="col s12 m6 attriute" >
      
           <p name="passpost" >Passport number: '.$passport.' 
            </div>
            <div style="margin-top:10px" class="col s12 m6 attriute">
            <p>Pickup Date: '.$pickdate.'
             </div>
             <div style="margin-top:10px" class="col s12 m6 attriute">
             <p>Pickup Time: '.$pickdate.'
              </div>
              <div style="margin-top:10px" class="col s12 m6 attriute">
              <p>Drop-off Date: '.$dropdate.'
               </div>
               <div style="margin-top:10px" class="col s12 m6 attriute">
               <p>Drop-off Time: '.$dropdate.'
                </div>
                <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Pick-up location:  '.$picklocation.'
                 </div>
                 <div style="margin-top:10px" class="col s12 m6 attriute">
               <p>Organization:  '.$company.'
                </div>
                <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Client Referrals:  '.$referal.'
                 </div>
                 <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>vehicle:  '.$cartype.'
                 </div>
                 <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Driver:  '.$driver.'
                 </div>
           </div>
           </div>
        </div>
        <div class="card-action">
      
      
        <form method="post" action="DeclineOrder.php?id='.$id.'">
           
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Accept</a>
           <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="decline">Decline

        
           </form>
        </div>





        <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content blue-text text-darken-2">

        <form method="post" action="DeclineOrder.php?id='.$id.'">
          <h4>'.$id.'</h4>
          <p>A bunch of text</p>
          <div class="input-field col s12">
 <select name="driver">
   <option value="" disabled selected>Choose the driver</option>
   ';
   $query="SELECT * FROM drivers where Available=1";
   $mine=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($mine,$query)){
       echo "The statement failed";
   }else{
   
   mysqli_stmt_execute($mine);
   $result1=mysqli_stmt_get_result($mine);
   while($row=mysqli_fetch_assoc($result1)){
       $did=$row['id'];
       $Fname = $row['fname'];
       $Lname = $row['lname'];
       $Email=$row["email"];
       $Available=$row['available'];
       echo '   <option  value="'.$did.'">'.$Fname.'</option>';
   }
   
   echo'
 
 </select>
 <label>Car selection</label>
</div>

<div class="input-field col s12">
<select name="car">
<option value="" disabled selected>Choose the car</option>
';
$carquery="SELECT * FROM cars";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$carquery)){
       echo "The statement failed";
   }else{
   
   mysqli_stmt_execute($stmt);
   $answer=mysqli_stmt_get_result($stmt);
   while($carrow=mysqli_fetch_assoc($answer)){
       $cid=$carrow['id'];
       $plate = $carrow['licencePlate'];
       $type = $carrow['type'];
       $color=$carrow["color"];
      
       
 

echo'<option x value="'.$cid.'">'.$plate.','.$type.'</option>';
}
   }
  echo' </select>
<label>Driver Selection</label>
</div>


          
        </div>
        <div class="modal-footer">

          <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="accept">Submit</button>
          <button class="modal-close btn waves-effect waves-light">Cancel</button>
          </div>
        </form>
      </div>


        
    </div>
</div>
         
          
        ';
}
        
    }
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