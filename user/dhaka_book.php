<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$get=$DBcon->query("SELECT name FROM dhakaHotel");
if(isset($_POST["submit"])){


        
        
        //Variables for Form Data
        $username = $userRow['email'];
        $name = mysqli_real_escape_string($DBcon, $_POST['name']);
        $in = mysqli_real_escape_string($DBcon, $_POST['email']);
        $out = mysqli_real_escape_string($DBcon, $_POST['phone']);
        $adults = mysqli_real_escape_string($DBcon, $_POST['address']);
        $child = mysqli_real_escape_string($DBcon, $_POST['rent']);
        $room = mysqli_real_escape_string($DBcon, $_POST['room']);
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert Form Data into database
        $insert = $DBcon->query("INSERT into dhakaHotelRent (username,name,email,phone,address,rent,room,created) VALUES ('$username','$name','$in','$out','$adults','$child','$room', '$dataTime')");
        if($insert){
             $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Registration Success Full !
                
            </div>";
        }else{
            $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please try again.!
                
            </div>";
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
            <h1>Register your Hotel - Dhaka Area</h1>
            <?php
                            if (isset($msg)) {
                                echo $msg;
                            }
                            ?>
                <form method="post" enctype='multipart/form-data'>
                    <div class="form-group">
                        <select class="form-control" name="name" required> 
    <option value="0">Please Select Hotel</option>
        <?php
            while($row = mysqli_fetch_assoc($get))
            {
            ?>
            <option value = "<?php echo($row['name'])?>" >
                <?php echo($row['name']) ?>
            </option>
            <?php
            }               
        ?>
    </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Check In Date" name="email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Check Out Date" name="phone" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="No. of Adults" name="address" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="No. of Children" name="rent"  />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="No. of Room" name="room" required />
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
