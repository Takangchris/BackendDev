<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action = "maths.php" method ="post">
        <h1>Look For maximum</h1>
        <p>please enter 2 numbers for computing</p>
        <label for ="num3"> number3 </label>
        <input type="number" name="num3">
        <br> <br>
         <label for ="num4"> number4</label>
            <input type="number" name="num4">
            <br> <br>
            <input type="submit">
      </form>
         <?php 
$thirdnumber=$_POST["num3"];
 $forthnumber=$_POST["num4"];
 echo "the maximum of $thirdnumber and  $forthnumber is " . max($thirdnumber,$forthnumber);
 ?>
    
</body>
</html>