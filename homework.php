<?php
echo "Домашняя работа к уроку №2 <br>";
echo "<hr>";
echo "<br>";

echo "Задание 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
	Затем написать скрипт, который работает по следующему принципу:
	если $a и $b положительные, вывести их разность;
	если $а и $b отрицательные, вывести их произведение;
	если $а и $b разных знаков, вывести их сумму;
	ноль можно считать положительным числом.<br><br>";
echo "Решение.<br><br>";
$a = rand(-100,100);
echo "a=$a <br>";
$b = rand(-100,100);
echo "b=$b <br>";
echo "вариант а.<br>";
if ($a > 0 && $b > 0)
	echo $a - $b;
if ($a < 0 && $b < 0)
	echo $a * $b;
if (($a < 0 && $b > 0) || ($a > 0 && $b < 0))
	echo $a + $b;
echo "<br>";
echo "вариант b.<br>";
function comparison ($a, $b) {
	if ($a > 0 && $b > 0) {
		echo $a - $b;
	} else if ($a < 0 && $b < 0) {
		echo $a * $b;
	} else {
		echo $a + $b;
	}
}
comparison ($a, $b);
echo "<hr>";

echo "<br> Задание 2. Присвоить переменной $а значение в промежутке [0..15].
	С помощью оператора switch организовать вывод чисел от $a до 15.<br><br>";
echo "Решение.<br><br>";
$a = rand(0, 15);
echo "a=$a <br>";
echo "вариант а.<br>";
switch($a) {
	case 1:
		echo "1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 2:
		echo "2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 3:
		echo "3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 4:
		echo "4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 5:
		echo "5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 6:
		echo "6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 7:
		echo "7, 8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 8:
		echo "8, 9, 10, 11, 12, 13, 14, 15";
		break;
	case 9:
		echo "9, 10, 11, 12, 13, 14, 15";
		break;
	case 10:
		echo "10, 11, 12, 13, 14, 15";
		break;
	case 11:
		echo "11, 12, 13, 14, 15";
		break;
	case 12:
		echo "12, 13, 14, 15";
		break;
	case 13:
		echo "13, 14, 15";
		break;
	case 14:
		echo "14, 15";
		break;
	case 15:
		echo "15";
		break;
}
echo "<br>вариант b.<br>";
switch($a){
	case ($a<2):
		echo "1, ";
	case ($a<3):
		echo "2, ";
	case ($a<4):
		echo "3, ";
	case ($a<5):
		echo "4, ";
	case ($a<5):
		echo "4, ";
	case ($a<6):
		echo "5, ";
	case ($a<7):
		echo "6, ";
	case ($a<8):
		echo "7, ";
	case ($a<9):
		echo "8, ";
	case ($a<10):
		echo "9, ";
	case ($a<11):
		echo "10, ";
	case ($a<12):
		echo "11, ";
	case ($a<13):
		echo "12, ";
	case ($a<14):
		echo "13, ";
	case ($a<15):
		echo "14, ";
	case ($a<16):
		echo "15";
		break;	
}
echo "<hr>";

echo "<br> Задание 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
	Обязательно использовать оператор return.<br><br>";
echo "Решение.<br><br>";
$a = rand();
echo "a=$a <br>";
$b = rand();
echo "b=$b <br>";
function sum_of_numbers ($a, $b) {
	return ($a + $b);
}
function diff_of_numbers ($a, $b) {
	return ($a - $b);
}
function mult_of_numbers ($a, $b) {
	return ($a * $b);
}
function div_of_numbers ($a, $b) {
	return ($a / $b);
}
	$c = sum_of_numbers($a, $b);
	echo "сумма $a и $b = $c <br>";
	$c = diff_of_numbers($a, $b);
	echo "разность $a и $b = $c <br>";
	$c = mult_of_numbers($a, $b);
	echo "произведение $a и $b = $c <br>";
	$c = div_of_numbers($a, $b);
	echo "отношение $a и $b = $c <br>";
echo "<hr>";

