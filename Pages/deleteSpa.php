<?php
include_once '../conn.php';

if(isset($_POST['delete']))
{
    $shop_name = $_POST['shop_name'];
    $shop_email = $_POST['shop_email'];

    $sql="DELETE FROM `shops` WHERE shop_name='$shop_name' and shop_email='$shop_email'";
    if (mysqli_query($conn, $sql)) {
		echo "<meta http-equiv='refresh' content='0;url=adminpage1.php'>";
	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}
	 mysqli_close($conn);
}    

?>
