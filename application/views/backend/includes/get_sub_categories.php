<?php

$connect = mysqli_connect('localhost', 'root', '', 'patalost');
$output = '';
$sql = 'SELECT * FROM itemsubcategory WHERE item_id ="' . $_POST["itemId"] . '" ORDER BY item_sub';
$result = mysqli_query($connect, $sql);
$output = '<option value="">Select SubCategory</option>';
while ($row = mysqli_fetch_array($result)) {
    $output .= '<option value="' . $row['item_sub_id'] . '">' . $row['item_sub'] . '</option>';
}
echo $output;
