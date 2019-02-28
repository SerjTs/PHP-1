<?php

// сохранение переданной id картинки из нажатой ссылки с преобразованием в число
$id = intval($_GET['id']);
// создание связи с базой SQL
$mysql = mysqli_connect('localhost', 'root', '', 'gallery');
// чтение выборки таблицы базы pictures с целью узнать максимальный  id
$mysql_query_max_id = mysqli_query($mysql, "SELECT MAX(id) FROM pictures;");

// обьявление массива с максимальным значением столбца id 
$sql_max_id = [];
// вывод выборки базы в массив
while ($row = mysqli_fetch_assoc($mysql_query_max_id)) {
    $sql_max_id[] = $row;
}
// перебор массива с максимальным значением id
foreach ($sql_max_id as $value) {
    // и сохранение max id в переменную с преобразованием строки в число
    $max_id = intval($value["MAX(id)"]);
}
// проверка соответствия переданной id картинки из нажатой ссылки диапазону возможных значений id
if ($id <= 0 or $id > $max_id) {
    // перенаправление обратно на главную страницу галлереи
    header ('Location: index.php');
}
// чтение выборки таблицы базы pictures с конкретным id
$mysql_query = mysqli_query($mysql, "SELECT * FROM pictures WHERE id = $id;");

// обьявление массива pictire
$picture = [];
// вывод выборки базы в массив
while ($row = mysqli_fetch_assoc($mysql_query)) {
    $picture[] = $row;
}
// увеличение счетчика просмотров выбранной картинки

$mysql = mysqli_query("UPDATE `pictures` SET `likes` = likes+1 WHERE `pictures`.`id` = $id;");


// закрытие соединения с MySLQ базой
mysqli_close($mysql); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок 5. Просмотр изображения</title>
	<link rel="stylesheet" href="css/styles.css">
</head>	

<body>
    <div id="big_picture">
        <!-- вывод нужных значений пути и названия картинки с помощью перебора массива -->
        <? foreach ($picture as $key => $value) : ?>
                <!-- вывод названия картинки -->
                <h2><?= $value['name'] ?></h2>
                <!-- вывод самого изображения -->
                <img src="<?= $value['file'] ?>" alt="<?= $value['name'] ?>">
                <!-- вывод количества просмотров -->
                <h3>Количество просмотров: <?= $value['likes'] ?></h3>
        <? endforeach; ?>
        <form action="index.php">
        <button type="submit">Вернуться на главную</button>
</form>
    </div>
</body>
</html>
