<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="equation.php" method="post">
      <input type="text" name="a" placeholder="a">
 <input type="text" name="b" placeholder="b">
 <input type="text" name="c" placeholder="c">
 <input type="submit" name="submit" value="Find X">
    </form>

  </body>
</html>
<?php
var_dump($_POST);
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
 ?>
<?php
if (pow($a,2-$b==0)) {
  echo sqrt($b);
}
?>
<?php
 ?>
