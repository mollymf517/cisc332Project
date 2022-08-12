<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vax DB- Find Vaccine</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<br>
<h2>Vaccine Information</h2>

<table>
<?php
$whichVaccine= $_POST["company_name"];

#$result = $connection->query("select * from Company");
#while ($row = $result->fetch()) {
#	var_dump($row);

#}


  # $query = 'SELECT * FROM Company WHERE Company.Name="' . $whichVaccine . '"';
   #$query = 'SELECT * FROM Company, Vaccine WHERE Company.Name = Vaccine.Vendor AND Company.Name="' . $whichVaccine . '"';
   #$query2 = 'SELECT Clinic, Doses FROM Vaccine, Company.Name="' . $whichVaccine . '"';
  # $query = 'Select Sum(Doses) as 'Total Doses', Clinic FROM Company, Vaccine WHERE Company.Name = Vaccine.Vendor AND Company.Name="Moderna" GROUP BY Clinic';
  $query = 'SELECT Vendor, SUM(Doses) as \'Total Doses\', Clinic FROM Company, Vaccine WHERE Company.Name = Vaccine.Vendor AND Company.Name = "' . $whichVaccine . '" GROUP BY Clinic';
  #$query = 'Select Clinic, SUM(Doses) FROM Company, Vaccine WHERE Company.Name = Vaccine.Vendor AND Company.Name="' . $whichVaccine . '" GROUP BY Clinic';
   $result=$connection->query($query);

 echo "</td></td>"." "."Vendor &nbsp&nbsp|&nbsp&nbsp"."</td></td>"." "."Clinic &nbsp&nbsp|&nbsp&nbsp"."</td></td>"." "."Total Doses Received"."</td></td>";
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["Vendor"]."</td><td>"." "."&nbsp".$row["Clinic"]."</td><td>"." "."&nbsp".$row["Total Doses"]."</td></tr>";
   }
?>
</table>
<?php
$connection =- NULL;
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
<?php

?>
