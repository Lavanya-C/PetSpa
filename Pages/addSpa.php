<?php
include_once '../conn.php';

if(isset($_POST['save']))
{	 
    $shop_name = $_POST['shop_name'];
    $shop_address = $_POST['shop_address'];
    $shop_license = $_POST['shop_license'];
    $shop_contact= $_POST['shop_contact'];
    $shop_email = $_POST['shop_email'];
    $passwords = $_POST['passwords'];
    $owner_name = $_POST['owner_name'];
    $owner_contact = $_POST['owner_contact'];
    $logo=$_POST['logo'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $rep_password = $_POST['rep_password'];

    if($rep_password==$passwords){
        $hashed_password=md5($passwords);
        $sql="INSERT INTO `shops` (shop_name, shop_address, shop_license, shop_contact, shop_email, passwords, owner_name, owner_contact, start_time, end_time,logo) values ('$shop_name', '$shop_address', '$shop_license', '$shop_contact', '$shop_email', '$hashed_password', '$owner_name', '$owner_contact', '$start_time', '$end_time','$logo')";

    if (mysqli_query($conn, $sql)) {
        echo "<meta http-equiv='refresh' content='0;url=adminpage1.php'>";

	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
    }
    else echo"Passwords do not match..!!";
}
?>