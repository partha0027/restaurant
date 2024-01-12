<?php
 

$servername = "localhost";
$username = "root";
$password = "";
$database = "food";

$con = mysqli_connect( $servername, $username, $password, "food");

 // if(!$con){
 //     echo "Failed to coonect".mysqli_connect_error;
 // }
 // else{
 //     echo "Connected successfully";
 // }

 $id = $_POST["id"];
 $cid = $_POST["cid"];
 $foodname = $_POST["foodname"];
 $price = $_POST["price"];
 
 $sql = "UPDATE `fooditem` SET cid = '$cid', foodname = '$foodname', price = '$price' WHERE  `fooditem`.id = '$id'";
 
 $result = mysqli_query($con, $sql);
 if($result){
    //  echo "The dish has been updated successfully";
    echo "<script>window.location='edit.php?status=success';</script>";
 }
 else{
    //  echo "Failed".mysqli_error($con);
    echo "<script>window.location='edit.php?status=error';</script>";
    }
   
    mysqli_close($con);

    
    
    ?>
<!-- <script> window.location.href="Loaction: http://localhost/projectRestaurant/edit.php";</script> -->