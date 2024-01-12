<?php
  session_start();

    $loginError = isset($_SESSION["login_error"]) ? $_SESSION["login_error"] : "";
    unset($_SESSION["login_error"]);
      ?>

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
            <li><a href="#Admin">Admin</a></li>
            <li><a href="#Contact Us">Contact Us</a></li>
        </ul>
    </div>

  
    <div class="main">
        <div class="formcontainer">
            <form action="login.php" method="post">
                <div class="formBox">
                    <p>Log In</p>
                </div>
                <div class="formBox">
                    <input type="text" name="username" id="" placeholder="Enter Username">
                    <input type="password" name="password" id="" placeholder="Enter Password">
                </div>
               

                <div class="formBox">
                    <button type="Submit" class="btn">Log in</button>
                </div>


                <?php if ($loginError) : ?>
                <div class="error-message">
                    <?php echo $loginError; ?>
                </div>
                <?php endif; ?>
            </form>
        </div>

    </div>







</body>

</html>