<?php

include 'load.php';
$sql = "SELECT id, category FROM `category`";
$result = $con->query($sql);
$options = '<option value="">SELECT</option>';
while ($row = $result->fetch_assoc()) {
    $options .= '<option value="' . $row['id'] . '">' . $row['id'] . '  ' . '-' . '   ' . $row['category'] . '</option>';
}

echo $options;

$con->close();

?>