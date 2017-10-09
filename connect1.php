<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="registration";

//making the connection to mysql
$dba = mysqli_connect($hostname, $username, $password, $dbname);
//set encoding
mysqli_set_charset($dba,"urf8");


?>