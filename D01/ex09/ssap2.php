#!/usr/bin/php
<?php
function print_tab($var)
{
	foreach($var as $print)
		echo $print . "\n";
}
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
	natcasesort($return);
	$num; $alpha; $oth;
	foreach($return as $print)
	{
		if (ctype_digit($print[0]))
			$num[]=$print;
		else if (ctype_alpha($print[0]))
			$alpha[]=$print;
		else
			$oth[]=$print;
	}
	print_tab($alpha);
	print_tab($num);
	print_tab($oth);
}
?>
