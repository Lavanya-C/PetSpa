<?php
include_once 'conn.php';
session_start();
$cust_id = $_SESSION['cust_id'];

if(isset($_POST['submit']))
{	 
    $pet_name = $_POST['pet_name'];
    $gender= $_POST['gender'];
    $DOB = $_POST['DOB'];
    $animal = $_POST['animal'];
    $pet_breed = $_POST['pet_breed'];
    $age = $_POST['age'];
    
    $sql="INSERT INTO `pets` (pet_name, gender, DOB, animal, pet_breed, age, cust_id) values ('$pet_name', '$gender', '$DOB', '$animal', '$pet_breed', '$age', '$cust_id')";
    if (mysqli_query($conn, $sql)) {
        header("location:page2.php");
	} else {
		echo "Error";
    }
	mysqli_close($conn);
}
?>
<!-- 
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   } -->
