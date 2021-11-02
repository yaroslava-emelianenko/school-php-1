<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Домашняя работа';

/*
 * VIEW BLOCK / Вид сайта
 * В этой части идёт вывод HTML и PHP
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?>></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<a href="01/">Домашняя работа 1</a><br>
<a href="02/">Домашняя работа 2</a><br>
<a href="03/">Домашняя работа 3</a><br>
<a href="04/">Домашняя работа 4</a><br>
<a href="09/">Домашняя работа 9</a><br>
<a href="10/">Домашняя работа 10</a><br>
</body>
</html>