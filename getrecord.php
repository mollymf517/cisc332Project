<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vaccination Database - Get Vaccination Status</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<br>
<h2>Vaccination Record</h2>

<table>
<?php
   $whichPatient= $_POST["patients"];
  # $query = 'SELECT * FROM Patient, Vaccination WHERE Patient.OHIP=Vaccination.POHIP AND Vaccination.POHIP="' . $whichPatient . '"';
   $query = 'SELECT * FROM (SELECT LotID, Vendor FROM Vaccine)as t1 INNER JOIN (SELECT OHIP, AppointmentDate, Clinic, LotID, FirstName, LastName FROM Patient, Vaccination WHERE Patient.OHIP=Vaccination.POHIP AND Vaccination.POHIP="' . $whichPatient . '") as t2 on t1.LotID=t2.LotID';
   $result=$connection->query($query);
  # echo "<th>Name |".""."OHIP |".""." "."Date |".""." "."Type"."</th><td>";
   echo "<tr><td>"." "."First"."</td><td>"."|Last"."</td><td>"."|OHIP "."</td><td>"." "."|Date "."</td><td>"."|Type"."</td></tr>";
    while ($row=$result->fetch()) {
	   echo "</td><td>"." ".$row["FirstName"]."</td><td>"." ".$row["LastName"]."</td><td>"." ".$row["OHIP"]."</td><td>"."  ".$row["AppointmentDate"]."</td><td>"."  ".$row["Vendor"]."</td></tr>";
    #   echo "<td>".$row["FirstName"]."</td>"."<td>"." ".$row["LastName"]."</td><td>"." ".$row["OHIP"]."</td><td>"."  ".$row["AppointmentDate"]."</td><td>"."  ".$row["Vendor"]."</td></tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="covid.php">Home</a><br>
<a href="status.php">Check a Patient's Vaccination Status</a><br>
<a href="record.php">Record a Vaccination</a><br>
<a href="info.php">Find a Vaccine</a><br>
<a href="workers.php">View Clinic Staff</a>
<br>
  <br>
  <img src="banner.png" alt="" width="600" height="150">

</body>

</html>
