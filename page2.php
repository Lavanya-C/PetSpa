<?php
include_once 'conn.php';
session_start();
$cust_email = $_SESSION['cust_email'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="page2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <div class="head">
            <button class="profilebtn" onclick="openNav()"><i class="material-icons" style="font-size:55px">person</i></button>
            <p class="logout" onclick="location.href='home.php' "><i style="font-size:30px" class="fas fa-sign-out-alt"></i></p>
        </div>
    </head>
    <body>        
        <div id='bucket'>
            <form id="disp" action="go.php" method="post">
            <div id=ticket>
                <label for="selectShop" title="Whiskers"><br>
                <center>
                    <img id="img" src="images\salon.png">
                    <input type="submit" name ="shop"  value="Whiskers" autofocus/>
                    
                </center>
                </label>
            </div>
            <div id="ticket">
                <label for="selectShop" title="Pet Paw">
                    <center>
                    <img id="img" src="images\dab.jpeg" >
                    <input type="submit" name ="shop" value="Pet Paw"  autofocus/>
                    </center>
                </label>
            </div>
            <div id="ticket">
                <label for="selectShop" title="Drools" >
                <center>
                    <img id="img" src="images\dog1.png" >
                    <input type="submit" name="shop" value="Drools" autofocus/>
                </center>
                </label>
            </div>
            <div id="ticket">
                <label for="selectShop" title="Meow$Bouw" >
                    <center>
                    <img id="img" src="images\excite.jpeg">
                    <input type="submit" name="shop" value="Meow$Bouw" autofocus/>
                    </center>
                </label>
            </div>
        </form>
        </div>             

        <div id="SideNav" class="sidenav" >
            <button class="closebtn" onclick="closeNav()"><i class="material-icons" style='font-size:30px ,font-color:white'>arrow_back</i></button>
            <button class="navbtn">Pet</button>
            <button class="navbtn">order</button>
        </div>
        <script>
            function openNav() {
                   document.getElementById("SideNav").style.width="200px";}
            function closeNav() {
                    document.getElementById("SideNav").style.width="0px";}
            function openShop() {
                    document.getElementById("popShop").style.display="block";}

    
        </script>
    </body>

</html>