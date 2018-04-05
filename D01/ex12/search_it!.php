#!/usr/bin/php
<?php
asort($argv);
if (count($argv) > 2)
{
	$tab;
	foreach($argv as $key => $val)
	{
		if ($key > 1 && preg_match("/:/", $val))
			$tab[] = explode(":", $val);
	}
	foreach($tab as $val)
	{
		if ($val[0] == $argv[1])
			echo $val[1] . "\n";
	}
}
?>
