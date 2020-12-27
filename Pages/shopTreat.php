<?php
include_once '../conn.php';
session_start();

// echo " ".$_SESSION['shop_email']." ";

$shop_id = $_SESSION['shop_id'];
echo "$shop_id";
?>