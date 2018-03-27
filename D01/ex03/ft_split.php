#!/usr/bin/php
<?php 
function ft_split($var)
{
	$tab = explode(" ",$var);
	sort($tab);
	return ($tab);
}
?>
