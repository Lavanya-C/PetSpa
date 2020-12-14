<?php
$shop_name = $_POST['shop_name'];
$shop_address = $_POST['shop_address'];
$shop_license = $_POST['shop_license'];
$shop_contact= $_POST['shop_number'];
$shop_email = $_POST['shop_email'];
$password = $_POST['password'];
$owner_name = $_POST['owner_name'];
$owner_contact = $_POST['owner_contact'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$rep_password = $_POST['rep_password']

if($password==$rep_password){
    $conn = new mysqli("localhost","root","","petspa");

if(mysqli_connect_error()) {
    die('Connection Error('mysqli_connect_errno().')'.mysqli_connect_error());
}else
 {
    $sql="insert into shops(shop_name, shop_address, shop_license, shop_number, shop_email, password, owner_name, owner_contact, start_time, end_time) values ('$shop_name', '$shop_address', '$shop_license', '$shop_number', '$shop_email', '$password', '$owner_name', '$owner_contact', '$start_time', '$end_time')";
    
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
}else{
    echo "Password doesn't match";
}

?>