#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
function padding($str)
{
	return str_pad(substr(trim($str), 0, 8), 9, " ");
}
function parse($log)
{
	if ($log['active'] == 7) {
		echo padding($log['name']);
		echo padding($log['device']);
		echo date("M j H:i", $log["time1"]);
		echo " \n";
	}
}
$path = "/var/run/utmpx";
$file = fopen($path, "r");

while ($read = fread($file, 628)){
	$unpack = unpack("a256name/a4pid/a32device/isession/iactive/I2time", $read);
	parse($unpack);
}
fclose($file);
?>
