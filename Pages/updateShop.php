<?php
include_once '../conn.php';
session_start();
$shop_id = $_SESSION['shop_id'];

if(isset($_POST['save']))
{
    $shop_address = $_POST['shop_address'];
    $shop_contact = $_POST['shop_contact'];
    $passwords = md5($_POST['passwords']);
    $owner_name = $_POST['owner_name'];
    $owner_contact = $_POST['owner_contact'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    $sql1 = "UPDATE `shops` SET shop_address ='$shop_address' , shop_contact='$shop_contact', passwords = '$passwords', owner_name = '$owner_name', owner_contact= '$owner_contact', start_time = '$start_time', end_time= '$end_time' WHERE shop_id = '$shop_id'";
    $res1 = mysqli_query($conn,$sql1);
    header("location:shopLogin.php");

}
?>