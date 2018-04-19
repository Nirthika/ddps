<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE name = '" . $name. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: index.php");
	} else {
		$errormsg = "Incorrect User Name or Password!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Login Script</title>
		
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<style>
body {background:url("../design/bg.gif") 0 0 repeat-x; }


</style>
</head>
<body  background="../images/tmp/bg.gif">


	<div id="header">
		
		
		<div id="nav"> 
			<center>
				<div>
					<div><a href="../index.php"><img src="../image/tmp/logo.png" alt="" /></a></div>
					<font size=5 font-weight="bold">Dengue Detection & Prevention System </font>
				</div>
			</center>
			<hr class="noscreen"/>
		</div>
	</div>


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
	<br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="register.php">Sign Up Here</a>
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>





<?php 

include_once 'dbconnect.php'; //connects to the database
if (isset($_POST['username'])){
	$username = $_POST['username'];
	$query="SELECT * FROM `users` WHERE name='$username'";
	$result   = mysqli_query($con, $query) or die(mysqli_error($con));
	$count=mysqli_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysqli_fetch_array($result);
		$pass  =  $rows['password'];//FETCHING PASS
		//echo "your pass is ::".($pass)."";
		$to = $rows['email'];
		//echo "your email is ::".$email;
		//Details for sending E-mail
		$from = "Coding Cyber";
		$url = "http://www.codingcyber.com/";
		$body  =  "Coding Cyber password recovery Script
		-----------------------------------------------
		Url : $url;
		email Details is : $to;
		Here is your password  : $pass;
		Sincerely,
		Coding Cyber";
		$from = "Your-email-address@domaindotcom";
		$subject = "CodingCyber Password recovered";
		$headers1 = "From: $from\n";
		$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Priority: 1\r\n";
		$headers1 .= "X-MSMail-Priority: High\r\n";
		$headers1 .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail ( $to, $subject, $body, $headers1 );
	} else {
	if ($_POST ['email'] != "") {
	    $fmsg = "Not found your email in our database";
		}
		}
	//If the message is sent successfully, display sucess message otherwise display an error message.
	if($sentmail==1)
	{
		$smsg = "Your Password Has Been Sent To Your Email Address.";
	}
		else
		{
		if($_POST['email']!="")
		$nmsg = "Cannot send password to your e-mail address.Problem with sending mail...";
	}
}
?>