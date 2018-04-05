#!/usr/bin/php
<?php 
function ft_split($var)
{
	$tab = array_filter(explode(" ",$var));
	sort($tab);
	return ($tab);
}
?>
