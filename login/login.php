<?php
session_start();
include('dbConnect.php');

if(isset($_SESSION['loginUser'])){
	if($_SESSION['status']=="no"){
		if($_SESSION['usertype']=="Doctor"){
			header("Location: registration/doctor-reg.php");
		}elseif($_SESSION['usertype']=="MOH"){
			header("Location: registration/moh-reg.php");
		}elseif($_SESSION['usertype']=="EU"){
			header("Location: registration/eu-reg.php");
		}elseif($_SESSION['usertype']=="PHI"){
			header("Location: registration/phi-reg.php");
		}elseif ($_SESSION['usertype']=="RDHS"){
			header("Location: registration/rdhs-reg.php");
		}
	}else {
		if($_SESSION['usertype']=="Doctor"){
			header("Location: ../doctor/home.php");
		}elseif($_SESSION['usertype']=="MOH"){
			header("Location: ../moh/home.php");
		}elseif($_SESSION['usertype']=="EU"){
			header("Location: ../eu/home.php");
		}elseif($_SESSION['usertype']=="PHI"){
			header("Location: ../phi/home.php");
		}elseif ($_SESSION['usertype']=="RDHS"){
			header("Location: ../rdhs/home.php");
		}
	}
}

//check if form is submitted
if (isset($_POST['login'])) {
	$name = $mysqli->real_escape_string($_POST['name']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$result = $mysqli->query("SELECT * FROM users WHERE name = '" . $name. "' and password = '" . md5($password) . "'");

	if ($row = $result->fetch_assoc()) {
		$_SESSION['userId'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['usertype'] = $row['usertype'];
		$_SESSION['status'] = $row['status'];
		$_SESSION['loginUser']=$row['name'];
		if($row['status']=="no"){
			if($_SESSION['usertype']=="Doctor"){
				header("Location: registration/doctor-reg.php");
			}elseif($_SESSION['usertype']=="MOH"){
				header("Location: registration/moh-reg.php");
			}elseif($_SESSION['usertype']=="EU"){
				header("Location: registration/eu-reg.php");
			}elseif($_SESSION['usertype']=="PHI"){
				header("Location: registration/phi-reg.php");
			}elseif ($_SESSION['usertype']=="RDHS"){
				header("Location: registration/rdhs-reg.php");
			}
		}else {
			if($_SESSION['usertype']=="Doctor"){
			header("Location: ../doctor/home.php");
			}elseif($_SESSION['usertype']=="MOH"){
				header("Location: ../moh/home.php");
			}elseif($_SESSION['usertype']=="EU"){
				header("Location: ../eu/home.php");
			}elseif($_SESSION['usertype']=="PHI"){
				header("Location: ../phi/home.php");
			}elseif ($_SESSION['usertype']=="RDHS"){
				header("Location: ../rdhs/home.php");
			}
		}
	} 
	else {
		$errormsg = "Incorrect User Name or Password!!!";
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
				<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
					<fieldset>
						<legend>Login</legend>
						<div class="form-group">
							<label for="name">Username</label>
							<input type="text" name="name" placeholder="Your username" required class="form-control" />
						</div>
						<div class="form-group">
							<label for="name">Password</label>
							<input type="password" name="password" placeholder="Your Password" required class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Login" class="btn btn-primary" />
						</div>
					</fieldset>
				</form>
				<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">	
				<a href="forgot.php">Forgot Password</a>
			</div>
			<div class="col-md-4 col-md-offset-4 text-center">	
				New User? <a href="register.php">Sign Up Here</a>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>