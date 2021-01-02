<?php
include_once'../conn.php';
session_start();
$cust_id = $_SESSION['cust_id'];

if(isset($_POST['shop'])){
    $shop = $_POST['shop'];
    $sql1 = "SELECT * FROM `shops` WHERE shop_name ='$shop' ";
    $res1 = mysqli_query($conn,$sql1);
    if($res1 -> num_rows>0){
        while($row1=$res1->fetch_assoc()){
            $_SESSION['shop_id']=$row1["shop_id"];
            $_SESSION['shop_name']=$shop;

       }
    }
}
echo"success ".$cust_id." ".$_SESSION['shop_id']." ";
?>

<html>
    <head>
        <link rel="stylesheet" href="../CSS/adminpage1.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div class="box">
            <?php echo"<h1>".$_SESSION['shop_name']."</h1>"; ?>
        </div>
    </body>
</html>    