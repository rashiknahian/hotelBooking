<?php
include 'dbconnect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hotel Booking</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Hotel Booking</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Dhaka Hotel</a></li>
                <li><a href="#">Chattogram Hotel</a></li>
                <li><a href="#">Cox Bazar Hotel</a></li>
                <li><a href="#">Sylhet Hotel</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="admin/index.php"><span class="glyphicon glyphicon-user"></span> Admin Log In</a></li>
                <li><a href="user/index.php"><span class="glyphicon glyphicon-user"></span> User Log In</a></li>
                <li><a href="hotel/index.php"><span class="glyphicon glyphicon-log-in"></span> Hotel Manager Log In</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/slide1.jpeg" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="img/slide2.jpeg" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="img/slide3.jpeg" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
            </div>
        </div>
        <div class="row" id="about">
            <h1>About Us</h1>
            <p>
                Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu commun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.


            </p>
        </div>
        <div class="row">
            <h1>Dhaka Hotel</h1>
                 <?php
            
            $query = $DBcon->query("SELECT * FROM dhakaHotel");
            while($data=$query->fetch_array()){
           echo "
                <div class=\"col-md-4\">
                    <img src=\"Img/hotel.jpeg\" >
                    <h2>".$data['name']."</h2>
                    <h4>".$data['email']."</h4>
                    <h4>".$data['address']."</h4>
                    <h4>".$data['phone']."</h4>
                    <h4> Available Room ; ".$data['room']."</h4>
                    <h4> Per Room Rent ; ".$data['rent']."Per Day</h4>
                    <a href=\"user/index.php\"><button class=\"btn btn-success\">Book Room</button></a>
                    
                    
                </div>
                "; 
            }
            //While Loop Ends
            ?>
            
                
            
        </div>

       <div class="row">
            <h1>Chattogram Hotel</h1>
                 <?php
            
            $query = $DBcon->query("SELECT * FROM chattogramHotel");
            while($data=$query->fetch_array()){
           echo "
                <div class=\"col-md-4\">
                    <img src=\"Img/hotel.jpeg\" >
                    <h2>".$data['name']."</h2>
                    <h4>".$data['email']."</h4>
                    <h4>".$data['address']."</h4>
                    <h4>".$data['phone']."</h4>
                    <h4> Available Room ; ".$data['room']."</h4>
                    <h4> Per Room Rent ; ".$data['rent']."Per Day</h4>
                    <a href=\"user/index.php\"><button class=\"btn btn-success\">Book Room</button></a>
                    
                    
                </div>
                "; 
            }
            //While Loop Ends
            ?>
            
                
            
        </div>
        
         <div class="row">
            <h1>Cox Bazar Hotel</h1>
                 <?php
            
            $query = $DBcon->query("SELECT * FROM coxbazarHotel");
            while($data=$query->fetch_array()){
           echo "
                <div class=\"col-md-4\">
                    <img src=\"Img/hotel.jpeg\" >
                    <h2>".$data['name']."</h2>
                    <h4>".$data['email']."</h4>
                    <h4>".$data['address']."</h4>
                    <h4>".$data['phone']."</h4>
                    <h4> Available Room ; ".$data['room']."</h4>
                    <h4> Per Room Rent ; ".$data['rent']."Per Day</h4>
                    <a href=\"user/index.php\"><button class=\"btn btn-success\">Book Room</button></a>
                    
                    
                </div>
                "; 
            }
            //While Loop Ends
            ?>
            
                
            
        </div>
         <div class="row">
            <h1>Sylhet Hotel</h1>
                 <?php
            
            $query = $DBcon->query("SELECT * FROM sylhetHotel");
            while($data=$query->fetch_array()){
           echo "
                <div class=\"col-md-4\">
                    <img src=\"Img/hotel.jpeg\" >
                    <h2>".$data['name']."</h2>
                    <h4>".$data['email']."</h4>
                    <h4>".$data['address']."</h4>
                    <h4>".$data['phone']."</h4>
                    <h4> Available Room ; ".$data['room']."</h4>
                    <h4> Per Room Rent ; ".$data['rent']."Per Day</h4>
                    <a href=\"user/index.php\"><button class=\"btn btn-success\">Book Room</button></a>
                    
                    
                </div>
                "; 
            }
            //While Loop Ends
            ?>
            
                
           
        </div>
        <br>
        <div class="subscribe-section bg-with-black">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="subscribe-head">
                            <h2>DO you want our newsletter?</h2>
                            <p>Sign up free and get the latest offers.</p>
                            <div class="form-section">
                                <form  method="post" enctype='multipart/form-data' action="subscribe.php">

                                    <input placeholder="Your Email..." name="email" id="mce-EMAIL" type="email">
                                    <input value="Yes. I want!" name="subscribe" id="mc-embedded-subscribe" type="submit">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center bg-lightgray">

            <div class="copyrights" style="margin-top:25px;">
                <p>Hotel Booking © 2018, All Rights Reserved
                    <br>
                    <span>Web Design By: XYZ</span></p>

            </div>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
