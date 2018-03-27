#!/usr/bin/php
<?php 
if (count($argv) == 2)
	echo implode(" ", array_diff(explode(" ", $argv[1]), [""])) . "\n";
?>
