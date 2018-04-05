#!/usr/bin/php
<?php
function grab_image($url,$saveto) {
	$ch = curl_init ($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
	$raw = curl_exec($ch);
	curl_close ($ch);
	if (file_exists($saveto)){
		unlink($saveto);
	}
	$fp = fopen($saveto,'x');
	fwrite($fp, $raw);
	fclose($fp);
}
if (count($argv) > 1)
{
	$curl = curl_init($argv[1]);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($curl);
	if (curl_error($curl))
	{
		curl_close($curl);
		die();
	}
	else {
		curl_close($curl);
		$dir = preg_replace("/http[s]?:\/\//", "", $argv[1]);
		$dir = preg_replace("/(\/*)/", "", $dir);
		if (file_exists("./" . $dir) == false && mkdir("./" . $dir) == FALSE)
			die();
		preg_match_all('/<img[^>]*>/', $html, $matches);
		foreach($matches as $path)
		{
			$tab;
			foreach($path as $img)
			{
				if (preg_match('/src="[^"]*"/', $img, $mat) == true)
					$tab[] = $dir . preg_replace('/src=|"/', "", $mat)[0];
			}
			foreach ($tab as $imgs) 
			{
				$name = "./" . $dir . "/" . preg_replace("/.*\//", "", $imgs);
				touch($name);
				grab_image($imgs, $name);
			}
		}
	}
}
?>
