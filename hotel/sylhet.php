<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM hotels WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

if(isset($_POST["submit"])){


        //Database Connection Establish
        include "../dbconnect.php";
        
        //Variables for Form Data
        $username = $userRow['email'];
        $name = mysqli_real_escape_string($DBcon, $_POST['name']);
        $email = mysqli_real_escape_string($DBcon, $_POST['email']);
        $phone = mysqli_real_escape_string($DBcon, $_POST['phone']);
        $address = mysqli_real_escape_string($DBcon, $_POST['address']);
        $rent = mysqli_real_escape_string($DBcon, $_POST['rent']);
        $room = mysqli_real_escape_string($DBcon, $_POST['room']);
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert Form Data into database
        $insert = $DBcon->query("INSERT into dhakaHotel (username,name,email,phone,address,rent,room,created) VALUES ('$username','$name','$email','$phone','$address','$rent','$room', '$dataTime')");
        if($insert){
             $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Registration Success Full !
                
            </div>";
        }else{
            echo "Please try again.";
        } 
    }
$DBcon->close();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include("head.php");?>
    </head>

    <body>

        <?php include("nav.php");?>

        <div class="container" style="margin-top:150px;text-align:center;font-family:Verdana, Geneva, sans-serif;font-size:35px;">
            <h1>Register your Hotel - Sylhet Area</h1>
            <?php
                            if (isset($msg)) {
                                echo $msg;
                            }
                            ?>
                <form method="post" enctype='multipart/form-data'>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Hotel Name" name="name" required />
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone No" name="phone" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="address" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Per Room Rent" name="rent" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Available Room" name="room" required />
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="submit" class="form-control" name="submit" value="Submit" />
                        </div>
                        <div class="col-md-6">
                            <input type="reset" class="form-control" value="Reset">
                        </div>



                    </div>
                </form>
        </div>

    </body>

    </html>
