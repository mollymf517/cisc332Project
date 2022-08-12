<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vax DB - Get Clinic Staff</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h3>Clinic Staff</h3>
<table>
<?php
   $whichClinic= $_POST["workers"];
  # var_dump($whichClinic);


   $query = "SELECT t1.EmpID, FirstName, LastName, Credential, Clinic from (SELECT cr.EmpID, cr.Credential, e.FirstName, e.LastName from Credentials cr INNER JOIN Employee e ON cr.EmpID = e.EmpID) as t1 INNER JOIN (SELECT c.Clinic, c.EmpID from Clinic_Staff c INNER JOIN Vaccination_Site v ON c.Clinic= v.Name) as t2 ON t1.EmpID = t2.EmpID";
   $result=$connection->query($query);
#get emplids from clinic
echo "</td></td>"."Clinic &nbsp|&nbsp"."</td></td>"."&nbsp"."Employee ID &nbsp|&nbsp"."</td></td>"."&nbsp"."Name &nbsp|&nbsp"."&nbsp"."</td></td>".""."Credential"."</td></tr>";
    while ($row=$result->fetch()) {
    #  echo "row";
    #  echo $row["Clinic"];
    #  for (i in $row["Clinic"]){
        if ($row["Clinic"] == $whichClinic){

	      echo "<tr><td>".$row["Clinic"]."&nbsp&nbsp</td><td>".$row["EmpID"]."&nbsp&nbsp</td><td>".$row["FirstName"]."&nbsp</td><td>"." ".$row["LastName"]."&nbsp&nbsp</td><td>"." ".$row["Credential"]."</td></tr>";
}
  #  }
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
