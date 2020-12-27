<?php
include_once '../conn.php';
session_start();
$shop_email = $_SESSION['shop_email'];
$sql1 = "SELECT shop_id FROM `shops` WHERE shop_email='$shop_email'";
$res = $conn->query($sql1);
if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        $_SESSION['shop_id'] = $row['shop_id'];
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href="../CSS/shopLogin.css">
        <link rel ="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    </head>
    <body>
    <?php
        
        $shop_id = $_SESSION['shop_id'];

        $sql = "SELECT * from `shops` where shop_id='$shop_id'";
        $res = $conn->query($sql);
        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                echo "<div id='page'><div id ='container'>
                <p id='cancel' onclick='location.href=`home.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p>
                <center><img id='image1' src=".$row['logo'].">
                <h1 id='sname'>Shop Name : ".$row['shop_name']."</h1>
                <p>License : ".$row['shop_license']."</p>
                <p>Address : ".$row['shop_address']."</p>
                <p>Contact : ".$row['shop_contact']."</p>
                <p>Email id : ".$row['shop_email']."</p>
                <p>Owner Name : ".$row['owner_name']. "</p>
                <p>Open time : ".$row['start_time']."</p>
                <p>End time : ".$row['end_time']."</p>
                <p id='edit' onclick ='location.href = `shopUpdate.php` '><i style ='font-size:40px' class='material-icons'>edit</i></p>
                <p id='treat' onclick ='location.href = `shopTreat.php` '>Treatment <i style ='font-size:20px' class='material-icons'>edit</i></p>
                </center></div></div>";
            }
        }

        ?>

    </body>
</html>
