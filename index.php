<?php
// the folowing code is an example;
echo "<p>";
echo "This is just an example for Task 2";
$A=1;
$A1=51;
$A2=151;
$A3=251;
if ($A<=50&&$B=50*0.10) {
  echo "<p>";
  echo "first 50 Kw.=".$B*1.2;
  echo " Lv";
  echo "<p>";
  if ($A1>50&&$A1<150&&$B1=100*0.15) {
  echo "The first 100 Kw.=".$B1*1.2;
  echo " Lv";
  echo "<p>";
  if ($A2>150&&$A2<250&&$B2=100*0.25) {
  echo "The second 100 Kw.=".$B2*1.2;
  echo " Lv";
  echo "<p>";
  if ( $A3>250&&$B3=100*0.35) {
  echo "The Third 100 Kw.=".$B3*1.2;
  echo "Lv.";
}
}
}
}
?>
<?php
// this is the real Task 2;
echo "<p>";
echo "Task 2";
echo "<p>";
$A1=150;
$A2=155;
$A3=201;
$A4=302;
  if ($A1>50&&$A1<151&&$B=50*0.10+100*0.15) {
  echo " 150 Kw.=".$B*1.2;
  echo " Lv";
  echo "<p>";
  if ($A2>150&&$A2<250&&$B1=50*0.10+100*0.15+5*0.25) {
  echo " 155 Kw.=".$B1*1.2;
  echo " Lv";
  echo "<p>";
  if ($A3>150&&$A3<250&&$B2=50*0.10+100*0.15+51*0.25) {
    echo "201 Kw. =".$B2*1.2;
    echo "Lv";
    echo "<p>";
    if ($A4>250&&$B3=50*0.10+100*0.15+100*0.25+52*0.35) {
      echo "301 Kw. =".$B3*1.2;
      echo "Lv";
}
}
}
}
echo "<p>";
echo "All Prices are with 20% VAT included";
?>
<?php
echo "<p>";
echo "Task 3";
echo "<p>";
// put the EGN number in variables from $a1 to $a9;
$a1=0;
echo "$a1";
$a2=0;
echo "$a2";
$a3=0;
echo "$a3";
$a4=0;
echo "$a4";
$a5=0;
echo "$a5";
$a6=0;
echo "$a6";
$a7=0;
echo "$a7";
$a8=0;
echo "$a8";
$a9=0;
echo "$a9";
$b=($a1*2+$a2*4+$a3*8+$a4*5+$a5*10+$a6*9+$a7*7+$a8*3+$a9*6);
$c=$b/11;
$c1=  floor($c);
$c2=($b-$c1*11);
if ($c2<10) {
  echo "$c2";
}
else {
  echo "0";
}
 ?>
 <?php
 echo "<p>";
 echo "Task 4";
 echo "<p>";
 // put the number in $x;
$x=12;
switch ($x) {
case '1':
echo "The answer is January";
break;
case '2':
echo "The answer is February";
break;
case '3':
echo "The answer is March";
break;
case '4':
echo "The answer is April";
break;
case '5':
echo "The answer is May";
break;
case '6':
echo "The answer is June";
break;
case '7':
echo "The answer is July";
break;
case '8':
echo "The answer is August";
break;
case '9':
echo "The answer is September";
break;
case '10':
echo "The answer is October";
break;
case '11':
echo "The answer is November";
break;
case '12':
echo "The answer is December 'Merry Christmas everyone' ";
break;
  default:
    echo "There is no answer";
    break;
}
?>
