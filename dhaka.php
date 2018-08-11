<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM hotels WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$get=$DBcon->query("SELECT name FROM dhakaHotel");

if(isset($_POST["submit"])){


        //Database Connection Establish
        include "../dbconnect.php";
        
        //Variables for Form Data
        $username = $userRow['email'];
        $name = $_POST['name'];
        $in = mysqli_real_escape_string($DBcon, $_POST['in']);
        $out = mysqli_real_escape_string($DBcon, $_POST['out']);
        $adult = mysqli_real_escape_string($DBcon, $_POST['adult']);
        $children = mysqli_real_escape_string($DBcon, $_POST['children']);
        $room = mysqli_real_escape_string($DBcon, $_POST['room']);
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert Form Data into database
        $insert = $DBcon->query("INSERT into dhakaHotelRent (username,name,in,out,adult,children,room,created) VALUES ('$username','$name','$in','$out','$adult','$children','$room', '$dataTime')");
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

        

        <div class="container" style="margin-top:150px;text-align:center;font-family:Verdana, Geneva, sans-serif;font-size:35px;">
            <h1>Register your Hotel - Dhaka Area</h1>
            <br>
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
                        <input type="text" class="form-control" placeholder="Check In Date" name="in" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Check Out Date" name="out" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="No. of Adults" name="adult" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="No. of Children" name="children"  />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="No. of Rooms" name="room" required />
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
