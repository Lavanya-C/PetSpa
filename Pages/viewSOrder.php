<?php
    include_once '../conn.php';
    session_start();
    $shop_id = $_SESSION['shop_id'];
?>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../CSS/viewCOrder.css">
    </head>
    <body>
    <div id='page'>
    <p id='cancel' onclick='location.href=`shopLogin.php`'><i style='font-size:35px' class='material-icons'>cancel</i></p>
    <table>
    <tr>
        <th>Book Id</th>
        <th>Pet Name</th>
        <th>Customer Name</th>
        <th>Treat Name</th>
        <th>Price</th>
        <th>Slot Time</th>
        <th>Reservation Date</th>
        <th>Booked on</th>
     </tr>

        <?php
        $sql1 = "SELECT C.cust_name, T.treat_name, P.pet_name, B.book_date, B.book_id, B.date, B.slot_time,
        B.total_price from `shops` as S , `shoptreat` as X, `treatlist` as T,`pets` as P,
         `booking` as B, `customer` as C WHERE B.shop_id=$shop_id and
          T.treat_id=X.treat_id and B.treat_id=X.treat_id and
           P.pet_id=B.pet_id and B.cust_id =C.customer_id group by book_id";
        $res1 = $conn->query($sql1);
        if($res1 ->num_rows>0){
            while($row1 = $res1->fetch_assoc()){
                echo "<tr><td>" . $row1["book_id"] . "</td>
                <td>" . $row1["pet_name"] . "</td>
                <td>" . $row1["cust_name"] . "</td>
                <td>" . $row1["treat_name"] . "</td>
                <td>" . $row1["total_price"] . "</td>
                <td>" . $row1["slot_time"] . "</td>
                <td>" . $row1["book_date"] . "</td>
                <td>" . $row1["date"] . "</td>
                </tr>" ;
            }
            echo "</table>";
        }
        ?>
        </div>
    </body>
</html>
