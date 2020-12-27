<?php
include_once '../conn.php';
session_start();
$cust_id=$_SESSION['cust_id'];

if(isset($_POST['petNames']))
{
    $pet_name = $_POST['petNames'];
    $sql="DELETE FROM `pets` WHERE cust_id='$cust_id' and pet_name='$pet_name'";
    if (mysqli_query($conn, $sql)) {
        header("location:page2.php");
	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
}    

?>
