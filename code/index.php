<?php
echo '1.1<pre>';
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $res);
echo implode(' ', $res[0]);
echo '<pre>1.2<pre>';
$str = 'a1b2c3';
preg_match_all('/\d/', $str, $res);
$search = array_map('intval', $res[0]);
$replace = array_map(function (int $el): int {
	return $el ** 3;
}, $search);
echo str_replace($search, $replace, $str);
echo '<pre>2.1<pre>';
?>
	<form action="index.php" method="post">
		<textarea name="data"></textarea>
		<button type="submit">click</button>
	</form>
<?php
$data = $_POST['data'] ?? '';
if (empty($data))
{
	return;
}
$wordCnt = count(explode(' ', $data));
$symbolsCnt = strlen($data);
echo "Количество слов: {$wordCnt}<pre>";
echo "Количество символов: {$symbolsCnt}<pre>";
echo '2.2<pre>Go to first_2b.php and next second_2b.php<pre>';
?>
	<form action="./first_2b.php" method="post">
		 <input type="submit" value="to first_2b.php">
	</form>
<?php
echo '2.3<pre>Go to first_2c.php and next second_2c.php<pre>';
?>
	<form action="./first_2c.php" method="post">
		 <input type="submit" value="to first_2c.php">
	</form>
<?php
echo '3<pre>Go to form.php<pre>';
?>
	<form action="./form.php" method="post">
		<input type="submit" value="to form.php">
	</form>



