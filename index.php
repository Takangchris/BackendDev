<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>the sum of 3 and 5 can be seen below</p>

      <form action = "index.php" method ="get">
        <h1>a basic calculator</h1>
        <p>please enter 2 numbers for computing</p>
        <label for ="num1"> number1 </label>
        <input type="number" name="num1">
        <br> <br>
         <label for ="num2"> number2</label>
            <input type="number" name="num2">
            <br> <br>
            <input type="submit">
      </form>
    <?php 
$firstnumber=$_GET["num1"];
 $secondnumber=$_GET["num2"];
 echo "the answer of $firstnumber and  $secondnumber is ";
 echo  $firstnumber + $secondnumber;

//  
 




    $name= "philemon";
    $age="20";
    echo " <h1> the was a boy called $name </h1> ";
    echo "<p> he is $age old </p>";
    echo "he really liked louris <br>";
    echo "but didnt like being <br> ";

  echo 3.6 + 1.4;
  echo "<br>";
  echo 3.6 - 1.4;
    echo "<br>";
  echo 3.6 / 1.4;
    echo "<br>";
  echo 3.6 * 1.4;
    echo "<br>";
    echo 2+3*2;
     echo "<br>";
        // A Basic Calculators with Ttecnovice
    
    ?>
</body>
</html