<?php
include_once '../conn.php';
session_start();
$shop_id = $_SESSION['shop_id'];
echo "$shop_id";

if(isset($_POST['remove']))
{	 
    echo " ".$_POST['treatment']." ";
    $treat_id = $_POST['treatment'];
    
    $sql="DELETE FROM `shoptreat` WHERE treat_id='$treat_id' and shop_id='$shop_id'";

    if (mysqli_query($conn, $sql)) {
        header("location:shopLogin.php");
	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
}
?>