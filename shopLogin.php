<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="shopLogin.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    </head>
    <body>
    <p id="cancel" onclick="location.href='home.php'"><i style='font-size:40px'class="material-icons">cancel</i></p>

    <?php
        include_once 'conn.php';
        session_start();
        $shop_email=$_SESSION['shop_email'];

        $sql="SELECT * from `shops` where shop_email='$shop_email'";
        $res=$conn->query($sql);
        if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
                echo "<div id='page'><div id ='container'><center><img id='image1' src=".$row['logo'].">
                <h1 id='sname'>Shop Name : ".$row['shop_name']."</h1>
                <p>License : ".$row['shop_license']."</p>
                <p>Address : ".$row['shop_address']."</p>
                <p>Contact : ".$row['shop_contact']."</p>
                <p>Email id : ".$row['shop_email']."</p>
                <p>Owner Name : ".$row['owner_name']. "</p>
                <p>Open time : ".$row['start_time']."</p>
                <p>End time : ".$row['end_time']."</p>
                <p id='edit' onclick =' '><i style ='font-size:40px' class='material-icons'>edit</i></p>
                </center></div></div>";
            }
        }

        ?>

    </body>
</html>
