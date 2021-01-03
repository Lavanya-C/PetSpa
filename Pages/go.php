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
?>

<html>
    <head>
        <link rel="stylesheet" href="../CSS/go.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
    <button class="closebtn" onclick= 'location.href=`page2.php`' >
            <i class="material-icons" style='font-size:30px ,font-color:white'>cancel</i></button><br>
        <div class="box">
            <?php 

            echo"<center><h1>".$_SESSION['shop_name']."</h1></center>"; 
            $sql2 = "SELECT shop_address, shop_contact, start_time, end_time FROM `shops` WHERE shop_id =".$_SESSION['shop_id']."";
            $res2 = $conn->query($sql2);
            if($res2->num_rows>0){
                while($row2 = $res2->fetch_assoc()){
                    echo"<p id='sdet'>".$row2['shop_address']." Ph: ".$row2['shop_contact']."<br>
                    Opens at: ".$row2['start_time']."<br>Closes at: 
                    ".$row2['end_time']."</p>";
                }
            }
            echo "<form action ='book.php' method='post'>";
            echo "<div id = 'container'>";
            $sql4 = "SELECT pet_id, pet_name FROM `pets` WHERE cust_id = $cust_id";
            $res4 = $conn->query($sql4);
            if($res4->num_rows>0){
                echo"<center><h3>Pet</h3></center><select name = 'pet_id' >";
                while($row4 = $res4->fetch_assoc()){
                    echo "<option value ='".$row4['pet_id']."'>".$row4['pet_name']."</option>";              
                }
                echo"</select><br>";
            }

            $sql3 = "SELECT s.treat_id, t.treat_name, s.price FROM `shoptreat` as s inner join `treatlist` as t on s.treat_id=t.treat_id and s.shop_id=".$_SESSION['shop_id']."";
            $res3 = $conn->query($sql3);
            if($res3->num_rows>0){
                echo "<center><h3>Treatment</h3></center>";
                while($row3 = $res3->fetch_assoc()){
                    echo"<input type='radio' id ='".$row3['treat_id']."' name='treatment_id' value=".$row3['treat_id'].">

                    <label for=".$row3['treat_id'].">".$row3['treat_name']."  Rs.
                    <input id='read' type ='text' name='price' value='".$row3['price']."' readonly='readonly'/></label><br>";                        
                }
            }

            ?>
                <div id='t&d'>
                    <center><h3>Schedule</h3></center>
                    <label id='t1' for="time">Time  </label><br>
                    <select  id='time' name="time">
                        <option value="09:00">9-10 AM</option>
                        <option value="10:00">10-11 AM</option> 
                        <option value="11:00">11-12 AM</option> 
                        <option value="12:00">12-1 PM</option> 
                        <option value="13:00">1-2 PM</option> 
                        <option value="14:00">2-3 PM</option> 
                        <option value="15:00">3-4 PM</option>
                        <option value="16:00">4-5 PM</option> 
                        <option value="17:00">5-6 PM</option> 
                        <option value="18:00">6-7 PM</option> 
                        <option value="19:00">7-8 PM</option> 
                    </select><br>
                    <label id='t3' for='day'>Day </label><br>
                     <?php 
                     $today = date('Y-m-d');
                     $day30 = date('Y-m-d',strtotime('+30 days',strtotime($today))) . PHP_EOL;

                     echo "<input id='t4' type='date' name='date' min='$today' max='$day30' required>";                
                     ?>

                </div>
                <center><button id='b2' name='save' type='submit' value='submit'>Book</button>
                <p style="margin-botton:2px; color:red">You can book only 1 treatment for 1 slot</p><center>
        </form>
            </div>

        </div>
    </body>
   
</html>    