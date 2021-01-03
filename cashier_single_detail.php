
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

<center>
<form method="POST" action="cashier_single_detail_edit.php"> 
<h1> Please enter employee id for whom you would like to see details : </h1><input type="number" name="eid" required maxlength="6" required>
<br>
<input type="submit" name="submit">
</form>
</center>
</html>


<html>
<a href="cashier_edit.php" style="color:  #E73F59; text-decoration: none;">Edit</a>
</html>


