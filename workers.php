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
<br>
<h3>Staff Records</h3>
<h4>Which clinic are you looking for?</h4>
<form action="getworkers.php" method="post">

  <?php

     $query = "SELECT * FROM Vaccination_Site";
     #$query = "SELECT t1.EmpID, FirstName, LastName, Credential from (SELECT cr.EmpID, cr.Credential, e.FirstName, e.LastName from Credentials cr INNER JOIN Employee e ON cr.EmpID = e.EmpID) as t1 INNER JOIN (SELECT c.Clinic, c.EmpID from Clinic_Staff c INNER JOIN Vaccination_Site v ON c.Clinic= v.Name) as t2 ON t1.EmpID = t2.EmpID;
     $result = $connection->query($query);
    # echo "Which clinic are you looking up?</br>";
     while ($row = $result->fetch()) {
       #echo $row['Name'];
?>

    <input type="radio" name="workers" value="<?php echo $row['Name'];?>">
    <?php echo $row['Name'];?>
    <br>

          <?php
     }

  ?>
  <br>
  <input type="submit" value="Get Staff">

  <?php
  $connection = NULL;
  ?>
  <br>
  <br>
  <br>
  <img src="https://www.vmcdn.ca/f/files/via/images/health/vaccine-shot.jpg;w=1000;h=667;mode=crop" alt="Vaccination" width="450" height="300">

  <br>
  <a href="covid.php">Home</a><br>
  <a href="status.php">Check a Patient's Vaccination Status</a><br>
  <a href="record.php">Record a Vaccination</a><br>
  <a href="info.php">Find a Vaccine</a><br>
  <br>
    <br>
    <img src="banner.png" alt="" width="600" height="150">

  </body>
  </html>
