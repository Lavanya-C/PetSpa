<?php
include_once 'conn.php';
session_start();

if(isset($_POST['save']))
{	 
    $user_type = $_POST['usertype'];

    if($user_type=='admin'){
        $email=$_POST['email'];
        $passwords=$_POST['passwords'];
        $sql1="SELECT email , passwords FROM `admin` WHERE email='$email'";
        $res=mysqli_query($conn,$sql1);
        if($res->num_rows>0){
            $row=mysqli_fetch_array($res);        
            if($row['passwords']==$passwords){
                $_SESSION['email']=$email;
                header("location:adminpage1.php");
            }else echo "password does not match";
        }
        else echo "email does not exist..!!";                

    }else if($user_type=='customer'){
        $cust_email=$_POST['email'];
        $passwords=$_POST['passwords'];
        $hashed_password=password_hash($passwords,PASSWORD_DEFAULT);
        $sql3="SELECT cust_email, passwords from `customer` WHERE cust_email='$cust_email'";
        $res=mysqli_query($conn,$sql3);
        if($res->num_rows>0){
            $row=mysqli_fetch_array($res); 

            if($hashed_passwords==$row['passwords']){
                $_SESSION['cust_email']=$cust_email;
                header("location:page2.php");
            }else echo "password does not match";
        }
        else echo "email does not exist..!!\nplease register";

    }else {
        $shop_email=$_POST['email'];
        $passwords=$_POST['passwords'];
        // $hashed_password=password_hash($passwords,PASSWORD_DEFAULT);
        $sql2="SELECT shop_email, passwords from `shops` WHERE shop_email='$shop_email'";
        $res=mysqli_query($conn,$sql2);
        if($res->num_rows>0){
            $row=mysqli_fetch_array($res);   

            if($passwords==$row['passwords']){
                $_SESSION['shop_email']=$shop_email;
                header("location:shopLogin.php");
            }else echo "password does not match";
        }
        else echo "shop does not exist..!!\nplease register";
    }
    $conn->close();
}
?>