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
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="main">
        <div class="formcontainer">

            <form action="" method="post">
                <div class="formBox">
                    <p>Contact Us</p>
                </div>


                <div class="formBox">
                    <input type="text" name="price" id="" placeholder="First Name">

                    <input type="text" name="price" id="" placeholder="Last Name">
                </div>
                <div class="formBox">
                    <input type="email" name="price" id="" placeholder="Enter Email" style="width:100%;">
                </div>
                <div class="formBox">
                    <input type="text" name="price" id="" placeholder="Enter Phone No" style="width:100%;">
                </div>
                <div class="formBox">

                    <textarea name="" id="" cols="30" rows="10" style="width:100%;"
                        placeholder="Write something about you"> </textarea>
                </div>
                <div class="formBox">
                    <button type="Submit" class="btn">Submit</button>

                </div>



            </form>
        </div>

    </div>




</body>

</html>