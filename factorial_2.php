<html>
<head>
<title>Factorial Program using loop in PHP</title>
</head>
<body>
<form  action="factorial_2.php"method="post">
    Enter the Number:<br>
    <input type="number" name="number">
    <input type="number" name="number1">

    <input type="submit" name="submit" value="Submit" />
</form>
<?php
$a=1;
$f=1;
     $n=$_POST['number'];
     while ($f<$n); {
    $sum += $a * $f;
    $sum =$sum*$f;
    ++$f;
    };
    if ($n>$f) {
echo "4";
   };
$a1=1;
$f1=1;
    $n1=$_POST['number1'];
    while ($f1<$n1); {
   $sum1 += $a1 * $f1;
   $sum1 =$sum1*$f1;
   $sum2=$sum*$sum1;
   ++$f1;
   };
   if ($n1>$f1) {
  };
  echo $sum2;


?>

 <?php

  ?>
