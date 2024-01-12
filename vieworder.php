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
        /* height: 80vh; */
    }
    </style>

</head>

<body>
    <div class="navBar background">
        <div class="logo leftNav"><img src="image/logo.jpg" alt="image" /></div>
        <ul class="RightNav">
            <li><a href="restaurant.php">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="#Admin">Admin</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <div id="sidemenu">
        <ul class="menu">
            <li><a href="food.php" class="food">ADD DISH</a></li>
            <li><a href="category.php">ADD CATEGORY</a></li>
            <li><a href="edit.php">UPDATE DISH</a></li>
            <li><a href="viewfood.php">VIEW DISH</a></li>
            <li><a href="viewcategory.php">VIEW CATEGORY</a></li>
        </ul>
    </div>

    <div class="main">
        <div class="formcontainer">
            <?php  

             include ('load.php');


                ?>
            <table class="contentTable">
                <tr>
                
                    <th style="text-align:center;">Mobile No</th>
                    <th style="text-align:center;">Dish</th>
                    <th style="text-align:center;">Quantity</th>
                    <th style="text-align:center;">Price</th>
                    <th style="text-align:center;">Time</th>
                    <th style="text-align:center;">Total Price</th>
                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">Action</th>



                </tr>
                <?php
                $sql = "SELECT * FROM `order`";
                $result = mysqli_query($con, $sql);

                while($row = mysqli_fetch_assoc($result)){
                    echo"
                    <tr>
               
                    <td style='text-align:center;'>".$row['mobileno']."</td>
                    <td style='text-align:center;'>".$row['dish']."</td>
                    <td style='text-align:center;'>".$row['quantity']."</td>
                    <td style='text-align:center;'>".$row['price']."</td>
                    <td style='text-align:center;'>".$row['time']."</td>
                    <td style='text-align:center;'>".$row['totalprice']."</td>
                    <td style='text-align:center;' id='status-".$row['id']."'>".$row['status']."</td>
                    <td>";

                    if ($row['status'] == 0) {
                        echo "<button type='button' id='btn' class='complete-order' data-order-id='".$row['id']."'>Complete Order</button>";
                    } else {
                        echo "Order Completed";
                    }
                    
                    echo "</td>
                    </tr>";
                }
                ?>
            </table>

        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js">

    </script>
    <script>
    $(document).on("click", ".complete-order", function() {
        var orderId = $(this).data("order-id");
        $.ajax({
            type: "GET",
            url: "updateorder.php?order_id=" + orderId,
            success: function(response) {
                if (response.trim() === "success") {
                   
                    $("#status-" + orderId).text("Completed");
                    
                    $("#message").html("Order has been completed!");
                } else {
                    console.log("Error updating order status.");
                }
            },
            error: function() {
                console.log("Error updating order status.");
            }
        });
    });
    </script>
</body>

</html>