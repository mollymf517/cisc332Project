<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vax DB - Get Record</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
include 'connectdb.php';
?>
<br>
<h2>Get Vaccination Record</h2>
<h4>Which patient are you looking up?</h4>

<form action="getrecord.php" method="post">

  <?php

     $query = "SELECT * FROM Patient";
     $result = $connection->query($query);
    # echo "Which patient are you  looking up? </br>";
     while ($row = $result->fetch()) {
       #echo $row['Name'];
?>

    <input type="radio" name="patients" value="<?php echo $row['OHIP'];?>">
    <?php echo $row['FirstName']." ". $row['LastName'];?>
    <br>

          <?php
     }
  ?>
  <br>
  <input type="submit" value="Get Record">
  </form>
  <br>
  <br>
  <a href="covid.php">Home</a><br>
  <a href="record.php">Record a Vaccination</a><br>
  <a href="info.php">Find a Vaccine</a><br>
  <a href="workers.php">View Clinic Staff</a>
<br>
  <br>
  <img src="banner.png" alt="" width="600" height="150">
