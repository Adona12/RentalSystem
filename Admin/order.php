
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

    <nav>




    </nav>
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="">
                </div>
                <a href="#user"><img src=""></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="check.html">Cars</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li class="divid"><a href="order.php">Orders</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="duedate.html">DueDate</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="check.html">Rental History</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="drivers.php">Drivers</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="check.html">Profile</a></li>

        <li>
            <div class="divider"></div>
        </li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
    
   
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
        $user= $row['userId'];
        $company = $row['company'];
        
      if($row['status']==true){

       
    echo ' 
    <div class="col s12 m6">
    <div class="card white darken-1">
        <div class="card-content grey-text">
            <span class="card-title cyan-text ">Rental Request from '.$company.'</span>
            <div class="divider "></div>
           <div clas="container">
           <div class="row">
           <div style="margin-top:10px"  class="col s12 m6 attribute">
            <p>Email: adonatesfaye99@gmal.com
           </div>
           <div style="margin-top:10px" class="col s12 m6 attriute">
           <p>Date of Birth: 12/02/20
          </div>
           <div style="margin-top:10px" class="col s12 m6 attriute">
          <p>Phone number: 0911129990
           </div>
           
           <div style="margin-top:10px" class="col s12 m6 attriute" >
      
           <p name="passpost" >Passport number: '.$user.' 
            </div>
            <div style="margin-top:10px" class="col s12 m6 attriute">
            <p>Pickup Date: 12/02/20
             </div>
             <div style="margin-top:10px" class="col s12 m6 attriute">
             <p>Pickup Time: 12/02/20
              </div>
              <div style="margin-top:10px" class="col s12 m6 attriute">
              <p>Drop-off Date: 12/02/20
               </div>
               <div style="margin-top:10px" class="col s12 m6 attriute">
               <p>Drop-off Time: 12/02/20
                </div>
                <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Pick-up location: 12/02/20
                 </div>
                 <div style="margin-top:10px" class="col s12 m6 attriute">
               <p>Organization: Emabassy
                </div>
                <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Client Referrals: adonatesfaye99@gmail.com
                 </div>
                 <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>vehicle: sedan
                 </div>
                 <div style="margin-top:10px" class="col s12 m6 attriute">
                <p>Driver: yes
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
 <select>
   <option value="" disabled selected>Choose your option</option>
   ';
   $query="SELECT * FROM drivers";
   $mine=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($mine,$query)){
       echo "The statement failed";
   }else{
   
   mysqli_stmt_execute($mine);
   $result=mysqli_stmt_get_result($mine);
   while($row=mysqli_fetch_assoc($result)){
       $did=$row['id'];
       $Fname = $row['fname'];
       $Lname = $row['lname'];
       $Email=$row["email"];
       $Available=$row['available'];
       echo '   <option value="'.$did.'">'.$Fname.'</option>';
   }

   echo'
 
 </select>
 <label>Materialize Select</label>
</div>

<div class="input-field col s12">
<select>
  <option value="" disabled selected>Choose your option</option>
  <option value="1">Option 1</option>
  <option value="2">Option 2</option>
  <option value="3">Option 3</option>
</select>
<label>Materialize Select</label>
</div>


          
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
          <button id="sbtn" class="btn waves-effect waves-light" type="submit" name="accept">Accept
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