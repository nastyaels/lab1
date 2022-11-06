<?php
session_start();
?>
	<form action="first_2c.php" method="post">
		<p>Name:</p><input type="text" name="name">
		<p>Age:</p><input type="number" name="age">
		<p>Salary:</p><input type="number" name="salary">
		<p>Something else:</p><textarea name="something"></textarea>
		<button type="submit">click</button>
	</form>
<?php
$_SESSION['user_data'] = [];
foreach ($_POST as $key => $value)
{
	$_SESSION['user_data'][$key] = $value;
}
