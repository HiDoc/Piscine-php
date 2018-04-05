#!/usr/bin/php
<?php
function isnum($var)
{
	if (ctype_digit($var))
		echo "Le chiffre " .$var. " est ". ($var % 2 == 0 ? "Pair" : "Impair");
	else
		echo  "'" . $var . "'" . " n'est pas un chiffre";
	echo "\n";
}
while (1)
{
	echo "Entrez un nombre : ";
	$stdin = fopen('php://stdin', 'r');
	$even = fgets($stdin);
	if (feof($stdin))
		break;
	isnum(substr_replace($even, "", -1));
	fclose($stdin);
}
echo "\n";
?>
