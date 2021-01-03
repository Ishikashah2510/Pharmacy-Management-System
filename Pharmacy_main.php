<!DOCTYPE html>
<html>
<head>
	<title>Pharmacy Management</title>
  <link rel="stylesheet" type="text/css" href="button_main.css">
</head>
<body background="background.jpg" style="background-size: cover;">
  <center>
<h1 style="background-color: white; width: 700px;">PHARMACY MANAGEMENT SYSTEM</h1>
  </center>


<center>
<form method="post" action="login_check.php"> 
<div class="b"> <br><br>
  <h2 style="background-color: #F4ECBE; width: 100px; height: 30px;">Login</h2><br><br>
  Employee ID <br>&nbsp<input type="number" name="eid" maxlength="6" minlength="6" required>
  <br><br>
  Password <br>&nbsp<input type="password" name="password" minlength="5" required>
  <br><br><br>
  Employee Type<br>
  &nbsp<input type="radio" name="etype" value="manager" checked>&nbspManager<br>
  <input type="radio" name="etype" value="cashier" >&nbspCashier<br>
  <br><br>
  <div align="center"><a class="example_d" style="text-decoration: none;"><input type="submit" name="Login" value="Login" style="text-decoration-style: none; border: none; background-color: #20bf6b; padding: 0; border: 4px solid #20bf6b;border-radius: 6px; height: 40px; width: 90px;"></a></div>
</center>

</div>
</form>
</body>
</html>