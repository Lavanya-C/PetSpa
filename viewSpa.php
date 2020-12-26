<?php
    include_once 'conn.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="ViewSpa.css">
    </head>
    <body>
    <div id='page'>
    <p id='cancel' onclick='location.href=`adminpage1.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p>

        <?php
        $sql1 = "SELECT logo ,shop_name, shop_license, shop_contact, shop_address, shop_email, owner_name, start_time, end_time FROM `shops`";
        $res1 = $conn->query($sql1);
        if($res1 ->num_rows>0){
            while($row1 = $res1->fetch_assoc()){
                echo "<div id ='container'>
                <center><img id='image1' src=".$row1['logo'].">
                <h1 id='sname'>Shop Name : ".$row1['shop_name']."</h1>
                <p>License : ".$row1['shop_license']."</p>
                <p>Address : ".$row1['shop_address']."</p>
                <p>Contact : ".$row1['shop_contact']."</p>
                <p>Email id : ".$row1['shop_email']."</p>
                <p>Owner Name : ".$row1['owner_name']. "</p>
                <p>Open time : ".$row1['start_time']."</p>
                <p>End time : ".$row1['end_time']."</p>
                </center></div>";
            }
        }
        ?>
        </div>
    </body>
</html>
