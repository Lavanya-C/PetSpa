<?php
include_once '../conn.php';
session_start();

if(isset($_POST['save']))
{	 
    $user_type = $_POST['usertype'];
    echo "$user_type";

    if($user_type == 'admin'){
        $sql11 = "SELECT passwords from `admin` WHERE email='$email'";
        $res11 = $conn->query($sql11);
        if($res11->num_rows>0){
            $email = $_POST['email'];
            $newPass = $_POST['newPass'];
            $rePass = $_POST['rePass'];
            if($newPass == $rePass){
                $sql1 = "UPDATE `admin` SET passwords = '$newPass' WHERE email='$email'";
                $res = mysqli_query($conn,$sql1);
                header("location:home.php");
            }else{
                echo "Passwords do not match";
            }
        }else echo "email doesnot exists";
    }
    else if($user_type == 'user'){
        $cust_email = $_POST['email'];
        $newPass = $_POST['newPass'];
        $rePass = $_POST['rePass'];
        $sql12 = "SELECT passwords from `customer` WHERE cust_email='$cust_email'";
        $res12 = $conn->query($sql12);
        if($res12->num_rows>0){
            if($newPass == $rePass){
                $hashed_password = md5($newPass);
                $sql3 = "UPDATE `customer` SET passwords = '$hashed_password' WHERE cust_email='$cust_email'";
                $res = mysqli_query($conn,$sql3);
                header("location:home.php");
            }else echo "Passwords do not match";
        }
        else echo "email does not exist";
    }
    else if($user_type == 'spa'){
        $shop_email = $_POST['email'];
        $newPass = $_POST['newPass'];
        $rePass = $_POST['rePass'];
        $sql13 = "SELECT passwords from `shops` WHERE shop_email='$shop_email'";
        $res13 = $conn->query($sql13);
        if($res13->num_rows>0){
            if($newPass == $rePass){
                $hashed_password = md5($newPass);
                $sql3 = "UPDATE `shops` SET passwords = '$hashed_password' WHERE shop_email='$shop_email'";
                $res = mysqli_query($conn,$sql3);
                header("location:home.php");
            }else echo "Passwords do not match";
        }else echo "email does not exists";
    }
    $conn->close();
}
?>