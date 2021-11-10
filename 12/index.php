<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Домашняя работа php 12';

/**
 * Калькулятор
 *
 * @param $firstNumber
 * @param $secondNumber
 * @param $action
 * @return float|int|mixed
 */
function calculator($firstNumber, $secondNumber, $action) {
    if ($action === '+') {
      return  $firstNumber + $secondNumber;
    }
    if ($action === '-') {
        return  $firstNumber - $secondNumber;
    }
    if ($action === '*') {
        return  $firstNumber * $secondNumber;
    }
    if ($action === '/') {
        return  $firstNumber / $secondNumber;
    }
}

$actions = [
    '+' => 'Плюс',
    '-' => 'Минус',
    '*' => 'Умножить',
    '/' => 'Разделить',
];
$error = '';
$result = '';
$firstNumber = '';
$secondNumber = '';
$action = '';


if (isset($_POST['first_number'], $_POST['second_number'], $_POST['action'])) {
    $firstNumber = $_POST['first_number'];
    $secondNumber = $_POST['second_number'];
    $action = $_POST['action'];

    if ($firstNumber === '' || $secondNumber === '') {
        $error = 'Одна из строк не заполнена';
    }

    if ($error === '' && (!is_numeric($firstNumber) || !is_numeric($secondNumber))) {
        $error = 'Одна из строк не число';
    }

    if ($error === '' && $action === '/' && $secondNumber === '0') {
        $error = 'Делить на ноль запрещенно';
    }

    if (!$error) {
        $result = calculator($firstNumber, $secondNumber, $action);
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
    <title><?= $title; ?></title>
</head>
<body>
<p><?= $error; ?></p>
<p><?= $result; ?></p>
<form action="" method="post" class="content">
    <input name="first_number" value="<?= $firstNumber; ?>" placeholder="Первое число"><br>
    <input name="second_number" value="<?= $secondNumber; ?>" placeholder="Второе число"><br>
    <select name="action">
        <?php foreach ($actions as $key => $title) { ?>
            <option value="<?= $key; ?>"><?= $title; ?></option>
        <?php } ?>
    </select><br>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>