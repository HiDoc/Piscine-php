#!/usr/bin/php
<?php
function date_change($str)
{
	$str = preg_replace("/Lundi|lundi/", "Monday", $str);
	$str = preg_replace("/Mardi|mardi/", "Tuesday", $str);
	$str = preg_replace("/Mercredi|mercredi/", "Wednesday", $str);
	$str = preg_replace("/Jeudi|jeudi/", "Thursday", $str);
	$str = preg_replace("/Vendredi|vendredi/", "Friday", $str);
	$str = preg_replace("/Samedi|samedi/", "Saturday", $str);
	$str = preg_replace("/Dimanche|dimanche/", "Sunday", $str);

	$str = preg_replace("/Janvier|janvier/", "January", $str);
	$str = preg_replace("/Fevrier|fevrier/", "February", $str);
	$str = preg_replace("/Mars|mars/", "March", $str);
	$str = preg_replace("/Avril|avril/", "April", $str);
	$str = preg_replace("/Mai|mai/", "May", $str);
	$str = preg_replace("/Juin|juin/", "June", $str);
	$str = preg_replace("/Juillet|juillet/", "July", $str);
	$str = preg_replace("/Aout|aout/", "August", $str);
	$str = preg_replace("/Septembre|septembre/", "Septembre", $str);
	$str = preg_replace("/Octobre|octobre/", "October", $str);
	$str = preg_replace("/Novembre|novembre/", "November", $str);
	$str = preg_replace("/Decembre|decembre/", "December", $str);
	return $str;
}

if (count($argv) > 1)
{
	if (preg_match("/[0-9]{4}/", $year = explode(" ", $argv[1])[3]) == TRUE)
	{
		date_default_timezone_set("Europe/Paris");
		$date = date_change($argv[1]);
		$date = DateTime::createFromFormat("l j F Y H:i:s", $date);
		if ($date != FALSE)
			echo $date->format("U") . "\n";
		else
			echo "Wrong Format\n";
	}
	else
		echo "Wrong Format\n";
}
?>
