<?php
session_start();

if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_name"])) {
    
    header("Location: admin.php");
    exit();
}


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
</head>

<body>
    <div class="navBar background header">
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
        <h1 class="admin">Welcome <?php echo $_SESSION["user_name"]; ?>!</h1>
    </div>















    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "food";
      $con = mysqli_connect($servername, $username, $password, $database);
  

      //   if(!$con){
      //     die("Failed to connect". mysqli_connect_error());

      // }
      // else{
      //     echo "The connection was successful";
    
    
      //  $name = $_POST["username"];
      //  $password = $_POST["password"];
      //  $query = "SELECT * FROM `admin` WHERE  username ='$name' && password = '$password'";
      //  $result = mysqli_query($con, $query);
      //  $num = mysqli_num_rows($result);
     
      //  if($num>0){
      //      echo "Logged in Successfully";
      //  }
      //  else{
      //      echo "Failed to log in".mysqli_error($con);
      //  }
     
     




    ?>
</body>






</html>