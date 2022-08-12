<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vax DB - Patient Added</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $whichPatient= $_POST["OHIP"];
   $firstName = $_POST["FirstName"];
   $lastName =$_POST["LastName"];
   $dob =$_POST["DOB"];
   $phone =$_POST["phone"];
   $query = 'INSERT INTO Patient values("' . $firstName . '","' . $lastName . '","' . $whichPatient . '","' . $dob . '","' . $phone . '")';
   $numRows = $connection->exec($query);
   echo "Patient Added!";
   $connection = NULL;
?>
<br>
<br>
<a href="record.php"> <span style="font-size: larger">Record a Vaccination</span></a>
</ol>
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
