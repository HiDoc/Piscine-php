<?php
	if (isset($_GET))
	{
		if (isset($_GET['action']) && $_GET['action'] == 'set')
		{
			if (isset($_GET['name']) && isset($_GET['value']))
				setcookie($_GET['name'], $_GET['value'], time() + (3600 * 24), null, null, false, true);
			else if (isset($_GET['name']))
				setcookie($_GET['name'], 'default', time() + (3600 * 24), null, null, false, true);
		}
		else if (isset($_GET['action']) && $_GET['action'] == 'get')
		{
			if (isset($_GET['name']) && isset($_COOKIE[$_GET['name']]))
				echo $_COOKIE[$_GET['name']] . "\n";
		}
		else if (isset($_GET['action']) && $_GET['action'] == 'del')
		{
			if (isset($_GET['name']) && isset($_COOKIE[$_GET['name']]))
			{
				unset($_COOKIE[$_GET['name']]);
				setcookie($_GET['name'], $_GET['name'], time() - 3600);
			}
		}
	}
?>
