<html>
<?php
$database = new mysqli('db','root','helloworld','web');
if(mysqli_connect_errno()){
	printf("Подключение к серверу невозможно, код ошибки: ",mysqli_connect_error());
	exit;
}
else {
	print("Соединение установлено успешно");
}
?>
<form action="index.php" method="post">
	<pre>Заголовок объявления</pre>
	<br>
	<label>
		<input type="text" name="title">
	</label>
	<br>
	<br>
	<pre>Текст объявления:</pre>
	<br>
	<label>
		<textarea name="description" cols="30" rows="10"></textarea>
	</label>
	<br>
	<br>
	<pre>Email:</pre>
	<br>
	<label>
		<input type="text" name="email">
	</label>
	<br>
	<br>
	<pre>Выбор категории: </pre>
	<br>
	<label>
		<select name="category">
			<?php
			$rows = $database->query('select * from categories');
			while ($row = $rows->fetch_assoc())
			{
				echo '<option>' .  $row['category'] . '</option>';
			}
			$rows->close();
			if (isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["email"]) && isset($_POST["category"]))
			{
				$title = $database->real_escape_string($_POST["title"]);
				$description = $database->real_escape_string($_POST["description"]);
				$email = $database->real_escape_string($_POST["email"]);
				$category = $database->real_escape_string($_POST["category"]);
				$database->query("
					INSERT INTO ad (title, description, email, category) VALUES ('{$title}','{$description}' ,'{$email}' ,'{$category}')
					"
				) ;
				}
			?>
		</select>
	</label>
	<br>
	<br>
	<input type="submit" value="Добавить">
</form>
<table>
	<tr>
		<th>Title</th>
		<th>Description</th>
		<th>Email</th>
		<th>Category</th>
		<th>Created</th>
	</tr>
<?php
$rows = $database->query('select * from ad');
while ($row = $rows->fetch_assoc())
{
?>
	<tr>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['description']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['category']; ?></td>
		<td><?php echo $row['created']; ?></td>
	</tr>
	<?php
}
$rows->close();
$database->close();
?>
</table>
<tr>
</html>
