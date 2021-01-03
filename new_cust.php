
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

<center>
    <h1>Enter details please</h1>
<form method="post" action="insert_new_cust.php">
	<p>
        Patient_id : <input type="number" name="pid" id="pid" minlength="6" maxlength="6" required>
    </p>
    <p>
        Patient_name : <input type="text" name="pname" id="pname" maxlength="25" required>
    </p>
    <p>
        Phone_no : <input type="number" name="phone_no" id="phone_no" minlength="10" maxlength="10" required>
    </p>
    <p>
        Address : <input type="text" name="add" id="add" maxlength="75" required>
    </p>
    <p>
        Doctor_id : <input type="number" name="did" id="did" minlength="6" maxlength="6" required>
    </p>
    <p>
        Doctor_name : <input type="text" name="dname" id="dname" maxlength="25" required>
    </p>
    <p>
        Experience : <input type="text" name="exp" id="exp" maxlength="50" required>
    </p>
    <p>
        Specialisation : <input type="text" name="spe" id="spe" maxlength="50" required>
    </p>
    <p>
        Hospital : <input type="text" name="hos" id="hos" maxlength="50" required>
    </p>
    
    
    <input type="submit" value="Submit">
</form>
</center>
</html>