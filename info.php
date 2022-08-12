<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vaccine Database - Find Vaccine </title>
      <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
include 'connectdb.php';
?>
<br>
<h2>Find a Vaccine</h2>
<h4>Which vaccine would you like information on?</h4>
<form action="getvaxinfo.php" method="post">

  <?php

     $query = "SELECT * FROM Company";
     $result = $connection->query($query);
  #   echo "Which vaccine would you like information on? </br>";
     while ($row = $result->fetch()) {
       #echo $row['Name'];
?>

    <input type="radio" name="company_name" value="<?php echo $row['Name'];?>">
    <?php echo $row['Name'];?>
    <br>

          <?php
     }

  ?>
  <br>
  <input type="submit" value="Get Info">
  </form>

<?php
$connection = NULL;
?>
<br>

<img src="https://ihpl.llu.edu/sites/ihpl.llu.edu/files/field/image/vaccine-covid-19.jpg" alt="" width="400" height="250">
<br>
<br>
<a href="covid.php">Home</a><br>
<a href="status.php">Check a Patient's Vaccination Status</a><br>
<a href="record.php">Record a Vaccination</a><br>
<a href="workers.php">View Clinic Staff</a>
<br>
  <br>
  <img src="banner.png" alt="" width="600" height="150">

</body>
</html>
