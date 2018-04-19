<?php
include('dbconnect.php');

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = $mysqli->real_escape_string($_POST['name']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$cpassword = $mysqli->real_escape_string($_POST['cpassword']);
	$utype = $_POST['utype'];
	
	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		if($mysqli->query("INSERT INTO users(name,email,password,usertype) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "','".$utype."')")) {
			$successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<style>
		body {background:url("../images/design/bg.gif") 0 0 repeat-x; }
	</style>
</head>
	<body>
	<br/>
	<div id="header">
		<div id="nav"> 
			<center>
				<div>
					<a href="../index.php"><img style="width:70px" src="../images/tmp/logo.png" alt="" /></a>
					<font size=5 font-weight="bold">Dengue Detection & Prevention System </font>
				</div>
			</center>
			<hr class="noscreen"/>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 well">
				<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
					<fieldset>
						<legend>Sign Up</legend>
						<div class="form-group">
							<label for="utype">User Type</label>
							<select name="utype" placeholder="Select a Type" required value="<?php if($error) echo $name; ?>" class="form-control" />
								<option>Doctor</option>
								<option>MOH</option>
								<option>EU</option>
								<option>PHI</option>
								<option>RDHS</option>
							</select>							
						</div>

						<div class="form-group">
							<label for="name">User Name</label>
							<input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
							<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
						</div>
						
						<div class="form-group">
							<label for="name">Email</label>
							<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
							<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
						</div>

						<div class="form-group">
							<label for="name">Password</label>
							<input type="password" name="password" placeholder="Password" required class="form-control" />
							<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
						</div>

						<div class="form-group">
							<label for="name">Confirm Password</label>
							<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
							<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
						</div>

						<div class="form-group">
							<input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
						</div>
					</fieldset>
				</form>
				<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
				<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">	
			Already Registered? <a href="login.php">Login Here</a>
			</div>
		</div>
	</div>
	<br/><br/>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>



