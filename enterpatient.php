<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vax DB - Add Patient</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
include 'connectdb.php';
?>
<br>

<h3>Patient not found. Re-enter OHIP or add patient below.</h3>
<a href="record.php">Re-Enter OHIP </a>
<p>Patient Information:</p>

<form action="addpatient.php" method="post">
First Name: <input type="text" name="FirstName"><br>
Last Name: <input type="text" name="LastName"><br>
OHIP #: <input type="text" name="OHIP"><br>
Date of Birth: <input type="date" name="DOB"><br>
Phone #: <input type="tel" name="phone"><br>
<br>
<input type="submit" value="Add Patient">
</form>

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
