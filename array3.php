<?php
	$arrWarna = array("Red", "Orange", "Pink", "Blue", "Green", "Yellow");

	echo "Menampilkan is array dengan FOR : <br>";
	for ($i = 0; $i < count($arrWarna); $i++){
		echo "Warna Warna <font color=$arrWarna[$i]>". $arrWarna[$i]. "</font><br>";
	}

	echo "<br>Menampilkan isi array ddengan FOREACH : <br>";
	foreach ($arrWarna as $warna) {
		echo "Warna warna <font color=$warna>". $warna. "</font><br>";
	}
?>