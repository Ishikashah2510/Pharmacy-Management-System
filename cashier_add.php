<?php

require ('connect.php');

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
<h1 style="color: #FB7A53; text-align: center;">Please insert details</h1>
<br><br><br>
<center>
<form action="cashier_insert.php" method="post">
    <p>
        Employee_id : <input type="number" name="eid" id="eid" minlength="6" maxlength="6" required>
    </p>
    <p>
        Phone_no : <input type="number" name="Phone_no" id="Phone_no" minlength="10" maxlength="10" required>
    </p>
    <p>
        Address : <input type="text" name="add" id="add" maxlength="75" required>
    </p>
    <p>
        Employee_type : <input type="text" name="etype" id="etype" maxlength="7" minlength="7" required>
    </p>
    <p>
        Employee_name : <input type="text" name="ename" id="ename" maxlength="25" required>
    </p>
    <p>
        Password : <input type="text" name="pass" id="pass" maxlength="25" required>
    </p>
    <input type="submit" value="Submit">
</form>
</center>