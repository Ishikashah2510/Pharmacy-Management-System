<?php

// connecting to sql database
require ( "connect.php" );

// define variables and set to empty values
$eid = $password = $etype = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $eid = test_input($_POST["eid"]);
  $password = test_input($_POST["password"]);
  $etype = test_input($_POST["etype"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "SELECT * FROM login";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	if ($row['Password'] == $password && $row['Employee_id'] == $eid && $row['Employee_type'] == $etype) {
    		if ($etype == "manager") {
    			# code...
    			header( "Location: manager_page.php" );
    		}
    		else {
    			header( "Location: cashier_page.php" );
    		}
    	}
    	}
      echo "Sorry, wrong input";
      header ("refresh:10,url=Pharmacy_main.php");	
    }

?>
