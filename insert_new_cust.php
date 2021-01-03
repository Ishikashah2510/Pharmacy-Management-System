<?php

require ('connect.php');

?>
<?php

$did = $dname = $exp = $spe = $hos =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $did = test_input($_POST["did"]);
  $dname = test_input($_POST["dname"]);
  $exp = test_input($_POST["exp"]);
  $spe = test_input($_POST["spe"]);
  $hos = test_input($_POST["hos"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$pid = $pname = $phone_no = $add ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pid = test_input($_POST["pid"]);
  $pname = test_input($_POST["pname"]);
  $phone_no = test_input($_POST["phone_no"]);
  $add = test_input($_POST["add"]);
}

$query = mysqli_query($connect, "INSERT INTO `patient`(`Patient_id`, `Name`, `Phone_no`, `Address`) VALUES ('$pid', '$pname', '$phone_no', '$add')");

 $query_doctor = mysqli_query($connect, "insert into doctors values ('$did', '$dname', '$exp', '$spe', '$hos')");

 $query_treatment = mysqli_query($connect, "insert into treatment values ('$did', $pid)");

 header( "Location: bill.php" );
 ?>