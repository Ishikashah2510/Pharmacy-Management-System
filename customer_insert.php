<?php

// connecting to sql database
require ( "connect.php" );

// define variables and set to empty values
$pid = $name = $phone_no = $add ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pid = test_input($_POST["pid"]);
  $name = test_input($_POST["name"]);
  $phone_no = test_input($_POST["phone_no"]);
  $add = test_input($_POST["add"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$query = mysqli_query($connect, "insert into patient values ('$pid', '$name', '$phone_no', '$add')");

header ( "Location: customer_detail.php" );

?>