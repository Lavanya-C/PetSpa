<?php
include_once '../conn.php';
session_start();
$cust_id = $_SESSION['cust_id'];
$shop_id = $_SESSION['shop_id'];

if(isset($_POST['save']))
{	 
    $pet_id = $_POST['pet_id'];
    $treat_id = $_POST['treatment_id'];
    $slot_time = $_POST['time'];
    $date = $_POST['date'];
    $price = $_POST['price'];

    echo " ".$pet_id." ".$treat_id." ".$slot_time." ".$date." ".$price." ";
    $sql1 = "INSERT INTO `booking` (shop_id, cust_id, treat_id, book_date, slot_time,total_price,pet_id) 
    VALUES('$shop_id', '$cust_id', '$treat_id', '$date', '$slot_time', '$price','$pet_id') ";
    if (mysqli_query($conn, $sql1)) {
        header("location:page2.php");
	} else {
		echo "Error: " . $sql1 . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
}
?>