<!DOCTYPE html>
<html>
    <head>
        <link href="page2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <div class="head">
            <button class="profilebtn" onclick="openNav()"><i class="material-icons" style="font-size:55px">person</i></button>
            <head id="text-head">Spa</head>
        </div>
    </head>
    <body>        
            <div class="spa-container">
                <div class="spa-btn">
                <?php
                include_once 'conn.php';
        
                $sql="SELECT * FROM `shops`";
                $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "<article class='spabtn'><img id='img1' src=".$row["logo"].">
                        <h2 id=sname>".$row["shop_name"]."</h2><p id='saddress'>".$row["shop_address"]."</p>
                        <p id='smail'>".$row["shop_email"]."</p><p id='goto-spa' onclick='location.href=`spa.html`'><i style='font-size:32px' class='material-icons'>pets</i></p></article><br>";
                    }
                }
                else{
                    echo "error";
                    }
                $conn->close()
                ?>
                </div>
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