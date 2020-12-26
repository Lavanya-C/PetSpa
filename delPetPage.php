<html>
    <head>
        <link href="delPetPage.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
    <button class="back" onclick="location.href='page2.php'"><i class="material-icons">arrow_back</i></button>

        <div class="container">
            <form action="delPet.php" method="post">
            <h1>Remove Pet</h1>
            <?php
            include_once 'conn.php';
            session_start();
            $cust_id = $_SESSION['cust_id'];

            $sql1 = "SELECT * FROM `pets` WHERE cust_id = '$cust_id' ";
            $result = $conn->query($sql1);
            echo "<label for='petNames'>Choose Pet : </label> <select name='petNames'>";
            while($row = $result->Fetch_assoc()){
                echo "<option value ='" . $row['pet_name'] . "'>" . $row['pet_name'] . "</option>";
            }
            echo "</select><br><br><button name='delete' type='submit' onclick='delAlert4()' value='submit'>Delete</button>
            ";
            ?>
            </form>
        </div>

    </body>
    <script>
        function delAlert4(){
            alert('Your Pet will be deleted permanently!!');
        }

    </script>
</html>