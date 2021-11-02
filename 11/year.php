<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Домашняя работа php 11. Высокосный год';

$year = $_POST['year'] ?? null;
$error = false;
if ($year !== null) {
   if (is_numeric($year)) {
       $leapYear = $year % 4 === 0;
   }else{
       $error = true;
   }
}

// Необходимо создать форму с двумя элементами: поле для ввода и кнопка отправить
// На беке ты должна проверять что с поля пришло число, и что это число может быть высокосным годом
// Вывести ошибку если прийдёт поле не пустое и там будет не число
// Если придёт число, то вывести какой это год - высокосный или не высокосный

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
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form method="POST" action="year.php">
    <?php if(isset($leapYear)) { ?>
        <?= $leapYear ? 'Высокосный год' : 'Не высокосный год';?><br>
    <?php } ?>

    <label>Год: <input type="text" value="<?= $year ?>" name="year"></label><br>
    <?php if ($error) {?>Вы ввели не корректные данные<br><?php }?>
    <input type="submit" name="send" value="Отправить">
</form>
</body>
