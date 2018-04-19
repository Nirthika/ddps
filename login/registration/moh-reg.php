<?php
include('../session.php');
if(!isset($login_session)){
	header('Location: ../../index.php'); // Redirecting To Home Page
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>DDPS</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="../../css/reset.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="../../css/main.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="../../css/style.css" />
	<link rel="stylesheet" media="print" type="text/css" href="../../css/print.css" />
</head>
<body>
<div id="main" style="width:85%; height:90%;">
	<div id="header">
		<a href="../../index.php"><img src="../../images/tmp/logo.png" alt="" /></a>
		<hr class="noscreen"/>
		<div id="nav" style="width:95%;"> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;
			<img width="55%" src="../../images/tmp/heading.png" alt="" />
			<!--font size=7 style="font-family:'Monotype Corsiva';font-weight='bold';">Dengue Detection & Prevention System</font-->
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="../logout.php" style="text-decoration:none;"><b>Sign Out</b></a><span>|</span>
			<a href="../../aboutUs.php" style="text-decoration:none;"><b>About Us</b></a> <span>|</span> 
			<a href="../../contactUs.php" style="text-decoration:none;"><b>Contact Us</b></a> 
		</div>
	</div>
	<br/>
	<!--div id="tray" style="width:1150px">
		<ul>
			<li><a href="../../index.php">Home</a></li>
			<li><a href="../../dengueMap.php">Dengue Map</a></li>
			<li><a href="../../dengueInfo.php">Dengue Info</a></li>
			<li><a href="../../currentNews.php">Current News</a></li>
		</ul>
		<div id="search" class="box">
			<form action="#" method="get">
			<div class="box">
				<div id="search-input"><span class="noscreen">Search:</span>
					<input type="text" size="30" name="" value="Search" />
				</div>
				<div id="search-submit">
					<input type="image" src="../../images/design/search-submit.gif" value="OK" />
				</div>
			</div>
			</form>
		</div>		
	</div-->		
    <div id="col-top" style="margin-top:1%"></div>
	<div id="col" class="box" style="height:1150px; overflow:hidden;">        
		<iframe style="width:99.5%; height:98%; margin-top:0%; margin-bottom:0%; margin-left:-1.5%; margin-right:0%;" src="mohReg.php"></iframe>
		</div>
		<div id="col-text"></div>
	</div>
	<hr class="noscreen" />
	<div id="col-bottom"></div>
	<div id="footer">
		<p>Copyright &copy;&nbsp;2017 <strong><a href="#">University of Jaffna</a></strong>, All Rights Reserved &reg;</p>
	</div>
</div>
</body>
</html>
