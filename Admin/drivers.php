
<?php
session_start();
if(!isset($_SESSION["USER_EMAIL"])){
  header("Location:../index.php");
}
?>

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

    <nav id="nav-bar" class="gradient-45deg-indigo-purple">


    <h4 style="margin-top:0rem;text-align:center;padding-top:10px;" id="title"> Polo Trip and Car Rental</h4>

    </nav>
 
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li class="user">
       
            
          
     
    </li>
   
    <li><a href="cars.php">Cars</a></li>
    
    <li class="divid"><a href="order.php">Orders</a></li>
    
    <li><a  href="duedate.php">DueDate</a></li>
   
    <li><a href="RentalHistory.php">Rental History</a></li>
    
    <li><a href="drivers.php">Drivers</a></li>
    <li><a href="advertisment.php">Advertisments</a></li>
   
    <li><a href="../Logout.php">Logout</a></li>

    
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
    
   
    <div class="wrapper">

   
    <?php
    include_once 'config.php';
    $stat=1;
    $count=0;
    $query="SELECT * FROM drivers ";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
      $id= $row['id'];
        $Fname = $row['fname'];
        $Lname = $row['lname'];
        $Email=$row["email"];
        $phone=$row["phone"];
        $Available=$row['available'];
        $image="../images/".$row['driverimage'];
      
$count++;
if($count==1){
  echo ' 
    
  <div id="table-card" class="card  grey-text">
  <div class="contain">
      <table class=" responsive-table ">
      <thead>
        <tr id="car-table">
     
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>STATUS</th>
                <th>ACTION</th>
        </tr>
  
  
  
  
  
        
      </thead>';
}

    echo ' 
    
   
        <tbody  id="car-table2">
    
    <tr>
       
     
                    <td>'.$Fname.' '.$Lname.'</td>
                    <td>'.$Email.'</td>
                    <td>'.$phone.'</td>
        <td>
        ';
        if($Available==true){
             echo  '<span class="chip lighten-5 green green-text">Available</span>';
        }else{
            echo'<span class="chip lighten-5 red red-text">Unavailable</span>';
        }
      echo  '
          </td>
          <td>
            <div class="invoice-action">
             <form method="post" action="DeleteDriver.php?id='.$id.'&email='.$Email.'">
             <button class="btn  waves-light" type="submit" name="deleteDrive">
             <i class="material-icons right">delete</i>
           </button>
                <form/>
              </a>
            </div>
          </td>
      </tr>
    
 
        ';
        
    }
  }
  if($count==0){
    echo '<div style="margin-top:300px" class="center">No drivers in database </div>';
  }
?>
   </tbody>
  </table>
 
    </div>
    <div class="fixed-action-btn">
            <a href="AddDriver.php" class="btn-floating btn-large blue">
              <i class="large material-icons">add</i>
            </a>
           
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