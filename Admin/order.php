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

     $count=0;
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
        $picktime= $row['picktime'];
        $droptime= $row['droptime'];
        $dob= $row['dob'];
        $cartype= $row['cartype'];
        $phone= $row['phone'];
        $referal= $row['referal'];
        $driver= "No";
        $_SESSION['id']=$id;
        if($row['driver']==true){
          $driver= "yes";
        }
        
        $passport= $row['passport'];
        $count++;
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
            <p>Email: '.$email.' id:'.$id.'
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
             <p>Pickup Time: '.$picktime.'
              </div>
              <div style="margin-top:10px" class="col s12 m6 attriute">
              <p>Drop-off Date: '.$dropdate.'
               </div>
               <div style="margin-top:10px" class="col s12 m6 attriute">
               <p>Drop-off Time: '.$droptime.'
                </div>
                <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Pick-up location:  '.$picklocation.'
                 </div>
                 <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Drop-off location:  '.$droplocation.'
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
           ';
           if( $row['driver']==true){
          
             echo '<a id="mine" class="waves-effect waves-light btn modal-trigger" href="#modal'.$id.'">Accept</a>';
           }
           else{
             echo ' <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="accept">Accept</button>
             ';
           }
        echo '
      
           <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="decline">Decline';

        
        echo'   </form>
        </div>





        <div id="modal'.$id.'" class="modal ">
        
        <div class="modal-content blue-text text-darken-2">

        <form method="post" action="DeclineOrder.php?id='.$row['id'].'">
          
          <div class="input-field col s12">
 <select name="driver">
   <option value="" disabled selected>Choose a driver</option>
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
 <label>Driver selection</label>
</div>



          
        </div>
        <div class="modal-footer">

          <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="acceptd">Submit</button>
 
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
  if($count==0){
    echo '<div  style="margin-top:300px" class="center">No orders </div>';
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