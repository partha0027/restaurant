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
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
       

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

    <div class="main">
        <div class="formcontainer">
            <form action="addorder.php" method="post">
                <div class="formBox">
                    <p>Order</p>
                </div>
               
                <div class="formBox">
                <input type="text" name="mobileno" id="" placeholder="Enter Mobile No">
                    <select name="category" id="parentBox">
                        <option value="">Select Dish Category</option>

                        <?php
                              $sql = "SELECT * FROM `category`";
                              $query = mysqli_query($con, $sql);
                              while($data=mysqli_fetch_array($query))
                              { ?>
                        <option value="<?php echo $data['id'];?>"><?php echo $data['category']?>
                        </option>
                        <?php } ?>

                    </select>
                </div>

                <div class="formBox">
                    <select name="dish" id="childBox">
                        <option value="">Select Dish</option>


                    </select>
                    <select name="price" id="priceBox">
                        <option>price</option>


                    </select>
                </div>

               
                <div class="formBox">
                   
                <input type="number" name="quantity" id="quantity" min="1" max="100" placeholder="Add quantity">
                <input type="datetime-local" name="time" id="time" placeholder="Enter Price">
                </div>



                <div class="formBox">
                    <button type="Submit" class="btn">Order</button>
                </div>

            </form>
        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
    $("#parentBox").change(function() {
        $category = $("#parentBox").val();
        $.ajax({
            url: "data.php",
            method: "POST",
            data: {
                'category': $category
            },
            success: function(response) {
                $("#childBox").html(response);
                $("#priceBox").html(response);
                console.log(response);

            }

        });
    });


    $("#childBox").change(function() {
        $dish = $("#childBox").val();
        $.ajax({
            url: "price.php",
            method: "POST",
            data: {
                'dish': $dish
            },
            success: function(result) {
                $("#priceBox").html(result);
                console.log(result);

            }

        });
    });
    </script>

</body>

</html>