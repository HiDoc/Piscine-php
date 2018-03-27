#!/usr/bin/php
<?php
asort($argv);
if (count($argv) > 1)
{
	$tab;
	foreach($argv as $key => $val)
	{
		if ($key != 0)
			$tab[] = array_diff(explode(" ", $val), [""]);
	}
	$return;
	foreach($tab as $val)
		foreach($val as $word)
		$return[] = $word;
	sort($return);
	foreach($return as $print)
		echo $print . "\n";
}
?>
