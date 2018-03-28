#!/usr/bin/php
<?php 
if (count($argv) == 2)
{
	$tab = $argv[1];
	$matches;
	$num = 0;
	if (preg_match("/[\/\*\-+%]/", $tab, $matches)) {
		$arr = preg_split("/[\/\*\-+%]/", $tab);
		if (count($arr) == 2) {
			if (ctype_digit(trim($arr[0])) == FALSE || 
				ctype_digit(trim($arr[1])) == FALSE)
				$num = "Syntax Error";
			else if ($matches[0] == '+')
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
				$num = "Syntax Error";
		}
		else
			$num = "Syntax Error";
	}
	else
		$num = "Syntax Error";
	echo trim($num) . "\n";
}
else
	echo "Incorrect Parameters\n";
?>
