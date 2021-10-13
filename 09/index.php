<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Домашняя работа php 09';

//if(isset($_GET['page'])) {
//    $page = $_GET['page'];
//}else{
//    $page = 'main';
//}

$page = $_GET['page'] ?? 'main';


$view = './views/' . $page . '.tpl';

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
<nav>
    <a href="?">Главная</a>
    <a href="?page=contacts">Контакты</a>
    <a href="?page=account">Кабинет</a>
</nav>
<main><?php include $view; ?></main>
</body>
