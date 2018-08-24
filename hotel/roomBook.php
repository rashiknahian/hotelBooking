<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM hotels WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include("head.php");?>
    </head>

    <body>

        <?php include("nav.php");?>

        <div class="container" style="margin-top:150px;text-align:center;font-family:Verdana, Geneva, sans-serif;">
              <h1>Dhaka Hotel Booking</h1>
               <!-- Data View In Table-->
                <table class="table table-bordered table-striped table-hover table-responsive" id="tableData">
                    <thead>
                        <tr class="success">
                            <th>Booking Time</th>
                            <th>Hotel Name</th>
                            <th>Check In Time</th>
                            <th>Check Out Time</th>
                            <th>No. of Adults</th>
                            <th>No. of Children</th>
                            <th>No. of Rooms</th>
                            <th>User Full Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $name = $userRow['name'];
                       
            $query2 = $DBcon->query(" SELECT * FROM dhakaHotelRent WHERE hotelName='$name'");
            while($data=$query2->fetch_array()){
           echo "
                <tr>
                      <td>".$data['created']."</td>
                    <td>".$data['hotelName']."</td>
                    <td>".$data['chkin']."</td>
                    <td>".$data['chkout']."</td>
                    <td>".$data['noAdults']."</td>
                    <td>".$data['noChild']."</td>
                    <td>".$data['room']."</td>
                    <td>".$data['name']."</td>
                    <td>".$data['gender']."</td>
                    <td>".$data['address']."</td>
                    <td>".$data['mobile']."</td>
                    
                </tr>
                "; 
            }
            //While Loop Ends
            ?>
                    </tbody>
                </table>
                  
                        <h1>Chattogram Hotel Booking</h1>
               <!-- Data View In Table-->
                <table class="table table-bordered table-striped table-hover table-responsive" id="tableData">
                    <thead>
                        <tr class="success">
                            <th>Booking Time</th>
                            <th>Hotel Name</th>
                            <th>Check In Time</th>
                            <th>Check Out Time</th>
                            <th>No. of Adults</th>
                            <th>No. of Children</th>
                            <th>No. of Rooms</th>
                            <th>User Full Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $query2 = $DBcon->query("SELECT * FROM chattogramHotelRent WHERE hotelName='$name'");
            while($data=$query2->fetch_array()){
           echo "
                <tr>
                      <td>".$data['created']."</td>
                    <td>".$data['hotelName']."</td>
                    <td>".$data['chkin']."</td>
                    <td>".$data['chkout']."</td>
                    <td>".$data['noAdults']."</td>
                    <td>".$data['noChild']."</td>
                    <td>".$data['room']."</td>
                    <td>".$data['name']."</td>
                    <td>".$data['gender']."</td>
                    <td>".$data['address']."</td>
                    <td>".$data['mobile']."</td>
                    
                </tr>
                "; 
            }
            //While Loop Ends
            ?>
                    </tbody>
                </table>
                 <h1>Coxbazar Hotel Booking</h1>
               <!-- Data View In Table-->
                <table class="table table-bordered table-striped table-hover table-responsive" id="tableData">
                    <thead>
                        <tr class="success">
                                <th>Booking Time</th>
                            <th>Hotel Name</th>
                            <th>Check In Time</th>
                            <th>Check Out Time</th>
                            <th>No. of Adults</th>
                            <th>No. of Children</th>
                            <th>No. of Rooms</th>
                            <th>User Full Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $query2 = $DBcon->query("SELECT * FROM coxbazarHotelRent WHERE hotelName='$name'");
            while($data=$query2->fetch_array()){
           echo "
               <tr>
                      <td>".$data['created']."</td>
                    <td>".$data['hotelName']."</td>
                    <td>".$data['chkin']."</td>
                    <td>".$data['chkout']."</td>
                    <td>".$data['noAdults']."</td>
                    <td>".$data['noChild']."</td>
                    <td>".$data['room']."</td>
                    <td>".$data['name']."</td>
                    <td>".$data['gender']."</td>
                    <td>".$data['address']."</td>
                    <td>".$data['mobile']."</td>
                    
                </tr>
                "; 
            }
            //While Loop Ends
            ?>
                    </tbody>
                </table>
                <h1>Sylhet Hotel Booking</h1>
               <!-- Data View In Table-->
                <table class="table table-bordered table-striped table-hover table-responsive" id="tableData">
                    <thead>
                        <tr class="success">
                            <th>Booking Time</th>
                            <th>Hotel Name</th>
                            <th>Check In Time</th>
                            <th>Check Out Time</th>
                            <th>No. of Adults</th>
                            <th>No. of Children</th>
                            <th>No. of Rooms</th>
                            <th>User Full Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $query2 = $DBcon->query("SELECT * FROM sylhetHotelRent WHERE hotelName='$name'");
            while($data=$query2->fetch_array()){
           echo "
                <tr>
                      <td>".$data['created']."</td>
                    <td>".$data['hotelName']."</td>
                    <td>".$data['chkin']."</td>
                    <td>".$data['chkout']."</td>
                    <td>".$data['noAdults']."</td>
                    <td>".$data['noChild']."</td>
                    <td>".$data['room']."</td>
                    <td>".$data['name']."</td>
                    <td>".$data['gender']."</td>
                    <td>".$data['address']."</td>
                    <td>".$data['mobile']."</td>
                    
                </tr>
                "; 
            }
            //While Loop Ends
            ?>
                    </tbody>
                </table>
        </div>

    </body>
<?php $DBcon->close();?>
    </html>
