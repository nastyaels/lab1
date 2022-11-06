<html>
<?php
global $FORM_DIR;
$FORM_DIR = './data';
if (!file_exists('./data')) {
	mkdir('./data', 0777, true);
}
?>
<form action="form.php" method="post">
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
		<textarea name="text" cols="30" rows="10"></textarea>
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
			$categories = scandir($FORM_DIR);
			$categories = array_map(function (string $el) {
				if ($el !== '.' && $el !== '..') {
					return "<option value='$el'>$el</option>";
				}
			}, $categories);
			foreach ($categories as $category) {
				echo $category;
			}
			?>
		</select>
	</label>
	<br>
	<br>
	<input type="submit" value="Добавить">
</form>
<?php
if (!empty($_POST['category']) && !empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['email'])) {
	$category = $_POST['category'];
	$title = $_POST['title'];
	$text = $_POST['text'];
	$email = $_POST['email'];
	$path = "$FORM_DIR/$category/$title.txt";
	if (!file_exists($path)) {
		$file = fopen($path, 'w');
		fwrite($file, $text . "\n" . $email);
		fclose($file);
		?>
		<pre>Объявление добавлено</pre>
		<?php
	} else {
		?>
		<pre>Объявление уже существует</pre>
		<?php
	}
}
?>
<form action="./formShow.php" method="post">
	<input type="submit" value="К доске объявлений">
</form>
</html>