<!DOCTYPE html>
<html>

<head>

  <title>Prime Number</title>
</head>

<body>
  <p>Please Enter A Number:</p>
  <form action="PrimeNumber.php" method="GET">

    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
    <br>
  </form>



  <?php
  //echo"<h3> Checking for num</h3>";

  //echo $_GET['number'] ?? ''; if the first operand exists and not NULL; then return the second operand
  if ($_GET['number'] && $_GET['number'] > 1) //checks if number is defined and greater than one 
  {

    $i = 2;
    $n = true; //if n is true
    while ($i < $_GET['number']) { //to find the prime number
      if ($_GET['number'] % $i == 0) {
        $n = false;
      }
      $i++;
    }


    if ($n) { //if n is true 
      echo $_GET['number'] . " :Is a Prime Number";
    } else {
      //$n % 2 == 0;
      echo $_GET['number'] . " :Not a prime number";
    }
  } else {
    echo "please Fill a Positive number";
  }


  ?>
</body>

</html>