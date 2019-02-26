<?php
// создание связи с базой SQL
$mysql = mysqli_connect('localhost', 'root', '', 'gallery');
// чтение выборки таблицы базы pictures с сортировкой по лайкам
$mysql_query = mysqli_query($mysql, "SELECT * FROM pictures ORDER BY pictures.likes DESC ;");
// заготовка перевода каретки на новую строку
$br = '<br/>';
// обьявление массива pictires
$pictures = [];
// преобразование выборки базы в двумерный массив
while ($row = mysqli_fetch_assoc($mysql_query)) {
    $pictures[] = $row;
}
// закрытие соединения с MySLQ базой
mysqli_close($mysql); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок 5. Галлерея</title>
	<link rel="stylesheet" href="css/styles.css">
</head>	

<body>
    <h1>Галерея</h1>
    <div id="gallery">
        <!-- вывод нужных значений пути и названия картинок с помощью перебора массива -->
        <? foreach ($pictures as $key => $value) : ?>
            <!-- открытие картинки в новой странице по клику по указанному id изображения из sql -->
            <a href="photo.php?id=<?= $value['id'] ?>">
                <!-- вывод галлереи на текущей странице -->
                <img src="<?= $value['file'] ?>" alt="<?= $value['name'] ?>">
            </a>
        <? endforeach; ?>
    </div>
</body>
</html>
