<?php
include_once 'conn.php';

if(isset($_POST['delete']))
{
    $cust_name = $_POST['cust_name'];
    $cust_email = $_POST['cust_email'];

    $sql="DELETE FROM `customer` WHERE cust_name='$cust_name' and cust_email='$cust_email'";
    if (mysqli_query($conn, $sql)) {
        header("location:adminpage1.php");
	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
}    

?>
