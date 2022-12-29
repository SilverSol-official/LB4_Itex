<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LB4_PHP</title>
</head>
<body>
	<h1>Лабораторна робота 4</h1>
	<h2>Виконав: Соловйов Іван</h2>
	<h2>Група: КІУКІ-20-3</h2>
	<h3>Варіант: 3</h3>
	<h4>Взяття таблиці з HTML файлу</h4>
	<!-- <?php
		$table1 = file_get_contents('table.html');
		echo $table1;
	?>
	<h4>Взяття таблиці з CSV файлу</h4>
	<?php
		$rows = [];
		if (($file = fopen('book1.csv', 'r')) !== false){
			while (($data = fgetcsv($file, 1000, ';')) !== false){
				$rows[] = $data;
			}
			fclose($file);
		}
		echo "<table>";
		for ($i=0;$i<5;$i++){
			echo "<tr>";
			for( $j=0 ; $j<3 ; $j++ ){
				if ($i == 0){
					echo "<td style='background-color: red; text-align:center;'>".$rows[$i][$j]."</td>";
				} else {
					echo "<td style='background-color: yellow;'>".$rows[$i][$j]."</td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	?> -->

</body>
</html>