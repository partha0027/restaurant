<?php  
include ("load.php" );



$category= $_POST["category"];

$sql = "SELECT `foodname` FROM `fooditem` WHERE cid='$category'";
$query = mysqli_query($con,$sql);
$output = "<option>Select Dish</option>";
while($data=mysqli_fetch_array($query)){
  $output .="<option>".$data['foodname']."</option>";
}

echo $output;






?>