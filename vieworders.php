<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "food"; 
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$orders = [];

if (isset($_POST['view_orders'])) {
    $mobile = $_POST['mobile'];

    $sql = "SELECT * FROM `order` WHERE `mobileno` = '$mobile'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
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
    <style>
         .main{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
        
       


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
            <li><a href="admin.php">Admin</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <section class="background1 firstSection" style="height: 300px;">
        <div class="box-main">
            <div class="firtsHalf">

                <p class="textBig" style="font-size:80px;color: #fac100; margin:auto;">
                    Check out order
                </p>

            </div>

        </div>
    </section>

    <div class="main">
        <div class="formcontainer">
            <form action="" method="post" style="margin:auto;" id="form">
                <div class="formBox">
                    <p>View Order</p>
                </div>
                <div class="formBox">
                    <input type="text" name="mobile" id="" placeholder="Enter Username">
                    <button type="Submit" class="btn" id="view_orders" name="view_orders" style="width:30%;">View Your Orders</button>
                    
                </div>
               

                <div class="formBox">
                   
                </div>


            </form>
           
            <?php if (!empty($orders)) { ?>
           
           <table class="contentTable formcontainer" id="order_data">
               <tr>
            
                   <th style="text-align:center;">Mobile No</th>
                   <th style="text-align:center;">Dish</th>
                   <th style="text-align:center;">Quantity</th>
                   <th style="text-align:center;">Price</th>
                   <th style="text-align:center;">Time</th>
                   <th style="text-align:center;">Total Price</th>
                   <th style="text-align:center;">Status</th>
               </tr>

               <?php foreach ($orders as $order) { ?>
                   <tr  style="text-align:center;">
                     
                       <td><?php echo $order['mobileno']; ?></td>
                       <td><?php echo $order['dish']; ?></td>
                       <td><?php echo $order['quantity']; ?></td>
                       <td><?php echo $order['price']; ?></td>
                       <td><?php echo $order['time']; ?></td>
                       <td><?php echo $order['totalprice']; ?></td>
                       <td><?php echo ($order['status'] == 0 ? 'Pending' : 'Completed'); ?></td>
                   </tr>
               <?php } ?>
           </table>
       <?php } else if (isset($_POST['view_orders'])) { ?>
           <span style="color:red;font-size:20px;text-align:center">No orders found for the entered mobile number.</span>
       <?php } ?>


        </div>
      
    
    </div>

    <div class="container" id="contact">
        <div class="row1">
            <h3 class="heading">KITCHEN Kafe & Restro</h3>
            <p>
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts. behind the word
                mountains, far from the countries Vokali.
            </p>
        </div>
        <div class="row2">
            <h3 class="heading">Contact Us</h3>
            <p><i class="fa-sharp fa-solid fa-location-dot fa-sm"></i> 1234 Some St San Francisco, CA 94102, US
                1.800.123.4567</p>
            <p><i class="fa-sharp fa-solid fa-phone fa-sm"></i> (123) 456 78 90</p>
            <p><i class="fa-solid fa-envelope fa-sm"></i> support@axiomthemes.com</p>
        </div>
        <div class="row3">
            <h3 class="heading">Opening Hours</h3>
            <p>Monday....................11 am - 11 pm</p>
            <p>Tuesday....................11 am - 11 pm</p>
            <p>Wednesday..............11 am - 11 pm</p>
            <p>Thursday..................11 am - 11 pm</p>
            <p>Friday........................11 am - 11 pm</p>
            <p>Saturday...................11 am - 11 pm</p>
            <p>Sunday......................11 am - 11 pm</p>
        </div>
    </div>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        // document.addEventListener("DOMContentLoaded", function () {
        //     var viewOrdersButton = document.getElementById("view_orders");
        //     var form = document.getElementById("form");
        //     var orderData = document.getElementById("order_data");

        //     viewOrdersButton.addEventListener("click", function (e) {
        //         e.preventDefault();
        //         form.style.display = "none";
        //         orderData.style.display = "block";
        //     });
        // });
    </script>
</body>

</html>