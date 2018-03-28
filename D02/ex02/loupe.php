#!/usr/bin/php
<?php 
if (count($argv) > 1)
{
	$stdin = fopen($argv[1], 'r');
	$contents = fread($stdin, filesize($argv[1]));
	$contents = preg_replace_callback("/(<a.*>.*.<\/a>)/", function($match) {
		$match[0] = preg_replace_callback('/(title=")(.*)(")/', function($mat) {
			return ('title="' . strtoupper($mat[2]) . '"');
		}, $match[0]);
		$match[0] = preg_replace_callback('/(>)([^<]*)(<)/', function($mat) {
			return ('>' . strtoupper($mat[2]) . '<');
		}, $match[0]);
		return ($match[0]);
	}, $contents);
	echo $contents;
	fclose($stdin);
}
?>
