<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Домашняя работа php 03';

if (isset($_POST['login'], $_POST['text'])) {
    if ($_POST['login'] != '' && $_POST['text'] != '') {
        $temp = $_POST['login'] . ': ' . $_POST['text'];
        file_put_contents('2.txt', $temp);
    }
}

/*
 * VIEW BLOCK / Вид сайта
 * В этой части идёт вывод HTML и PHP
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>

</head>
<body>
<form action="" method="post" class="content">
    <input name="login" placeholder="Введите логин"><br>
    <textarea name="text" placeholder="Введите текст"></textarea><br>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>