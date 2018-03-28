#!/usr/bin/php
<?php
if (count($argv) > 1)
{
	$curl = curl_init($argv[1]);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($curl);
	if (curl_error($curl))
		die();
	else {
		$dir = (preg_split("/http:\/\//", $argv[1])[0]);
		if (mkdir($dir) == FALSE)
			die();
		preg_match_all('/(<img)([^s]*)((src=")([^"]*)("))([^>]*)(>)/', $html, $matches);
		foreach($matches[5] as $path)
		{
			$path = preg_split("/\//", $path);
			if (touch ($dir . "/" . $path[count($path) - 1]) == false)
				die();
		}
	}
	curl_close($curl);
}
?>
