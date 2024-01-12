<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "food";

$con = mysqli_connect($servername, $username, $password, $database);

// if(!$con){
//     echo "Failed to coonect";
// }
// else{
//     echo "Connected successfully";
// }


$cid =$_POST["cid"];
$foodname = $_POST["foodname"];
$price = $_POST["price"];

$sql = "INSERT INTO `fooditem` (`cid`, `foodname`, `price`) VALUES ('$cid', '$foodname', '$price')";

$result = mysqli_query($con, $sql);

if($result){
    echo "<script>window.location='food.php?status=success';</script>";
}

else{
    echo "<script>window.location='food.php?status=error';</script>";
}






?>