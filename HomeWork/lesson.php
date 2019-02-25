<?php

$mysql = mysqli_connect('localhost', 'root', '', 'geekbrains');

$mysql_query = mysqli_query($mysql, "SELECT * FROM students ORDER BY students.age DESC ;");

$br = '<br/>';

$students = [];

while ($row = mysqli_fetch_assoc($mysql_query)) {
    $students[] = $row;
}

mysqli_close($mysql_query); ?>

<ul style="width: 30%">
    <? foreach ($students as $student) : ?>
        <li style="display: flex; justify-content: space-between">
        <?
        foreach ($student as $key => $value):
            ?>
            <string style="text-align:left"><?= ($key == 'Name') ? '<strong>' . $value . '</strong>' : $value; ?></string>
        <? endforeach;
        echo $br; ?>
        </li><?
    endforeach; ?>
</ul>