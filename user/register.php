<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once '../dbconnect.php';

if(isset($_POST['btn-signup'])) {
	
	$name = strip_tags($_POST['name']);
	$gender = strip_tags($_POST['gender']);
	$address = strip_tags($_POST['address']);
	$mobile = strip_tags($_POST['mobile']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$name = $DBcon->real_escape_string($name);
	$gender = $DBcon->real_escape_string($gender);
	$address = $DBcon->real_escape_string($address);
	$mobile = $DBcon->real_escape_string($mobile);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO users(name,gender,address,mobile,email,password) VALUES('$name','$gender','$address','$mobile','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include("head.php");?>
    </head>

    <body>

        <div class="signin-form">

            <div class="container">


                <form class="form-signin" method="post" id="register-form">

                    <h2 class="form-signin-heading">Sign Up</h2>
                    <hr />

                    <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required />
                            <span id="check-e"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Gender" name="gender" required />
                            <span id="check-e"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address" required />
                            <span id="check-e"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mobile" name="mobile" required />
                            <span id="check-e"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email address" name="email" required />
                            <span id="check-e"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required />
                        </div>

                        <hr />

                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button>
                            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
                        </div>

                </form>

            </div>

        </div>

    </body>

    </html>
