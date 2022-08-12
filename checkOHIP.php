<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vax DB - Record a Vaccination</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
  <h3>Record Vaccination</h3>

  <?php
     $whichPatient= $_POST["ohip"];
     $query = 'SELECT * FROM Patient WHERE Patient.OHIP="' . $whichPatient . '"';;
     $result=$connection->query($query);
     $occurences = 0;
      if ($row=$result->fetch()) {
        #echo "Adding information for patient: " . "<br>";
    	  echo "Adding information for patient: " ."<tr><td>".$row["FirstName"]."</td><td>"." ".$row["LastName"]."</td></td>"."</td></tr>";

      }
      else{
          header('location: http://localhost/enterpatient.php');
                die;
          }
        ?>
          <form action="recordvaccination.php" method="post">
            <br>
            Lot#: <input type="text" name="lot"><br>
            OHIP: <input type="text" name="POHIP" value="<?php echo $whichPatient;?>"><br>
            Clinic: <input type="text" name="clinic"><br>
            Date: <input type="date" name="date"><br>
            Time: <input type="time" name="time"><br>
            <br>
            <input type="submit" value="Record Vaccination">
          </form>


</ol>
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
