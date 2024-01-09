<?php
//	1.
echo "Задание 1 <br>";
echo "Приветствие!";
echo "<br><br>";

//	2.
$tvChannel;		//	название телеканала
$manAdress;		//	адрес производителя
$carColor;		//	цвет автомобиля
$waterTemp;		//	температура воды
$phoneModel;	//	модель телефона

//	3.
echo "Задание 3 <br>";
$three = 3;
$five = 5;
$eight = 8;
echo "$three, $five, $eight";
echo "<br>";

$sum = $three + $five + $eight;
echo $result = 2 + 6 + 2 / 5 - 1;
echo "<br><br>";

//	4.
echo "Задание 3 <br>";
$a = 1;
$b = 2;
echo "$a, $b";
echo "<br>";
$c = $a;
$d = $b;
echo "$c, $d";
echo "<br>";
$a = 3;
$b = 4;
echo "$a, $b, $c, $d";
echo "<br><br>";

// 5.
echo "Задание 5 <br>";
define("const1", 41);
define("const2", 33);
echo const1 + const2;
echo "<br><br>";

//	6.
echo "Задание 6 <br>";
$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;
var_dump($a, $b, $c, $d, $e, $f, $g);
echo "<br><br>";

//	7.
echo "Задание 7 <br>";
echo "\$a = $a, \$b = $b", PHP_EOL;
echo "<br><br>";

//	8.
echo "Задание 8 <br>";
$first = "Доброе утро";
$second = "дамы";
$third = "и господа";
echo $first . " " . $second . " " . $third, PHP_EOL;
echo "<br><br>";

// 9.
echo "Задание 9 <br>";
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [6, 7, 8, 9, 10];
$arr1["element"] = 25;

unset($arr2[0]);
echo $arr1[2], $arr2[2];
echo "<br>";

var_dump($arr1, $arr2);
echo count($arr1), count($arr2);
echo "<br><br>";

//	10.
echo "Задание 10 <br>";
define("N", 5);

for ($i = 0; $i < N; $i++) {
	echo random_int(-21, 35);
	echo "<br>";
}
echo "<br><br>";

//	11.
echo "Задание 11 <br>";
$sum = 0;
for ($i = 0; $i < N; $i++) {
	$sum += random_int(-21, 35);
}
echo $sum;
echo "<br><br>";

// 12.
echo "Задание 12 <br>";
for ($i = 0, $last = null; $i < N; $i++) {
	$num = random_int(-50, 50);
	echo $num;

	if ($last != null)
		if ($num > $last)
			echo " - Больше предыдущего";
		else if ($num < $last)
			echo " - Меньше предыдущего";
		else
			echo " - Равны";
	$last = $num;
	echo "<br>";
}
echo "<br><br>";

//	13.
echo "Задание 13 <br>";
function Fibb($n)
{
	if ($n <= 1) return 0;

	if ($n == 2) return 1;

	return Fibb($n - 1) + Fibb($n - 2);
}

echo N, " число Фибоначчи = ", Fibb(N);
echo "<br><br>";

//	14.
echo "Задание 14 <br>";
$number = 12345;
do {
	echo $number % 10;
	$number = ($number - $number % 10) / 10;
} while ($number > 0);
echo "<br><br>";

//	15.
echo "Задание 15 <br>";
$number = 12345;
$hasOdds = false;
do {
	$num = $number % 10;
	if ($num % 2 != 0) {
		$hasOdds = true;
		echo $num;
	}
	$number = ($number - $number % 10) / 10;
} while ($number > 0);
if (!$hasOdds) echo "Нечетных цифр не обнаружено!";
echo "<br><br>";

//	16.
echo "Задание 16 <br>";
for ($i = 0; $i < 7; $i++) {
	$arr[$i] = random_int(-10, 10);
}
for ($i = 0; $i < 7; $i++) {
	echo $arr[$i], " ";
}
echo "<br><br>";

//	17.
echo "Задание 17 <br>";
$m = 5;
$n = 5;
for ($i = 0; $i < $m; $i++) {
	$arr[$i] = [];
	for ($j = 0; $j < $n; $j++) {
		$arr[$i][$j] = random_int(-10, 10);
	}
}
echo "<br>";
for ($i = 0; $i < $m; $i++) {
	for ($j = 0; $j < $n; $j++) {
		echo str_pad($arr[$i][$j], 4, " ");
	}
	echo "<br>";
}
echo "<br><br>";

//	18.
echo "Задание 18 <br>";
$N = 20;
for ($i = 1; $i <= $N; $i++) {
	$arr[$i - 1] = $i;
}

//1
echo "1)<br>";
for ($i = 0, $j = 0, $k = 1; $i < $N; $i++) {
	echo $arr[$i], " ";
	if (++$j >= $k) {
		echo "<br>";
		$j = 0;
		$k++;
	}
}

//	2)
echo "<br>2)<br>";
for ($i = 1, $j = 0, $k = 1; $i <= $N; $i++) {
	echo $i, " ";
	if (++$j >= $k) {
		echo "<br>";
		$j = 0;
		$k++;
	}
}
echo "<br><br>";

//	19.
echo "Задание 19 <br>";
echo max($arr);
echo "<br><br>";

//	20.
echo "Задание 20 <br>";
echo min($arr);
echo "<br><br>";

//	21.
echo "Задание 21 <br>";
$arr1 = [];
$arr2 = [];

for ($i = 0; $i < 20; $i++) {
	$arr1[$i] = $arr2[$i] = random_int(-10, 10);
}
for ($i = 2, $j = 1; $i < 20; $i += 3, $j += 2) {
	if ($arr1[$i] > $arr2[$j])
		echo "$arr1[$i] больше $arr2[$j] <br>";
	else if ($arr1[$i] < $arr2[$j])
		echo "$arr1[$i] меньше $arr2[$j] <br>";
	else
		echo "$arr1[$i] и $arr2[$j] равны <br>";
}
echo "<br><br>";

//	22.
echo "Задание 22 <br>";
function func($arr)
{
	foreach ($arr as $num) {
		switch ($num) {
			case 5:
				$res = "пять";
				break;
			case 6:
				$res = "шесть";
				break;
			case 7:
				$res = 7;
				break;
			default:
				$res = "какое-то другое число";
				break;
		}

		echo $res;
		echo "<br>";
	}
}
echo func([4,5,6,7,8]);
echo "<br><br>";

// 23.
echo "Задание 23 <br>";
$a = [];
for ($i = 0; $i < 10; $i++) {
	$a[$i] = random_int(1, 20);
}
$b = [12, 5, 17, 6, 4];

//	1)
echo "1)<br>";
$counter = [];
for ($i = 0; $i < count($b); $i++) {
	$counter[$b[$i]] = 1;
}
for ($i = 0; $i < 10; $i++) {
	if (empty($counter[$a[$i]])) echo $a[$i], " ";
}
//	2)
echo "<br>2)<br>";
for ($i = 0; $i < 10; $i++) {
	if (!in_array($a[$i], $b)) echo $a[$i], " ";
}