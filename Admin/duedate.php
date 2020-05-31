<?php
session_start();
    include 'header.php';
    if(!isset($_SESSION["USER_EMAIL"])){
        header("Location:../index.php");
      }
?>
   <div class="wrapper">

</thead>
<tbody  id="car-table2">
<?php
include_once 'config.php';

$query="SELECT * FROM acceptedrequest";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    $count=0;
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
        
      $newtodayformat =date("Y-m-d");
      $drop = strtotime($dropdate);
      
      $newdropformat = date('Y-m-d',$drop);
     $temp= round(abs(strtotime($dropdate) - strtotime( $newtodayformat))/86400);
     
      $second_date = new DateTime( $newdropformat );
    
     
$color="green";
if($temp<5){
    $count++;


    if($temp<5 AND $temp>3){
        $color="orange";
    }else{
        $color="red";
    }
    if($count==1){
        echo '


        <div id="table-card" class="card  grey-text">
        <div class="contain">
        <table class=" responsive-table ">
        <thead>
          <tr id="car-table">
        
                  <th>Order number</th>
                  <th>Client Name</th>
                  <th>Vehicle Plate</th>
                  <th>Drop off location</th>
                  <th>Days left</th>
                  <th>Tag</th>
          </tr>';
    }
echo '



<tr>
   
  
    <td> Order '.$id.'</td>
    <td>'.$userf.' '.$userl.'</td>
    <td>'.$cartype.'</td>
    <td>'.$droplocation.'</td>
    <td>'.$temp.'</td>
    <td><span class="bullet '. $color.'"></span>

   </td>
    ';
 
  echo  '
     
      
  </tr>


    ';
    
}
    }
}
if($count==0){
    echo '<div  style="margin-top:300px"class="center">No orders due</div>';

}
?>
</tbody>
</table>

</div>

    
</div>
</div>
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>