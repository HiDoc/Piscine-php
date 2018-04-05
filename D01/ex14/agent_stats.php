#!/usr/bin/php
<?php
$tab;
while($f = fgets(STDIN)){
    $tab[] = $f;
}
$count = 0;
$moyenne = 0;
array_shift($tab);
sort($tab);
foreach($tab as $line)
{
	$one = explode(";", $line);
	if ($one[2] != "moulinette")
	{
		if ($one[1] != "")
		{
			$moyenne += $one[1];
			$count++;
		}
	}
}
$moyenne = $moyenne / $count;
$current_name = explode(";" , $tab[0])[0];
$current_moye = 0;
$current_coun = 0;
$moyenne_user;
foreach($tab as $line)
{
	$one = explode(";", $line);
	if ($current_name == $one[0]) {
		$current_moye += $one[1];
		$current_coun++;
	}
	else {
		$moyenne_user[] = [$current_name, $current_moye / $current_count];
		$current_name = $one[0];
		$current_coun = 1;
		$current_moye = $one[1];
	}
}
?>
