<?php
$serverName="localhost";
$username="root";
$pwd="";
$database="mauresto";
$conn=mysqli_connect($serverName,$username,$pwd,$database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>