<?php
include_once '../conn.php';

if(isset($_POST['save']))
{	 
    $cust_name = $_POST['cust_name'];
    $cust_contact= $_POST['cust_contact'];
    $cust_address = $_POST['cust_address'];
    $DOB = $_POST['DOB'];
    $cust_email = $_POST['cust_email'];
    $passwords = $_POST['passwords'];
    
    $hashed_password=md5($passwords);
    $sql="INSERT INTO `customer` (cust_name, cust_contact, cust_address, DOB, cust_email, passwords) values ('$cust_name', '$cust_contact', '$cust_address', '$DOB', '$cust_email', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        // header("location.href:home.php");
        echo "<meta http-equiv='refresh' content='0;url=home.php'>";
	} else {
		echo "Error";
    }
	mysqli_close($conn);
}
?>