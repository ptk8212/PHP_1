<?php

// - Task1
 $acar = [
 	'Netherlands' => 'Amsterdam',
  'Bulgaria' => 'Sofia',
 	'Greece' => 'Athens',
	'Spain' => 'Madrid',
  'France' => 'Paris',
 ];
 ksort($acar);
 echo '<table border=1>';
 	foreach ($acar as $country => $capital) {

		echo '<tr>	<td>' . $country . '</td>	<td>' .  $capital . '</td>	</tr>';
};
 echo '</table>';
 echo "<p></p>";
 $acar = [
 	'Netherlands' => 'Amsterdam',
  'Bulgaria' => 'Sofia',
 	'Greece' => 'Athens',
	'Spain' => 'Madrid',
  'France' => 'Paris',
 ];
 asort($acar);
 echo '<table border=1>';
 	foreach ($acar as $country => $capital) {

		echo '<tr>	<td>' . $country . '</td>	<td>' .  $capital . '</td>	</tr>';
};
 echo '</table>';
?>
