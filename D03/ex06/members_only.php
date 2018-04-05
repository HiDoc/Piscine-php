<?php 
if (isset($_SERVER['PHP_AUTH_USER']) && )isset($_SERVER['PHP_AUTH_PW'])
{
	if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
	{ ?>
		<html><body>
		Bonjour Zaz<br />
		<img src='data:image/png;base64,<?php base64_encode(file_get_contents("../img/42.png")) ?>'>
		</body></html>	
<?php }
else
{
	header("HTTP/1.0 401 Unauthorized");
	header("Date: Tue, 26 Mar 2013 09:42:42 GMT");
	header("Server: Apache");
	header("X-Powered-By: PHP/5.4.26");
	header("WWW-Authenticate: Basic realm=''Espace membres''");
	header("Content-Length: 72");
	header("Connection: close");
	header("Content-Type: text/html");
	?><html><body>Cette zone est accessible uniquement aux membres du site</body></html><?php
}
}
?>
