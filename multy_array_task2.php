<?php
 $cars = [
	['brand' => 'Mercedes', 'model' => 'ML320','stock' => '10','sold' => '10','price' => '5000','profit' => '50000'],
	 ['brand' => 'VW', 'model' => 'Polo','stock' => '20','sold' => '20','price' => '1000','profit' => '20000'],
   ['brand' => 'Audi', 'model' => 'Q7','stock' => '30','sold' => '30','price' => '2000','profit' => '60000'],
  ];
 echo $cars[0]['brand'].' '; echo $cars[0]['model'].' ';echo $cars[0]['price'].' '."<br/>";
 echo $cars[1]['brand'].' '; echo $cars[1]['model'].' ';echo $cars[1]['price'].' '."<br/>";
 echo $cars[2]['brand'].' '; echo $cars[2]['model'].' ';echo $cars[2]['price'].' '."<br/>";;
echo "<br/>";
 echo '<table border=1>';
 echo '<tr>	<td>Brand</td>	<td> Model</td><td>Stock</td><td>Sold</td><td>Price</td><td>Profit</td</tr>';
 echo '<tr>	<td>' . $cars[0]['brand']. '</td>	<td>' . $cars[0]['model'] . '</td><td>' . $cars[0]['stock']. '</td><td>' . $cars[0]['sold']. '</td><td>' . $cars[0]['price']. '</td><td>' . $cars[0]['profit'].'</td></tr>';
 echo '<tr>	<td>' . $cars[1]['brand']. '</td>	<td>' . $cars[1]['model'] . '</td><td>' . $cars[1]['stock']. '</td><td>' . $cars[1]['sold']. '</td><td>' . $cars[1]['price']. '</td><td>' . $cars[1]['profit'].'</td>	</tr>';
 echo '<tr>	<td>' . $cars[2]['brand']. '</td>	<td>' . $cars[2]['model'] . '</td><td>' . $cars[2]['stock']. '</td><td>' . $cars[2]['sold']. '</td><td>' . $cars[2]['price']. '</td><td>' . $cars[2]['profit'].'</td>	</tr>';
 echo '</table>';
 echo "<br/>";
$sold0=$cars[0]['sold'];
$sold1=$cars[1]['sold'];
$sold2=$cars[2]['sold'];
$price0=$cars[0]['price'];
$price1=$cars[1]['price'];
$price2=$cars[2]['price'];
for ($i=0; $i <1 ; $i++) {
  $sum1=$sold0+$sold1+$sold2;
  $mrp=$sold0*$price0;
  $vwp=$sold1*$price1;
  $aup=$sold2*$price2;
  $tot=$mrp+$vwp+$aup;
}

 echo "Total Cars Sold  ".$sum1;
 echo "<p>";
 echo "Total Profit for all cars  ".$tot ;

 ?>
