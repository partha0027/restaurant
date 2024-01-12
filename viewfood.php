<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/food.css">
    <link rel="stylesheet" href="CSS/toggle.css">
    <style>
    .formcontainer {
        display: flex;
        justify-content: center;
        align-items: center;

    }
    </style>
</head>

<body>
    <div class="navBar background">
        <div class="logo leftNav"><img src="image/logo.jpg" alt="image" /></div>
        <ul class="RightNav">
            <li><a href="restaurant.php">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Services">Menu</a></li>
            <li><a href="#Admin">Admin</a></li>
            <li><a href="#Contact Us">Contact Us</a></li>
        </ul>
    </div>
    <div id="sidemenu">
        <ul class="menu">
            <li><a href="food.php" class="food">ADD DISH</a></li>
            <li><a href="category.php">ADD CATEGORY</a></li>
            <li><a href="edit.php">UPDATE DISH</a></li>
            <li><a href="viewfood.php">VIEW DISH</a></li>
            <li><a href="viewcategory.php">VIEW CATEGORY</a></li>
            <li><a href="vieworder.php">VIEW ORDER</a></li>
        </ul>
    </div>

    <div class="main">
        <div class="formcontainer">
            <?php  

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "food";

                $con = mysqli_connect( $servername, $username, $password, "food");


                ?>
            <table class="contentTable">
                <tr>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Category ID</th>
                    <th style="text-align:center;">Dish</th>
                    <th style="text-align:center;">Price</th>


                </tr>

                <?php
                    $sql = "SELECT * FROM `fooditem`";
                    $result = mysqli_query($con, $sql);
   
                    while($row = mysqli_fetch_assoc($result)){
    
                echo"
                    <tr style='text-align:center;'>
                    <td>".$row['id']."</td>
                    <td>".$row['cid']."</td>
                    <td>".$row['foodname']."</td>
                    <td>".$row['price']."</td>
                   
                    </tr>";
                    }
                ?>
            </table>
        </div>


    </div>

</body>

</html>