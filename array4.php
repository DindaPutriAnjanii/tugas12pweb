<?php
	$arrNilai=array("Dinda"=>80, "Putri"=>70, "Anjani"=>65, "udin"=>85);
	echo "Menampilkan isi array asosiatif dengan foreach: <br>";
	foreach ($arrNilai as $nama => $nilai) {
		echo "Nilai $nama=$nilai<br>";
	}

	reset($arrNilai);
	echo "Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
	while (list($nama,$nilai)=each($arrNilai)) {
		echo"Nilai $nama=$nilai<br>";
	}
?>