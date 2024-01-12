<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "food";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Failed to connect: " . mysqli_connect_error());
}

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    $sql = "UPDATE `order` SET `status` = 1 WHERE `id` = $order_id";

    if (mysqli_query($con, $sql)) {
        echo "success"; 
    } else {
        echo "Error updating order status: " . mysqli_error($con);
    }
} else {
    echo "Order ID not provided.";
}
?>