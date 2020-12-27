<?php
    include_once '../conn.php';
    session_start();
    $cust_id = $_SESSION['cust_id'];
?>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../CSS/viewCpet.css">
    </head>
    <body>
    <div id='page'>
    <p id='cancel' onclick='location.href=`page2.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p>

        <?php
        $sql1 = "SELECT * FROM `pets` WHERE cust_id = $cust_id";
        $res1 = $conn->query($sql1);
        if($res1 ->num_rows>0){
            while($row1 = $res1->fetch_assoc()){
                echo "<div id ='container'>
                <center><img id='image1' src='../images/meow-cat.jpeg'>
                <h1 id='sname'>Name : ".$row1['pet_name']."</h1>
                <p>Gender : ".$row1['gender']."</p>
                <p>Date of Birth : ".$row1['DOB']."</p>
                <p>Animal : ".$row1['animal']."</p>
                <p>Breed : ".$row1['pet_breed']."</p>
                <p>Age : ".$row1['age']. "</p>
                </center></div>";
            }
        }
        ?>
        </div>
    </body>
</html>
