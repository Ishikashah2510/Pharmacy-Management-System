<?php

// connecting to sql database
require ( "connect.php" );

// define variables and set to empty values
$mid = $cmp = $price = $exdate = $treats = $stk ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mid = test_input($_POST["mid"]);
  $cmp = test_input($_POST["cmp"]);
  $price = test_input($_POST["price"]);
  $exdate = test_input($_POST["exdate"]);
  $treats = test_input($_POST["treats"]);
  $stk = test_input($_POST["stk"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$query = mysqli_query($connect, "insert into medicine values ('$mid', '$cmp', '$price', '$exdate', '$treats', '$stk')");

header ( "Location: medicine_detail.php" );

?>