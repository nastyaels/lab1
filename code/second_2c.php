<?php
session_start();
if (!$_SESSION['user_data'])
{
	return;
}
echo "<ul>";
foreach ($_SESSION['user_data'] as $data)
{
	//no trust for user data...
	$data = htmlspecialchars($data);
	echo "<li> {$data} </li>";
}