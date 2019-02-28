<?php
// создание связи с базой SQL
$mysql = mysqli_connect('localhost', 'root', '', 'gallery');

// проверка на наличие сортировки выбраннной пользователем
if ($_POST['sort'][0]) {
    // чтение выборки таблицы базы pictures с сортировкой пользователя
    $mysql_query = mysqli_query($mysql, "SELECT * FROM pictures ORDER BY pictures.".$_POST['sort'][0]." ;");
    } else {
    // чтение выборки таблицы базы pictures с сортировкой по лайкам
    $mysql_query = mysqli_query($mysql, "SELECT * FROM pictures ORDER BY pictures.likes DESC ;");
}
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
        <form action="index.php" method="post">
            <p><select name="sort[]">
            <option selected disabled>Выберите вариант сортировки</option>
            <option value="likes DESC">По количеству просмотров</option>
            <option value="id">По времени размещения</option>
            <option value="name">По фирме и марке машины</option>
            </select></p>
            <p><input type="submit" value="Сортировать"></p>
        </form>
    </div>
</body>
</html>
