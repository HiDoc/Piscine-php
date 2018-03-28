#!/usr/bin/php
<?php
function moyenne($tab)
{
	$nbr = 0;
	$moyenne = 0;
	foreach($tab as $value)
	{
		if ($value[0] != 'moulinette')
		{
			$nbr++;
			$moyenne += $value[1];
		}
	}
	return ($moyenne / $nbr);
}

$file = fopen('php://stdin', 'r');
$tab;
while (feof($file) == FALSE)
{
	$tab[] = explode(";", ($buffer = fgets($file)));
}
var_dump($tab);
echo moyenne($tab) . "\n";
fclose($file);
?>
