<?php
include_once '../conn.php';
session_start();
$shop_id = $_SESSION['shop_id'];
echo "$shop_id";
?>

<html>
    <head>
        <link href="../CSS/shopTreat.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div class="container1">
            
            <p id='cancel' onclick='location.href=`shopLogin.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p><br>
            <form action='addTreat.php' method ="post">
            <center><h2>Add Treatment</h2></center>

            <?php
            $sql1 = "SELECT treat_id FROM `treatlist` EXCEPT SELECT treat_id FROM `shoptreat` WHERE shop_id='$shop_id'";
            $res1 = $conn->query($sql1);
            if($res1->num_rows>0){
                echo "<label for='treatment'>Select : </label> <select name='treatment'>";
                while($row1 = $res1->fetch_assoc()){
                    echo "<option value ='" . $row1['treat_id'] . "'>" . $row1['treat_id'] . "</option>";                
                }
                echo "<br><label for='price'>Treatment Price : </label>
                <input id ='price' name='price' type='text' placeholder='enter the selected treament price'>";
                echo "</select><br><br><button name='update' type='submit' onclick='addAlert1()' value='submit'>Update</button>";

            } 
            ?> 
            </form>                       
        </div>

        <div class="container2">
            
            <p id='cancel' onclick='location.href=`shopLogin.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p><br>
            <form action='delTreat.php' method ="post">
            <center><h2>Remove Treatment</h2></center>

            <?php
            $sql1 = "SELECT treat_id FROM `shoptreat` WHERE shop_id='$shop_id'";
            $res1 = $conn->query($sql1);
            if($res1->num_rows>0){
                echo "<label for='treatment'>Select : </label> <select name='treatment'>";
                while($row1 = $res1->fetch_assoc()){
                    echo "<option value ='" . $row1['treat_id'] . "'>" . $row1['treat_id'] . "</option>";                
                }
                echo "</select><br><br><button name='remove' type='submit' onclick='delAlert1()' value='submit'>Remove</button>";

            } 
            ?>
            </form>            
        </div>

        <div class="treat">
        <table>
            <tr>
                <th>Treament Id</th>
                <th>Treatment Name</th>
             </tr>
            <?php
            $sql2 = "SELECT * FROM `treatlist`";
            $res2 = $conn->query($sql2);
            if($res2->num_rows>0){
                while($row2 = $res2->fetch_assoc()){
                    echo "<tr><td> ".$row2["treat_id"]."</td>
                    <td>".$row2["treat_name"]."</td><tr>";
                }
                echo"</table>";
            } 
            ?>
        </div>
    </body>
    <script>
        function addAlert1(){
            alert('This treatemnt will be added to your spa!!');
        }
        function delAlert1(){
            alert('This treatemnt will be deleted from your spa!!');
        }

    </script>
</html>






<!-- $sql1 = "SELECT * FROM `treatlist`";
$res1 = $conn->query($sql1);
if($res1->num_rows >0){
    while($row1 = $res1->fetch_assoc()){
        echo " ".$row1['treat_id']." ".$row1["treat_name"]." ";
    }
} -->
