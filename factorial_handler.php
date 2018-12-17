<?php
$a=1;
$f=0;
$sum=0;
    $n=$_POST['number'];
    while ($n>$f) {
   $sum += ($a * $f);
   $sum =$sum*$f;
   ++$f;
   };
   if ($n=$f) {
  };
echo $sum;
?>