echo "<br> Задание 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
	где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от
	переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
	и вернуть полученное значение (использовать switch).<br><br>";
echo "Решение.<br><br>";
$arg1 = rand();
echo "arg1=$arg1 <br>";
$arg2 = rand();
echo "arg2=$arg2 <br>";
$operation = generationOperation();
echo "operation = $operation <br>";
function generationOperation(){
	$operation = rand(1, 4);
	//echo "$operation <br>";
	if ($operation == 1)
		$operation = "+";
	else if ($operation == 2)
		$operation = "-";
	else if ($operation == 3)
		$operation = "*";
	else if ($operation == 4)
		$operation = "/";
	return $operation;
}
function mathOperation($arg1, $arg2, $operation){
	switch($operation){
		case ($operation == "+"):
			sum_of_numbers ($arg1, $arg2);
			$c = sum_of_numbers($arg1, $arg2);
			echo "сумма $arg1 и $arg2 = $c <br>";
			break;
		case ($operation == "-"):
			diff_of_numbers ($arg1, $arg2);
			$c = diff_of_numbers($arg1, $arg2);
			echo "разность $arg1 и $arg2 = $c <br>";
			break;
		case ($operation == "*"):
			mult_of_numbers ($arg1, $arg2);
			$c = mult_of_numbers($arg1, $arg2);
			echo "произведение $arg1 и $arg2 = $c <br>";
			break;
		case ($operation == "/"):
			div_of_numbers ($arg1, $arg2);
			$c = div_of_numbers($arg1, $arg2);
			echo "отношение $arg1 и $arg2 = $c <br>";
			break;
	}	
}
mathOperation($arg1, $arg2, $operation);
echo "<hr>";

echo "<br> Задание 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
	текущий год в подвале при помощи встроенных функций PHP..<br><br>";
echo "Решение.<br><br>";
echo "&copy; ".date('Y')." Все права защищены.";
echo "<hr>";

echo "<br> Задание 6. *С помощью рекурсии организовать функцию возведения числа в степень.
	Формат: function power($val, $pow), где $val – заданное число, $pow – степень.<br><br>";
echo "Решение.<br><br>";
$val = rand(0,10);
echo "val=$val <br>";
$pow = rand(0,10);
echo "pow=$pow <br>";
$mult = 1;
function power($val, $pow){
	if ($pow > 0) {
		global $mult;
		$mult = $mult * $val;
		$pow -= 1;
		power($val, $pow);
	} else {
		return $mult;
	}	
}
power($val, $pow);
echo "power=$mult <br>";
echo "<hr>";

echo "<br> Задание 7. *Написать функцию, которая вычисляет текущее время
	и возвращает его в формате с правильными склонениями, например:
	22 часа 15 минут
	21 час 43 минуты<br><br>";
echo "Решение.<br><br>";
$hours = date('H');
$minutes = date('i');
//$hours = rand(0,23);
//$hours = 0;
echo "hours=$hours <br>";
//$minutes = rand(0,59);
echo "minutes=$minutes <br>";
function time_now($hours, $minutes) {
	if ($hours == 0 || ($hours > 4 && $hours < 21 )) {
		$clock_hours = $hours." часов ";
	} else if ($hours == 1 || $hours == 21) {
		$clock_hours = $hours." час ";
	} else {
		$clock_hours = $hours." часа ";
	}
	if ($minutes == 0) {
		$clock_minutes = $minutes."0 минут ";
	}else if (($minutes > 4 && $minutes < 21 )|| ($minutes > 24 && $minutes < 31 )|| ($minutes > 34 && $minutes < 41 )|| ($minutes > 44 && $minutes < 51 )|| ($minutes > 54 && $minutes < 60 )) {
		$clock_minutes = $minutes." минут ";
	} else if ($minutes == 1 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51) {
		$clock_minutes = $minutes." минута ";
	} else {
		$clock_minutes = $minutes." минуты ";
	}
	return $clock_hours." ".$clock_minutes;
}
echo time_now($hours, $minutes);