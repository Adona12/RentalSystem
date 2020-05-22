<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/home.css">
            
    <title>Document</title>
</head>
<body id='homepage'>
    <nav class="nav-wrapper">
        <a href="#" class="sidenav-trigger" data-target="mobile-links">
            <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
        <li> <a href="homepage.php">Home</a></li>
            <li> <a href="orderpage.php">Order Now</a></li>
            <li> <a href="">Profile</a></li>
            <li> <a href="">Log Out</a></li>
         

        </ul>
        
    </nav>
    <ul class="sidenav" id="mobile-links">
    <li> <a href="homepage.php">Home</a></li>
            <li> <a href="orderpage.php">Order Now</a></li>
            <li> <a href="">Profile</a></li>
            <li> <a href="">Log Out</a></li>


    </ul>

    <div class="carousel carousel-slider">
            <a   class="carousel-item" href="#one!"> <div class='carousel-image' style='background-image: url(images/wedding.jpg);'></div> </a>
            <a  class="carousel-item" href="#three!"><div class='carousel-image' style='background-image: url(images/vitz.jpg);'></div></a>
            <a  class="carousel-item" href="#four!"><div  class='carousel-image' style='background-image: url(images/tourcarss.jpg);'></div></a>
            <a  class="carousel-item" href="#five!"><div  class='carousel-image' style='background-image: url(images/mercedes2.jpg);'></div></a>
            
          </div>
          <h1 style='margin-top: 400px;' class="header center orange-text">COMPANY NAME</h1>
          
          <div class="row center">
            <p>--slogan goes here</p>
            <h6 class="header col s12 light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, 
                consequuntur officia nemo magnam incidunt eveniet, nihil esse repudiandae labore sint quibusdam deleniti voluptas 
                sunt necessitatibus excepturi, explicabo recusandae. Quisquam, assumenda!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, 
                consequuntur officia nemo magnam incidunt eveniet, nihil esse repudiandae labore sint quibusdam deleniti voluptas 
                sunt necessitatibus excepturi, explicabo recusandae. Quisquam, assumenda!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, 
                consequuntur officia nemo magnam incidunt eveniet, nihil esse repudiandae labore sint quibusdam deleniti voluptas 
                sunt necessitatibus excepturi, explicabo recusandae. Quisquam, assumenda!</h6>
          </div>
          

          <div class="container">
            <div class="section">
        
              <!--   Icon Section   -->
              <div class="row">
                <div class="col s12 m4">
                  <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Speeds up development</h5>
        
                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                  </div>
                </div>
        
                <div class="col s12 m4">
                  <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">User Experience Focused</h5>
        
                    <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                  </div>
                </div>
        
                <div class="col s12 m4">
                  <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Easy to work with</h5>
        
                    <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                  </div>
                </div>
              </div>
        
            </div>
            <br><br>
          </div>
        
          <?php
include "footer.php";?>
</body>
</html>