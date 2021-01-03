<?php

require ('connect.php');

?>
<html>
<head>
	<title>Medicine details</title>
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
<form action="medicine_insert.php" method="post">
    <p>
        Medicine_id : <input type="number" name="mid" id="mid" minlength="6" maxlength="6" required>
    </p>
    <p>
        Company : <input type="text" name="cmp" id="cmp" maxlength="75" required>
    </p>
    <p>
        Price : <input type="number" name="price"
        id="price" required>
    </p>
    <p>
        Expiry_date : <input type="date" name="exdate" id="exdate" required>
    </p>
    <p>
        Treats : <input type="text" name="treats" id="treats" required>
    </p>
    <p>
        Stock : <input type="number" name="stk" id="stk" required>
    </p>
    <input type="submit" value="Submit">
</form>
</center>