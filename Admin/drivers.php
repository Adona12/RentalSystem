
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

    <nav id="nav-bar" class="blue lighten-3">




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
        <li><a href="cars.php">Cars</a></li>
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
        <li><a href="drivers.html">Drivers</a></li>
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

    <div id="table-card" class="card white darken-1 grey-text">
<div class="contain">
    <table class="striped  ">
    <thead>
      <tr id="car-table">
      <th>User</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>STATUS</th>
              <th>ACTION</th>
      </tr>





      
    </thead>
    <tbody  id="car-table2">
    <?php
    include_once 'config.php';

    $query="SELECT * FROM drivers";
    $mine=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($mine,$query)){
        echo "The statement failed";
    }else{
    
    mysqli_stmt_execute($mine);
    $result=mysqli_stmt_get_result($mine);
    while($row=mysqli_fetch_assoc($result)){
        $Fname = $row['fname'];
        $Lname = $row['lname'];
        $Email=$row["email"];
        $Available=$row['available'];
      

       
    echo ' <tr>
       
        <td><span class="avatar-contact avatar-online"><img src="../images/avengers.jpg"
                    alt="avatar"></span></td>
                    <td>'.$Fname.'</td>
        <td>adonatesfaye99@gmail.com</td>
        <td>0911129990</td>
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
             
              <a href="app-invoice-edit.html" class="invoice-action-edit">
                <i class="material-icons">delete</i>
              </a>
            </div>
          </td>
      </tr>
    
 
        ';
        
    }
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
        '
    </div>
    </div>
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="../js/script.js"></script>
</body>

</html>