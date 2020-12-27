<?php
include_once '../conn.php';
session_start();
$shop_id = $_SESSION['shop_id'];
?>
<html>
    <head>
    <link rel="stylesheet" href="../CSS/shopUpdate.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>   
    <body>
        <div class="container">
        <button class="closebtn" onclick= 'location.href=`shopLogin.php`' >
            <i class="material-icons" style='font-size:30px ,font-color:white'>cancel</i></button>
            <form action = "updateShop.php" method="post">
                <h1>Update</h1>
                <?php
                $sql2 = "SELECT shop_name, shop_email, shop_license,shop_address, shop_contact, passwords, owner_name, owner_contact, start_time, end_time from `shops` WHERE shop_id = '$shop_id'";
                $res2 = $conn->query($sql2);
                if($res2->num_rows > 0){
                    while($row2 = $res2->fetch_assoc()){
                        echo "<label for='l1'>Shop Name : </label><input id='l1'type = 'text' value = '".$row2['shop_name']."'
                         disabled style='margin:5px 5px 5px 40px'><br>
                        <label>License : </label><input type = 'text' value = '".$row2['shop_license']."' 
                        disabled style='margin:5px 5px 5px 70px'><br>
                        <label>Email : </label><input type = 'text' value = '".$row2['shop_email']."' 
                        disabled style='margin:5px 5px 5px 85px'><br>
                        <label>Address : </label><input type = 'text' name='shop_address' value = '".$row2['shop_address']."'
                        style='margin:5px 5px 5px 67px' required><br>
                        <label>Contact : </label><input type = 'text' name='shop_contact' value = '".$row2['shop_contact']."' 
                        style='margin:5px 5px 5px 70px'required><br>
                        <label>Password : </label><input type = 'password' name='passwords' value = '".$row2['passwords']."'
                        style='margin:5px 5px 5px 56px' required><br>
                        <label>Owner Name : </label><input type = 'text' name='owner_name' value = '".$row2['owner_name']."'
                        style='margin:5px 5px 5px 25px' required><br>
                        <label>Owner Contact : </label><input type = 'text' name='owner_contact' value = '".$row2['owner_contact']."'
                        style='margin:5px 5px 5px 12px' required><br>
                        <label>Opening Time : </label><input type = 'time' name='start_time' value = '".$row2['start_time']."' 
                        style='margin:5px 5px 5px 19px' required><br>
                        <label>Closing Time : </label><input type = 'time' name='end_time' value = '".$row2['end_time']."' 
                        style='margin:5px 5px 5px 25px' required><br>
                        ";
                    }
                }
                ?>                
                <button id="save" name="save" type="submit" value="submit" onclick="updateAlert1()">Update</button>
            </form>
        </div>

    <script>
        function updateAlert1(){
                alert('The Selected Field will be updated!!')
            }
    </script> 
    </body> 
</html?
