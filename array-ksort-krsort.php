<?php
	$arrNilai=array("Dinda"=>80, "Putri"=>70, "Anjani"=>65, "udin"=>85);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	ksort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan ksort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	krsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan mengguakan krsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";
