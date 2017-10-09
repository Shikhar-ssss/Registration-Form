<?php
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="email";


//making the connection to mysql
$dbc = mysqli_connect($hostname, $usename, $password, $dbname) OR die("could not connect to database, ERROR:".mysqli_connect_error()");
?>