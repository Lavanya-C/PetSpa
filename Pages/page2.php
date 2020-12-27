<?php
include_once '../conn.php';
session_start();
$cust_email = $_SESSION['cust_email'];
$sql1 = "SELECT customer_id FROM `customer` WHERE cust_email= '$cust_email'";
$res = $conn->query($sql1);
if($res->num_rows > 0){
    while($row=$res->fetch_assoc()){
        $_SESSION['cust_id']= $row['customer_id'];
    } 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../CSS/page2.css" rel="stylesheet">
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
                    <img id="img" src="..\images\salon.png">
                    <input type="submit" name ="shop"  value="Whiskers" autofocus/>
                    
                </center>
                </label>
            </div>
            <div id="ticket">
                <label for="selectShop" title="Pet Paw">
                    <center>
                    <img id="img" src="..\images\dab.jpeg" >
                    <input type="submit" name ="shop" value="Pet Paw"  autofocus/>
                    </center>
                </label>
            </div>
            <div id="ticket">
                <label for="selectShop" title="Drools" >
                <center>
                    <img id="img" src="..\images\dog1.png" >
                    <input type="submit" name="shop" value="Drools" autofocus/>
                </center>
                </label>
            </div>
            <div id="ticket">
                <label for="selectShop" title="Meow$Bouw" >
                    <center>
                    <img id="img" src="..\images\excite.jpeg">
                    <input type="submit" name="shop" value="Meow$Bouw" autofocus/>
                    </center>
                </label>
            </div>
        </form>
        </div>             

        <div id="SideNav" class="sidenav" >
            <button class="closebtn" onclick="closeNav()"><i class="material-icons" style='font-size:30px ,font-color:white'>arrow_back</i></button>
            <p id="vcust" onclick='location.href="profile.php"' class="navbtn">Profile</p>
            <p id="rpet" onclick='document.getElementById(`disp1`).style.display=`block`' class="navbtn">Register Pet</p>
            <p id="vpet" onclick='location.href="viewCpet.php"' class="navbtn">Your Pets</p>
            <p id="dpet" onclick='location.href="delPetPage.php" ' class="navbtn">Delete Pet</p>


            <p id="orders" class="navbtn">order</p>
        </div>

        
        <div id="disp1" class="display1">  
            <form class="display1-content animate" action="insertPet.php" method="post">
            <button class="closebtn2" onclick='document.getElementById(`disp1`).style.display=`none`' >
            <i class="material-icons" style='font-size:30px ,font-color:white'>arrow_back</i></button>

                <div class="container">
                    <center><h2>Register PET</h2></center>
                    <label class="x1" for="pname">Name</label><br>
                    <input type="text" placeholder="Pet Name" id="pname" name="pet_name" required><br>
                    <label class="x2" for="pgen">Gender</label><br>
                    <input type="text" id="pgen" placeholder="Gender" name="gender" required><br>
                    <label class="x3" for="pdob">Date of Birth</label><br>
                    <input type="date" id="pdob" placeholder="Birth Date" name="DOB"><br>

                    <label class="x4" for="animal">Animal</label><br>
                    <select class="select" name="animal" id="animal">
                        <option id="dog" value="dog">Dog</option>
                        <option id="cat" value="cat">Cat</option>
                    </select><br>
                    <label class="x5" for="pbreed">Breed</label><br>
                    <input type="text" id="pbreed" placeholder="Breed" name="pet_breed"><br>
                    <label class="x6" for="page">Age</label><br>
                    <input type="text" id="page" placeholder="Age" name="age"><br>
                    
                    <!-- <label class="x7" for="img">Select image:</label>
                    <input type="file" id="pimg" name="img" accept="image/*"> -->

                    <button id="next" type="submit" name="submit" value="submit">Register</button>
                   
                </div>
            </form>
        </div>

        
        

        <script>
            function openNav() {
                   document.getElementById("SideNav").style.width="200px";}
            function closeNav() {
                    document.getElementById("SideNav").style.width="0px";}
               
        </script>
    </body>

</html>