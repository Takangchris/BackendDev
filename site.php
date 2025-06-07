<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action = "site.php" method ="get">
        <h1>Chris Diary</h1>
        <p>please enter 2 numbers for computing</p>
        <label for ="numx"> numberx </label>
        <input type="number" name="numx">
        <br> <br>
         <label for ="numy"> numbery</label>
            <input type="number" name="numy">
            <br> <br>
            <input type="submit">
      </form>
    <?php
    $xnumber=$_GET["numx"];
 $ynumber=$_GET["numy"];
$answer=  $xnumber * $ynumber;
 echo "the multiplication of $xnumber and  $ynumber is ";
 echo $answer=$xnumber*$ynumber;
    
    ?>
    
</body>
</html>