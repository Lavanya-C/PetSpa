<?php
    include_once '../conn.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../CSS/viewCust.css">
    </head>
    <body>
    <div id='page'>
    <p id='cancel' onclick='location.href=`adminpage1.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p>
    <table>
    <tr>
        <th>Treatment Id</th>
        <th>Treatment Name</th>
     </tr>

        <?php
        $sql1 = "SELECT * FROM `treatlist`";
        $res1 = $conn->query($sql1);
        if($res1 ->num_rows>0){
            while($row1 = $res1->fetch_assoc()){
                echo "<tr><td>" . $row1["treat_id"] . "</td>
                <td>" . $row1["treat_name"] . "</td>
                </tr>" ;
            }
            echo "</table>";
        }
        ?>
        </div>
    </body>
</html>
