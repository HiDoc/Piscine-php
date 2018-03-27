#!/usr/bin/php
<?php
asort($argv);
if (count($argv) > 1)
{
	$tab;
	var_dump($argv);
	foreach($argv as $key => $val)
	{
		if ($key != 0)
			$tab[] = array_diff(explode(" ", $val), [""]);
	}
	$return;
	foreach($tab as $val)
		foreach($val as $word)
		$return[] = $word;
	natcasesort($return);
	$pop;
	foreach($return as $value)
	{
		if(ctype_alnum($value[0]))
			$pop[]		
	}
	foreach($return as $print)
		echo $print . "\n";
}
?>
