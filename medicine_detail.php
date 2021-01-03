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
<h1 style="color: #FB7A53; text-align: center;">DETAILS</h1>
<br>
</html>

<?php


$sql = "SELECT * FROM medicine";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
            echo "<tr>";
                echo "<th>&nbsp&nbspMedicine_id&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspCompany&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspPrice&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspExpiry_date&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspTreats&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspStock&nbsp&nbsp</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>&nbsp&nbsp" . $row['Medicine_id'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Company'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Price'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Expiry_date'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Treats'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Stock'] . "&nbsp&nbsp</td>";
            echo "</tr>";
        }
        echo "</table>";
}

?>

<html>
<a href="medicine_edit.php" style="color:  #E73F59; text-decoration: none;">Edit</a>&nbsp&nbsp&nbsp&nbsp
<a href="medicine_add.php" style="color:  #E73F59; text-decoration: none;">Add</a>
</html>


