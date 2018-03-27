#!/usr/bin/php
<?php 
if (count($argv) > 1)
{
	$tab = $argv[1];
	$matches;
	$num = 0;
	if (preg_match("/[\/\*-+%]/", $tab, $matches))
	{
		$arr = preg_split("/[\/\*-+%]/", $tab);
		if (count($arr) == 2)
		{	
			if ($matches[0] == '+')
				$num = $arr[0] + $arr[1];
			else if ($matches[0] == '/')
				$num = $arr[0] / $arr[1];
			else if ($matches[0] == '*')
				$num = $arr[0] * $arr[1];
			else if ($matches[0] == '%')
				$num = $arr[0] % $arr[1];
			else if ($matches[0] == '-')
				$num = $arr[0] - $arr[1];
			else
				exit; 
		}
		echo trim($num) . "\n";
	}
}
?>
