<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<?php 
$boyname= "Morata";
$girlname= "Christel";
$companyname= "Creative";
echo "There was a boy named " . $boyname . " who met a fair girl <br>";  
echo "At $companyname , her name was". $girlname ." <br>";  
echo "At" .$companyname . "They spent the whole day mopping the company <br>"; 


?>
<body>
        <form action = "test.php" method ="post">
        <h1>My Form</h1>
    <p>please enter 2 names for computing</p>
        <label for ="firstname"> firstname </label>
        <input type="text" name="takang1">
        <br> <br>
         <label for ="secondname"> secondname </label>
            <input type="text" name="christel2">
            <br> <br>
            <input type="submit">
      </form>
      <?php
    $firstname=$_POST["takang1"];
 $secondname=$_POST["christel2"];
//  echo .strtoupper($firstname) . strtolower($secondname)."<br>";
echo " my name is " . strtoupper($firstname) ." ".strtolower($secondname). "<br>";
echo strlen($firstname) . "<br>";
echo"this will give the last letter in firstname " . " ". $firstname[5];
//  echo  $firstname and $secondname;
 ?>
</body>
</html>