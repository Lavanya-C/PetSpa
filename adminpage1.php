<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="adminpage1.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <button class="back"><i class="material-icons">arrow_back</i></button>
        <?php
        $conn=mysqli_connect("localhost","root","","petspa");
        if($conn->connect_error){
            die("Connection Failed:".$conn->connect_error);
        }
        $sql="Select name from admin where admin_id=101";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<h1>Welcome ".$row["name"]."!!</h1>";
            }          
        }
        else{
            echo "error";
        }
        $conn->close();
        ?>

        <button id="addSpa" onclick="openForm1()">Add Spa</button>

        <div class="form-popup" id="addDetails">
            <form action="addSpa.php" class="form-container animate" method="POST">
                <span class="cancel" onclick="document.getElementById('addDetails').style.display='none'">
                    <i class="material-icons">close</i></span><br>
                <h2>New Spa</h2>
                <label for="spname">Shop Name</label>
                <input type="text" id="spname" name="shop_name" placeholder="Shop Name" required><br>
                <label for="spaddress">Location</label>
                <input type="text" id="spaddress" name="shop_address" placeholder="Shop address" required><br>
                <label for="splicense">License Number</label>
                <input type="text" id="splicense" name="shop_license" placeholder="Shop License Number" required><br>
                <label for="spnumber">Shop Contact Number</label>
                <input type="text" id="spnumber" name="shop_contact" placeholder="Shop Contact Number" required><br>
                <label for="spmail">Shop Mail Id</label>
                <input type="mail" id="spmail" class="mail" name="shop_email" placeholder="Shop Mail Id" required><br>
                <label for="sppass">New Password</label>
                <input type="password" id="sppass" name="passwords" placeholder="New password" required><br>
                <label for="spress">Retype Password</label>
                <input type="password" id="spress" name="rep_password" placeholder="Re-type Password" required><br>
                <label for="spOname">Owner Name</label>
                <input type="text" id="spOname" name="owner_name" placeholder="Shop Owner Name" required><br>
                <label for="spOnumber">Owner Contact Number</label>
                <input type="text" id="spOnumber" name="owner_contact" placeholder="Shop Owner Contact Number" required><br>
                <label for="spStart">Open Timings</label>
                <input type="time" id="spStart" name="start_time" placeholder="Shop Open timings" required><br>
                <label for="spEnd">Close Timings</label>
                <input type="time" id="spEnd" name="end_time" placeholder="Shop Close timings" required><br>

                <button name="save" type="submit" value="submit">Submit</button>
            </form>
        </div>
        
        <button id="delSpa" onclick="openForm2()" >Delete Spa</button>
        <div class="form-popup2" id="deleteDetails">
            <form action="deleteSpa.php" class="form-container animate" method="post">
                <span class="cancel" onclick="document.getElementById('deleteDetails').style.display='none'">
                    <i class="material-icons">close</i></span><br>
                <h2>Delete Spa</h2>
                <label for="spname">Shop Name</label>
                <input type="text" id="spname" name="shop_name" placeholder="Shop Name" required><br>
                <label for="spmail">Shop Mail Id</label>
                <input type="text" id="spmail" name="shop_email" placeholder="Shop mail id" required><br>
                
                <button name="delete" type="submit" onclick="delAlert()"value="submit">Delete</button>
            </form>
        </div>


        <button id="updateAdmin">Update Admin</button>
        <script>
            function openForm1(){
                document.getElementById("addDetails").style.display="block";
            }
            function openForm2(){
                document.getElementById("deleteDetails").style.display="block";
            }
            function delAlert(){
                alert('The Spa Entry will be deleted permanently!!')
            }
        </script>

        

        </body>
</html>
