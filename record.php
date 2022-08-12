<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Vax DB - Enter OHIP</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
include 'connectdb.php';
?>
<br>

<h2>Patient Lookup</h2>
<h4>Please enter patient OHIP number:</h4>
<form action="checkOHIP.php" method="post">

     OHIP: <input type="text" name="ohip"><br>
     <br>
<input type="submit" value="Enter">
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="covid.php">Home</a><br>
<a href="status.php">Check a Patient's Vaccination Status</a><br>
<a href="info.php">Find a Vaccine</a><br>
<a href="workers.php">View Clinic Staff</a>
<br>
  <br>
  <img src="banner.png" alt="" width="600" height="150">
