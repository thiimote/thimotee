<?php
$mysqli_host = 'localhost';
$mysqli_user = 'root';
$mysqli_pass = '';
$mysqli_db = 'a_database';

//$mysqli_con = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass) or die ('could not connected to database');
//mysqli_select_db($mysqli_con, "a_database" ) or die('could not selected to database');

$mysqli_con = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass);
mysqli_select_db($mysqli_con, $mysqli_db);

if (!@$mysqli_con or @!mysqli_select_db($mysqli_con, $mysqli_db )) {
die("coul not connected");
}
else {
echo "connected";
}

 ?>
