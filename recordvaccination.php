<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vax DB - Vaccination Recorded</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
  <?php
     $whichPatient= $_POST["POHIP"];
     $lot = $_POST["lot"];
     $clinic=$_POST["clinic"];
     $date =$_POST["date"];
     $time =$_POST["time"];
     #var_dump($_POST);
     $query = 'INSERT INTO Vaccination values("' . $lot . '","' . $whichPatient . '","' . $clinic . '","' . $date . '","' . $time . '")';
     $numRows = $connection->exec($query);
     echo "Vaccination Recorded!";
     $connection = NULL;
  ?>

</ol>
<br>
<br>
<img src="https://www.cdc.gov/coronavirus/2019-ncov/images/vaccines/HCW_vaccine_page_transp-300x236-1.png?_=13435" alt="" width="250" height="200">
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
