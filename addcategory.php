<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "food";

$con = mysqli_connect($servername, $username, $password, $database);

// if(!$con){
//     echo "Failed to coonect".mysqli_connect_error;
// }
// else{
//     echo "Connected successfully";
// }

$category = $_POST["category"];
$sql = "INSERT INTO `category` (`category`) VALUES('$category')";

$result = mysqli_query($con, $sql);

if($result){
    echo "<script>window.location='category.php?status=success';</script>";
}

else{
    echo "<script>window.location='category.php?status=error';</script>";
}

mysqli_close($con);


?>