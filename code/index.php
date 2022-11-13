<html>
<?php

require_once "vendor/autoload.php";

$client = new Google_Client();
$client->setApplicationName('google sheets');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig('credentials.json');
$service = new Google_Service_Sheets($client);
$id = "1-C3XM2VeUSbTv_ByQEuAb023kFHLhg3EqaW0BkrFnDg";

$range = "data!A1:D1";
$valueRange = new Google_Service_Sheets_ValueRange();
$valueRange->setValues(["values" => ["title", "text", "email", "category"]]);
$params = ["valueInputOption" => "RAW"];
$service->spreadsheets_values->update($id, $range, $valueRange, $params);
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
			$range = "category!A2:A";
			$response = $service->spreadsheets_values->get($id, $range);
			$values = $response->getValues();
			if (count($values) == 0) {
				echo "No data found.";
			} else {
				foreach ($values as $row) {
					echo "<option value='$row[0]'>$row[0]</option>";
				}
			}
			?>
		</select>
	</label>
	<br>
	<br>
	<input type="submit" value="Добавить">
</form>
<?php
$title = $_POST['title'];
$text = $_POST['text'];
$email = $_POST['email'];
$category = $_POST['category'];
$range = "data!A2:D";
$response = $service->spreadsheets_values->get($id, $range);
$values = $response->getValues();
$row = count($values) + 1;
$range = "data!A$row:D$row";
try {
	$values = [$title, $text, $email, $category]; //add the values to be appended
	//execute the request
	$body = new Google_Service_Sheets_ValueRange([
		'values' => [$values]
	]);
	$params = [
		'valueInputOption' => "RAW"
	];
	$service->spreadsheets_values->append($id, $range, $body, $params);
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
$range = "data!A2:D";
$response = $service->spreadsheets_values->get($id, $range);
$values = $response->getValues();
if (empty($values)) {
	echo "No data found.";
} else {
	echo "<table>";
	foreach ($values as $row) {
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>$value</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>
</html>