<?php

require ('connect.php');

?>
<?php

$Address = $eid =  $inp = $Phone_no = $Employee_type =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Address = test_input($_POST["Address"]);
  $Employee_type = test_input($_POST["Employee_type"]);
  $Phone_no = test_input($_POST["Phone_no"]);
  $eid = test_input($_POST["eid"]);
  $inp = test_input($_POST["inp"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($Address) {
  # code...
  $query = mysqli_query($connect, "update employees set Address='$inp' where Employee_id=$eid");
}
else if ($Phone_no) {
  # code...
  $query = mysqli_query($connect, "update employees set Phone_no='$inp' where Employee_id=$eid");
}
else if ($Employee_type)
{
  $query = mysqli_query($connect, "update employees set Employee_type='$inp' where Employee_id=$eid");
}

header ( "Location: cashier_detail.php" );

?>
