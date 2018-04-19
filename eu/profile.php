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
        }
    </style>
</head>
<body id="grad">
<div id="grad" style="width: 930px">
    <div style="width: 200px; height: 200px; margin-left: 50px; margin-top: 30px; ">
        <div class="row">
            <div class="col-xs-6 col-md-3" style="width: 100%;">
                <a href="#" class="thumbnail" >
                    <img src="../images/tmp/profile.png" alt="...">
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
					$result = $mysqli->query("SELECT * FROM eu WHERE userId = '" .$_SESSION['userId']. "'");
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
					$result = $mysqli->query("SELECT * FROM eu WHERE userId = '" .$_SESSION['userId']. "'");
					if ($row = $result->fetch_assoc()) {
						echo '<tr><td align="right" width="30%"><b>Full Name : </b></td><td align="left">'.$row['firstName'].' '.$row['lastName'].'</td></tr>'.
						'<tr><td align="right"><b>EU Divition : </b></td><td align="left">'.$row['euDiv'].'</td></tr>'.
						'<tr><td align="right"><b>Institute : </b></td><td align="left">'.$row['insName'].'</td></tr>'.
						'<tr><td align="right"><b>Personal Address : </b></td><td align="left">'.$row['addLine1'].' '.$row['addLine2'].'</td></tr>'.
						'<tr><td></td><td align="left">'.$row['district'].'</td></tr>'.
						'<tr><td></td><td align="left">'.$row['province'].'</td></tr>'.
						'<tr><td align="right"><b>Contact No - Office : </b></td><td align="left">'.$row['contactNoOffice'].'</td></tr>'.
						'<tr><td align="right"><b>Contact No - Mobile : </b></td><td align="left">'.$row['contactNoMobile'].'</td></tr>';
					}
					?>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>