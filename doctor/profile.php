<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../bootstrap/js/bootstrap.min.js">
    <style>
        #grad {
            background: #ffffff; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(#ffffff, #cccccc); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(#ffffff, #cccccc); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(#ffffff, #cccccc); /* For Firefox 3.6 to 15 */
            background: linear-gradient(#ffffff, #cccccc); /* Standard syntax */
        }.button {
			background-color: #CFCFCF;
			color: black;
			padding: 20px 42px;
			text-align: center;    
			display: inline-block;
			font-size: 16px;
			margin: 5px 3px;
			cursor: pointer;
			border-radius: 5px;
			
		}
    </style>
</head>
<body id="grad">
<div id="grad" style="width: 930px">
    <div style="width: 200px; height: 200px; margin-left: 50px; margin-top: 30px; ">
        <div class="row">
            <div class="col-xs-6 col-md-3" style="width: 100%;">
                <a href="#" class="thumbnail" >
                    <img src="../images/tmp/DrTKumanan.jpg" alt="...">
                </a>
            </div>
        </div>
    </div>
    <div style="width: 200px; height: 60px; margin-left: 50px; margin-top: 50px; " >
        <div class="panel panel-default">
            <div class="panel-body">
               <center>
			   <?php
					session_start();
					include('../login/dbConnect.php');
					$result = $mysqli->query("SELECT * FROM doctor WHERE userId = '" .$_SESSION['userId']. "'");
					if ($row = $result->fetch_assoc()) {
						$_SESSION['fullName']=$row['firstName'].' '.$row['lastName'];
					}
					echo $_SESSION['fullName'];
				?>
			   </center>
            </div>
        </div>
    </div>
    <div style="width: 650px; height: 100%; margin-left: 260px; margin-top: -310px;" >
        <div class="panel panel-default" style="height: 100%;" >
            <div class="panel-body" >
                <table class="table">
					<?php
					include('../login/dbConnect.php');
					$result = $mysqli->query("SELECT * FROM doctor WHERE userId = '" .$_SESSION['userId']. "'");
					if ($row = $result->fetch_assoc()) {
						echo '<tr><td align="right" width="30%"><b>Full Name : </b></td><td align="left">'.$row['firstName'].' '.$row['lastName'].'</td></tr>'.
						'<tr><td align="right"><b>Gender : </b></td><td align="left">'.$row['gender'].'</td></tr>'.
                        '<tr><td align="right"><b>Registration No : </b></td><td align="left">'.$row['regNo'].'</td></tr>'.
						'<tr><td align="right"><b>Designation : </b></td><td align="left">'.$row['designation'].'</td></tr>'.
						'<tr><td align="right"><b>Personal Address : </b></td><td align="left">'.$row['addLine1'].', '.$row['addLine2'].'</td></tr>'.
						'<tr><td></td><td align="left">'.$row['district'].'</td></tr>'.
						'<tr><td></td><td align="left">'.$row['province'].'</td></tr>'.
						'<tr><td align="right"><b>Contact No Office : </b></td><td align="left">'.$row['contactNoOffice'].'</td></tr>'.
						'<tr><td align="right"><b> Mobile : </b></td><td align="left">'.$row['contactNoMobile'].'</td></tr>'.
						'<tr><td align="right"><b>Hospital 1 : </b></td><td align="left">'.$row['hospital1'].'</td></tr>'.
						'<tr><td align="right"><b>2 : </b></td><td align="left">'.$row['hospital2'].'</td></tr>'.
						'<tr><td align="right"><b>3 : </b></td><td align="left">'.$row['hospital3'].'</td></tr>'.
						'<tr><td align="right"><b>4 : </b></td><td align="left">'.$row['hospital4'].'</td></tr>'.
						'<tr><td align="right"><b>5 : </b></td><td align="left">'.$row['hospital5'].'</td></tr>'.
						'<tr><td align="right"><b>Others : </b></td><td align="left">'.$row['otherHospital'].'</td></tr>'.
						'<tr><td></td><td align="right"><a href="profileEdit.php"><button>Edit</button></a></td></tr>';
					}
					?>
                </table>
            </div>
			
        </div>
    </div>
</div>
</body>
</html>