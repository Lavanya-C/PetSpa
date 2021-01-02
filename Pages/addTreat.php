<?php
include_once '../conn.php';
session_start();
$shop_id = $_SESSION['shop_id'];

if(isset($_POST['update']))
{	 
    $treat_id = $_POST['treatment'];
    $price = $_POST['price'];
    
    $sql="INSERT INTO `shoptreat` (treat_id, shop_id, price) values ('$treat_id', '$shop_id', '$price' )";

    if (mysqli_query($conn, $sql)) {
        header("location:shopLogin.php");
	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
}
?>