<?php

require ('connect.php');

?>
<?php

$mid = $price = $stk = $inp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $stk = test_input($_POST["stk"]);
  $price = test_input($_POST["price"]);
  $mid = test_input($_POST["mid"]);
  $inp = test_input($_POST["inp"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($price) {
  # code...
  $query = mysqli_query($connect, "update medicine set Price=$inp where Medicine_id=$mid");
}
else if ($stk) {
  # code...
  $query = mysqli_query($connect, "update medicine set Stock=$inp where Medicine_id=$mid");
}
header ( "Location: medicine_detail.php" );

?>
