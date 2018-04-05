#!/usr/bin/php
<?php 
function parse($argv)
{
	if (count($argv) > 1)
	{
		$tab = preg_replace("/\t/", " ", $argv[1]);
		$tab = explode(" ", $tab);
		$tab = array_diff($tab, [""]);
		echo implode(" ", $tab) . "\n";
	}
}
parse($argv);
?>
