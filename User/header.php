
<body>
<?php
session_start();
include_once '../Admin/config.php';
    $user=mysqli_num_rows(mysqli_query($conn,'SELECT * FROM request WHERE status=0 AND email="'.$_SESSION['USER_EMAIL'].'";'));
//$user=mysqli_num_rows(mysqli_query($conn,'SELECT * FROM request WHERE status=0 AND email="melattesfaye@gmail.com";'));
   if($user>=1){

    $notification=true;
   }
   else{
    $notification=false;
   }


?>
<nav class="nav-wrapper container">
    <a id="logo-container" href="#"  style="color:black;" class="brand-logo">Logo</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-links">
            <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
        <li> <a href="homepage.php">Home</a></li>
            <li> <a href="orderpage.php">Order Now</a></li>
            <li> <a href="">Profile</a></li>
            <li> <a href="../Logout.php">Log Out</a></li>
            <?php

         
            
                if(!$notification){
                    echo '<li> <a href="notifications.php"><span class="material-icons">
                    notification_important
                    </span></a></li>';
                }
                else{
                    echo " <li> <a  href='notifications.php'><span id='bell' class='material-icons'>
                    notification_important
                    </span></a></li>";
                }

            ?>
            
         

        </ul>
        
   
    <ul class="sidenav" id="mobile-links">
    <li> <a href="homepage.php">Home</a></li>
            <li> <a href="orderpage.php">Order Now</a></li>
            <li> <a href="">Profile</a></li>
            <li> <a href="Logout.php">Log Out</a></li>
            <?php
            $notification=true;
            
                if(!$notification){
                    echo '<li> <a href="notifications.php"><span class="material-icons">
                    notification_important
                    </span></a></li>';
                }
                else{
                    echo " <li> <a href='notifications.php'><span id='bell' class='material-icons'>
                    notification_important
                    </span></a></li>";
                }

            ?>
            


    </ul>
    </nav>
