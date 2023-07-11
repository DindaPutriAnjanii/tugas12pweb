<?php
	$arrNilai=array("Dinda"=>80, "Putri"=>70, "Anjani"=>65, "udin"=>85);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	asort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan asort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	arsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan mengguakan arsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";
