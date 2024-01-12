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
            .main{
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
            <li><a href="food.php">ADD DISH </a></li>
            <li><a href="category.php">ADD CATEGORY</a></li>
            <li><a href="edit.php">UPDATE DISH</a></li>
            <li><a href="viewfood.php">VIEW FOOD</a></li>
            <li><a href="viewcategory.php">VIEW CATEGORY</a></li>
            <li><a href="vieworder.php">VIEW ORDER</a></li>


        </ul>
    </div>
    <div class="main">
        <div class="formcontainer">

            <form action="addcategory.php" method="post">
                <div class="formBox">
                    <p>Add Category</p>
                </div>

                <div class="formBox">
                    <input type="text" name="category" id="" placeholder="Enter Category Name">
                </div>

                <div class="formBox">
                    <button type="Submit" class="btn">Save</button>
                </div>


                <?php
                if(isset($_GET['status']))
                {
                    if($_GET['status']=='success')
                    {
                        ?>
                <center>
                    <span style="color:green;font-size:20px">Category added successfully.</span>
                </center>
                <?php
                    }
                    else
                    {
                        ?>
                <center>
                    <span style="color:red;font-size:20px">Something went wrong.</span>
                </center>
                <?php
                    }
                }
            ?>
            </form>
        </div>
    </div>






</body>

</html>