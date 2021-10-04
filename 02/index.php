<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идёт создание и обработка PHP кода
 */
$title = 'Домашняя работа php 02';

$num1 = 'слово';
$num2 = '33 коровы';
$num3 = '1между1';
$num4 = 'сумма11';
$num5 = '';

$num1_ = (float) $num1;
$num2_ = (float) $num2;
$num3_ = (float) $num3;
$num4_ = (float) $num4;
$num5_ = (float) $num5;


$bool1 = 'слово';
$bool2 = '33 слова';
$bool3 = 'сумма11';
$bool4 =  55;
$bool5 = 3.5;

$bool1_ = (bool) $bool1;
$bool2_ = (bool) $bool2;
$bool3_ = (bool) $bool3;
$bool4_ = (bool) $bool4;
$bool5_ = (bool) $bool5;

$int1 = 3.1;
$int2 = 4.5;
$int3 = 5.9;
$int4 = 99;

$int1_ = (int) $int1;
$int2_ = (int) $int2;
$int3_ = (int) $int3;
$int4_ = (int) $int4;





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
<table>
    <tr>
        <th>Первое значение</th>
        <th>Второе значение</th>
    </tr>
    <tr>
        <td><?php echo $num1?></td>
        <td><?php echo $num1_?></td>
    </tr>
    <tr>
        <td><?php echo $num2?></td>
        <td><?php echo $num2_?></td>
    </tr>
    <tr>
        <td><?php echo $num3?></td>
        <td><?php echo $num3_?></td>
    </tr>
    <tr>
        <td><?php echo $num4?></td>
        <td><?php echo $num4_?></td>
    </tr>
    <tr>
        <td><?php echo $num5?></td>
        <td><?php echo $num5_?></td>
    </tr>
    <tr>
        <td><?php echo $bool1?></td>
        <td><?php echo $bool1_?></td>
    </tr>
    <tr>
        <td><?php echo $bool2?></td>
        <td><?php echo $bool2_?></td>
    </tr>
    <tr>
        <td><?php echo $bool3?></td>
        <td><?php echo $bool3_?></td>
    </tr>
    <tr>
        <td><?php echo $bool4?></td>
        <td><?php echo $bool4_?></td>
    </tr>
    <tr>
        <td><?php echo $bool5?></td>
        <td><?php echo $bool5_?></td>
    </tr>
    <tr>
        <td><?php echo $int1?></td>
        <td><?php echo $int1_?></td>
    </tr>
    <tr>
        <td><?php echo $int2?></td>
        <td><?php echo $int2_?></td>
    </tr>
    <tr>
        <td><?php echo $int3?></td>
        <td><?php echo $int3_?></td>
    </tr>
    <tr>
        <td><?php echo $int4?></td>
        <td><?php echo $int4_?></td>
    </tr>

    <tr>
        <td><?php var_dump($num1);?></td>
        <td><?php var_dump($num1_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($num2);?></td>
        <td><?php var_dump($num2_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($num3);?></td>
        <td><?php var_dump($num3_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($num4);?></td>
        <td><?php var_dump($num4_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($num5);?></td>
        <td><?php var_dump($num5_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($bool1);?></td>
        <td><?php var_dump($bool1_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($bool2);?></td>
        <td><?php var_dump($bool2_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($bool3);?></td>
        <td><?php var_dump($bool3_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($bool4);?></td>
        <td><?php var_dump($bool4_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($bool5);?></td>
        <td><?php var_dump($bool5_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($int1);?></td>
        <td><?php var_dump($int1_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($int2);?></td>
        <td><?php var_dump($int2_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($int3);?></td>
        <td><?php var_dump($int3_);?></td>
    </tr>
    <tr>
        <td><?php var_dump($int4);?></td>
        <td><?php var_dump($int4_);?></td>
    </tr>
</table>
</body>
</html>