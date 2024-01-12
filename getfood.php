<?php

include 'load.php';
$sql = "SELECT id, foodname FROM `fooditem`";
$result = $con->query($sql);
$options = '<option value="">SELECT</option>';
while ($row = $result->fetch_assoc()) {
    $options .= '<option value="' . $row['id'] . '">' . $row['id'] . '  ' . '-' . '   ' . $row['foodname'] . '</option>';
}

echo $options;

$con->close();

?>