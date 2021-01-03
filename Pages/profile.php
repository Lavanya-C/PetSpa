<?php
include_once '../conn.php';
session_start();
$cust_id = $_SESSION['cust_id'];
?>
<html>
    <head>
        <link href="../CSS/profile.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
    <button class="back" onclick="location.href='page2.php'"><i class="material-icons">arrow_back</i></button>
        <div id="container">

            <h1>Profile</h1>
            <?php
            $sql1 = "SELECT cust_name, DOB, cust_contact, cust_email, cust_address, Date FROM `customer` WHERE customer_id = '$cust_id'";
            $res = $conn->query($sql1);
            if($res->num_rows >0){
                while($row = $res->fetch_assoc()){
                    echo "<div class='cust' ><img src='../images/pep.png'><br><p id='content' >
                    ".$row['cust_name']."<br>
                    ".$row['DOB']."<br>"
                    .$row['cust_contact']."<br>
                    ".$row['cust_email']."<br>
                    ".$row['cust_address']."<br></p>
                    <h4>Registered on : ".$row['Date']."<br></h4>
                    </div>";    
                }
            }
            $sql2 = "SELECT count(*) as total FROM `pets` WHERE cust_id='$cust_id'";
            $res = $conn->query($sql2);
            if($res->num_rows >0){
                while($row = $res->fetch_assoc()){
                    echo "<div class= 'pet'><h3>Pet Count :".$row['total']."<br></h3>";
                }
            }
            $sql3 = "SELECT pet_name FROM `pets` WHERE cust_id='$cust_id'";
            $res = $conn->query($sql3);
            echo "<h3>Pet Names :";
            if($res->num_rows >0){
                while($row = $res->fetch_assoc()){
                    echo " ".$row['pet_name']."  ";
                }
            }
            echo "<h3></div>";
            ?>
        </div>
    </body>
</html>