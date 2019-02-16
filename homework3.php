<?php
echo "Домашняя работа к уроку №3 <br>";
echo "<hr>";
echo "<br>";

echo "Задание 1. С помощью цикла while вывести все числа в промежутке от 0 до 100,
	 которые делятся на 3 без остатка.<br><br>";
echo "Решение.<br><br>";

$a=0;
while ($a < 100) {
	$a++;
	echo $a."<br>";
}

echo "<hr>";
echo "<br>";
echo "Задание 2. С помощью цикла do…while написать функцию
	 для вывода чисел от 0 до 10, чтобы результат выглядел так:
	 0 – это ноль.
	 1 – нечетное число.
	 2 – четное число.
	 3 – нечетное число.
	 …
	 10 – четное число.<br><br>";
echo "Решение.<br><br>";

$a=0;
do {
	if ($a == 0) {
		echo "$a - это ноль.<br>";
	} else if ($a % 2) {
		echo "$a - нечётное число.<br>";
	} else {
		echo "$a - чётное число.<br>";
	}
	$a++;
} while ($a < 11);

echo "<hr>";
echo "<br>";
echo "Задание 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей,
	 а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле
	 значения массива, чтобы результат был таким:
	 Московская область: Москва, Зеленоград, Клин
	 Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт
	 Рязанская область … (названия городов можно найти на maps.yandex.ru).<br><br>";
echo "Решение.<br><br>";
$cities = ['Москва, Зеленоград, Клин', 'Санкт-Петербург, Всеволожск, Павловск, Кронштадт', 'Великий Новгород, Демьянск, Марово, Крестцы',
		   'Тверь, Торжок, Бежецк', 'Рязань, Спасск-Рязанский, Скопин', 'Пенза, Колышлей, Сурск', 'Волгоград, Волжский, Камышин, Михайловка',
		   'Саратов, Энгельс, Новокузнецк'];
$areas = [];
$areas['Московская область'] = $cities[0];
$areas['Ленинградская область'] = $cities[1];
$areas['Новгородская область'] = $cities[2];
$areas['Тверская область'] = $cities[3];
$areas['Рязанская область'] = $cities[4];
$areas['Пензенская область'] = $cities[5];
$areas['Волгоградская область'] = $cities[6];
$areas['Саратовская область'] = $cities[7];
foreach ($areas as $key => $value) {
	echo $key.':  '.$value."<br>";	
}	

echo "<hr>";
echo "<br>";
echo "Задание 4. Объявить массив, индексами которого являются буквы русского языка,
	 а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’,
	 ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
	 Написать функцию транслитерации строк.<br><br>";
echo "Решение.<br><br>";
$translitArray ['а'] = 'a';
$translitArray ['б'] = 'b';
$translitArray ['в'] = 'v';
$translitArray ['г'] = 'g';
$translitArray ['д'] = 'd';
$translitArray ['е'] = 'e';
$translitArray ['ё'] = 'yo';
$translitArray ['ж'] = 'zh';
$translitArray ['з'] = 'z';
$translitArray ['и'] = 'i';
$translitArray ['й'] = 'j';
$translitArray ['к'] = 'k';
$translitArray ['л'] = 'l';
$translitArray ['м'] = 'm';
$translitArray ['н'] = 'n';
$translitArray ['о'] = 'o';
$translitArray ['п'] = 'p';
$translitArray ['р'] = 'r';
$translitArray ['с'] = 's';
$translitArray ['т'] = 't';
$translitArray ['у'] = 'u';
$translitArray ['ф'] = 'f';
$translitArray ['х'] = 'h';
$translitArray ['ц'] = 'c';
$translitArray ['ч'] = 'ch';
$translitArray ['ш'] = 'sh';
$translitArray ['щ'] = 'shh';
$translitArray ['ъ'] = '#';
$translitArray ['ы'] = 'y';
$translitArray ['ь'] = '`';
$translitArray ['э'] = 'je';
$translitArray ['ю'] = 'yu';
$translitArray ['я'] = 'ya';
function translit ($string) {
	$stringArray = str_split($string);
	foreach ($stringArray as $key) {
	global $translitArray;
	//echo $translitArray['ю'];
	echo $key;
	echo $translitArray[$key];  //не показывает результат
	}	
}
translit('Опока');
//echo $translitArray['ю'];
//var_dump ($stringArray);	
//$asd = 'qwerty';
 //echo $asd [0]; // выдаст "q"
 //echo $asd [2]; // выдаст "e"
 //echo $asd [100] ;// выдаст пустоту
 
 //$a = array(1, 2, 3, 17);
//$a = "asdfgh";
//foreach ($a as $v) {
 //   echo "Текущее значение переменной \$a: $v.\n";
//}
