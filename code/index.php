<?php
echo "Доступ по ссылке";
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order = $order . " and lemonade with ice";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "\n\nЧисла\n";
$first_digit = 4;
echo $first_digit;
echo "\n";
$second_digit = 2.5;
echo $second_digit;
echo "\n";
echo 15 - 3;
echo "\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;

echo "\n\nУмножение и деление\n";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

echo "\n\nСтепень\n";
echo 8 ** 2;

echo "\n\nОператоры присвоения\n";
$my_num = 14;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

echo "\n\nМатематические функции. Работа с %\n";
$a = 10;
$b = 3;
echo $a % $b;
echo "\n" . '$a % $b';
echo "\n";
if ($a % $b == 0) {
	echo "Делится";
} else {
	echo "Делится с остатком равным ";
	echo $a % $b;
}
echo "\n\nРабота со степенью и корнем \n";
$st = pow(2, 10);
echo(sqrt(245));
echo "\n";
$array1 = array(4, 2, 5, 19, 13, 0, 10);
$sum2 = 0;
foreach ($array1 as &$value) {
	$sum2 = pow($value, 2);
}
echo sqrt($sum2);
echo "\n";

echo "\n\nРабота с функциями округления\n";
echo round(sqrt(379));
echo "\n";
echo round(sqrt(379), 1);
echo "\n";
echo round(sqrt(379), 2);
echo "\n";
$array2 = array('floor' => floor(sqrt(379)), 'ceil' => ceil(sqrt(379)));

echo "\n\nРабота с min и max\n";
$arrayMinMax = array(4, -2, 5, 19, -130, 0, 10);
echo "max: " . max($arrayMinMax) . " min: " . min($arrayMinMax);
echo "\n";

echo "\n\nРабота с рандомом\n";
echo rand(1, 100);
$arrayRandom = array();
for ($i = 0; $i < 10; $i++) {
	$arrayRandom[$i] = rand();
}
echo "\n";

echo "\n\nРабота с модулем\n";
$a2 = 11;
$b2 = 13;
echo "|$a2 - $b2| = " . abs($a2 - $b2);
echo "\n";
$a2 = 56;
$b2 = 342;
echo "|$a2 - $b2| = " . abs($a2 - $b2);
echo "\n";

echo "\n\nОбщее\n";
$digit = 77;
$dividers = array();
for ($i = 1; $i <= $digit / 2; $i++) {
	if ($digit % $i == 0) {
		$dividers[] = $i;
	}
}
$array3 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$tmpSum = 0;
$inc = 0;
while ($tmpSum <= 10 && $inc < sizeof($array3)) {
	$tmpSum += $array3[$inc];
	$inc++;
}
echo $inc;

echo "\n\nФункции 1\n";
function printStringReturnNumber(): int
{
	echo "String\n";
	return 14;
}

$my_numm = printStringReturnNumber();
echo $my_numm;

echo "\n\nФункции 2\n";
function increaseEnthusiasm($arg_1): string
{
	return $arg_1 . "!";
}

echo increaseEnthusiasm("Welcome") . "\n";
function repeatThreeTimes($str): string
{
	return $str . $str . $str;
}

echo repeatThreeTimes("Meow") . "\n";
echo increaseEnthusiasm(repeatThreeTimes("Cat")) . "\n";
function cut($str, $count_of_symbols = 10): string
{
	return substr($str, 0, $count_of_symbols);
}

function recursionPrint($array, $i = 0)
{
	if ($i < sizeof($array)) {
		echo $array[$i] . " ";
		recursionPrint($array, $i + 1);
	}
}

$recursionArray = array(1, 2, 3, 4, 5);
recursionPrint($recursionArray);
echo "\n";
function sumOfDigits($num): int
{
	$sum = 0;
	while ($num > 0) {
		$sum += $num % 10;
		$num = $num / 10;
	}
	if ($sum > 9)
		return sumOfDigits($sum);
	return $sum;
}

echo sumOfDigits(9876);

