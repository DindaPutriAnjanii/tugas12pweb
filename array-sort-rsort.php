<?php
	$arrNilai=array("Dinda"=>80, "Putri"=>70, "Anjani"=>65, "udin"=>85);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	sort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan sort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	rsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan mengguakan rsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";
