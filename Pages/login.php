<?php
include_once '../conn.php';
session_start();

if(isset($_POST['save']))
{	 
    $user_type = $_POST['usertype'];
    echo "$user_type";

    if($user_type == 'admin'){
        $email = $_POST['email'];
        $passwords = $_POST['passwords'];
        $sql1 = "SELECT email , passwords FROM `admin` WHERE email='$email'";
        $res = mysqli_query($conn,$sql1);
        if($res -> num_rows>0){
            $row = mysqli_fetch_array($res);        
            if($row['passwords'] == $passwords){
                $_SESSION['email'] = $email;
                header("location:adminpage1.php");
            }else echo "password does not match";
        }
        else echo "email does not exist..!!";                

    }else if($user_type == 'user'){
        $cust_email = $_POST['email'];
        $passwords = $_POST['passwords'];
        $hashed_password = md5($passwords);
        $sql3 = "SELECT cust_email, passwords FROM `customer` WHERE cust_email='$cust_email'";
        $res = mysqli_query($conn,$sql3);
        if($res -> num_rows>0){
            $row = mysqli_fetch_array($res); 

            if($hashed_password == $row['passwords']){
                $_SESSION['cust_email'] = $cust_email;
                header("location:page2.php");
            }else echo "password does not match";
        }
        else echo "email does not exist..!!\nplease register";
    }
    else if($user_type == 'spa'){
        $shop_email = $_POST['email'];
        $passwords = $_POST['passwords'];
        $hashed_password = md5($passwords);
        $sql2 = "SELECT shop_email, passwords from `shops` WHERE shop_email='$shop_email'";
        $res = mysqli_query($conn,$sql2);
        if($res->num_rows>0){
            $row = mysqli_fetch_array($res);
            // echo " ".$row['passwords']."       \n$hashed_password";   
            if($hashed_password == $row['passwords']){
                $_SESSION['shop_email'] = $shop_email;
                header("location:shopLogin.php");
            }else echo "password does not match";
        }
        else echo "shop does not exist..!!\nplease register";
    }
    $conn->close();
}
?>