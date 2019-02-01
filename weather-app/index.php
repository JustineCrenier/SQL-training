<?php

	require 'includes/conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WeatherApp</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>
					WeatherApp
				</td>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($donnees = $resultat->fetch())
			{
 				echo '<tr><td>'.$donnees['ville'].'</td>';
 				echo '<td>'.$donnees['haut'].'</td>';
 				echo '<td>'.$donnees['bas'].'</td></tr>';
			}
			?>
		</tbody>
	</table>	
</body>
</html>

<?php $resultat->closeCursor(); ?>