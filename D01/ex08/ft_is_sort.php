#!/usr/bin/php
<?php 
function ft_is_sort($tab)
{
	$stab = $tab;
	$itab = $tab;
	sort($stab);
	rsort($itab);
	$new = (array_diff_assoc($stab, $tab));
	$inew = array_diff_assoc($itab, $tab);
	return (count($new) > 0 && count($inew) > 0 ? 0 : 1);
}
?>
