<?php
if (isset($_POST['delete'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "food";

    
    $con = mysqli_connect($servername, $username, $password, $database);

  
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $fid = $_POST['id'];

    $sql = "DELETE FROM `fooditem` WHERE id = '$fid'";

    if (mysqli_query($con, $sql)) {
    
        session_start();
        $_SESSION['status_message'] = 'Successfully deleted.';
        header("Location: edit.php?status=success");
    } else {
       
        session_start();
        $_SESSION['status_message'] = 'Error deleting record: ' . mysqli_error($con);
        header("Location: edit.php?status=error");
    }

   
    mysqli_close($con);
}
?>