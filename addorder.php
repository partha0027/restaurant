<?php include ("load.php" );

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/food.css" />
    <link rel="stylesheet" href="CSS/toggle.css" />


</head>



<body>
    <div class="navBar background">
        <div class="logo leftNav"><img src="image/logo.jpg" alt="image" /></div>
        <ul class="RightNav">
            <li><a href="restaurant.php">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Services">Menu</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="#Contact Us">Contact Us</a></li>
        </ul>
    </div>
    <!-- <div id="sidemenu">
        <ul class="menu">
            <li><a href="food.php" class="food">ADD DISH</a></li>
            <li><a href="category.php">ADD CATEGORY</a></li>
            <li><a href="order.php">ORDER</a></li>
            <li><a href="viewfood.php">VIEW DISH</a></li>
            <li><a href="viewcategory.php">VIEW CATEGORY</a></li>
        </ul>
    </div> -->
    <div class="main">
        <div class="formcontainer">
            <div class="formBox">
                <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "food";

                    $con = mysqli_connect($servername, $username, $password, $database);

                    // if(!$con){
                    //     echo "Failed to coonect";
                    // }
                    // else{
                    //     // echo "Connected successfully";
                    // }

                    $mobileno = $_POST["mobileno"];
                    $category= $_POST["category"];
                    $dish = $_POST["dish"];
                    $quantity = $_POST["quantity"];
                    $price = $_POST["price"];
                    $time = $_POST["time"];
                    $totalprice = $price * $quantity;
                    $status = 0;
                   

                    $sql = "INSERT INTO `order`(`mobileno`, `category`, `dish`, `quantity`, `price`, `time`, `totalprice`, `status`) VALUES
                    ('$mobileno', '$category', '$dish', '$quantity', '$price', '$time','$totalprice', '$status')";

                    $result = mysqli_query($con, $sql);

                    if($result){
                        echo "<p class='order'>You order has been added successfully. Total Price: " . number_format($totalprice, 2) . "</p>";
                    }
                    else{
                        echo "Failed add order".mysqli_error($con);
                    }




                ?>
            </div>

        </div>

    </div>




</body>



</html>