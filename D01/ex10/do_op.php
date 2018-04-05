#!/usr/bin/php
<?php 
if (count($argv) != 4)
	echo "Incorrect Parameters\n";
else
{
	$num;
	$arg = trim($argv[2]);
	if ($arg == '+')
		$num = $argv[1] + $argv[3];
	if ($arg == '/')
		$num = $argv[1] / $argv[3];
	if ($arg == '*')
		$num = $argv[1] * $argv[3];
	if ($arg == '%')
		$num = $argv[1] % $argv[3];
	if ($arg == '-')
		$num = $argv[1] - $argv[3];
	echo $num . "\n";
}
?>
