<?php

require ( "connect.php" );

?>
<html>
<head>
	<title>Cashier details</title>
	<style type="text/css">
		a{
			font-size: 20px;
			background-color: lemonchiffon;
		}
		body {
 background-image: url("back2.jpg");
 background-color: #cccccc;
 background-size: cover;
}

	</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<br>
<div class="w3-bar w3-border w3-light-grey">
  <a href="cashier_detail.php" class="w3-bar-item w3-button w3-hover-pale-blue" style="width: 20%">View/edit cashier details</a>
  <a href="medicine_detail.php" class="w3-bar-item w3-button w3-hover-light-blue" style="width: 20%">View/edit Medicine details</a>
  <a href="customer_detail.php" class="w3-bar-item w3-button w3-hover-cyan" style="width: 30%">View/edit customer records</a>
  <a href="billmake.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 15%">Make a bill</a>
  <a href="Pharmacy_main.php" class="w3-bar-item w3-button w3-hover-indigo" style="width: 15%">Logout</a>
</div>
<h1 style="color: #FB7A53; text-align: center;">DETAILS</h1>
<br>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>
</head>
<body>
<center>
<form action = "billadd.php" method="post">
    <p>
        Employee_id : <input type="number" name="eid" id="eid" minlength="6" maxlength="6" required>
    </p>
	<p>
        Patient_id : <input type="number" name="pid" id="pid" minlength="6" maxlength="6" required>
    </p>
    <p>
        Medicine_id : <input type="number" name="mid" id="mid" minlength="6" maxlength="6" required>
    </p>
    <p>
        Reason : <input type="text" name="for" id="for" required>
    </p>

    <p>
        Quantity : <input type="number" name="qty" id="qty" minlength="6" maxlength="6" required>
    </p>
    <input type="submit" name="Submit">
</form>
</center>
</body>
</html>