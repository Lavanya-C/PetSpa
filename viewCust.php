<?php
    include_once 'conn.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="viewCust.css">
    </head>
    <body>
    <div id='page'>
    <p id='cancel' onclick='location.href=`adminpage1.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p>
    <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact</th>
        <th>DOB</th>
        <th>Register date</th>
     </tr>

        <?php
        $sql1 = "SELECT `customer_id`, `cust_name`, `cust_email`, `cust_address`, `cust_contact`, `DOB`, `Date` FROM `customer`";
        $res1 = $conn->query($sql1);
        if($res1 ->num_rows>0){
            while($row1 = $res1->fetch_assoc()){
                echo "<tr><td>" . $row1["customer_id"] . "</td>
                <td>" . $row1["cust_name"] . "</td>
                <td>" . $row1["cust_email"] . "</td>
                <td>" . $row1["cust_address"] . "</td>
                <td>" . $row1["cust_contact"] . "</td>
                <td>" . $row1["DOB"] . "</td>
                <td>" . $row1["Date"] . "</td>
                </tr>" ;
            }
            echo "</table>";
        }
        ?>
        </div>
    </body>
</html>
