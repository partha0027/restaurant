<?php  
include ("load.php" );



$dish= $_POST["dish"];

$sql = "SELECT `price` FROM `fooditem` WHERE foodname='$dish'";
$query = mysqli_query($con,$sql);
$output = "<option>Price</option>";
while($data=mysqli_fetch_array($query)){
  $output .='<option>'.$data['price'].'</option>';
}

echo $output;






?>