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
    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    .formcontainer {
        background-color: #f0f0f0;
        padding: 30px;
        border-radius: 8px;

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
            session_start(); // Start a session

            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'success') {
                    $_SESSION['status_message'] = 'Successfully Updated.';
                } else {
                    $_SESSION['status_message'] = 'Something went wrong.';
                }
            }

         
            if (isset($_SESSION['status_message'])) {
                ?>
            <center>
                <span style="color:green;font-size:20px"><?php echo $_SESSION['status_message']; ?></span>
            </center>
            <?php
                
                unset($_SESSION['status_message']);
            }
            ?>

            
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="formBox">
                    <p>Update Dish</p>
                </div>
                <div class="formBox">
                    <select name="fid" id="fid">
                        <option value="">SELECT</option>
                    </select>
                </div>
                
                <div class="formBox">
                    <button type="Submit" name="show" class="btn">Enter Id</button>
                </div>
            </form>

            <?php
                if  (isset($_POST['show'])) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "food";

                    $con = mysqli_connect($servername, $username, $password, $database);

                    $fid = $_POST["fid"];
                    $sql = "SELECT * FROM `fooditem` WHERE id = '$fid'";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result)) {
                        while ($row = mysqli_fetch_assoc($result)) {
            ?>







            <form action="updatefood.php" method="post">
                <div class="formBox">
                    <input type="hidden" name="id" placeholder="Enter food Id" value="<?php echo $row['id'];?>">
                </div>


                <div class="formBox">
                    <input type="text" name="cid" placeholder="Enter Category Id" value="<?php echo $row['cid'];?>">
                </div>
                <div class="formBox">
                    <input type="text" name="foodname" placeholder="Enter Dish Name"
                        value="<?php echo $row['foodname'];?>">
                </div>
                <div class="formBox">
                    <input type="text" name="price" placeholder="Enter Price" value="<?php echo $row['price'];?>">

                </div>
                <div class="formBox">
                    <button type="Submit" class="btn">Update</button>


                </div>



            </form>
            <form action="deletefood.php" method="post">
                <div class="formBox">
                    <button type="Submit" name="delete" class="btn">Delete</button>
                </div>
                <div class="formBox">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                </div>
            </form>

            <?php
                }
            }
        }
        ?>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "getfood.php",
            success: function(data) {
                $("#fid").html(data);
                console.log(data);
            },
        });
    })
    </script>
</body>

</html>