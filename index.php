<?php
session_start();
if(isset($_SESSION['loginUser'])){
	if($_SESSION['status']=="no"){
		if($_SESSION['usertype']=="Doctor"){
			header("Location: login/registration/doctor-reg.php");
		}elseif($_SESSION['usertype']=="MOH"){
			header("Location: login/registration/moh-reg.php");
		}elseif($_SESSION['usertype']=="EU"){
			header("Location: login/registration/eu-reg.php");
		}elseif($_SESSION['usertype']=="PHI"){
			header("Location: login/registration/phi-reg.php");
		}elseif ($_SESSION['usertype']=="RDHS"){
			header("Location: login/registration/rdhs-reg.php");
		}
	}else {
		if($_SESSION['usertype']=="Doctor"){
			header("Location: doctor/home.php");
		}elseif($_SESSION['usertype']=="MOH"){
			header("Location: moh/home.php");
		}elseif($_SESSION['usertype']=="EU"){
			header("Location: eu/home.php");
		}elseif($_SESSION['usertype']=="PHI"){
			header("Location: phi/home.php");
		}elseif ($_SESSION['usertype']=="RDHS"){
			header("Location: rdhs/home.php");
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>DDPS</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
	<link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
	<!-- Image Slider-->
		<link href="slider/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="slider/mcVideoPlugin.js" type="text/javascript"></script>
		<script src="slider/js-image-slider.js" type="text/javascript"></script>
	<!-- Image Slider-->
</head>
<body>
<div id="main" style="width:85%; height:90%;">
	<div id="header">
		<a href="index.php"><img src="images/tmp/logo.png" alt="" /></a>
		<hr class="noscreen"/>
		<div id="nav" style="width:95%;"> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;
			<img width="55%" src="images/tmp/heading.png" alt="" />
			<!--font size=7 style="font-family:'Monotype Corsiva';font-weight='bold';">Dengue Detection & Prevention System</font-->
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="login/register.php" style="text-decoration:none;"><b>Sign Up</b></a><span>|</span>
			<a href="login/login.php" style="text-decoration:none;"><b>Sign In</b></a> <span>|</span> 
			<a href="#" style="text-decoration:none;"><b>About Us</b></a> <span>|</span> 
			<a href="#" style="text-decoration:none;"><b>Contact Us</b></a> 
		</div>
	</div>
	<br/>
	<div id="tray" style="width:100%">
		<ul>
			<li id="tray-active"><a href="index.php">Home</a></li>
			<li><a href="dengueMap.php">Dengue Map</a></li>
			<li><a href="dengueInfo.php">Dengue Info</a></li>
			<li><a href="currentNews.php">Current News</a></li>
		</ul>
		<div id="search" class="box">
			<form action="#" method="get">
			<div class="box">
				<div id="search-input"><span class="noscreen">Search:</span>
					<input type="text" size="30" name="" value="Search" />
				</div>
				<div id="search-submit">
					<input type="image" src="images/design/search-submit.gif" value="OK" />
				</div>
			</div>
			</form>
		</div>	
	</div>			
    <div id="sliderFrame" style="width:100%; height:40%" >
        <div id="slider">
            <img src="images/slider/1.jpg"  />
            <img src="images/slider/2.jpg"  />
            <!--img src="images/slider/3.jpg"  /-->
            <img src="images/slider/4.jpg"  />
            <img src="images/slider/5.jpg"  />
            <img src="images/slider/6.jpg"  />
        </div>       
    </div>		
	<div  style=" height:900px; margin-top: 25px; border-radius: 10px 10px 10px 10px; width: 100%; background-color: #CCCCCC; overflow:hidden">		
		<center>
			<h1> Prediction Module </h1> 
			<h2> Relationship between <i>dengue outbreak</i> and <i>average temperature</i> </h2><br/>
			<h3> Power Regression Model </h3> <br/>
		</center>
			<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; * Data for 2015 and 2016 monthly wise <br/></h4>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <img src="images/tmp/dataTmean.png" width="55%" height="8%">
			<p>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; General Power model:<br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp; f(x) = a*x^b<br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Coefficients (with 95% confidence bounds):<br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp; a =   1.456e+23  (-3.038e+24, 3.329e+24)<br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp; b =      -14.59  (-21.33, -7.849)<br/><br/>

				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Goodness of fit:<br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp; SSE: 6.885e+04<br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp; R-square: 0.8068<br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp; Adjusted R-square: 0.7875 <br/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp; RMSE: 82.98 <br/>
			</p>						
		<img src="images/tmp/powerTmean.png">
	</div>
	<hr class="noscreen" />

	<div id="footer">
		<p>Copyright &copy;&nbsp;2017 <strong><a href="#">University of Jaffna</a></strong>, All Rights Reserved &reg;</p>
	</div>
</div>
</body>
</html>