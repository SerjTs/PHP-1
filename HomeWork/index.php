<?php

$mysql = mysqli_connect('localhost', 'root', '', 'gallery');

$mysql_query = mysqli_query($mysql, "SELECT * FROM pictures ORDER BY pictures.likes DESC ;");

$br = '<br/>';

$pictures = [];

while ($row = mysqli_fetch_assoc($mysql_query)) {
    $pictures[] = $row;
}

mysqli_close($mysql); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок 5.</title>
	<link rel="stylesheet" href="css/styles.css">
</head>	

<body>
    <h1>Галерея</h1>
    <div id="gallery">
        <img data-image="1" src="./img/small/1.jpg" alt="Car">
        <img data-image="2" src="./img/small/2.jpg" alt="Car">
        <img data-image="3" src="./img/small/3.jpg" alt="Car">
		<img data-image="4" src="./img/small/4.jpg" alt="Car">
    </div>
    <div id="big_picture"></div>
    
    <div class="buttons">
        <input type="button" id="btnPrev" value="Назад">
        <input type="button" id="btnNext" value="Вперёд">
    </div>
        
    <script src="js/script.js"></script>
</body>
</html>


<ul style="width: 40%">
    <? foreach ($pictures as $files) : ?>
        <li style="display: flex; justify-content: space-between">
        <?
        foreach ($files as $key => $value):
            ?>
            <string style="text-align:left"><?= ($key == 'Name') ? '<strong>' . $value . '</strong>' : $value; ?></string>
        <? endforeach;
        echo $br; ?>
        </li><?
    endforeach; ?>
</ul>