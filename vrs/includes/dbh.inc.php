<?php

$serverName="localhost";
$dbUsername="kamal";
$dbPassword="Ublg(ePHWJe3.xvp";
$dbName="car2go_login";

$conn=mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}