echo "\n\nМассивы\n";
$my_array = array('x');
for ($i = 1; $i < 10; $i++) {
	$my_array[$i] = $my_array[$i - 1] . 'x';
}
print_r($my_array);

function arrayFill($value, $count)
{
	$arrToReturn = array();
	for ($i = 0; $i < $count; $i++) {
		$arrToReturn[] = $value;
	}
	print_r($arrToReturn);
}

arrayFill('r', 7);

function findArrSum($arr)
{
	$sum = 0;
	for ($i = 0; $i < sizeof($arr); $i++) {
		$sum += array_sum($arr[$i]);
	}
	echo $sum;
}

findArrSum(array(array(6, 7, 8), array(2, 3), array(1)));
echo "\n";

function twoCycles()
{
	$counter = 1;
	$arrayOfThree = array();
	for ($i = 0; $i < 3; $i++) {
		$tmpArr = array();
		for ($j = 0; $j < 3; $j++) {
			$tmpArr[] = $counter;
			$counter++;
		}
		$arrayOfThree[] = $tmpArr;
	}
	print_r($arrayOfThree);
}

twoCycles();

function multAndSum()
{
	$tmpArr = array(2, 5, 3, 9);
	$result = $tmpArr[0] * $tmpArr[1] + $tmpArr[2] * $tmpArr[3];
	echo $result . "\n";
}

multAndSum();

$user = array('name' => 'Anastasia', 'lastname' => 'Eliseeva', 'patronymic' => 'Alexeevna');
echo $user['lastname'] . " " . $user['name'] . " " . $user['patronymic'] . "\n";

$date = array('day' => '14', 'month' => '10', 'year' => '2022');
echo $date['year'] . "-" . $date['month'] . "-" . $date['day'] . "\n";

$myArr = array('a', 'b', 'c', 'd', 'e');
echo sizeof($myArr) . "\n" . $myArr[sizeof($myArr) - 1] . " " . $myArr[sizeof($myArr) - 2];

echo "\n\nКонструкция if else\n";
function isSumGreater10($first, $second)
{
	if ($first + $second > 10)
		return true;

	return false;

}

function isEqual($first, $second)
{
	if ($first == $second)
		return true;

	return false;

}

$test = isEqual(4, 5);
echo $test == 0 ? 'неверно' : 'верно';
echo "\n";
$age = 97;
if ($age < 10 || $age > 99)
	echo "\n" . '<10 or >99';
else {
	$sum = 0;
	while ($age > 0) {
		$sum += $age % 10;
		$age = $age / 10;
	}
	if ($sum <= 9)
		echo 'two-valued';
	else
		echo 'one-valued';
}
echo "\n";
$arr = array(3, 5, 6);
if (sizeof($arr) == 3) {
	echo array_sum($arr) . "\n";
}
echo "\n\nЦиклы\n";
for ($i = 0; $i < 20; $i++) {
	for ($j = 0; $j < $i; $j++) {
		echo 'o';
	}
	echo "\n";
}

echo "\n\nКомбинация функций\n";
$arrDigits = array(56, 92, 75, 12, 45, 123);
echo (float)(array_sum($arrDigits) / sizeof($arrDigits)) . "\n";

function sum($num)
{
	if ($num == 1) {
		return 1;
	} else return $num + sum($num - 1);
}

echo sum(100) . "\n";

$arr = [4, 9, 16, 25, 64, 36, 121, 196, 49, 81];
function arrSqrt(array $arr): array
{
	return array_map(function (int $el): int {
		return sqrt($el);
	}, $arr);
}
print_r(arrSqrt($arr));

$counter = 1;
$letters = array_fill_keys(range('A', 'Z'), 0);
foreach ($letters as $key => $v) {
	$letters[$key] = $counter;
	$counter++;
}
print_r($letters);
$digitsStr = '12345678910';
function sumOfPairsOfNumbers(string $str): int
{
	return array_sum(str_split($str, 2));
}
echo sumOfPairsOfNumbers($digitsStr);
