<?php

// connecting to sql database
require ( "connect.php" );

// define variables and set to empty values
$eid = $pass = $etype = $Phone_no = $add = $ename ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $eid = test_input($_POST["eid"]);
  $pass = test_input($_POST["pass"]);
  $etype = test_input($_POST["etype"]);
  $Phone_no = test_input($_POST["Phone_no"]);
  $add = test_input($_POST["add"]);
  $ename = test_input($_POST["ename"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$query = mysqli_query($connect, "insert into employees values ('$eid', '$Phone_no', '$add', '$etype', '$ename')");
$query1 = mysqli_query($connect, "insert into login values ('$eid', '$pass', '$etype')");

header ( "Location: cashier_detail.php" );

?>