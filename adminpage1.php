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
        $conn->close()
        ?>

        <button id="addSpa" onclick="openForm()">Add Spa</button>

        <div class="form-popup" id="addDetails">
            <form action="page1.html" class="form-container animate">
                <span class="cancel" onclick="document.getElementById('addDetails').style.display='none'">
                    <i class="material-icons">close</i></span><br>
                <h2>New Spa</h2>
                <label for="spname">Shop Name</label>
                <input type="text" id="spname" name="shop_name" placeholder="Shop Name">
                <label for="spaddress">Location</label>
                <input type="text" id="spaddress" name="shop_address" placeholder="Shop address">
                <label for="splicense">License Number</label>
                <input type="text" id="splicense" name="shop_license" placeholder="Shop License Number">
                <label for="spnumber">Shop Contact Number</label>
                <input type="text" id="spnumber" name="shop_contact" placeholder="Shop Contact Number">

                <label for="spmail">Shop Mail Id</label>
                <input type="mail" id="spmail" class="mail" name="shop_email" placeholder="Shop Mail Id">
                <label for="sppass">New Password</label>
                <input type="password" id="sppass" name="password" placeholder="New password">
                <label for="spress">Retype Password</label>
                <input type="password" id="spress" name="rep_password" placeholder="Re-type Password">

                <label for="spOname">Owner Name</label>
                <input type="text" id="spOname" name="owner_name" placeholder="Shop Owner Name">
                <label for="spOnumber">Owner Contact Number</label>
                <input type="text" id="spOnumber" name="owner_contact" placeholder="Shop Owner Contact Number">
                <label for="spStart">Open Timings</label>
                <input type="text" id="spStart" name="start_time" placeholder="Shop Open timings">
                <label for="spEnd">Close Timings</label>
                <input type="text" id="spEnd" name="end_time" placeholder="Shop Close tomings">

                <button type="submit">Submit</button>
            </form>
        </div>
        
        <button id="delSpa">Delete Spa</button>
        <button id="updateAdmin">Update Admin</button>
        <script>
            function openForm(){
                document.getElementById("addDetails").style.display="block";
            }
            function closeForm(){
                document.getElementById("addDetails").style.display="none";
            }
        </script>

        

        </body>
</html>
