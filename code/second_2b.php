<?php
session_start();
foreach ($_SESSION as $key => $value)
{
	//no trust for user data...
	$value = htmlspecialchars($value);
	$key = htmlspecialchars($key);
	echo "Your {$key} => {$value}\n";
}
