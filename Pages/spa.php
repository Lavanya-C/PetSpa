<?php
include_once '../conn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa details</title>
  <link rel="stylesheet" href="CSS/mystyle.css">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
       
    <!-- <div class="logo"><i class="fa fa-paw fa-2x" aria-hidden="true"></i><h2>Welcome! Jingles Pet</h2></div> -->
    <ul>
        <li><a href="home.html">Logout</a></li>
       <li><a href="">Profile edit <i class="fas fa-edit"></a></i></li>
        <li class="active"><a href="#">Home</a></li>
    </ul>
    <ol>
    <div class="block"><a href="spaedit.html">DOG<i class="fas fa-dog fa-2x"></i></a></div><br>
    <div class="block"><a href="spaedit.html">CAT<i class="fas fa-cat fa-2x"></i></a></div><br>
    <div class="block"><a href="health.html"><i class="fas fa-user-md fa-2x"></i></a></div>
    </ol>
   
</body>
</html>
