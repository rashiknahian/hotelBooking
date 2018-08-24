<?php

    include 'dbconnect.php';
        
           //Variables for Form Data
     $email = mysqli_real_escape_string($DBcon, $_POST['email']);
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert Form Data into database
        $insert = $DBcon->query("INSERT into subscribe (email,created) VALUES ('$email', '$dataTime')");
        if($insert){
             echo "<h3>Subscription Done</h3>
<a href=\"index.php\">Please Go Back</a>";
        }else{
            echo "Please try again.";
        }  

?>
