<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$num = 7;
$header1 = 'Рабочая зона для тестирования.';
$title = 'Домашняя работа php 01';
$description = 'Моя первая работа';
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequuntur deserunt dolor dolorem eaque eos error
    ex fugit impedit itaque iusto laboriosam neque perferendis placeat quasi quo repellat, sint ullam!';

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
<h1><?php echo $header1; ?></h1>
<div class="description"><?php echo $description; ?></div>
<p><?php echo $paragraph; ?></p>
<p><?php echo $paragraph; ?></p>
</body>
</html>