<?php
include_once'../conn.php';
session_start();

if(isset($_POST['shop'])){
    $shop = $_POST['shop'];
    $sql1 = "SELECT * FROM `shops` WHERE shop_name ='$shop' ";
    $res1 = mysqli_query($conn,$sql1);
    if($res1 -> num_rows>0){
        while($row1=$res1->fetch_assoc()){
            $_SESSION['shop_id']=$row1["shop_id"];
            
            echo"success ".$row1["shop_email"]." ".$_SESSION['shop_id']." ";
        }
    }
}
?>

