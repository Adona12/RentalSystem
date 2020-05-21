
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

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
        <li class="divid"><a href="#!">Orders</a></li>
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
    <div class="row">
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
      

       
    echo ' 
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="images/avengers.jpg">
                  <span class="card-title">'.$Fname.'</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
            </div>
         
          <div class="fixed-action-btn">
            <a href="AddDriver.php" class="btn-floating btn-large blue">
              <i class="large material-icons">add</i>
            </a>
           
         </div>
        ';
        
    }
  }
?>
</div>
    </div>
    
</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="js/script.js"></script>
</body>

</html>