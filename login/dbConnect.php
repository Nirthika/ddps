<?php
//connect to mysql database
$mysqli = new mysqli("localhost", "root", "", "ddps");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>