#!/usr/bin/php
<?php
if (count($argv) > 1)
{
	$tab = array_diff(explode(" ", $argv[1]), [""]);
	array_push($tab, array_shift($tab));
	echo implode(" ", $tab) . "\n";
}
?>
