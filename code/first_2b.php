<?php
session_start();
?>
<form action="first_2b.php" method="post">
	<p>Name:</p><input type="text" name="name">
	<p>Surname:</p><input type="text" name="surname">
	<p>Age:</p><input type="number" name="age">
	<button type="submit">click</button>
</form>
<?php
foreach ($_POST as $key => $val)
{
	$_SESSION[$key] = $val;
}
