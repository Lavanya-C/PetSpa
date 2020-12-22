<div class="spa-container">
                <?php
                $sql1 = "SELECT * FROM `customer` WHERE cust_email='$cust_email'";
                $result=$conn->query($sql1);
                if($result -> num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo "<h1>Welcome ".$row["cust_name"]."!!</h1>";
                    }          
                }
                ?>
                <div class="spa-btn">
                <form action="div">
                        <div class='spabtn'>
                        <?php
                        $sql2 = "SELECT * FROM `shops` WHERE `shops`.shop_id = 2021";
                        $res2 = $conn->query($sql2);
                        if($res2 -> num_rows>0){
                            while($row2 = $res2->fetch_assoc()){ 
                                $shop_id_2 = $row2["shop_id"];                        
                                    echo "<img id='img1' src=".$row2["logo"].">
                                    <h2 id=sname>".$row2["shop_name"]."</h2>
                                    <p id='saddress'>".$row2["shop_address"]."</p>
                                    <p id='smail'>".$row2["shop_email"]."</p>
                                    <p id='goto-spa' onclick='document.getElementById(`display1`).style.display=`block`'>
                                    <i style='font-size:32px' class='material-icons'>pets</i></p>";
                                   
                            }
                        }

                        ?>
                        </div>
                </div>

                <!-- <div id = 'display1' class='modal'>
                                    <p id='back2' onclick='document.getElementById(`display1`).style.display=`none` '>
                                    <i style='font-size:35px' class='material-icons'>arrow_back</i></p>
                                    <form class= 'modal-content animate'>
                                    <div class='container'>".$shop_id_2."
                                    <div class='block'><a href='spaedit.html'><i style='color:white' class='fas fa-dog fa-5x'></i></a></div><br>
                                    <div class='block'><a href='spaedit.html'><i style='color:white' class='fas fa-cat fa-5x'></i></a></div><br>
                                    <div class='block'><a href='health.html'><i style='color:white' class='fas fa-user-md fa-5x'></i></a></div>
                                    </div></form></div>"; -->

                <div class="spa-btn">
                    <div class='spabtn'>
                        <?php
                            $sql3 = "SELECT * FROM `shops` WHERE `shops`.shop_id = 2022";
                            $res3 = $conn->query($sql3);
                            if($res3 -> num_rows>0){
                                while($row3 = $res3->fetch_assoc()){ 
                                    $shop_id_3 = $row3["shop_id"];                        
                                        echo "<img id='img1' src=".$row3["logo"].">
                                        <h2 id=sname>".$row3["shop_name"]."</h2>
                                        <p id='saddress'>".$row3["shop_address"]."</p>
                                        <p id='smail'>".$row3["shop_email"]."</p>
                                        <p id='goto-spa' onclick='document.getElementById(`display1`).style.display=`block`'>
                                        <i style='font-size:32px' class='material-icons'>pets</i></p>
                                        <div id = 'display1' class='modal'>
                                        <p id='back2' onclick='document.getElementById(`display1`).style.display=`none` '>
                                        <i style='font-size:35px' class='material-icons'>arrow_back</i></p>
                                        <form class= 'modal-content animate'>
                                        <div class='container'>".$shop_id_3."
                                        <div class='block'><a href='spaedit.html'><i style='color:white' class='fas fa-dog fa-5x'></i></a></div><br>
                                        <div class='block'><a href='spaedit.html'><i style='color:white' class='fas fa-cat fa-5x'></i></a></div><br>
                                        <div class='block'><a href='health.html'><i style='color:white' class='fas fa-user-md fa-5x'></i></a></div>
                                        </div></form></div>";
                                }
                            }
                        ?>

                    </div>
                </div>

            </div>
