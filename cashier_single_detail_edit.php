<?php

require ('connect.php');

?>
<?php
$eid = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $eid = test_input($_POST["eid"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$sql = "SELECT * FROM employees where Employee_id=$eid";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
            echo "<tr>";
                echo "<th>&nbsp&nbspEmployee_id&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspPhone_no&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspAddress&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspEmployee_type&nbsp&nbsp</th>";
                echo "<th>&nbsp&nbspEmployee_name&nbsp&nbsp</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>&nbsp&nbsp" . $row['Employee_id'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Phone_no'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Address'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Employee_type'] . "&nbsp&nbsp</td>";
                echo "<td>&nbsp&nbsp" . $row['Employee_name'] . "&nbsp&nbsp</td>";
            echo "</tr>";
        }
        echo "</table>";
}

?>