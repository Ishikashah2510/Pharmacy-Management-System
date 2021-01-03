<?php

require ("connect.php");

?>

<?php

$eid = $pid = $mid = $for = $qty =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $eid = test_input($_POST["eid"]);
  $pid = test_input($_POST["pid"]);
  $mid = test_input($_POST["mid"]);
  $for = test_input($_POST["for"]);
  $qty = test_input($_POST["qty"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "SELECT * FROM medicine where Medicine_id = '$mid'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result)){
$stk = $row['Stock'];
$amt = $row["Price"];
$newstk = $stk - $qty;
$tamt = $amt * $qty;
}
}
else{
	echo "Invalid medicine id";
}

if ( $newstk >= 0){



$mid1 = "mid " . "$mid\n";
$eid1 = "eid " . "$eid\n";
$tamt1 = "tamt " . "$tamt\n";
$for1 = "for " . "$for\n";
$qty1 = "qty " . "$qty\n";
file_put_contents("$pid.txt", "$mid1", FILE_APPEND);
file_put_contents("$pid.txt", "$eid1", FILE_APPEND);
file_put_contents("$pid.txt", "$tamt1", FILE_APPEND);
file_put_contents("$pid.txt", "$for1", FILE_APPEND);
file_put_contents("$pid.txt", "$qty1", FILE_APPEND);


echo "<center><h1>Bill</h1></center>";
echo "<center><h2>Medicine Id : $mid</h2></center>";
echo "<center><h2>Employee Id : $eid</h2></center>";
echo "<center><h2>Quantity : $qty</h2></center>";
echo "<center><h2>Total Amount : $tamt</h2></center>";


$query = mysqli_query($connect, "INSERT INTO `history`(`Patient_id`, `Medicine_id`, `taken_for`) VALUES ('$pid', '$mid', '$for')");

$query1 = mysqli_query($connect, "INSERT INTO `orders`(`Patient_id`, `Medicine_id`, `Employee_id`, `Total_amt`, `Quantity`) VALUES ('$pid', '$mid', '$eid', '$tamt', '$qty')");

$query2 = mysqli_query($connect, "UPDATE `medicine` SET `Stock`='$newstk' WHERE `Medicine_id`='$mid'");


header( "refresh:5;url=billmake.php" );

}
else
{
  echo "Sorry, wrong input";
header ( "refresh:5,url= billmake.php " );
}


?>