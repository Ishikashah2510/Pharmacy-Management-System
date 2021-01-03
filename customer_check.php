<?php

require ('connect.php');

?>
<?php

$pid = $inp = $phone_no = $add = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $add = test_input($_POST["add"]);
  $phone_no = test_input($_POST["phone_no"]);
  $pid = test_input($_POST["pid"]);
  $inp = test_input($_POST["inp"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($add) {
  # code...
  $query = mysqli_query($connect, "update patient set Address='$inp' where Patient_id=$pid");
}
else if ($phone_no) {
  # code...
  $query = mysqli_query($connect, "update patient set Phone_no='$inp' where Patient_id=$pid");
}
header ( "Location: customer_detail.php" );

?>
