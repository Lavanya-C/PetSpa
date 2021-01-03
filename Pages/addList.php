<?php
include_once '../conn.php';

if(isset($_POST['save']))
{	 
    $treat_name = $_POST['treat'];
    
    $sql="INSERT INTO `treatlist` (treat_name) values ('$treat_name' )";

    if (mysqli_query($conn, $sql)) {
        header("location:adminpage1.php");
	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
}
?>