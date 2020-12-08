<?php
$serverNAME = "localhost";
$userName = "root";
$password = "";
$dbNAME = "petspa";
$conn = mysqli_connect($serverNAME, $userName, $password, $dbNAME);
if($conn->connect_error)
die("Connection failed".$conn->connect_error);
else
echo "Sucess";
?>